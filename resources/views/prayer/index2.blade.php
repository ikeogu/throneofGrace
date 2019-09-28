@extends('layouts.app')
@section('content')
    <section class="gallery-landing">
        <div class="container-fluid p-0">
            <div class="jumbotron bg-store">
                <h1  style="color:azure;"> PrayerPoints</h1>
                <p class="h4 text-center" style="color:azure;">Spiritural prayer points</p>
            </div>
        </div>
    </section>

    <section class="gallery-img my-5">
        <div class="container">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                    <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List of Powerful PrayerPoints that changes background stories</h5>
                    
                    </div>
                    <p >Lot of testimonies abound. Lot of testifiers can testify to them</p>
                    <small>Christains ought always to Pray and not to faint.</small>
                </a>
                <div class="d-flex w-100 justify-content-between py-3">
                           
                    <table class="table table-stripped,  row scrollable">
                        <tr class="col col-lg-12 col-sm-9 col-md-9">
                            <th>Prayer Topic</th>
                            <th>Prayer Points</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($ppt as $item)
                            <tr class="col col-lg-12 col-sm-9 col-md-9">
                                <td> <strong>{{$item->topic}}</strong></td>
                                <td> <p>{{$item->topic}}</p></td>
                                <td><a class="btn btn-fill btn-info" href="{{route('pptbook',[$item->id])}}">view more</a></td>
                            </tr>
                        @endforeach        
                    </table>
                </div>
            </div>
        </div>
        {{$ppt->links()}}
    </section>
@endsection        