@extends('layouts.app')
@section('content')
    <section class="gallery-landing">
        <div class="container-fluid p-0">
            <div class="jumbotron bg-ppt">
                <h1  class="text-dark"> {{$ppt->topic}}</h1>
                <p class="h4 text-center" class="text-dark">Spiritual Prayer Point</p>
            </div>
        </div>
    </section>

    <section class="gallery-img my-5">
        <div class="container">
            <div class="list-group">
                    <h2 class="jumbotron">{{$ppt->topic}}</h2>
                <div class="d-flex w-100 justify-content-between py-3">
                      
                    <hr>
                   <strong> <p class="text-dark">{{$ppt->body}}</p> </strong>
                                  
                </div>
                 <div class=" justify-content-bottom ">
                     <strong> 
                     <p class="text-dark">The above is just a tip of an Iceberg <small><a  data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-info btn-fill text-white"> More </a></small></p>
                     
                        <h6>Price: ₦ {{$ppt->price}}</h6>
                        <button class="btn btn-info btn-fill text-white" data-toggle="modal" data-target="#exampleModalCenter" type="button"> Buy Now!</button>
                     </strong>    
                 </div>
            </div>
        </div>
       
    </section>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header justify-content-between row">
                    <div class="col-3">
                        <img src="{{asset('img/church/logo.jpeg')}}" height="65" width="60"  id="img1">
                    </div>
                    <div class="col-6">
                        <h5 class="modal-title" id="exampleModalLongTitle" class="my"> One Time Payment </h5>
                    </div>
                    <div class="col-3">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                         <img src="{{asset('img/church/pay.png')}}" height="65" width="60" id="img2">
                    </div>
                   
                </div>
                <div class="modal-body p-5">
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-8 col-md-offset-2">
                           
                                <div>
                                    <strong>Please pay a token to continue the work. God bless you.</strong>
                                    <hr>
                                    <p>
                                        <h4>{{$ppt->topic}}</h4>
                                        <h5>₦ {{$ppt->price}}</h5>
                                    </p>
                                    <hr>
                                </div>
                            
                            <input type="text" name="email" value="" placeholder="Email address" required class="form-group form-control"> {{-- required --}}
                             
                            <input type="hidden" name="amount" value="{{$ppt->price * 110}}"> {{-- required in kobo --}}
                            <input type="hidden" name="callback_url" value="{{route('call')}}">
                        <input type="hidden" name="metadata" value="{{ json_encode($array = ['title' => $ppt->topic,'ppt_id'=> $ppt->id,]) }}" required class="form-group form-control"> {{-- For other necessary things you want to add to your payload. it is optional though --}}
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