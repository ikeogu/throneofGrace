@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('fontawesome/css/fontawesome.css')}}" >
    
@stop
@section('content')

        <section class="gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-name">
                    <h1> Testimonies</h1>
                    <p>Testimonies of the Lord's Doing</p>
                </div>
            
                
            </div>
        </section>

        <!-- Conatct us  -->
        <section class="contact">
           
           
            <div class="container my-5">
                <h1 class="text-uppercase text-center mt-5">{{$test->name}}</h1>
                <p class="text-center text-dark">{{$test->body}}</p>
               <h6  class="text-center">{{$test->created_at->diffForHumans()}}</h6>

               <hr>
               
            </div> 
            <div  class="container p-5 jumbotron">
                <div class="text-dark justify-content-center">
                    <strong>Share This testimony on Social Media</strong>
                </div><br><br>
                <div>
                    {!!Share::page(URL::signedRoute('test',['key'=> $test->id]))
                    ->facebook('Share This testimony')
                    ->twitter('Share This testimony')
                    ->whatsapp('Share This testimony')!!}
                </div>    
            </div> 
            
                                               
        </section>

       
@endsection
@section('javascript')
    <script src="{{asset('fontawesome/js/fontawesome.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="{{ asset('js/share.js') }}"></script>
@stop