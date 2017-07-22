<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TNBTS') }} | Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{ asset('toolkit/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('toolkit/dist/css/AdminLTE.min.css ')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset('toolkit/dist/css/skins/_all-skins.min.css ')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('toolkit/plugins/iCheck/flat/blue.css')}}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('toolkit/plugins/morris/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('toolkit/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('toolkit/plugins/datepicker/datepicker3.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('toolkit/plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('toolkit/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    <script type="text/javascript" src="{{ asset('toolkit/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('toolkit/js/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('toolkit/js/Chart.PieceLabel.js')}}"></script>
    <script type="text/javascript" src="{{ asset('toolkit/js/app.js')}}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
@if (Auth::guest())
                            
@else
    <div class="wrapper">

        <header class="main-header">
        <!-- Logo -->
            <a href="#" class="logo" style="background-color:#dd4b39;">
            <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>B</b>TS</span>TNBTS
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" style="background-color: #dd4b39;">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" >
                    <span class="sr-only" >Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="profile dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="name">{{Auth::user()->firstname}}&nbsp;{{Auth::user()->lastname}}</span> 
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}" 
                                        onclick="event.preventDefault(); 
                                        document.getElementById('logout-form').submit();">
                                        <i class="fa fa-power-off icon"></i>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                            {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

<script type="text/javascript"></script>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar" style="background-color: #f9fafc;">
    <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <ul class="sidebar-menu" >        
                <li class="active treeview">
                    <a href="#" style="background-color: #f4f4f5;">
                        <i class="fa fa-archive" style="color: #333;"></i> 
                        <span style="color: #333;">Data Flora-Fauna</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="background-color: #f4f4f5;">
                        <li class="active" >
                            <a href="#" style="color: #90949b;"><i class="fa fa-circle-o"></i> Daftar Fauna</a>
                        </li>
                        <li>
                            <a href="#" style="color: #90949b;"><i class="fa fa-circle-o"></i> Daftar Flora</a>
                        </li>
                    </ul>
                </li>              
            </ul>
        </section>
    <!-- /.sidebar -->
    </aside>

    @endif
    
    @yield('content')
            </div>
        </div>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script type="text/javascript">
      $(document).ready(function(){
        $.ajax({
            url: "http://localhost/TNBTS/Dashboard/dataSatwa",
            method: 'GET',
            crossDomain: true,
            dataType: 'html',
            success: function(data) {                  
              $(".datasatwa").html(data);                
            }
        });    
      });
    </script>

    <!-- jQuery 2.2.3 -->
    <script src="{{ asset('toolkit/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ asset('toolkit/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
    <script src="{{ asset('toolkit/plugins/morris/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('toolkit/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('toolkit/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{ asset('toolkit/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('toolkit/plugins/knob/jquery.knob.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('toolkit/https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js')}}"></script>
    <script src="{{ asset('toolkit/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{ asset('toolkit/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('toolkit/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{ asset('toolkit/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{ asset('toolkit/plugins/fastclick/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('toolkit/dist/js/app.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('toolkit/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('toolkit/dist/js/demo.js')}}"></script>
</body>
</html>

</body>
</html>
