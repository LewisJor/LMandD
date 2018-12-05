<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

<title>
    @yield('pageTitle') LMandD Apparel
</title>

<?php
    if(Auth::user() != null) {
        $username = Auth::User()->username;
        }
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<Style type="text/css">
    .navbar {
        background-color: #070707;
    }

    footer {
        background-color: #070707;
        color: white;
    }
</Style>
    <!-- link-effects stylesheet -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- post grid stylesheet -->
    <link rel="stylesheet" href="css/elements/post-grid.css">

    <!-- animate stylesheet -->
    <link rel="stylesheet" href="css/elements/animate.css">

    <!-- link-effects stylesheet -->
    <link rel="stylesheet" href="css/elements/link-effects.css">

    <!-- buttons stylesheet -->
    <link rel="stylesheet" href="css/elements/buttons.css">

    <!-- form stylesheet -->
    <link rel="stylesheet" href="css/elements/form.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- social-share stylesheet -->
    <link rel="stylesheet" href="css/elements/social-share.css">

    <!-- Twitter Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- testimonial stylesheet -->
    <link rel="stylesheet" href="css/elements/testimonial.css">

</head>
<body>
    <div id="app">
        <nav class="py-3 tc-link-effect3 navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <div class="d-sm-flex d-block flex-sm-nowrap">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="Images/Logo.svg" alt="Logo/LMD" title="Logo" width="auto" height="50"></a>
                </a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ourServices') }}">Our Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fullName }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{-- User Profile Link--}}
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <i class="fas fa-user"></i> Your Profile
                                    </a>
                                    @if($username == 'AdminLMandD')
                                        <div class="dropdown-divider"></div>
                                        {{--Admin page for Dennis--}}
                                        <a class="dropdown-item" href="{{ route('admin') }}">
                                            <i class="fas fa-user-tie"></i> Admin
                                        </a>
                                    @endif
                                    <div class="dropdown-divider"></div>

                                    {{--User Order Link--}}
                                    <a class="dropdown-item" href="{{ route('orders.create') }}">
                                        <i class="fas fa-tshirt"></i> Request Order
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    <!-- Footer -->
    <footer class="py-2 fixed-bottom">
        <section class="sec-spacer sec-color">
            <div class="container container-center">
                <p class="m-0 text-center text-white">Copyright &copy; LM&amp;D Apparel 2018</p>
            </div>
        </section>
        <!-- /.container -->
    </footer>
    </div>

    <!-- jQurey -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!-- Twitter Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
