@extends('layouts.app')
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
                <p class="text-center">{{$test->body}}</p>
               <h6>{{$test->created_at->diffForHumans()}}</h6>
            </div>    
        </section>

       
@endsection