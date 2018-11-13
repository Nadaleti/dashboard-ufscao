<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/css/font-face.css') ?>" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <link href="<?= base_url('vendor/mdi-font/css/material-design-iconic-font.min.css') ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="<?= base_url('vendor/animsition/animsition.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/wow/animate.css')?>" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/slick/slick.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/select2/select2.min.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.css')?>" rel="stylesheet" media="all">
    <link href="<?= base_url('vendor/vector-map/jqvmap.min.css')?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/css/theme.css')?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- MENU SIDEBAR - sidebar when large-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <h4 class="name">john doe</h4>
                    <a href="#">Sign out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="" href="#">
                                <i class="fas fa-tachometer-alt"></i>Resumo
                            </a>
                        </li>
                        <li class="active has-sub">
                            <a href="inbox.html">
                                <i class="fas fa-user-friends"></i>Ajudantes
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="menu-icon fas fa-dog"></i>Cachorros
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-clipboard-list"></i>Cadastrados</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="fas fa-plus-circle"></i>Cadastrar novo</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="inbox.html">
                                <i class="fas fa-calendar"></i>Eventos
                            </a>
                        </li>
                        <li class="has-sub">
                            <a href="inbox.html">
                                <i class="fas fa-handshake"></i>Parceiros
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="CoolAdmin" />
                                </a>
                            </div>
                            
                            <!-- BARS -->
                            <div class="header-button2">
                                
                                <!-- OPTIONS - clicked bars when large -->
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-globe"></i>Language</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END OF BARS -->
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- HIDDEN SIDEBAR - sidebar when small -->
            <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                <div class="logo">
                    <a href="#">
                        <img src="<?= base_url('assets/images/icon/logo-white.png')?>" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar2">
                    <div class="account2">
                        <h4 class="name">john doe</h4>
                        <a href="#">Sign out</a>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="" href="#">
                                <i class="fas fa-tachometer-alt"></i>Resumo
                            </a>
                        </li>
                        <li class="active has-sub">
                            <a href="inbox.html">
                                <i class="fas fa-user-friends"></i>Ajudantes
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="menu-icon fas fa-dog"></i>Cachorros
                                <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                            </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="table.html">
                                        <i class="fas fa-clipboard-list"></i>Cadastrados</a>
                                </li>
                                <li>
                                    <a href="form.html">
                                        <i class="fas fa-plus-circle"></i>Cadastrar novo</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="inbox.html">
                                <i class="fas fa-calendar"></i>Eventos
                            </a>
                        </li>
                        <li class="has-sub">
                            <a href="inbox.html">
                                <i class="fas fa-handshake"></i>Parceiros
                            </a>
                        </li>
                    </ul>
                    </nav>
                </div>
            </aside>
            <!-- END HEADER DESKTOP-->

            <!-- CONTENT -->
            <section class="mt-5">
                <div class="col-md-12 d-flex justify-content-center mb-3 pt-lg-5 pt-xl-5" id="filters">
                    <div class="dropdown mb-2">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenuButton">Filtros</button>
                        <div class="dropdown-menu p-2 js-dropdown" aria-labelledby="dropdownMenuButton" style="margin-top: 7vh;">
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check1" name="car" value="carona">
                                <label class="form-check-label" for="check1">Carona</label>
                            </div>
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check2" name="lar-tmp" value="lar">
                                <label class="form-check-label" for="check2">Lar Temporário</label>
                            </div>
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check3" name="divulg" value="divulgacao">
                                <label class="form-check-label" for="check3">Divulgação</label>
                            </div>
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check4" name="doa" value="doacao">
                                <label class="form-check-label" for="check4">Doação</label>
                            </div>
                            <div class="form-check">                        
                                <input type="checkbox" class="form-check-input" id="check4" name="doa" value="doacao">
                                <label class="form-check-label" for="check4">Outros</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-10 input-group">
                        <input type="text" class="form-control" placeholder="Digite o nome de um ajudante">  
                    </div>
                </div>
                <div class="col-md-12 mx-auto">
                <!-- Table -->
                <div class="container">
                    <!-- Thead -->
                    <div class="d-flex flex-row bg-primary py-3 rounded-top" id="thead">
                        <div class="col-sm-6 col-md-4"><b>Nome</b></div>
                        <div class="col-sm-5 col-md-7"><b>Contato</b></div>
                    </div>
                    <!-- Rows -->
                    <div class="card mb-0 rounded-0" onclick="change(this);">
                        <a class="d-flex flex-row justify-content-between py-3 card-header" data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1" style="color: black;">
                            <div class="col-sm-6 col-md-4">Matheus Nadaleti Garcia</div>
                            <div class="col-sm-5 col-md-7 contact">ufscao@adote.com.br</div>
                            <div class="">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-chevron-up" style="display: none;"></i>
                            </div>
                        </a>
                        <div class="collapse fade" id="collapse-1">
                            <div class="d-flex card-body">
                                <div class="col-sm-12 contact mb-2" style="display: none;">
                                    <h5 class="mb-1">Contato:</h5>
                                    <p>ufscao@adote.com.br</p>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <h5 class="mb-1">Pode ajudar com:</h5>
                                    <p>Carona, lar temporário, divulgação, doação</p>
                                </div>
                                <div class="col-md-7">
                                    <h5 class="mb-1">Observações:</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis quam scelerisque, gravida felis at, pretium enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 rounded-0" onclick="change(this);">
                        <a class="d-flex flex-row justify-content-between py-3 card-header" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2" style="color: black;">
                            <div class="col-sm-6 col-md-4">Vinicius de Souza Carvalho</div>
                            <div class="col-sm-5 col-md-7 contact">(15)99999-9999</div>
                            <div class="">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-chevron-up" style="display: none;"></i>
                            </div>
                        </a>
                        <div class="collapse fade" id="collapse-2">
                            <div class="d-flex card-body">
                                <div class="col-sm-12 contact mb-2" style="display: none;">
                                    <h5 class="mb-1">Contato:</h5>
                                    <p>(15)99999-9999</p>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <h5 class="mb-1">Pode ajudar com:</h5>
                                    <p>Carona, lar temporário, divulgação, doação</p>
                                </div>
                                <div class="col-md-7">
                                    <h5 class="mb-1">Observações:</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis quam scelerisque, gravida felis at, pretium enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 rounded-0" onclick="change(this);">
                        <a class="d-flex flex-row justify-content-between py-3 card-header" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3" style="color: black;">
                            <div class="col-sm-6 col-md-4">Vinicius Furukawa Carvalho</div>
                            <div class="col-sm-5 col-md-7 contact">(15)4444-4444</div>
                            <div class="">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-chevron-up" style="display: none;"></i>
                            </div>
                        </a>
                        <div class="collapse fade" id="collapse-3">
                            <div class="d-flex card-body">
                                <div class="col-sm-12 contact mb-2" style="display: none;">
                                    <h5 class="mb-1">Contato:</h5>
                                    <p>(15)4444-4444</p>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <h5 class="mb-1">Pode ajudar com:</h5>
                                    <p>Carona, lar temporário, divulgação, doação</p>
                                </div>
                                <div class="col-md-7">
                                    <h5 class="mb-1">Observações:</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis quam scelerisque, gravida felis at, pretium enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-0 rounded-0" onclick="change(this);">
                        <a class="d-flex flex-row justify-content-between py-3 card-header" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4" style="color: black;">
                            <div class="col-sm-6 col-md-4">Rafael Felipe Dias dos Santos</div>
                            <div class="col-sm-5 col-md-7 contact">ufscao@adote.com.br</div>
                            <div class="">
                                <i class="fa fa-chevron-down"></i>
                                <i class="fa fa-chevron-up" style="display: none;"></i>
                            </div>
                        </a>
                        <div class="collapse fade" id="collapse-4">
                            <div class="d-flex card-body">
                                <div class="col-sm-12 contact mb-2" style="display: none;">
                                    <h5 class="mb-1">Contato:</h5>
                                    <p>ufscao@adote.com.br</p>
                                </div>
                                <div class="col-md-5 mb-2">
                                    <h5 class="mb-1">Pode ajudar com:</h5>
                                    <p>Carona, lar temporário, divulgação, doação</p>
                                </div>
                                <div class="col-md-7">
                                    <h5 class="mb-1">Observações:</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis quam scelerisque, gravida felis at, pretium enim.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- container -->
            </div>
            </section>
            <!-- END OF CONTENT -->

            <section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!-- Vendor JS       -->
    <script src="<?= base_url('vendor/slick/slick.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/wow/wow.min.js')?>"></script>
    <script src="<?= base_url('vendor/animsition/animsition.min.js')?>"></script>
    <script src="<?= base_url('vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/counter-up/jquery.waypoints.min.js')?>"></script>
    <script src="<?= base_url('vendor/counter-up/jquery.counterup.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/circle-progress/circle-progress.min.js')?>"></script>
    <script src="<?= base_url('vendor/perfect-scrollbar/perfect-scrollbar.js')?>"></script>
    <script src="<?= base_url('vendor/chartjs/Chart.bundle.min.js')?>"></script>
    <script src="<?= base_url('vendor/select2/select2.min.js')?>">
    </script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.min.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.sampledata.js')?>"></script>
    <script src="<?= base_url('vendor/vector-map/jquery.vmap.world.js')?>"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
    
       <script>
            //Função de troca de ícone
            function change(item){
                $(item).find('i').toggle();
            };
            
            //Função de arrumar card
            $(window).ready(function(){
                //Para dispositivos pequenos, configura organização de elementos
                if ($(window).width() < 500) {
                    $($("#thead > div")[1]).css("display", "none");
                    $(".contact").toggle();
                    $(".card .collapse .card-body").css("flex-direction", "column");
                    $("#filters").css("flex-direction", "column");
                }
                
                //Para dispositivos maiores, configura organização dos elementos de acordo com a redução da largura
                $(window).resize(function() {
                    if ($(window).width() < 500) {
                        $($("#thead > div")[1]).css("display", "none");
                        $(".card-header .contact").css("display", "none");
                        $(".card-body .contact").css("display", "block");
                        $(".card .collapse .card-body").css("flex-direction", "column");
                        $("#filters").css("flex-direction", "column");
                    } else {
                        $($("#thead > div")[1]).css("display", "block");
                        $(".card-header .contact").css("display", "block");
                        $(".card-body .contact").css("display", "none");
                        $(".card .collapse .card-body").css("flex-direction", "row");
                        $("#filters").css("flex-direction", "row");
                    }
                });
            });
        </script>
</body>

</html>
<!-- end document-->