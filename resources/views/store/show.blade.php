@extends('layouts.app')
@section('content')
    <section class="gallery-landing">
        <div class="container-fluid p-0">
            <div class="jumbotron bg-store">
                <h1  style="color:azure;"> Our E-Store</h1>
                <p class="h4 text-center" style="color:azure;">Spiritural prayer guides</p>
            </div>
        </div>
    </section>

    <section class="gallery-img my-5">
        <div class="container">

            <div class="card">
                <div class="row card-body">
                        <div class="row">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>

                        @endif

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="">
                    <img src="/storage/bookImage/{{$book->image}}" height="170" width="120">
                    </div>
                    <div class="col-12">
                        <div class="text-center card-title">
                        <h6 >Title:{{$book->title}}</h6>
                            <h6 >Price: {{$book->price}}</h6>
                            <h6 >Author: {{$book->author}}</h6>
                            <h6 >Pages: {{$book->pages}}</h6>
                            <h6 >Amount: {{$book->price}}</h6>
                        </div>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            Buy now
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section> 
    
      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </button>
            <div class="modal-header justify-content-between row">
                <div class="col-3">
                    <img src="{{asset('img/church/logo.jpeg')}}" height="65" width="60"  id="img1">
                </div>
                <div class="col-6">
                    <h5 class="modal-title" id="exampleModalLongTitle" class="my"> One Time Payment </h5>
                </div>
                <div class="col-3">
                        
                        <img src="{{asset('img/church/pay.png')}}" height="80" width="80" id="img2">
                </div>
                
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                    <div class="row" style="margin-bottom:40px;">
                        <div class="col-md-8 col-md-offset-2">
                        <p>
                            <div>
                                {{$book->title}}<br>
                                ₦ {{$book->price}}
                            </div>
                        </p>
                        <input type="text" name="email" value="" placeholder="Email address" required class="form-group form-control"> {{-- required --}}
                         
                        <input type="hidden" name="amount" value="{{$book->price * 100}}"> {{-- required in kobo --}}
                       
                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['title' => $book->title,'book_id'=> $book->id,]) }}" required class="form-group form-control"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
            
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
            
            
                        <p>
                            <button class="btn btn-success btn-md btn-block" type="submit" value="Pay Now!">
                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                            </button>
                        </p>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <h5>Make Secured Payment with Paystack</h5>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div> 
@endsection