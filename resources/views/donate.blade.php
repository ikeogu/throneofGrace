@extends('layouts.app')
@section('content')
        <section class="gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-sermon">
                    <h1>Praise God with your resources</p>
                    <p class="h4"> Help move the work of God forward</p>
                </div>
            </div>
        </section>
        <section class="p-5">
                <div class="container-fluid ">
                    <div class="row justify-content-center">
                        <div class="col-10">
                            <form  accept-charset="UTF-8" class="form-horizontal" role="form">
                                <div class="row" style="margin-bottom:40px;">
                                    <div class="col-md-8 col-md-offset-2">
                                    <p>
                                        <div>
                                        <p>Heaven will reward you as you promote God's work</p>
                                        </div>
                                    </p>
                                    <div>
                                        <label>Full Name</label>
                                        <input type="text" name="name" value="" placeholder="Full Name" required class="form-group form-control" data-name=""> {{-- required --}}
                                    </div>
                                    <div>
                                    <label>Email Address</label>
                                    <input type="text" name="email" value="" placeholder="Email address" required class="form-group form-control" data-email="">
                                    </div>
                                    <div>
                                        <label>Amount</label>
                                    <input type="text" name="amount" placeholder="Amount" required class="form-group form-control" data-amount=""> {{-- required in kobo --}}
                                <div>
                                    <div>
                                    <select name="preffered" class="form-group form-control" data-pref=""> 
                                        <optgroup>
                                                <option value="">-- Prefered Description--</option>
                                            <option value="first_fruit"> First Fruit</option>
                                            <option value="offering">Offering</option>
                                            <option value="tithe">Tithe</option>
                                            <option value="kindom_project">Kingdom Project</option>
                                            <option value="seed">Seed </option>
                                            <option value="freewill">Freewill Donation</option>
                                        </optgroup>
                                    </select>
                                    <div>
                                
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}" data-ref=""> {{-- required --}}
                                    <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}" data-key=""> {{-- required --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                        
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" data-token=""> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                        
                        
                                    <p>
                                        <button class="btn btn-info btn-md btn-block" id="pay" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                        </button>
                                    </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>    
        </section>
      

        
@endsection