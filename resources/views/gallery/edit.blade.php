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
                                <a href="{{route('sermons.index')}}" class="list-group-item current">
                                    <span	class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                    Sermons <span	class="badge">12</span>
                                </a>
                                <a href="{{route('prayer.index')}}" class="list-group-item ">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                    Prayer Points <span class="badge">{{App\PrayerPoint::count()}}</span>
                                </a>
                                <a href="{{route('Events.index')}}" class="list-group-item"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
                                    Events <span class="badge">33</span>
                                </a>
                                <a href="{{route('E-store.index')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Store <span class="badge">503</span>
                                </a>
                                <a href="{{route('Gallery.index')}}" class="list-group-item current">
                                    <span
                                        class="glyphicon glyphicon-list-alt"></span> Gallery <span
                                        class="badge">12
                                    </span>
                                </a>
                                
                                <a href="{{route('sermons.create')}}" class="list-group-item ">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                    Post Sermons <span class="badge">12</span>
                                </a>
                                <a href="{{route('prayer.create')}}" class="list-group-item ">
                                    <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                                    Post PrayerPoint <span class="badge">{{App\PrayerPoint::count()}}</span>
                                </a>
                                <a href="{{route('Events.create')}}" class="list-group-item"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
                                    Create Events <span class="badge">33</span>
                                </a>
                                <a href="{{route('E-store.create')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                                Add To	Store <span class="badge">503</span>
                                </a>
                                <a href="{{route('Gallery.create')}} " class="list-group-item ">
                                    <span 	class="glyphicon glyphicon-list-alt"></span>
                                    Add To Gallery <span	class="badge">12</span>
                                </a>
                                                                                                                        
                        </div>

                </div>
                <div class="col-md-9">

                    <div class="panel panel-default">
                        <div class="panel-heading main-color-bg">
                            <h3 class="panel-title">EDIT Gallery</h3>
                        </div>
                        <div class="panel-body">
                        <form action="{{route('Gallery.update',[$image->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{method_field()}}
                                <div class="modal-header">
                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Upload image</label>
                                            <input type="file" class="form-control-file"
                                        id="exampleFormControlFile1" name="image" value="{{$image->image}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" class="form-control" name="title" value="{{$image->title}}">
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Publish</button>
                                    </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

 @endsection