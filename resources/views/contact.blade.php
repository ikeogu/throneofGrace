@extends('layouts.app')
@section('content')
        <section class="gallery-landing">
            <div class="container-fluid p-0">
                <div class="jumbotron bg-contact">
                    <h1> Contact Us</h1>
                    <p>We are One Email Away..</p>
                </div>
                <div>
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
            </div>
        </section>

        <!-- Conatct us  -->
        <section class="contact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm col-md-12">
                        <div class="map-responsive">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France"
                                width="900" height="550" frameborder="0" style="border:0; width: 100%;"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container notice-card p-3">
                <div class="row text-center justify-content-center">
                    <div class="col-sm col-md-4">
                        <div class="notice">
                            <i class="fas fa-map-marker fa-2x text-danger"></i>
                            <h4>Location</h4>
                            <p>Throne of Power and Fire Ministries
                                Opposite MCC 2nd Gate, [Main Gate] Rumuigbo, Ikwere Road, Obio/Akpor. Rivers State</p>
                        </div>
                    </div>
                    <div class="col-sm col-md-4">
                        <div class="notice px-2">
                            <i class="fas fa-clock fa-2x text-danger"></i>
                            <h4>Service Time</h4>
                            <p>Sundays: Triumphant Worship  at 8AM.<br>
                            Tuesdays: Intercession/ Bible Study at 5:30PM.<br>
                            Wednesday: Prayer Fellowship / one-to-one Counselling at 10AM.<br>
                            Thursdays: Prayer Storm at 5:30PM.<br>
                            Last Sundays: Children, Teen & Youth Delverance at 8:00AM </p>
                        </div>
                    </div>
                    <div class="col-sm col-md-4">
                        <div class="">
                            <i class="fas fa-comments fa-2x text-danger"></i>
                            <h4>Get in touch</h4>
                            <p>Email: info@yoursite.com<br>
                            Phone: +2348093114646, +2348038404894</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <h1 class="text-uppercase text-center mt-5">Leave a message</h1>
                <p class="text-center">Your email address will not be published</p>
               
                <form action="{{route('contact.store')}}" method="POST">
                    @csrf
                        <div class="row text-center mt-5">
                            <div class="col-sm col-md-4">
                                <input type="text" placeholder="Full name" name="fullname">
                            </div>
                            <div class="col-sm col-md-4">
                                <input type="email" placeholder="info.contact@gmail.com" name="email">
                            </div>
                            <div class="col-sm col-md-4">
                                <input type="text" placeholder="(+234) 9034 343 233" name="phone">
                            </div>
                        </div>
                        <div class="row mt-4 text-center">
                            <div class="col-sm col-md-12">
                                <textarea rows="7" placeholder="Message.." name="message"></textarea>
                            </div>
                        </div>
                        <div class="row my-5 justify-content-center">
                            <input type="submit" value="SEND" class="btn-danger">
                        </div>
                    </form>
                </div>
        </section>

@endsection