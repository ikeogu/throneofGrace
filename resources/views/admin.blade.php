@extends('layouts.admin')
@section('contents')


<section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
                  <div class="list-group">
                          <a href="#" class="list-group-item active main-color-bg">
                              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
                          </a>
                          <a href="{{route('sermons.index')}}" class="list-group-item ">
                              <span	class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                              Sermons <span	class="badge">{{App\Sermon::count()}}</span>
                          </a>
                          <a href="{{route('prayer.index')}}" class="list-group-item ">
                            <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                            Prayer Point <span class="badge">{{App\PrayerPoint::count()}}</span>
                        </a>
                          <a href="{{route('Events.index')}}" class="list-group-item"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
                              Events <span class="badge">{{App\Event::count()}}</span>
                          </a>
                          <a href="{{route('E-store.index')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Store <span class="badge">{{App\Book::count()}}</span>
                          </a>
                          <a href="{{route('testimony.index')}}" class="list-group-item current">
                                <span
                                    class="glyphicon glyphicon-list-alt"></span> Testimonies <span
                                    class="badge">{{App\Testimony::count()}}
                                </span>
                            </a>
                          <a href="{{route('Gallery.index')}}" class="list-group-item">
                              <span
                                  class="glyphicon glyphicon-list-alt"></span> Gallery <span
                                  class="badge">{{App\Gallery::count()}}
                              </span>
                          </a>
                          
                          <a href="{{route('sermons.create')}}" class="list-group-item ">
                              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
                              Post Sermons <span class="badge">{{App\Sermon::count()}}</span>
                          </a>
                          <a href="{{route('Events.create')}}" class="list-group-item"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
                              Create Events <span class="badge">{{App\Event::count()}}</span>
                          </a>
                          <a href="{{route('E-store.create')}}" class="list-group-item current"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                          Add To	Store <span class="badge">{{App\Book::count()}}</span>
                          </a>
                          <a href="{{route('Gallery.create')}}" class="list-group-item">
                              <span 	class="glyphicon glyphicon-list-alt"></span>
                              Add To Gallery <span	class="badge">{{App\Gallery::count()}}</span>
                          </a>
                                                                                                                  
                  </div>
            </div>
            <div class="col-md-9">
                      <!-- Website Overview -->
                          <div class="panel panel-default">
                              <div class="panel-heading main-color-bg">
                                  <h3 class="panel-title">Website Overview</h3>
                              </div>
                              <div class="panel-body">
                                  <div class="col-md-3">
                                      <div class="well dash-box">
                                          <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{App\Sermon::count()}}</h2>
                                          <h4>Sermons</h4>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="well dash-box">
                                          <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{App\Event::count()}}
                                          </h2>
                                          <h4>Events</h4>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="well dash-box current">
                                          <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{App\Book::count()}}</h2>
                                          <h4>Books</h4>
                                      </div>
                                  </div>
                                  <div class="col-md-3">
                                      <div class="well dash-box">
                                          <h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span>  {{App\Contact::count()}}</h2>
                                          <h4>Contact</h4>
                                      </div>
                                  </div>
      
                              </div>
                          </div>
																										<div class="row justify-content-center">
																												<div class="panel panel-default">
																																<div class="panel">
																																				<div class="panel-heading main-color-bg">
																																					<h5 class="panel-title">{{Auth::user()->name}}</h5>
																																				</div>
																				
																																				<div class="panel-body">
																																								@if (session('status'))
																																												<div class="alert alert-success" role="alert">
																																																{{ session('status') }}
																																												</div>
																																								@endif
																				
																																							Welcome Admin!
																																				</div>
																																</div>
																												</div>
																								</div>
                     
              </div>	
          </div>
      </div>
      </section>
@endsection