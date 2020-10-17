<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boolbnb') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="site-wrapper">

        <header>

          <div class="container-fluid">

            <div class="row">

              <div class="col">

                <nav class="navbar navbar-expand-md navbar-light shadow-sm ms_nav">
                    <div class="container">
                      <div class="row">
                        <div class="col">

                          <a class="navbar-brand" href="{{ url('/') }}">
                              {{ config('app.name', 'Boolbnb') }}
                          </a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                              <span class="navbar-toggler-icon"></span>
                          </button>

                        </div>
                        <div class="col m-auto">


                          <div class="search_box">
                            test
                          </div>


                        </div>
                        <div class="col">



                          <div class="collapse navbar-collapse" id="navbarSupportedContent">
                              <!-- Left Side Of Navbar -->
                              <ul class="navbar-nav">

                              </ul>

                              <!-- Right Side Of Navbar -->
                              <ul class="navbar-nav">
                                  <!-- Authentication Links -->
                                  @guest
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                      </li>
                                      @if (Route::has('register'))
                                          <li class="nav-item">
                                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                          </li>
                                      @endif
                                  @else
                                      <li class="nav-item dropdown">
                                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                  @endguest
                              </ul>
                          </div>



                        </div>

                      </div>

                    </div>
                </nav>

              </div>

            </div>

          </div>

            @yield('header')
        </header>

        <main>

            @yield('main')
        </main>

        <footer>

            @yield('footer')
        </footer>

    </div>
</body>
</html>
