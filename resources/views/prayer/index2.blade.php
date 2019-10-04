@extends('layouts.app')
@section('content')
    <section class="gallery-landing">
        <div class="container-fluid p-0">
            <div class="jumbotron bg-ppt">
                <h1  class="text-dark"> Prayer Points</h1>
                <p class="h4 text-center" class="text-dark">Spiritual Prayer Points</p>
            </div>
        </div>
    </section>

    <section class="gallery-img my-5">
        <div class="container">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                    <div class="d-flex w-100 justify-content-between jumbotron">
                    <h3 class="mb-1">List of Powerful Prayer Points that turn around situations</h3>
                    
                    </div>
                    
                </a>
                <div class="d-flex w-100 justify-content-between py-3">
                           
                    <table class="table table-stripped,  row scrollable text-dark">
                        <tr class="col col-lg-12 col-sm-9 col-md-9">
                            <th>Prayer Topic</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($ppt as $item)
                            <tr class="col col-lg-12 col-sm-9 col-md-9">
                            <td> <strong><a href="/prayer/{{$item->id}}">{{$item->topic}}</a></strong></td>
                                <td> <p class="text-dark">{{$item->description}}</p></td>
                                <td><a class="btn btn-fill btn-info" href="/prayer/{{$item->id}}"><strong> more</strong></a></td>
                            </tr>
                        @endforeach        
                    </table>
                </div>
            </div>
        </div>
        {{$ppt->links()}}
    </section>
@endsection        