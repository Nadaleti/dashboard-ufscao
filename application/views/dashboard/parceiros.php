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
                        <li class="menu-item-has-children dropdown">
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
                        <li class="active">
                            <a href="ajudantes.html" class=""> <i class="menu-icon fas fa-handshake"></i><span class="h6">Parceiros</span></a>
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
                <div class="container d-flex flex-wrap justify-content-center col-md-12">
                    <div class="col-xl-3 text-center">
                        <img class="rounded-circle img-fluid mx-auto" src="<?= base_url('assets/images/dogs/dog-5.jpg')?>" alt="Parceiro x">
                        <div class="mt-3">
                            <h4>Nome parceiro</h4>
                            <button class="btn btn-link text-primary"><i class="fas fa-pencil-alt"></i></button>
                            <button class="btn btn-link text-danger"><i class="fas fa-trash-alt"></i></button>
                        </div>
                    </div>
                    <div class="col-xl-3 text-center">
                        <button class="btn btn-link float-right"><i class="fa fa-times"></i></button>
                        <div class="" style="position: relative;">
                            <img class="rounded-circle img-fluid mx-auto" src="<?= base_url('assets/images/dogs/dog-5.jpg')?>" alt="Parceiro x">
                            <button class="btn btn-primary rounded-circle" style="position: absolute; bottom: 3vmin; right: 2px;"><i class="fas fa-exchange-alt"></i></button>
                        </div>
                        <form class="mt-3" action="" method="">
                            <input type="text" class="form-control" placeholder="Insira o nome do parceiro" value="Nome parceiro">
                            <input type="text" class="form-control mt-2" placeholder="Insira um link" value="site.com.br">
                            <div class="container mt-2">
                                <button class="btn btn-sm btn-primary" type="submit">Alterar</button>
                                <button class="btn btn-link text-danger"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </form>
                        
                    </div>
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
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?=base_url('assets/js/img-cropper.js')?>"></script>
        <script src="<?=base_url('assets/js/main.js')?>"></script>
         
    </body>
</html>