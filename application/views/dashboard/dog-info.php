<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-br"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ela Admin - HTML5 Admin Template</title>
        <meta name="description" content="Ela Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
        <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=base_url('assets/css/cs-skin-elastic.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/my_style.css')?>">
        <link rel="stylesheet" media="screen and (max-device-width: 499px)" href="<?=base_url('assets/css/small.css') ?>">
    </head>
    
    <body>
        <!-- Left Panel -->
        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="index.html"><i class="menu-icon fa fa-home"></i><span class="h6">Resumo</span> </a>
                        </li>
                        <li class="">
                            <a href="ajudantes.html" class=""> <i class="menu-icon fas fa-user-friends"></i><span class="h6">Ajudantes</span></a>
                        </li>
                        <li class="menu-item-has-children dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-dog"></i><span class="h6">Cachorros</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="fas fa-clipboard-list"></i><a href="dog-list.html">Cadastrados</a></li>
                                <li><i class="fas fa-plus-circle"></i><a href="dog-form.html">Cadastrar novo</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-calendar"></i><span class="h6">Eventos</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                                <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-handshake"></i><span class="h6">Parceiros</span></a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                                <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
        <!-- /#left-panel -->

        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"><img src="<?= base_url("assets/images/logo.png") ?>" alt="Logo"></a>
                        <a class="navbar-brand hidden" href="./"><img src="<?= base_url("assets/images/logo2.png") ?>" alt="Logo"></a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
                        </div>

                        <div class="user-area float-right">
                            <a href="#" class="active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="<?= base_url("assets/images/admin.jpg") ?>" alt="User Avatar">
                            </a>
                        </div>

                    </div>
                </div>
            </header>
            <!-- /#header -->

            <!-- Content -->
            <div class="content">
                <div class="col-sm-9 col-md-7 col-lg-6 col-xl-8 border rounded shadow mx-auto p-3">
                    <form action="" method="">
                        <div class="d-flex justify-content-around align-items-center flex-wrap mb-1">
                            <div class="">
                                <img class="rounded-circle img-fluid" id="dog-photo" src="<?= base_url('assets/images/dogs/dog-5.jpg') ?>" width="250px" height="250px">
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-6 mt-2">
                                <h3><b>Nome do Cachorro</b></h3>
                                <p>Macho</p>
                                <p><b>Idade: </b>x anos</p>
                                <p><b>Porte: </b>Pequeno</p>
                                <p><b>É castrado? </b>Sim</p>
                                <p><b>É vacinado? </b>Não</p>
                                <p><b>Oservações: </b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin finibus sapien eget placerat. Maecenas commodo fermentum odio nec iaculis. Curabitur facilisis orci vitae mauris cursus semper.</p>
                            </div>
                        </div>
                        <hr>
                        <div class="">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin finibus sapien eget placerat. Maecenas commodo fermentum odio nec iaculis. Curabitur facilisis orci vitae mauris cursus semper
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.content -->

            <div class="clearfix"></div>

            <!-- Footer -->
            <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
            </footer>
            <!-- /.site-footer -->

        <!-- .animated -->
        </div>
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?= base_url('assets/js/main.js') ?>"></script>
    </body>
</html>