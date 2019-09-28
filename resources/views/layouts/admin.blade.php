<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        
				<meta name="viewport" content="width=device-width, intial-scale=1">
				<!-- CSRF Token -->
				<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin Area | Dashboard</title>
				<!-- core css -->
        <link href="{{asset('css/bootstrap2.min.css')}}" rel="stylesheet">
				<link href="{{asset('css/style2.css')}}" rel="stylesheet">
			
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/core.js"></script>
        
    </head>

    <body>
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>Throne of Fire and Power Mins Dashboard <small> Manage
                                your site</small></h1>
                    </div>
                    <div class="col-sm col-md-2 text-center" id="login">
                        <a href="{{route('logout')}}" class="">Logout</a>
                    </div>
                </div>
            </div>
        </header>

        <section id="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">
                        Dashboard
                    </li>
                </ol>
            </div>
        </section>
        
        <main>
					@yield('contents')
				</main>

		<footer id="footer">
            <p>Copyright Throne of Fire and Power Mins Dashboard &copy; 2019</p>
        </footer>

       


        <!-- Bootstrap core Javascript
                ======================================== -->
        <!-- placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/style.js')}}"></script>	
    	</body>
    </html>