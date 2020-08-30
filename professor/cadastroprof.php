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
    <title>Cadastro de Professor</title>

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
                                <h2 class="title-1">Sistema de Cadastro de Professor</h2>
                                    <a href="../index.php"><button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi  fa-chevron-left"></i>Voltar</button></a>
                                </div>
                            </div>
                        </div>
                        
                        <br>
                        
                        <div class="row">
                            <div class="col-md-12">
                                        <div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
											<span class="badge badge-pill badge-warning"><i class="fas fa-warning"></i></span>
											Todos os campos são obrigatórios
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        Cadastrar Professor
                                    </div>
                                    <div class="card-body card-block">
                                        <form method="POST" action="bdcadprof.php">
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Nome</label>
                                                <input type="text" name="nome" id="nf-email" placeholder="Nome do professor" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">RG</label>
                                                <input type="text" name="rg" id="nf-email" placeholder="RG do professor" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">CPF</label>
                                                <input type="text" name="cpf" id="nf-email" placeholder="CPF do professor" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Endereço</label>
                                                <input type="text" name="endereco" id="nf-email" placeholder="Endereço do professor" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Cidade</label>
                                                <input type="text" name="cidade" id="nf-email" placeholder="Nome da cidade" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">E-Mail</label>
                                                <input type="text" name="email" id="nf-email" placeholder="E-Mail do professor" class="form-control">                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="nf-email" class=" form-control-label">Telefone</label>
                                                <input type="text" name="telefone" id="nf-email" placeholder="Telefone do professor." class="form-control">                                                
                                            </div>

                                            <button type="submit" class="btn btn-primary btn-sm" value="Cadastrar">
                                                <i class="fa fa-dot-circle-o"></i> Cadastrar
                                            </button>
                                            <button type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Cancelar
                                            </button>
                                        </form>
                                    </div>
                                    <div class="card-footer">                                        
                                        <p>Os dados são mantidos sob total sigilo</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                
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