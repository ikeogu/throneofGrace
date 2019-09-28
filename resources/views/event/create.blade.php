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
							PrayerPoint <span class="badge">{{App\PrayerPoint::count()}}</span>
						</a>
						<a href="{{route('Events.index')}}" class="list-group-item "><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
							Events <span class="badge">{{App\Event::count()}}</span>
						</a>
						<a href="{{route('E-store.index')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Store <span class="badge">{{App\Book::count()}}</span>
						</a>
						<a href="{{route('Gallery.index')}}" class="list-group-item">
							<span
								class="glyphicon glyphicon-list-alt"></span> Gallery <span
								class="badge">{{App\Gallery::count()}}
						</a>
						
						<a href="{{route('sermons.create')}}" class="list-group-item ">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
							Post Sermons <span class="badge">{{App\Sermon::count()}}</span>
						</a>
						<a href="{{route('prayer.create')}}" class="list-group-item ">
							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
							Post PrayerPoint <span class="badge">{{App\PrayerPoint::count()}}</span>
						</a>
						<a href="{{route('Events.create')}}" class="list-group-item current"><span class=" glyphicon glyphicon-user" aria-hidden="true"></span> 
							Create Events <span class="badge">{{App\Event::count()}}</span>
						</a>
						<a href="{{route('E-store.create')}}" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
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
											<div class="well dash-box current">
													<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> {{App\Event::count()}}
													</h2>
													<h4>Events</h4>
											</div>
									</div>
									<div class="col-md-3">
											<div class="well dash-box">
													<h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> {{App\Book::count()}}</h2>
													<h4>Books</h4>
											</div>
									</div>
									<div class="col-md-3">
											<div class="well dash-box">
													<h2><span class="glyphicon glyphicon-list" aria-hidden="true"></span> 42</h2>
													<h4>Newsletters</h4>
											</div>
									</div>

							</div>
					</div>
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
					<div class="panel panel-default">
							<div class="panel-heading main-color-bg">
									<h3 class="panel-title">UPLOAD EVENTS</h3>
							</div>
							<div class="panel-body">
									<form method="post" action="{{route('Events.store')}}" enctype='multipart/form-data'>
									@csrf
											<div class="modal-header">
													<div class="modal-body">

															<div class="form-group">
																	<label for="exampleFormControlFile1">Upload image</label>
																	<input type="file" class="form-control-file"
																			id="exampleFormControlFile1" name="image">
															</div>
															<div class="form-group">
																	<label>Title</label>
																	<input type="text" class="form-control" placeholder="Enter topic" name="title">
															</div>
															<div class="form-group">
																	<label>Details</label>
																	<textarea  class="form-control"	placeholder="Page Body" name="details"></textarea>
															</div>
															<div class="form-group">
																	<hr>
															</div>
															<div class="form-group">
																	<label>Date:</label>
																	<input type="text" class="from-control" placeholder="Start Date" name="date">
															</div>
															<div class="form-group">
																	<label>Start Time:</label>
																	<input type="time" class="from-control" placeholder="Start Date" name="start_time">
															</div>
															<div class="form-group">
																	<label>End Time:</label>
																	<input type="time" class="from-control" placeholder="End Date" name="stop_time">
															</div>
															<div class="form-group">
																	<label>Event venue:</label>
																	<input type="text" class="from-control" placeholder="event venue" name="venue">
															</div>
													</div>
													<div class="modal-footer">
															<button type="submit" class="btn btn-primary">Published</button>
													</div>
									</form>
							</div>
					</div>


			</div>
		</div>
	</div>
</section>
@endsection