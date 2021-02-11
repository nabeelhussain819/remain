<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
            <div class="container">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="{{ route('home') }}">alalal</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="material-icons">dashboard</i> {{ __('Dashboard') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                <i class="material-icons">person_add</i> {{ __('Register') }}
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="material-icons">fingerprint</i> {{ __('Login') }}
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{url('pages/lock.html')}}" class="nav-link">
                                <i class="material-icons">lock_open</i>
                                Lock
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <main style="margin-bottom: 20px">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="#">
                            Lorem, ipsum.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('About Us') }}
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            {{ __('Licenses') }}
                        </a>
                    </li>
                </ul>
            </nav>
            {{-- <div class="copyright float-right">
              &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, made with <i class="material-icons">favorite</i> by
              <p>Dash Board</p>
            </div> --}}
        </div>
    </footer>

</body>
</html>


