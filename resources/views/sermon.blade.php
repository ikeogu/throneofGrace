@extends('layouts.app')
@section('content')
        <section class="gallery-landing bible_study">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-sermon">
                    <h1>Our Sermons</h1>
                    <p>Experience God's Presence</p>
                    <p class="h4"></p>
                </div>
            </div>
        </section>

        <section class="sermons">
            <div class="title">
                <h6>BE A DOER AND NOT A HEARER ALONE</h6>
                <h1>SERMON </h1>
            </div>
            
            @foreach ($sermon as $item)
            <div class="container-fluid mb-5">
                <div class="row justify-content-center bg-ligh p-5">
                    <div class="col-sm-6 col-md-6 p-0">
                        <img src="/storage/sermon/{{$item->image}}" alt="" class="img-fluid" width="100%">
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="container topic">
                            <h2 class="mb-3">{{$item->caption}}</h2>
                            <p class="name">Sermon From <span>{{$item->author}}</span></p>
                            <p class="title">Topic <span> {{$item->topic}}</span></p>
                            <p class="date">Date: <span> {{$item->created_at->diffForHumans()}}</span></p>
                            <p>{{$item->passage}} </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

       

        
@endsection