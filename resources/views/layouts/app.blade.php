<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Throne Of Grace') }}</title>

    <!-- Scripts -->
    
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ secure_asset('css/fonts-icon.css') }}">
  

    <!-- Styles -->
    
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal@4"></script>
    <script>
      window.sr = ScrollReveal({
        distance: '100px',
        duration: 3000,
        easing: 'ease',
        mobile: true,
        reset: true, 
        scale: 1,
        viewFactor: 0.1,
      });
    </script>
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
              <div class="container-fluid">
                <div class="row navbar-brand text-center">
                    <img src="{{secure_asset('img/church/logo.jpeg')}}" height="50" width="50">
                    <h4 class="tag">Throne of Power & Fire Ministries Int'l (INC)</h4>
                </div>
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                    <i class="fas fa-bars"></i>
                  </span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto text-center">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link " href="/about" >
                        About
                      </a>
                      
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('event')}}">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('sermon')}}">Sermons</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('gal')}}">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('view')}}">E-Store</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('contact.create')}}">Contact</a>
                    </li>
                    <li class="nav-item"><a href="{{route('pray')}}" class="nav-link">Prayer Points</a></li>
                    <li class="">
                      <a class="btn btn-info" href="{{route('donate')}}">Donate</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </header>
        
        <main >
            @yield('content')
        </main>
    </div>
      <!-- FOoter -->
      <footer>
        <div class="container-fluid">
          <div class="row py-4">
            <div class="col-sm col-md-3">
              <h3>About the church</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima, dicta ea? Commodi mollitia corrupti
                nesciunt quidem sunt</p>
              <a href="/about" class="btn-donate1">Read more...</a>
            </div>
            <div class="col-sm col-md-3">
              <h3>Quick links</h3>
              <ul>
                <li><a href="{{route('event')}}">Upcoming events</a></li>
                <li><a href="{{route('sermon')}}">Recents Sermons</a></li>
                <li><a href="{{route('pray')}}">Prayer Points</a></li>
                <li><a href="{{route('view')}}">E-store</a></li>
                <li><a href="{{route('contact.create')}}">Contact us</a></li>
              </ul>
            </div>
            <div class="col-sm col-md-3">
              <h3>Our Address</h3>
              <p>Throne of Power and Fire Ministries
                Opposite MCC 2nd Gate, [Main Gate] Rumuigbo, Ikwere Road, Obio/Akpor. Rivers State</p>
  
              <p>Phone: +2348093114646, +2348038404894<br>
                Email: pstemmaijiogbe@gmail.com</p>
            </div>
            <div class="col-sm col-md-3">
              <h3>Connect</h3>
              <div class="social">
                <a href="https://www.facebook.com/emmaijiogbepastor">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.twitter.com/@EIjiogbe">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="https://www.gmail.com/pstemmaijiogbe">
                  <i class="fab fa-google"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="row bg-gray justify-content-center pt-3 p-5">
            <p>Throne of Power and Fire Ministries int'l Inc<a href="/login" > Reserved </a>  &copy; {{ date('Y') }}</p>
          </div>
        </div>
      </footer>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"></script>
    <script src="{{secure_asset('js/bootstrap.js')}}"></script>
    <script src="{{ secure_asset('js/style.js') }}" ></script>
    <script src="{{ secure_asset('js/app.js') }}" ></script>

    <script>
      sr.reveal('.bible_study', {
        origin: 'bottom',
      });
  
      sr.reveal('.bible-qoute', {
        origin: 'right',
      });
      
      sr.reveal('.welcome',{
        origin: 'left',
      });
      sr.reveal('.quote',{
        origin: 'bottom',
      });
      sr.reveal('.sermons',{
        origin: 'top',
      });
      sr.reveal('.events',{
        origin: 'left',
      });
  
      sr.reveal('.newsletter',{
        origin: 'right',
      });
      sr.reveal('.donate',{
        origin: 'bottom',
      });
      sr.reveal('.gallery',{
        origin: 'left',
      });
  
  
    </script>
</body>
</html>
