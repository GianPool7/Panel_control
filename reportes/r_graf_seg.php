<?php
require_once('../tcpdf/tcpdf/tcpdf.php'); //Llamando a la Libreria TCPDF
require_once('../conexion.php');//Llamando a la conexión para BD
date_default_timezone_set('America/Bogota');


ob_end_clean(); //limpiar la memoria


class MYPDF extends TCPDF{
      
    	public function Header() {
            $bMargin = $this->getBreakMargin();
            $auto_page_break = $this->AutoPageBreak;
            $this->SetAutoPageBreak(false, 0);
            $img_file = dirname( __FILE__ ) .'';
            $this->Image($img_file, 85, 10, 20, 25, '', '', '', false, 30, '', false, false, 0);
            $this->SetAutoPageBreak($auto_page_break, $bMargin);
            $this->setPageMark();
	    }
}


//Iniciando un nuevo pdf
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);
 
//Establecer margenes del PDF
$pdf->SetMargins(5, 20, 20);
$pdf->SetHeaderMargin(20);
$pdf->setPrintFooter(false);
$pdf->setPrintHeader(true); //Eliminar la linea superior del PDF por defecto
$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM); //Activa o desactiva el modo de salto de página automático
 
//Informacion del PDF
$pdf->SetCreator('ibp');
$pdf->SetAuthor('ibp');
$pdf->SetTitle('Informe de Egresados');
 
/** Eje de Coordenadas
 *          Y
 *          -
 *          - 
 *          -
 *  X ------------- X
 *          -
 *          -
 *          -
 *          Y
 * 
 * $pdf->SetXY(X, Y);
 */

//Agregando la primera página
$pdf->AddPage('LANDSCAPE','letter',90);
$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(150, 20);
/*$pdf->Write(0, 'Fecha: '. date('d-m-Y'));*/
$pdf->SetXY(150, 30);
/*$pdf->Write(0, 'Hora: '. date('h:i A'));*/

$pdf->SetFont('helvetica','B',10); //Tipo de fuente y tamaño de letra
$pdf->SetXY(15, 20); //Margen en X y en Y
$pdf->SetTextColor(204,0,0);
$pdf->SetTextColor(0, 0, 0); //Color Negrita
$pdf->SetXY(15, 25);



$pdf->Ln(1); //Salto de Linea
$pdf->Cell(40,26,'',0,0,'C');
/*$pdf->SetDrawColor(50, 0, 0, 0);
$pdf->SetFillColor(100, 0, 0, 0); */
$pdf->SetTextColor(34,68,136);
//$pdf->SetTextColor(255,204,0); //Amarillo
//$pdf->SetTextColor(34,68,136); //Azul
//$pdf->SetTextColor(153,204,0); //Verde
//$pdf->SetTextColor(204,0,0); //Marron
//$pdf->SetTextColor(245,245,205); //Gris claro
//$pdf->SetTextColor(100, 0, 0); //Color Carne
$pdf->SetFont('helvetica','B', 15); 
$pdf->Cell(100,6,'Data de Egresados IBP',0,0,'C');


$pdf->Ln(10); //Salto de Linea
$pdf->SetTextColor(0, 0, 0); 

//Almando la cabecera de la Tabla
 
echo '<div id="tipos_estudiantes" style="width: 100%; height: 500px;"></div>';
 
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('helvetica','B',12); //La B es para letras en Negritas
$pdf->Cell(35,6,'Tipo',1,0,'C',1);
$pdf->Cell(40,6,'Nombres',1,0,'C',1);
$pdf->Cell(40,6,'Apellidos',1,0,'C',1);
$pdf->Cell(65,6,'Carreras',1,0,'C',1);
$pdf->Cell(40,6,'Distrito',1,0,'C',1);
$pdf->Cell(70,6,'Email',1,1,'C',1);
//$pdf->Cell(15,6,'labora',1,1,'C',1); 
/*El 1 despues de  Fecha Ingreso indica que hasta alli 
llega la linea */

$pdf->SetFont('helvetica','',10);


//SQL para consultas Empleados
/*
$fechaInit = date("Y-m-d", strtotime($_POST['fecha_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['fechaFin']));
*/
$sqlTrabajadores = ("SELECT tipoe,count(tipoe)as cantidades FROM estudiante where tipoe!='estudiante' GROUP BY tipoe;");
//$sqlTrabajadores = ("SELECT * FROM trabajadores");
$query = mysqli_query($conne, $sqlTrabajadores);

while ($dataRow = mysqli_fetch_array($query)) {
        $pdf->Cell(35,6,($dataRow['tipoe']),1,0,'C');
        $pdf->Cell(40,6,$dataRow['nombrese'],1,0,'C');
        $pdf->Cell(40,6,($dataRow['apellidose']),1,0,'C');
        $pdf->Cell(65,6,($dataRow['carrerae']),1,0,'C');
        $pdf->Cell(40,6,($dataRow['distritoe']),1,0,'C');
        $pdf->Cell(70,6,($dataRow['emaile']),1,1,'C');
        //$pdf->Cell(15,6,($dataRow['labura']),1,1,'C');
    }
    



//$pdf->AddPage(); //Agregar nueva Pagina

$pdf->Output('Resumen_Pedido_'.date('d_m_y').'.pdf', 'I'); 
// Output funcion que recibe 2 parameros, el nombre del archivo, ver archivo o descargar,
// La D es para Forzar una descarga


?>



        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
        google.charts.load('current', {'packages':['bar']});
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
            var data = new google.visualization.arrayToDataTable([
              ['Situación Académica', 'Cantidad'],

              <?php
              
                    header('Content-type: text/html; charset=utf-8');
        
                    require ('conexion.php');
                
                    if ($conn->set_charset('utf8') === false) {
                    die('Error: ' .  $conn->error);
                    }
                
                $query="SELECT tipoe,count(tipoe)as cantidades FROM estudiante where tipoe!='estudiante' GROUP BY tipoe;";
                $res=mysqli_query($conn,$query);
                while($data=mysqli_fetch_array($res)){
                  $yea=$data['tipoe'];
                  $sal=$data['cantidades'];
              ?>
              ['<?php echo $yea;?>',<?php echo $sal;?>],   
              <?php   
                }
              ?> 
            ]);

            var options = {
              chart: {
                title: 'EGRESADOS, SEGÚN SU SITUACIÓN ACADÉMICA',
                subtitle: '2023',
              },
              bars: 'vertical', // Required for Material Bar Charts.
            };

            var chart = new google.charts.Bar(document.getElementById('tipos_estudiantes'));
            chart.draw(data, options);


          }
        </script>

