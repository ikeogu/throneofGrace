@extends('layouts.app')
@section('content')
    <section class="gallery-landing">
        <div class="container-fluid p-0">
            <div class="jumbotron bg-ppt2">
                <h1  class="text-dark"> Prayer Point</h1>
                <p class="h4 text-center" class="text-dark">Spiritual prayer guides</p>
            </div>
        </div>
    </section>

    <section class="gallery-img my-5">
        <div class="container">
                <h3 class="text-success"> Thanks for Purchasing ... <br >Click on Download to have Grab Copy</h3>

            <div class="card">
                <div class="card-body">
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
                    
                    <div class="">
                        <div class="text-center card-title">
                        <strong ><h4> {{$ppt->topic}} </h4></strong>
                           
                            <p class="text-dark"> {{$ppt->description}}</p>
                           
                            
                        </div>
                        <a href="{{route('downloadppt',[$ppt->id])}}" class="btn btn-success" >Download Now </a>
                                 
                    </div>
                </div>

            </div>
        </div>
    </section> 
     
@endsection