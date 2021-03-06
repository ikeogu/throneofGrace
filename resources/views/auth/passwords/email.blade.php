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
                    <h3>Admin Dashboard</h3>
                </div>
            </nav>
            <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Reset Password') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        </body>
    </html>    
