<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <title>Estoque</title>

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <!-- Bootstrap 3.3.6 -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" />
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/AdminLTE.min.css" rel="stylesheet">
        <link href="/css/_all-skins.min.css" rel="stylesheet">
        <link href="/css/blue.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="/js/jquery-2.2.3.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/plugue/app.min.js"></script>
        <script src="/js/plugue/jquery.js"></script>
        <script src="/js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="/js/scriptajax.js "></script>
        <script src="/js/calendario.js "></script>
        <style>
            .far{font-size:16px;}
            .branco {background-color: white}
        </style>
        </head>
    <body class="hold-transition skin-yellow-light sidebar-mini">
        <div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="{{action('HomeController@index')}}" class="logo">
            <span class="logo-lg">Estoque</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="/img/padrao.jpg" class="user-image" alt="User Image"/>
                            <span class="hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">

                                <img src="/img/padrao.jpg" class="img-circle" alt="User Image"/>
                                <p>
                                  - Web Developer
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">

                                    <a href=" url 'perfil_funcionario' "
                                       class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">

                    <img src="/img/padrao.jpg" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
            </form>
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="{{action('HomeController@index')}}">
                        <i class="far glyphicon glyphicon-home"></i>
                        <span>Paginal Inicial</span>
                        <span class="pull-right-container">
                                </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="	fa fa-clone"></i>
                        <span>Produtos</span>
                        <span class="pull-right-container">
                                    <i class="far fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{action('ProdutoController@lista')}}"><i class="fa fa-circle-o"></i>Produtos</a></li>
                        <li><a href="{{action('ProdutoController@novo')}}"><i class="fa fa-circle-o"></i>Cadastrar Produto</a></li>
                    </ul>
                </li>
                <li class="user-o">
                    <a href="#">
                        <i class="far fa fa-user"></i>
                        <span>Funcionários</span>
                        <span class="pull-right-container">
                                    <i class="far fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=" url 'aluno_list' "><i class="fa fa-circle-o"></i>Alunos</a></li>
                        <li><a href=" url 'aluno_new' "><i class="fa fa-circle-o"></i>Cadastrar Aluno</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="branco content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="row">
                <div align="center">
                    @yield('conteudo')
                </div>
            </div>
        </section>
    </div>
</div>
    </body>
</html>