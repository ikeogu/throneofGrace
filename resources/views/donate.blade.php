@extends('layouts.app')
@section('content')
        <section class="gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-done">
                    <h1>Praise God with your resources</p>
                    <p class="h4"> Help move the work of God forward</p>
                </div>
            </div>
        </section>
        <section class="p-5">
            <div class="container-fluid">
                <div class="justify-content-center">
                    <h2>CHURCH DEVELOPMENT PROJECT</h2>
                </div>
                <div class="row my-3 py-5 justify-content-between">
                    
                    <div class="col-sm-6 col-md-6 bible-qoute">
                        
                        <h5 class="p-2 text-dark ">We appeal for your kind generosity to enable us purchase Land and build a place of <br>Worship to serve God.<br>
                            We plan to purchase three (3) plots of land and build a moderate-size Church cathedral.<br> As you assist us to build the house of God through your donations the sure blessings of David <br>will rest upon your life (2nd Samuel 7 v 13 -16).</h5>
                        <strong>CHURCH BANK / PARTNERS ACCOUNT</strong>
                        <h4 class="p-2 text-dark">
                            <ul>
                                <li>Account Number (Current): 2016285457 </li>
                                <li>Account Name: Throne of Power and Fife Ministry Int’l
                                    </li>
                                <li>Bank: First Bank PLC</li>
                            </ul>
                        </h4>

                    </div>
                    
                    <div class="col-lg-5">
                        <form  accept-charset="UTF-8" class="form-horizontal" role="form">
                            <h6 class="text-dark">Heaven will reward you as you promote God's work</h6>

                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" value="" placeholder="Full Name" required class=" form-control" data-name=""> {{-- required --}}
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="text" name="email" value="" placeholder="Email address" required class=" form-control" data-email="">
                            </div>
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" name="amount" placeholder="Amount" required class="form-control" data-amount=""> {{-- required in kobo --}}
                            </div>
                            <div class="form-group">
                                <select name="preffered" class="form-control" data-pref=""> 
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
                            </div>
                        
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}" data-ref=""> {{-- required --}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}" data-key=""> {{-- required --}}
                            {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" data-token=""> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                
                
                            <div class="form-group">
                                <button class="btn btn-info btn-md btn-block" id="pay" value="Pay Now!">
                                <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>           
        </section>
      

        
@endsection