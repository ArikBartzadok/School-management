<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="projeto ds ii">
    <meta name="author" content="diogo">
    <meta name="keywords" content="etec">

    <!-- Title Page-->
    <title>Cadastro de aluno</title>

    <!-- Fontfaces CSS-->
    <link href="../assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../assets/css/theme.css" rel="stylesheet" media="all">
</head>
<body>

<div class="page-wrapper">

        <!-- HEADER MOBILE-->
        
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php
            include_once "../assets/components/menu.php";
        ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php
            include_once "../assets/components/nav_desktop.php";
            ?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Sistema de Cadastro de Alunos</h2>
                                    <a href="../index.php"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi  fa-chevron-left"></i>Voltar</button></a>
                                </div>
                            </div>
                        </div>
                        		
                        <!-- LISTAGEM  -->
                        row m-t-30
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="title-1 m-b-25">Visualizar - Alunos</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>                                                
                                                <th>Nome</th>
                                                <th>RG</th>
                                                <th>RA</th>
                                                <th>Endereço</th>
                                                <th>Cidade</th>
                                                <th>E-Mail</th>
                                                <th>Telefone</th>
                                                <!--<th class="text-left">price</th>-->
                                                <!--<th class="text-right">total</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                                                                       
                                        <?php
				                            $mysqli = new mysqli("localhost", "root", "", "escola");

				                            $sql = "select * from aluno";

				                            $result = $mysqli->query($sql );
				
				                            while ($linha = $result->fetch_assoc())
				                            {
                                                echo "<tr>";
					                            echo "<td>".$linha["codaluno"]."</td>";
					                            echo "<td>".$linha["nome"]."</td>";
					                            echo "<td>".$linha["rg"]."</td>";
					                            echo "<td>".$linha["ra"]."</td>";
					                            echo "<td>".$linha["endereco"]."</td>";
					                            echo "<td>".$linha["cidade"]."</td>";
					                            echo "<td>".$linha["email"]."</td>";
                                                echo "<td>".$linha["telefone"]."</td>";
                                                echo "<tr>";					                            
				                            }
			                            ?>                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-12">

                            </div>                                                                                
                        </div>                        
                        <!-- FIM LISTAGEM  -->
		                
                        <!-- FOOTER -->                  
		                <?php
                        include_once "../assets/components/footer.php";
                        ?>
                        <!-- END FOOTER --> 
						
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->

            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../assets/vendor/slick/slick.min.js">
    </script>
    <script src="../assets/vendor/wow/wow.min.js"></script>
    <script src="../assets/vendor/animsition/animsition.min.js"></script>
    <script src="../assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../assets/js/main.js"></script>


</body>
</html>