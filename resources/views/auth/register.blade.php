<!DOCTYPE html>
    <html lang-en>
    
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, intial-scale=1">
            <title>Admin Area | Account Login</title>
            <!-- core css -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link href="css/style2.css" rel="stylesheet">
            <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
        </head>
    
        <body>
            <nav class="navbar navbar-light py-4 bg-dark">
                <div class="navbar-brand ">
                    <h3>Admin Dashboard Register</h3>
                </div>
            </nav>
            <section>
        
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mt-5">
                            <div class="logo text-center">
                                <img src="{{asset('img/church/logo.jpeg')}}" height="130" width="150">
                            </div>
                            <br>
                            <div class="card p-2">
                                <h5 class="text-center">Register</h5>
                                <form method="POST" action="{{ route('register') }}"class="px-5">
                                    @csrf
                                    <div class="form-group">
                                        <label for="fullname">Fullname</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="Password">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group ">
                                        <label for="password-confirm" >{{ __('Confirm Password') }}</label>
            
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="submit" value="Register" class="btn btn-info">
                                    </div>
                                    <p>Already have an account <a href="/login">Login</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="footer">
                 <p>Copyright Throne of Fire and Power Mins Dashboard &copy; 2019</p>
            </footer>
        
        </body>    
    </html>