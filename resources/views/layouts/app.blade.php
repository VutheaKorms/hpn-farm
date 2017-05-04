 <!DOCTYPE html>
<html lang="{{ config('app.locale') }}" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'HpnFarm') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    {{--<script src="bower_components/angular/angular.min.js"></script>--}}
    {{--<script src="bower_components/jquery/jquery.min.js"></script>--}}
    {{--<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>--}}
    {{--<script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>--}}
    {{--<script src="bower_components/oclazyload/dist/ocLazyLoad.min.js"></script>--}}
    {{--<script src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>--}}
    {{--<link href="app/css/style.css" rel="stylesheet">--}}
    {{--<link href="app/css/styles.css" rel="stylesheet">--}}

    {{--<script src="app/js/app.js"></script>--}}

    {{--<script src="app/js/routes.js"></script>--}}

    {{--<script src="app/js/demo/routes.js"></script>--}}





    <!--
    <link href="app/css/style.css" rel="stylesheet">
    <script src="bower_components/angular/angular.min.js"></script>-->


    <!-- Bootstrap and necessary plugins -->
    {{--<script src="bower_components/jquery/dist/jquery.min.js"></script>--}}
    {{--<script src="bower_components/tether/dist/js/tether.min.js"></script>--}}
    {{--<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>--}}

    {{--<!-- AngularJS -->--}}
    {{--<script src="bower_components/angular/angular.min.js"></script>--}}


        {{--<!-- AngularJS plugins -->--}}
    {{--<script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>--}}
    {{--<script src="bower_components/oclazyload/dist/ocLazyLoad.min.js"></script>--}}
    {{--<script src="bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>--}}
    {{--<script src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>--}}

    {{--<!-- AngularJS CoreUI App scripts -->--}}

    {{--<script src="app/js/app.js"></script>--}}

    {{--<script src="app/js/routes.js"></script>--}}

    {{--<script src="app/js/demo/routes.js"></script>--}}

    {{--<script src="app/js/controllers.js"></script>--}}
    {{--<script src="app/js/directives.js"></script>--}}




    {{--<script data-require="angular.js@1.3.14" data-semver="1.3.14" src="https://code.angularjs.org/1.3.14/angular.js"></script>--}}

    {{--<script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>--}}
    {{--<script src="bower_components/oclazyload/ocLazyLoad.min.js"></script>--}}
    {{--<script src="bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>--}}
    {{--<script src="bower_components/angular-breadcrumb/dist/loading-bar.min.js"></script>--}}
    {{--<script src="bower_components/jquery/dist/jquery.min.js"></script>--}}
    {{--<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>--}}
    {{--<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">--}}

    <!--
    <script src="bower_components/oclazyload/ocLazyLoad.min.js"></script>
    <script src="bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>
    <script src="bower_components/angular-breadcrumb/dist/loading-bar.min.js"></script>


    <!--
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- AngularJS
    <script src="bower_components/angular/angular.min.js"></script>

    <!-- AngularJS plugins
    <script src="bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="bower_components/oclazyload/dist/ocLazyLoad.min.js"></script>
    <script src="bower_components/angular-breadcrumb/dist/angular-breadcrumb.min.js"></script>
    <script src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>


    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="bower_components/angular/angular.min.js"></script>
    <script src="bower_components/angular-route/angular-ui-router.min.js"></script>
    <!--<script src="bower_components/lodash/lodash.min.js"></script>
    <script src="bower_components/angular-route/angular-route.min.js"></script>
    <script src="bower_components/angular-local-storage/dist/angular-local-storage.min.js"></script>
    <script src="bower_components/restangular/dist/restangular.min.js"></script>

    <!--
    <script src="app/app.js"></script>
    <script src="app/controllers/account/controller.js"></script>

    <script src="js/app.js"></script>

    -->
    {{--<script src="app/js/app.js"></script>--}}

    {{--<script src="app/js/routes.js"></script>--}}

    {{--<script src="app/js/demo/routes.js"></script>--}}

    {{--<script src="app/js/controllers.js"></script>--}}
    {{--<script src="app/js/directives.js"></script>--}}


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    -->
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'HpnFarm') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="home#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <!--<ul class="dropdown-menu" role="menu">-->
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                <!--</ul>-->
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts
    <script src="{{ asset('js/app.js') }}"></script>-->
</body>
</html>
