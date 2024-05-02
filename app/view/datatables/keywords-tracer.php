<?php
session_start();
?>
<?php require 'inc/ui-functions.php'; ?>
<?php require 'inc/app-vars.php'; ?>
<?php require 'inc/app-functions.php'; ?>
<?php require 'inc/app-sql-conn.php'; ?>
<?php require 'inc/app-sql-crud.php'; ?>
<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Keywords Tracer</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <style>
        #chartContainer > div > a {
            display: none;
        }
    </style>

   

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php

        imprimeAppSidebar();

        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- FORMULARIO URL E KEYWORDS E IP DO USUARIO
                    Topbar Search -->
                    <form id="comment_form" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group" style="width: 200%">

                        
                            <input type="text" name="urlsite" class="form-control bg-light border-0 small" size="40" placeholder="example.com.br" required>

                            <input type="text" name="keywords01" class="form-control bg-light border-0 small" size="40" placeholder="palavras chave" aria-label="Search" aria-describedby="basic-addon2" required>

                            <input type="text" name="ipusuario" placeholder="<?php echo $_SERVER['REMOTE_ADDR']; ?>" class="form-control bg-light border-0 small">
                            <div class="input-group-append">
                                <button id="clicksubmit" name="submit" class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i> Listar
                                </button>

                            </div>
                        </div>
                    </form>
                    <button type="button" onClick="reloadThePage()">Refresh!</button>

                    <?php 
                   
                   imprimeAppTopNavbar();
                   
                   ?>

                <!-- Begin Page Content -->
<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">KEYWORDS TRACER</h1>

    
    <!--    =-=-=-=-=-=-=- PAGE CONTENT =-=-=-=-=-=-=-     --> 
    <!--    =-=-=-=-=-=-=- PAGE CONTENT =-=-=-=-=-=-=-     -->           
    <?php 
    
    if (isset($_POST['urlsite'])) {
        $url = $_POST['urlsite'];
    }
    if (isset($_POST['keywords01'])) {
        $keys = $_POST['keywords01'];
    }
    
    $ip_usuario = $_POST['ipusuario'];

    $_SESSION["vetorconsulta"] = array();

    //echo $_SESSION["sqlconsulta"];  
    
    ?>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    
    <?php
            //$keys = 'identidade visual';
            //$url = 'lemonpepperdesign';

            //$ip_usuario = $_SERVER['REMOTE_ADDR'];
            //echo $ip_usuario;
            echo "<br>";
            $conn = App_Conect_DB ($servername, $username, $password, $dbname);
            $_SESSION["sqlconsulta"]=CONSULTAS_POR_KEYWORDS_URL_NOIP($conn,$keys,$url,$ip_usuario);
            
            //prettyPrint($GLOBALS['consultsip']);

            $y = count($GLOBALS['consultsip']);
            $arrxy = $GLOBALS['consultsip'];
            for ($x = 0; $x < $y; $x++) {
                $date=date_create($arrxy[$x][0]);
                
                $arraygraph[$x][0] = date_format($date,"Y m d");
                $arraygraph[$x][1] = $arrxy[$x][4];
                
                
                //echo $arrxy[$x][0].' Rank: ';
                
                //echo $arrxy[$x][4].'<br>';
            }

            $_SESSION["vetorconsulta"]=$arraygraph;

            //echo prettyPrint($_SESSION["vetorconsulta"]);


             
             
             ?>

