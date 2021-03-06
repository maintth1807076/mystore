<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{asset('js/sweet-alert.min.js')}}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script type='text/javascript' src='//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js'></script>
    <script src="{{asset('js/admin.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/all.css')}}" rel="stylesheet">
    <link href="{{asset('css/sweet-alert.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin.css')}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="col-2"><a class="navbar-brand ml-5" href="/home">
                <img src="" width="75px"
                     height="auto" alt="">
            </a></div>
        <div class="col-8"></div>
        <div class="col-2">
            <ul class="navbar-nav float-right">
                <li class="nav-item dropdown float-right">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row pt-5 ml-2">
        <div class="col-4 col-md-3 col-lg-2 admin-nav-side">
            <div class="nav flex-column nav-pills text-dark">
                <a class="nav-link admin-nav-link" href="/admin/dashboard"><i class="fas fa-cogs pr-2"></i>Quản lí</a>
                <a class="nav-link admin-nav-link" href="/admin/users"><i class="fas fa-users pr-2"></i>Khách
                    hàng</a>
                <a class="nav-link admin-nav-link" href="/admin/slides"><i class="fas fa-images pr-2"></i>Ảnh
                    slide</a>
                <a class="nav-link admin-nav-link" href="/admin/categories"><i
                            class="fas fa-th-list pr-2"></i>Danh mục</a>
                <a class="nav-link admin-nav-link" href="/admin/products"><i class="fas fa-cube pr-2"></i>Sản
                    phẩm</a>
                <a class="nav-link admin-nav-link" href="/admin/orders"><i class="fas fa-shopping-cart pr-2"></i>Đơn hàng</a>
                <a class="nav-link admin-nav-link" href="/admin/reports"><i class="fas fa-file-alt pr-2"></i>Báo cáo</a>
                <a class="nav-link admin-nav-link" href="/home"><i class="fas fa-home pr-2"></i>Xem trước trang chủ</a>
            </div>
        </div>
        <div class="col-8 col-md-9 col-lg-10 pl-5">
            @section('content')
            @show()
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col bg-dark p-2 fixed-bottom">
            <div class="text-center text-white">
                Copyright &copy; by A Little Hope
            </div>
        </div>
    </div>
</div>
</body>
</html>
