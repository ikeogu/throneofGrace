<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta http-equiv="Content-Security-Policy refresh" content="upgrade-insecure-requests">
    <meta name="Description" content="Throne of Power and fire Ministry. By Pastor Emma Ijigbo. A church website with E-store for prayer books">
    <meta name="theme-color" content="blue"/>
    <meta name="apple-mobile-web-app-capable " content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="white"/>
    <meta name="apple-mobile-web-app-title" content="Throne"/>
    
    <link rel="apple-touch-icon" href="./img/icons/152x152.png"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Throne Of Grace') }}</title>
    <link rel="manifest" href="{{secure_asset('manifest.json')}}">
    <!-- Scripts -->
    
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Fonts -->

    
    <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet"> 
    
    <script>
      if ('serviceWorker' in navigator && 'PushManager' in window ) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('../service-worker.js').then(function(registration) {
                // Registration was successful
                console.log('ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }

</script>

    <!-- Styles -->
    
</head>
<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg fixed-top">
              <div class="container-fluid">
                <div class="row navbar-brand text-center">
                    <img src="{{secure_asset('img/church/logo.png')}}" height="50" width="50" alt="church logo">
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
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('intp')}}">Intercessory Prayers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('welfare')}}">welfare Program</a>
                    </li>
                     <li class="nav-item">
                      <a  class="nav-link" href="{{route('pray')}}" class="nav-link">Prayer Points</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('view')}}">E-Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('testimony.create')}}">Testimony</a>
                      </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gal')}}">Gallery</a>
                      </li>
                    <li class="">
                      <a class="btn btn-info" href="{{route('don')}}">Donate</a>
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
              
              <p>Throne of Power and Fire Ministry is a Bible and Holy Ghost Based Ministry and she strongly believe and will<br> continue to stand on the Word of God as a Bible believing Church </p>
              <a href="/about" class="btn-donate1">Read more...</a>
            </div>
            <div class="col-sm col-md-3">
              <h3>Quick links</h3>
              <ul>
                <li><a href="{{route('event')}}">Upcoming Events</a></li>
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
                Email: pstemmaijiogbe1@gmail.com</p>
            </div>
            <div class="col-sm col-md-3">
              <h3>Connect</h3>
              <div class="social">
                <a href="https://www.facebook.com/emmaijiogbepastor">
                  <i class="fab fa-facebook-f"> </i>.
                </a>
                <a href="https://www.twitter.com/@EIjiogbe">
                  <i class="fab fa-twitter"> </i>.
                </a>
                <a href="https://www.gmail.com/pstemmaijiogbe">
                  <i class="fab fa-google"></i>.
                </a>
              </div>
            </div>
          </div>
          <div class="row bg-gray justify-content-center pt-3 p-5">
            <p>Throne of Power and Fire Ministries int'l Inc<a href="/login" style="color:aliceblue"> Reserved </a>  &copy; {{ date('Y') }}</p>
          </div>
        </div>
      </footer>
      <script src="{{secure_asset('js/jquery.js')}}"></script>
     <script src="{{secure_asset('js/popper.js')}}"></script>
    <script src="{{secure_asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ secure_asset('js/style.js') }}" ></script>
    <script src="{{ secure_asset('js/app.js') }}" ></script>
    <script src="{{ secure_asset('js/scrollreveal.js') }}"></script> 
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
    
    
    {{-- <script src="{{ mix('/js/app.js') }}"></script> --}}

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
