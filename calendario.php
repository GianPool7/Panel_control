<?php

    include('includes/header.php');

    require ('conexion.php');

?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <?php
                    include('conexion.php');

                    $SqlEventos   = ("SELECT * FROM eventoscalendar");
                    $resulEventos = mysqli_query($conne, $SqlEventos);

                ?>

                <div class="row">
                    <div class="col msjs">
                    <?php
                        include('msjs.php');
                    ?>
                    </div>
                </div>


                
                <div class="col-lg-12">

                    <div class="row page-titles mx-6">
                        <div class="col-sm-12 p-md-0">
                            <div class="welcome-text">
                                <h4 class="text-dark text-center">REGISTRO DE ACTIVIDADES Y EVENTOS</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div id="calendario"></div>
                        </div>
                    </div>
                </div>

                <?php  
                include('modalNuevoEvento.php');
                include('modalUpdateEvento.php');
                ?>
                




            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

<?php

include('includes/footer.php');


?>
