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
        <link rel="stylesheet" href="<?=base_url('assets/css/cropper.css')?>">
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
                <div class="col-md-8 border rounded shadow mx-auto p-3">
                    <form action="" method="">
                        <div class="form-group form-row mb-1">
                            <div class="d-flex flex-column mx-auto">
                                <div class="d-flex flex-row">
                                    <label>Insira uma foto</label>
                                    <a type="button" href="" class="btn btn-link p-1 ml-2" style="font-size: 12px; display: none;" id="edit">Editar</a>
                                </div>
                                <label class="" data-toggle="tooltip" title="Insira uma nova imagem" style="cursor: pointer;">
                                    <img class="rounded img-fluid" id="photo" src="<?=base_url('assets/images/dog-head-profile.png')?>" width="200px" height="200px" style="background-color: #CCC;">
                                    <input type="file" class="sr-only" id="photo-input" name="image" accept="image/*">
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
        
        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="<?=base_url('assets/js/cropper.js')?>"></script>
        <script src="<?=base_url('assets/js/img-cropper.js') ?>"></script>
        <script src="<?=base_url('assets/js/main.js')?>"></script>
        
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