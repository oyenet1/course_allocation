<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  {{-- fonts --}}
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600&family=Tourney:wght@300;400;500;600;900&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  {{-- livewire styles --}}
  @livewireStyles
  {{-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> --}}

  <style>
    .quicksand-normal,
      {
      font-family: 'Quicksand', sans-serif;
      font-weight: 400;
    }

    .quicksand-medium {
      font-family: 'Quicksand', sans-serif;
      font-weight: 500;
    }

    .tourney-light {
      font-family: 'Tourney', cursive;
      font-weight: 300;
    }

    .tourney-normal {
      font-family: 'Tourney', cursive;
      font-weight: 400;
    }

    .tourney-medium {
      font-family: 'Tourney', cursive;
      font-weight: 500;
    }

    .tourney-semibold {
      font-family: 'Tourney', cursive;
      font-weight: 600;
    }

    .tourney-black {
      font-family: 'Tourney', cursive;
      font-weight: 900;
    }

  </style>

  {{-- stylesheet extras --}}
  @yield('stylesheet')
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-dark bg-white text-purple-600 font-medium shadow-md top-0 fixed w-full z-40">
    <a class="navbar-brand  text-2xl uppercase tourney-black space-x-2 flex items-center" href="/">
      <img src="/img/logo-2.png" alt="2cybersecurity" class="w-16 h-auto"><span class="text-lg md:text-xl xl:text-2xl">2CYBERSECURITY</span>
    </a>
    <button class="navbar-toggler  text-purple-600 hover:bg-purple-300" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-8" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
      </svg>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto font-black lg:space-x-3 xl:space-x-4">
        <li class="nav-item">
          <a class="nav-link hover:text-red-500 transition duration-500 hover:opacity-95  uppercase text-xs lg:text-sm" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" class="hidden lg:block h-6 w-6 text-purple-500" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
              <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
            </svg>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover:text-red-500 transition duration-500 hover:opacity-95 uppercase text-xs lg:text-sm" href="/cashapp">Cashapp</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover:text-red-500 transition duration-500 hover:opacity-95 uppercase text-xs lg:text-sm" href="/bitcoin">bitcoin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover:text-red-500 transition duration-500 hover:opacity-95 uppercase text-xs lg:text-sm" href="/paypal">paypal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover:text-red-500 transition duration-500 hover:opacity-95 uppercase text-xs lg:text-sm" href="/bank">bank transfer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover:text-red-500 transition duration-500 hover:opacity-95 uppercase text-xs lg:text-sm" href="/western">western union</a>
        </li>
        <li class="nav-item">
          <a class="nav-link hover:text-red-500 transition duration-500 hover:opacity-95 uppercase text-xs lg:text-sm" href="/contact">contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto place-items-center">
        <li class="nav-item lg:mr-3 mb-2 lg:mb-0  place-items-center">
          <a class="nav-link hover:text-red-500  hover:opacity-95 uppercase text-xs text-center lg:text-xs bg-purple-100 px-4 rounded-3xl border-2 border-purple-600 transition-all duration-300 ease-in-out  hover:scale-90 transform" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item  place-items-center">
          <a class="nav-link  hover:opacity-95 uppercase text-xs text-center lg:text-xs text-white bg-purple-600 px-4 border-2 hover:bg-red-500 hover:text-purple-600  ease-in-out border-purple-600 hover:border-red-600 rounded-3xl transition-all duration-300 hover:scale-90 transform" href="{{ route('register') }}">sign up</a>
        </li>
      </ul>
    </div>
  </nav>



  @yield('content')
  <footer class="w-full object-cover object-center bg-fixed mx-auto m-0 border-t-8 bg-black border-purple-600" style="background: url('/img/pattern.png')">
    @include('footer')
  </footer>
  {{-- jquery --}}
  {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
  <script>
    $(document).ready(function() {
      $(".alert-hide").click(function() {
        $(".alert").hide();
      });
    });

  </script>
  {{-- livewires scripts --}}
  <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  @livewireScripts
  @yield('scripts')
</body>
</html>
