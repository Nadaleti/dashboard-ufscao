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

    <!-- CROPPER -->
    <link rel="stylesheet" href="<?=base_url('assets/css/cropper.css')?>">
    
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
                    <div class="image img-cir img-120">
                        <img src="<?= base_url('assets/images/icon/avatar-big-01.jpg')?>" alt="John Doe" />
                    </div>
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
                        <li>
                            <a href="inbox.html">
                                <i class="fas fa-user-friends"></i>Ajudantes
                            </a>
                        </li>
                        <li class="active has-sub">
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
                        <div class="image img-cir img-120">
                            <img src="<?= base_url('assets/images/icon/avatar-big-01.jpg')?>" alt="John Doe" />
                        </div>
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
                            <li>
                                <a href="inbox.html">
                                    <i class="fas fa-user-friends"></i>Ajudantes
                                </a>
                            </li>
                            <li class="active has-sub">
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
            <section class="mt-sm-3 mt-md-5 mt-lg-5 mt-xl-5 pt-lg-5 pt-xl-5">
                <div class="col-md-8 border rounded shadow mx-auto p-3">
                    <form action="" method="">
                        <div class="form-group form-row mb-1">
                            <div class="d-flex flex-column mx-auto">
                                <div class="d-flex flex-row">
                                    <label>Insira uma foto</label>
                                    <a type="button" href="" class="btn btn-link p-1 ml-2" style="font-size: 12px; display: none;" id="edit">Editar</a>
                                </div>
                                <label class="" data-toggle="tooltip" title="Insira uma nova imagem" style="cursor: pointer;">
                                    <img class="rounded-circle img-fluid" id="photo" src="<?=base_url('assets/images/dog-head-profile.png')?>" width="200px" height="200px" style="background-color: #CCC;">
                                    <input type="file" class="sr-only" id="photo-input" value="0" name="image" accept="image/*">
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-8" id="infos">
                                <div class="container col-sm-12 col-md-12 mb-2">
                                    <label>Nome</label>
                                    <input class="form-control" type="text" placeholder="Digite o nome do cachorro" required>
                                </div>
                                <div class="d-flex flex-row flex-wrap mb-2">
                                    <div class="col-sm-7 col-md-8">
                                        <label>Sexo</label>
                                        <select class="custom-select" required>
                                            <option selected>Escolha o sexo</option>
                                            <option value="macho">Macho</option>
                                            <option value="femea">Fêmea</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-5 col-md-4">
                                        <label>Idade</label>
                                        <input class="form-control" type="text" min="0" value="0" required>
                                    </div>
                                </div>
                                <div class="container col-sm-12 col-md-12 mb-2">
                                    <label>Porte</label>
                                    <select class="custom-select" required>
                                        <option selected>Escolha o porte</option>
                                        <option value="pequeno">Pequeno</option>
                                        <option value="medio">Médio</option>
                                        <option value="grande">Grande</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-row col-sm-12 col-md-12">
                            <div class="form-check col-sm-12 col-md-6 mb-2">
                                <label>É castrado?</label><br>
                                <input class="form-input-check" type="radio" name="castrado" value="sim" checked> Sim<br>
                                <input class="form-input-check" type="radio" name="castrado" value="nao"> Não
                            </div>
                            <div class="form-check col-sm-12 col-md-6">
                                <label>É vacinado?</label><br>
                                <input class="form-input-check" type="radio" name="vacinado" value="sim" checked> Sim<br>
                                <input class="form-input-check" type="radio" name="vacinado" value="nao"> Não
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observações</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <div class="d-flex flex-row col-md-12 justify-content-end">
                            <a href="" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-primary ml-3">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </section>
                
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
    
    <!-- Modal to cropper -->
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header p-2 d-flex flex-row justify-content-between">
                    <h5 class="modal-title" id="modalLabel">Corte a imagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="">
                        <button class="btn btn-light" id="zoom-in"><i class="fas fa-search-plus"></i></button>
                        <button class="btn btn-light" id="zoom-out"><i class="fas fa-search-minus"></i></button>
                    </div>
                    <div class="img-container">
                    <img id="modal-img" src="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" id="crop">Cortar</button>
                </div>
            </div>
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
    
    <!-- SCRIPTS TO CROP -->
    <script src="<?=base_url('assets/js/cropper.js')?>"></script>
    <script src="<?=base_url('assets/js/img-cropper.js') ?>"></script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
    
    <!-- Crop -->
    <script>            
       // Organizando elementos na tela
        if ($(window).width() < 1280) {
            $('#infos').removeClass('col-md-8');
            $('#infos').addClass('col-md-12');
        }

        //Para dispositivos maiores, configura organização dos elementos de acordo com a redução da largura
        $(window).resize(function() {
            if ($(window).width() < 1280) {
                $('#infos').removeClass('col-md-8');
                $('#infos').addClass('col-md-12');
            } else {
                $('#infos').removeClass('col-md-12');
                $('#infos').addClass('col-md-8');
            }
        });
    </script>
</body>

</html>
<!-- end document-->