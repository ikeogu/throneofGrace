@extends('layouts.admin')
@section('contents')
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                            <div class="list-group">
                                    <a href="#" class="list-group-item active main-color-bg">
                                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                                    </a>
                                    <a href="{{route('sermons.index')}}" class="list-group-item ">
                                        <span	class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                        Sermons <span	class="badge">{{App\Sermon::count()}}</span>
                                    </a>
                                    <a href="{{route('prayer.index')}}" class="list-group-item ">
                                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                        Prayer Point <span class="badge">{{App\PrayerPoint::count()}}</span>
                                    </a>
                                    <a href="{{route('Events.index')}}" class="list-group-item current"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
                                        Events <span class="badge">{{App\Event::count()}}</span>
                                    </a>
                                    <a href="{{route('E-store.index')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Store <span class="badge">{{App\Book::count()}}</span>
                                    </a>
                                    <a href="{{route('testimony.index')}}" class="list-group-item current">
                                            <span
                                                class="glyphicon glyphicon-list-alt"></span> Testimonies <span
                                                class="badge">{{App\Testimony::count()}}
                                            </span>
                                        </a>
                                    <a href="{{route('Gallery.index')}}" class="list-group-item">
                                        <span
                                            class="glyphicon glyphicon-list-alt"></span> Gallery <span
                                            class="badge">{{App\Gallery::count()}}
                                    </a>
                                    
                                    <a href="{{route('sermons.create')}}" class="list-group-item ">
                                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                        Post Sermons <span class="badge">{{App\Sermon::count()}}</span>
                                    </a>
                                    <a href="{{route('prayer.create')}}" class="list-group-item ">
                                        <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                        Post PrayerPoint <span class="badge">{{App\PrayerPoint::count()}}</span>
                                    </a>
                                    <a href="{{route('Events.create')}}" class="list-group-item "><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
                                        Create Events <span class="badge">{{App\Event::count()}}</span>
                                    </a>
                                    <a href="{{route('E-store.create')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                                    Add To	Store <span class="badge">{{App\Book::count()}}</span>
                                    </a>
                                    <a href="{{route('Gallery.create')}}" class="list-group-item">
                                        <span 	class="glyphicon glyphicon-list-alt"></span>
                                        Add To Gallery <span	class="badge">{{App\Gallery::count()}}</span>
                                    </a>
                                                                                                                            
                            </div>

                    </div>
                    <div class="col-md-9">

                        <div class="panel panel-default">
                            <div class="panel-heading main-color-bg">
                                <h3 class="panel-title">EDIT EVENTS</h3>
                            </div>
                            <div class="panel-body">
                                    <form action="{{route('Events.update',[$ev->id])}}" method="POST">
                                            {{ csrf_field() }}
        
                                            {{ method_field('PUT') }}
                                    <div class="modal-header">
                                        <div class="modal-body">

                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Upload image</label>
                                                <input type="file" class="form-control-file"
                                                    id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group">
                                                <label>Title</label>
                                            <input type="text" class="form-control" value="{{$ev->title}}" name="title">
                                            </div>
                                            <div class="form-group">
                                                <label>Details</label>
                                                <textarea name="details" class="form-control"
                                            placeholder="Page Body" value="{{$ev->details}}"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                    <label>Date:</label>
                                                <input type="text" class="from-control" value="{{$ev->date}}" name="date">
                                                </div>
                                            <div class="form-group">
                                                <label>Start Time:</label>
                                            <input type="time" class="from-control" value="{{$ev->start_time}}" name="start_time">
                                            </div>
                                            <div class="form-group">
                                                <label>End TIme:</label>
                                                <input type="time" class="from-control" value="{{$ev->stop_time}}" name="stop_time">
                                            </div>
                                            <div class="form-group">
                                                <label>Event venue:</label>
                                            <input type="text" class="from-control" name="venue" value="{{$ev->venue}}">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
@label