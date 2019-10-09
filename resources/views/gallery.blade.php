@extends('layouts.app')
@section('content')
        <section class="sermons gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-gallery">
                    <h1 class="text-dark"> Our Gallery</h1>
                </div>
            </div>
        </section>

        <section class="gallery gallery-img my-5">
            <div class="container">

                
                @if(count($image) > 0)
                 
                 <div class="row my-1 justify-content-center">
                    @foreach ($image as $item)
                    <div class="col-sm col-md-3 my-2">
                    <img src="/storage/gallery/{{$item->image}}" alt="{{$item->title}}" class="img-fluid">
                    </div>
                  
                 @endforeach
                 </div>
                @else
                <div class="row my-1 justify-content-center">
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/about_3.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/about.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/image_1.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/sermon_3.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/sermon_2.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/sermon_1.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/image_2.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                    <div class="col-sm col-md-3 my-2">
                        <img src="/img/church/img_3.jpg" alt="_gallery1" class="img-fluid">
                    </div>
                </div>
                @endif
            </div>
        </section>

        

    </main>

@endsection