<script>
        window.onload = function() {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Site Rank"
                },
                axisX: {
                    valueFormatString: "DD MMM YYYY",
                    crosshair: {
                        enabled: true,
                        snapToDataPoint: true
                    }
                },
                axisY: {
                    title: "Posição entre os 100",
                    includeZero: true,
                    crosshair: {
                        enabled: true
                    }
                },
                toolTip: {
                    shared: true
                },
                legend: {
                    cursor: "pointer",
                    verticalAlign: "bottom",
                    horizontalAlign: "left",
                    dockInsidePlotArea: true,
                    itemclick: toogleDataSeries
                },
                data: [{
                        type: "line",
                        showInLegend: true,
                        name: "Posição",
                        markerType: "square",
                        xValueFormatString: "DD MMM, YYYY",
                        color: "#00e3e6",
                        dataPoints: [

                            <?php

                            //IMPLEMENTAÇÃO DO GRAFICO
                            $y = count($_SESSION["vetorconsulta"]);

                            for ($x = $y - 1; $x >= 0; $x--) {

                                $datas = explode(" ", $_SESSION["vetorconsulta"][$x][0]);
                                $posicao = $_SESSION["vetorconsulta"][$x][1];
                                echo "{ x: new Date($datas[0], $datas[1], $datas[2]), y: $posicao }, \n";
                            }

                            /*  { x: new Date(2020, 8, 11), y: 100 },
            { x: new Date(2020, 8, 12), y: 64 },
            { x: new Date(2020, 8, 13), y: 63 },
            { x: new Date(2020, 8, 14), y: 63 },
            { x: new Date(2020, 8, 15), y: 63 },
            { x: new Date(2020, 8, 16), y: 62 },
            { x: new Date(2020, 8, 17), y: 62 },
            { x: new Date(2020, 8, 18), y: 59 },
            { x: new Date(2020, 8, 19), y: 60 },
            { x: new Date(2020, 8, 20), y: 60 },
            { x: new Date(2020, 8, 21), y: 59 },
            { x: new Date(2020, 8, 22), y: 58 },
            { x: new Date(2020, 8, 23), y: 60 },
            { x: new Date(2020, 8, 24), y: 61 },
            { x: new Date(2020, 8, 25), y: 1 }     */


                            ?>
                        ]
                    },
                    {
                        type: "line",
                        showInLegend: true,
                        name: "Unique Visit",
                        lineDashType: "dash",
                        dataPoints: [
                            /* 		{ x: new Date(2017, 0, 3), y: 510 },
                                { x: new Date(2017, 0, 4), y: 560 },
                                { x: new Date(2017, 0, 5), y: 540 },
                                { x: new Date(2017, 0, 6), y: 558 },
                                { x: new Date(2017, 0, 7), y: 544 },
                                { x: new Date(2017, 0, 8), y: 693 },
                                { x: new Date(2017, 0, 9), y: 657 },
                                { x: new Date(2017, 0, 10), y: 663 },
                                { x: new Date(2017, 0, 11), y: 639 },
                                { x: new Date(2017, 0, 12), y: 673 },
                                { x: new Date(2017, 0, 13), y: 660 },
                                { x: new Date(2017, 0, 14), y: 562 },
                                { x: new Date(2017, 0, 15), y: 643 },
                                { x: new Date(2017, 0, 16), y: 570 } */
                        ]
                    }
                ]
            });
            chart.render();

            function toogleDataSeries(e) {
                if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                    e.dataSeries.visible = false;
                } else {
                    e.dataSeries.visible = true;
                }
                chart.render();

            }

        }

        function myLoadFunction() {
            document.getElementById("clicksubmit").innerHTML = "LOADING ...";

        }

        function reloadThePage() {
            window.location.reload();
        }
    </script>



            <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 text-primary">BANCO DE DADOS: CONSULTAS</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>URL</th>
                            <th>KEYWORDS</th>
                            <th>RESULTADO</th>
                            <th>POSIÇÃO</th>
                            <th>DATA</th>
                            <th>LINK</th>
                            
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>URL</th>
                            <th>KEYWORDS</th>
                            <th>RESULTADO</th>
                            <th>POSIÇÃO</th>
                            <th>DATA</th>
                            <th>LINK</th>      
                        </tr>
                    </tfoot>
                    <tbody>
                    <?php 
                        $vetdata = $GLOBALS['consultsip'];
                                                                     
                        for ($i=0; $i<count($vetdata); $i++) {
                            echo "<tr><td>".$vetdata[$i][1]."</td>";
                            echo "<td>".$vetdata[$i][2]."</td>";
                            if ($vetdata[$i][3] == "1") {
                                echo "<td>Sim</td>";
                                echo "<td>".$vetdata[$i][4]."</td>";
                            }
                            else {
                                echo "<td>Não</td>";
                                echo "<td>not found</td>"; 
                            }

                            echo "<td>".$vetdata[$i][0]."</td>";
                            //$vdate = date_create($vetdata[$i][0]);                            
                            //echo "<td>".date_format($vdate,"d M Y H:i:s")."</td>";
                            echo "<td>".$vetdata[$i][5]."</td></tr>";    
                        }
                        
                        ?>              
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!--    =-=-=-=-=-=-=- PAGE CONTENT =-=-=-=-=-=-=-     --> 
    <!--    =-=-=-=-=-=-=- PAGE CONTENT =-=-=-=-=-=-=-     -->  

</div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>