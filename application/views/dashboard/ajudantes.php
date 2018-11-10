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
                        <li class="active">
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
                <div class="col-md-12 d-flex justify-content-center mb-3" id="filters">
                    <div class="dropdown mb-2">
                        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdownMenuButton">Filtros</button>
                        <div class="dropdown-menu p-2" aria-labelledby="dropdownMenuButton" style="margin-top: 7vh;">
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
                                    <div class="col-sm-12 contact" style="display: none;">
                                        <h5 class="mb-2"><b>Contato:</b></h5>
                                        <p>ufscao@adote.com.br</p>
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="mb-2"><b>Pode ajudar com:</b></h5>
                                        <p>Carona, lar temporário, divulgação, doação</p>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="mb-2"><b>Observações</b></h5>
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
                                    <div class="col-sm-12 contact" style="display: none;">
                                        <h5 class="mb-2"><b>Contato:</b></h5>
                                        <p>(15)99999-9999</p>
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="mb-2"><b>Pode ajudar com:</b></h5>
                                        <p>Carona, lar temporário, divulgação, doação</p>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="mb-2"><b>Observações</b></h5>
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
                                    <div class="col-sm-12 contact" style="display: none;">
                                        <h5 class="mb-2"><b>Contato:</b></h5>
                                        <p>(15)4444-4444</p>
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="mb-2"><b>Pode ajudar com:</b></h5>
                                        <p>Carona, lar temporário, divulgação, doação</p>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="mb-2"><b>Observações</b></h5>
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
                                    <div class="col-sm-12 contact" style="display: none;">
                                        <h5 class="mb-2"><b>Contato:</b></h5>
                                        <p>ufscao@adote.com.br</p>
                                    </div>
                                    <div class="col-md-5">
                                        <h5 class="mb-2"><b>Pode ajudar com:</b></h5>
                                        <p>Carona, lar temporário, divulgação, doação</p>
                                    </div>
                                    <div class="col-md-7">
                                        <h5 class="mb-2"><b>Observações</b></h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut quis quam scelerisque, gravida felis at, pretium enim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->
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
        <script src="<?=base_url('assets/js/main.js')?>"></script>
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