@extends('layouts.app')
@section('content')
    <section class="gallery-landing">
        <div class="container-fluid p-0">
            <div class="jumbotron donate">
                <h1  style="color:azure;">A Big Thank You!!! </h1>
                <p class="h4 text-center" style="color:azure;">We are Greatful</p>
            </div>
        </div>
    </section>

    <section class="gallery-img my-5">
        <div class="container jumbotron">
                

            <div class="card">
                <div class="row card-body">
                        <div class="row">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>

                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    
                </div>
                <h3 class="text-success">Thanks, for Your Kind gesture is deeply appreciated <br >God bless you. Amen</h3>
            </div>
        </div>
    </section> 
     
@endsection