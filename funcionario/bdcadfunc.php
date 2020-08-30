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
    <title>Cadastro de funcionários</title>

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
                                    <h2 class="title-1">Sistema de Cadastro de Funcionários</h2>
                                    <a href="../index.php"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi  fa-chevron-left"></i>Voltar</button></a>
                                </div>
                            </div>
                        </div>
				
			<?php
				$nome = $_POST['nome'];
				$rg = $_POST['rg'];
				$cpf = $_POST['cpf'];
				$endereco = $_POST['endereco'];
				$cidade = $_POST['cidade'];				
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];
				
				$mysqli = new mysqli("localhost", "root", "", "escola");
				
				if($nome == "" or $rg == "" or $cpf == "" or $endereco == "" or $telefone == "" or $cidade == "")
				{
					echo "<br/><div class='row'><div class='col-md-12'><div class='sufee-alert alert with-close alert-danger alert-dismissible fade show'><span class='badge badge-pill badge-danger'>Erro</span>&nbsp; Preencha todos os campos corretamente!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div></div></div><br/><br/>";
                    echo "<div class='row'><div class='col-md-12'><a href='cadastrofunc.php'><button type='button' class='btn btn-danger'><i class='fa fa-reply'></i>&nbsp; Corrigir</button><button type='button' class='btn btn-link'></a></div></div><br/><br/>";
				}
				else{
					$sql = "insert into funcionario values (null, '$nome', '$rg', '$cpf', '$endereco', '$cidade','$email', '$telefone')";
					$result = $mysqli->query($sql );
					echo "<br/><h2>Funcionário cadastrado com <span class='badge badge-secondary'>sucesso!</span> </h2><br/>";
				}
				
			?>
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