@extends('layouts.app')
@section('content')
    <section class="gallery-landing">
        <div class="container-fluid p-0">
            <div class="jumbotron bg-store">
                <h1  style="color:azure;"> Our E-Store</h1>
                <p class="h4 text-center" style="color:azure;">Spiritual prayer guides</p>
            </div>
        </div>
    </section>

    <section class="gallery-img my-5">
        <div class="container">
                <h3 class="text-success"><strong > Thanks for Purchasing .....</strong> <br >Click on Download to have your Copy</h3>

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
                    <div class="col-12">
                    <img src="/storage/bookImage/{{$book->image}}" height="350" width="350">
                    </div>
                    <div class="col-12">
                        <div class="text-center card-title">
                        <h6 >Title : {{$book->title}}</h6>
                           
                            <h6 >Author : {{$book->author}}</h6>
                            <h6 >Pages : {{$book->pages}}</h6>
                            
                        </div>
                        <a href="{{route('download',[$book->id])}}" class="btn btn-success" >Download  </a>
                                 
                    </div>
                </div>

            </div>
        </div>
    </section> 
     
@endsection