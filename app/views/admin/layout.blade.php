<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Pannonia - premium responsive admin template by Eugene Kopyov</title>
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet" type="text/css" />
    <!--[if IE 8]><link href="{{ URL::asset('assets/css/ie8.css') }}" rel="stylesheet" type="text/css" /><![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery/jquery-1.7.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/ui/jquery.easytabs.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/ui/jquery.collapsible.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/plugins/tables/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/files/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/files/functions_blank.js') }}"></script>

</head>

<body>

<!-- Fixed top -->
<div id="top">
    <div class="fixed">
        <a href="index.html" title="" class="logo"><img src="{{ URL::asset('assets/img/logo.png') }}" alt="" /></a>
        <ul class="top-menu">
            <li><a class="fullview"></a></li>
            <li><a class="showmenu"></a></li>
            <li><a href="#" title="" class="messages"><i class="new-message"></i></a></li>
            <li class="dropdown">
                <a class="user-menu" data-toggle="dropdown"><img src="{{ URL::asset('assets/img/userpic.png') }}" alt="" /><span>Howdy, Eugene! <b class="caret"></b></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#" title=""><i class="icon-user"></i>Profile</a></li>
                    <li><a href="#" title=""><i class="icon-inbox"></i>Messages<span class="badge badge-info">9</span></a></li>
                    <li><a href="#" title=""><i class="icon-cog"></i>Settings</a></li>
                    <li><a href="#" title=""><i class="icon-remove"></i>Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /fixed top -->


<!-- Content container -->
<div id="container">

    <!-- Sidebar -->
    <div id="sidebar">

        <div class="sidebar-tabs">
            <ul class="tabs-nav two-items">
                <li><a href="#general" title=""><i class="icon-reorder"></i></a></li>
                <li><a href="#stuff" title=""><i class="icon-cogs"></i></a></li>
            </ul>

            <div id="general">

                <!-- Main navigation -->
                <ul class="navigation widget">
                    <li><a href="index.html" title=""><i class="icon-home"></i>{{ Lang::get('navigation.dashboard') }}</a></li>
                    <li><a href="#" title="" class="expand"><i class="icon-reorder"></i>{{ Lang::get('navigation.master_data') }}<strong>4</strong></a>
                        <ul>
                            <li><a href="{{ URL::to('admin/master/province') }}" title="">{{ Lang::get('navigation.province') }}</a></a></li>
                            <li><a href="{{ URL::to('admin/master/city') }}" title="">{{ Lang::get('navigation.city') }}</a></li>
                            <li><a href="{{ URL::to('admin/master/district') }}" title="">{{ Lang::get('navigation.district') }}</a></li>
                            <li><a href="{{ URL::to('admin/master/village') }}" title="">{{ Lang::get('navigation.village') }}</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- /main navigation -->

            </div>

            <div id="stuff">

                <!-- Action buttons -->
                <div class="widget">
                    <button class="btn btn-block btn-danger">Action button</button>
                </div>
                <!-- /action buttons -->

            </div>

        </div>
    </div>
    <!-- /sidebar -->

    @yield('content')
</div>
<!-- /content container -->


<!-- Footer -->
<div id="footer">
    <div class="copyrights">&copy;  Brought to you by Eugene Kopyov.</div>
    <ul class="footer-links">
        <li><a href="" title=""><i class="icon-cogs"></i>Contact admin</a></li>
        <li><a href="" title=""><i class="icon-screenshot"></i>Report bug</a></li>
    </ul>
</div>
<!-- /footer -->

@yield('scripts')

</body>
</html>
