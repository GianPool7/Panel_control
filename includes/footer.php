        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Diseñado &amp; <a href="https://www.ibp.edu.pe/" target="_blank">IBP</a> 2023</p>
                <!---<p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p> -->
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="https://kit.fontawesome.com/6e1d308a47.js" crossorigin="anonymous"></script>
    <script src="vendor/global/global.min.js"></script>
    <script src="js/quixnav-init.js"></script>
    <script src="js/custom.min.js"></script>


    <!-- Vectormap -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morris/morris.min.js"></script>


    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/chart.js/Chart.bundle.min.js"></script>

    <script src="vendor/gaugeJS/dist/gauge.min.js"></script>

    <!--  flot-chart js -->
    <script src="vendor/flot/jquery.flot.js"></script>
    <script src="vendor/flot/jquery.flot.resize.js"></script>

    <!-- Owl Carousel -->
    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <!-- Counter Up -->
    <script src="vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="vendor/jqvmap/js/jquery.vmap.usa.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/quixnav-init.js"></script>
    <script src="js/custom.min.js"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="js/styleSwitcher.js"></script>


    <script src="vendor/jqueryui/js/jquery-ui.min.js"></script>
    <script src="vendor/moment/moment.min.js"></script>

    <script src="vendor/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="js/plugins-init/fullcalendar-init.js"></script>

    <script src="js/dashboard/dashboard-1.js"></script>

    <!---->

    <script src="js/quixnav-init.js"></script>
    <script src="js/custom.min.js"></script>
    
    <!-- Datatable -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="js/plugins-init/datatables.init.js"></script>

    <!---calendario--->

    <script src ="js/jquery-3.0.0.min.js"> </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/moment.min.js"></script>	
    <script type="text/javascript" src="js/fullcalendar.min.js"></script>
    <script src='locales/es.js'></script>

    
    <!---graficos--->




    <!---funciones--->

    <script type="text/javascript">
        $(document).ready(function() {
        $("#calendario").fullCalendar({
            header: {
            left: "prev,next today",
            center: "title",
            right: "month,agendaWeek,agendaDay"
            },

            locale: 'es',

            defaultView: "month",
            navLinks: true, 
            editable: true,
            eventLimit: true, 
            selectable: true,
            selectHelper: false,

        //Nuevo Evento
        select: function(start, end){
            $("#exampleModal").modal();
            $("input[name=fechainicio]").val(start.format('DD-MM-YYYY'));
            
            var valorFechaFin = end.format("DD-MM-YYYY");
            var F_final = moment(valorFechaFin, "DD-MM-YYYY").subtract(1, 'days').format('DD-MM-YYYY'); //Le resto 1 dia
            $('input[name=fechafin').val(F_final);  

            },
            
            events: [
            <?php
            while($dataEvento = mysqli_fetch_array($resulEventos)){ ?>
                {
                _id: '<?php echo $dataEvento['idevento']; ?>',
                title: '<?php echo $dataEvento['evento']; ?>',
                description:   '<?php echo $dataEvento['dese']; ?>',
                start: '<?php echo $dataEvento['fechainicio']; ?>',
                end:   '<?php echo $dataEvento['fechafin']; ?>',
                time:   '<?php echo $dataEvento['hora']; ?>',
                color: '<?php echo $dataEvento['color']; ?>'
                },
                <?php } ?>
            ],


        //Eliminar Evento
        eventRender: function(event, element) {
            element
            .find(".fc-content")
            .prepend("<span id='btnCerrar'; class='closeon material-icons'>&#xe5cd;</span>");
            
            //Eliminar evento
            element.find(".closeon").on("click", function() {

        var pregunta = confirm("Deseas Borrar este Evento?");   
        if (pregunta) {

            $("#calendario").fullCalendar("removeEvents", event._id);

            $.ajax({
                    type: "POST",
                    url: 'deleteEvento.php',
                    data: {idevento:event._id},
                    success: function(datos)
                    {
                    $(".alert-danger").show();

                    setTimeout(function () {
                        $(".alert-danger").slideUp(500);
                    }, 3000); 

                    }
                });
            }
            });
        },


        //Moviendo Evento Drag - Drop
        eventDrop: function (event, delta) {
        var idEvento = event._id;
        var start = (event.start.format('DD-MM-YYYY'));
        var end = (event.end.format("DD-MM-YYYY"));

            $.ajax({
                url: 'drag_drop_evento.php',
                data: 'start=' + start + '&end=' + end + '&idEvento=' + idEvento,
                type: "POST",
                success: function (response) {
                // $("#respuesta").html(response);
                }
            });
        },

        //Modificar Evento del Calendario 
        eventClick:function(event){
            var idevento = event._id;
            $('input[name=idevento').val(idevento);
            $('input[name=evento').val(event.title);
            $('input[name=dese').val(event.description);
            $('input[name=fechainicio').val(event.start.format('DD-MM-YYYY'));
            $('input[name=fechafin').val(event.end.format("DD-MM-YYYY"));
            $('input[name=hora').val(event.time);

            $("#modalUpdateEvento").modal();
        },


        });


        //Oculta mensajes de Notificacion
        setTimeout(function () {
            $(".alert").slideUp(300);
        }, 3000); 


        });

    </script>

    <!----->





</body>

</html>