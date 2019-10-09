@extends('layouts.app')
@section('content')
        <section class="gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-gallery">
                    <h1> our Events</h1>
                    <p>Be sure to visit our Upcoming Events page regularly to get infomartion</p>
                </div>
            </div>
        </section>

        <!-- Upcoming Events -->
        <section class="events">
            <div class="container">
                
                
                <div class="row my-4 justify-content-center">
                    @foreach ($event as $item)
                    <div class="col-sm col-md-3">
                            <div class="container">
                            <img src="/storage/event/{{$item->image}}" alt="event" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-sm col-md-6">
                            <div class="container">
                                <div class="event-date">
                                    <h3 class="mt-2">{{$item->title}}</h3>
                                    <div class="location">
                                        <a href="#"> <i class="fas fa-calendar text-info"></i> {{$item->date}} </a>
                                        <a href="#" class="mx-4"> <i class="fas fa-clock text-info"></i>{{$item->start_time}} -{{$item->stop_time}}
                                        </a>
                                    <a href="#"> <i class="fas fa-location-arrow text-info"></i> {{$item->venue}}</a>
                                    </div>
                                    <p class="my-3">{{$item->details}}</p>
                                    <a href=""> <i class="fas fa-arrow-right"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="container mt-5">
                                <a href="#" class="btn btn-info text-uppercase">Current</a>
                            </div>
                        </div>  
                    @endforeach
                   
                </div>
            </div>
        </section>


       

  @endsection