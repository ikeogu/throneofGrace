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
                                    Sermons <span	class="badge">12</span>
                                </a>
                                <a href="{{route('prayer.create')}}" class="list-group-item ">
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
                                        class="badge">{{App\Gallery::count()}}
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
                                <a href="{{route('contact.index')}}" class="list-group-item">
                                    <span 	class="glyphicon glyphicon-list-alt"></span>
                                    Inbox <span	class="badge">{{App\Contact::count()}}</span>
                                </a>
                                                                                                                        
                        </div>

                </div>
                <div class="col-md-9">

                        <div class="panel panel-default">
                                <div class="panel-heading main-color-bg">
                                                <h3 class="panel-title">STORE</h3>
                                </div>
                                <div class="panel-body">
                                                <div class="row">
                                                                <div class="col-md-12">
                                                                                <input class="form-control" type="text" placeholder="Filter Users">
                                                                </div>
                                                </div>
                                                <br>
                                                <table class="table table-strip table-hover">
                                                                <tr>
                                                                                <th>S/No</th>
                                                                                <th>Title</th>
                                                                                <th>Image</th>
                                                                                
                                                                                <th>Date</th>
                                                                                <th>Action</th>
                                                                </tr>
                                                                @foreach ($image as $item)
                                                                <tr>
                                                                        <td>{{$item->id}}</td>
                                                                        <td>{{$item->title}}</td>
                                                                        
                                                                        <td><img src="storage/public/GalleryImage/{{$item->image}}"></td>
                                                                        
                                                                        <td>{{$item->created_at->diffForHumans()}}</td>
                                                                        <td><a class="btn btn-default" href="#">Edit</a>
                                                                            <form action="{{ route('Gallery.destroy' , $item->id)}}" method="POST">
                                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                                    {{ csrf_field() }}                                                       
                                                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                                                    
                                                                            </form>
                                                                        </td>
                                                        </tr>			
                                                                @endforeach
                                                    
                                                </table>
                                </div>
                </div>

                </div>
            </div>
        </div>
    </section>
@endsection