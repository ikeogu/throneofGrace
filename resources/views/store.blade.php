@extends('layouts.app')
@section('content')
        <section class="gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-store">
                    <h1  style="color:azure;"> Our E-Store</h1>
                    <p class="h4 text-center" style="color:azure;">Spiritual Prayer guides</p>
                </div>
            </div>
        </section>

        <section class="gallery-img my-5">
            <div class="container">

                <div class="row my-3 justify-content-center">
                    @if(count($book) > 0)
                    @foreach ($book as $item)
                        <div class="col-sm col-md-3 my-2">
                            <div class="card">
                                <img src="/storage/bookImage/{{$item->image}}" alt="" height="170">
                                <div class="card-body">
                                    <h4>{{$item->title}}</h4>
                                    <hr>
                                    <h3>#{{$item->price}}</h3>
                                    <a type="button" href="{{route('E-store.show',[$item->id])}}" class="btn btn-danger btn-lg">view</a>
                                </div>
                               
                            </div>
                        </div> 
                    @endforeach
                    @else
                    <div class="p-3">
                        <p class="text-dark"> Dear valued customer, the book is currently not avaliable!</p>
                    </div>
                    @endif
                    
                </div>

            </div>
        </section>
           


    
@endsection