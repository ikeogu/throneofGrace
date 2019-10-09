@extends('layouts.app')
@section('content')
    <div class="landing">
      <!-- Landing Page -->
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/church/faith.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block ">
              <h1 style="color:black;">Nobody in this World can Love you better than God</h1>
              <p><a href="#" class="btn btn-info btn-lg text-uppercase">Worship with us</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="/img/church/rel.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block ">
              <h1 style="color:black;">Peace I Give you, not as of the world gives.</h1>
              <p><a href="#" class="btn btn-info btn-lg text-uppercase">Worship with us</a></p>
            </div>
          </div>
          <div class="carousel-item">
              <img src="/img/church/break.png" class="d-block w-100" alt="..." />
              <div class="carousel-caption d-md-block ">
                <h1 style="color:black;">Deliverance and Breakthrough</h1>
                <p><a href="#" class="btn-info btn-lg text-uppercase">Worship with us</a></p>
              </div>
          </div>
          <div class="carousel-item">
            <img src="/img/slide1.png" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-md-block ">
              <h1 >Needing Jesus Christ together</h1>
              <p><a href="#" class="btn-info btn-lg text-uppercase">Worship with us</a></p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


    <!--Bibile Study-->
    <section class="bible_study">
      <div class="container-fluid">
        <div class="row mt-3 px-4 text-center justify-content-center">
          <div class="col-sm col-md-3 p-4 bible-qoute">
            <i class="fas fa-map-marker fa-2x"></i>
            <h3>Location</h3>
            <p>Throne of Power and Fire Ministries
                Opposite MCC 2nd Gate, [Main Gate] Rumuigbo, Ikwere Road, Obio/Akpor. Rivers State</p>
          </div>
          <div class="col-sm col-md-4 bible-qoute p-4">
            <i class="fas fa-clock fa-2x"></i>
            <h3>Service Time</h3>
            <p>Sundays: Triumphant Worship  at 8AM.<br>
              Tuesdays: Intercession/ Bible Study at 5:30PM.<br>
              Wednesday: Prayer Fellowship / one-to-one Counselling at 10AM.<br>
              Thursdays: Prayer Storm at 5:30PM.<br>
              Last Sundays: Children, Teen & Youth Delverance at 8:00AM </p>
          </div>
          <div class="col-sm col-md-4 bible-qoute p-4">
            <i class="fas fa-comments fa-2x"></i>
            <h3>Get in touch</h3>
            <p>Email: pstemmaijiogbe1@gmail.com<br>
              Phone: +2348093114646, +2348038404894</p>
          </div>
        </div>
      </div>
    </section>

    <section class="welcome">
      <div class="container-fluid mt-5">
        <div class="row">
          <div class="col-sm col-md-6">
            <div class="container">
              <img src="/img/church/about_3.png" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-sm col-md-6 px-5">
            <div class="container mt-5">
              <h3 class="text-capitalize my-4">About Our Church</h3>
              <h5 class="my-3">We are the Bible others read.</h5>
              <p>Throne of Power and Fire Ministry is a Bible and Holy Ghost Based Ministry and she strongly believe and will<br> continue to stand on the Word of God as a Bible believing Church </p>
              <a href="/about" class="text-uppercase see-more"> Read more <i class="fas fa-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="quote">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-sm col-md-12">
            <div class="container text">
              <p>"17 But upon mount Zion shall be Deliverace, and there shall be holiness; and the house of Jacob shall posses thier
                Possessions."</p>
              <p> <i class="fas fa-book"></i> Obadiah 1:17</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
æ
    <section class="sermons">
      <div class="heading">
        <h1>Latest sermons</h1>
        <p>We are created to Worship God</p>
      </div>
      @if(count($sermons) > 0)
      <div class="container-fluid">
        <div class="row justify-content-center">
          @foreach($sermons as $serm)
          <div class="col-sm col-md-4">
            <div class="card">
              <img src="/storage/sermon/{{$serm->image}}" class="" alt="..." width="100%" height="200">
              <div class="card-body">
                <h6 class="card-title"> <a href="/sermons/{{$serm->id}}">{{$serm->caption}}</a></h6>
                <div class="card-text">
                <small><i class="fas fa-user text-danger"></i> Pastor: <a href="#">{{$serm->author}}</a></small><br>
                  <small><i class="fas fa-tag text-danger"></i> Categories: <a href="#">{{$serm->tag}}</a></small>
                </div>
                <div class="socail-feeds d-flex justify-content-center">

                  <a href="#" class="m-4">
                    <i class="fab fa-facebook-f"></i>
                  </a>

                  <a href="#" class="m-4">
                    <i class="fab fa-twitter"></i>
                  </a>

                  <a href="#" class="m-4">
                    <i class="fab fa-google"></i>
                  </a>

                </div>
              </div>
            </div>
          </div>
         @endforeach
        </div>
      </div>
      @else
      {{-- <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-sm col-md-4">
            <div class="card">
              <img src="/img/church/eventon_1.jpg" class="" alt="..." width="100%">
              <div class="card-body">
                <h6 class="card-title"> <a href="#">eventONS ON PRAYER: running well, Finishing Strong</a></h6>
                <div class="card-text">
                  <small><i class="fas fa-user text-danger"></i> Pastor: <a href="#">Josh Brian</a></small><br>
                  <small><i class="fas fa-tag text-danger"></i> Categories: <a href="#">Gods, Prayer</a></small>
                </div>
                <div class="socail-feeds d-flex justify-content-center">

                  <a href="#" class="m-4">
                    <i class="fab fa-facebook-f"></i>
                  </a>

                  <a href="#" class="m-4">
                    <i class="fab fa-twitter"></i>
                  </a>

                  <a href="#" class="m-4">
                    <i class="fab fa-google"></i>
                  </a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-4">
            <div class="card">
              <img src="/img/church/eventon_2.jpg" class="" alt="..." width="100%">
              <div class="card-body">
                <h6 class="card-title"> <a href="#">eventONS ON PRAYER: running well, Finishing Strong</a></h6>
                <div class="card-text">
                  <small><i class="fas fa-user text-danger"></i> Pastor: <a href="#">Josh Brian</a></small><br>
                  <small><i class="fas fa-tag text-danger"></i> Categories: <a href="#">Gods, Prayer</a></small>
                </div>
                <div class="socail-feeds d-flex justify-content-center">

                  <a href="#" class="facebook m-4">
                    <i class="fab fa-facebook-f"></i>
                  </a>

                  <a href="#" class="twitter m-4">
                    <i class="fab fa-twitter"></i>
                  </a>

                  <a href="#" class="gmail m-4">
                    <i class="fab fa-google"></i>
                  </a>

                </div>
              </div>
            </div>
          </div>
          <div class="col-sm col-md-4">
            <div class="card">
              <img src="/img/church/eventon_3.jpg" class="" alt="..." width="100%">
              <div class="card-body">
                <h6 class="card-title"> <a href="#">SERMONS ON PRAYER: running well, Finishing Strong</a></h6>
                <div class="card-text">
                  <small><i class="fas fa-user text-danger"></i> Pastor: <a href="#">Josh Brian</a></small><br>
                  <small><i class="fas fa-tag text-danger"></i> Categories: <a href="#">Gods, Prayer</a></small>
                </div>
                <div class="socail-feeds d-flex justify-content-center">

                  <a href="#" class="facebook m-4">
                    <i class="fab fa-facebook-f"></i>
                  </a>

                  <a href="#" class="twitter m-4">
                    <i class="fab fa-twitter"></i>
                  </a>

                  <a href="#" class="gmail m-4">
                    <i class="fab fa-google"></i>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      @endif
    </section>

    <!-- Upcoming Events -->
    <section class="events">
      <div class="overlay">
        <div class="event-heading">
          <div class="text">
            <h1 class="text-white">Upcoming events</h1>
            <p class="text-white">Be sure to visit our Upcoming Events page regularly to get infomartion</p>
          </div>
        </div>
      </div>
      @if(count($events) > 0)
      <div class="container">
        <div class="row my-4 justify-content-center">
        @foreach($events as $event)
       
          <div class="welome col-sm col-md-3">
            <div class="container">
              <img src="/storage/Event/{{$event->image}}" alt="" class="img-fluid" height="150" width="100%">
            </div>
          </div>
          <div class="col-sm col-md-6">
            <div class="container">
              <div class="event-date">
              <h4 class="mt-2">{{$event->title}}</h4>
                <div class="location">
                  <a href="#"> <i class="fas fa-calendar text-danger"></i> {{$event->date}}</a>
                  <a href="#" class="mx-4"> <i class="fas fa-clock text-danger"></i> {{$event->start_time}} - {{$event->stop_time }} </a>
                  <a href="#"> <i class="fas fa-location-arrow text-danger"></i> {{$event->venue}}</a>
                </div>
                <p class="my-3">{{$event->passage}}</p>
              <a href="#"><i class="fas fa-arrow-right"></i> </a>
              </div>
            </div>
          </div>
          
       
        @endforeach
        </div> 
      </div>
      
      @endif
    </section>

    <section class="newsletter">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-sm col-md-6">
                    <h3 class="text-uppercase">O God Arise</h3>
                </div>
                <div class="col-sm col-md-6 p-0 text-">
                   <h5 style="color:white !important;"> A monthly 5 days Deliverance Revival Breakthrough <br>and Impact Program.</h5>
                   <h5 style="color:azure !important;">Holds Every Last Monday - Friday of Each Month</h5> 
                </div>
            </div>
        </div>
    </section>


    <!-- Donate  -->
    <section class="donate">
      <div class="container-fluid donate-overlay">
        <div class="row justify-content-center text-white">
            <h3 class="text-capitalize my-4">PROPHETIC INTERCESSARY PRAYER BAND</h3>
            <h5 class="my-3 ">This group is a Holy Spirit, selected and trained brethren who are mainly reserved with responsibility of praying and interceding for the Nations, government, Churches, Ministers, the sick and the peace of our Land.</h5>
            
            <a href="{{route('intp')}}" class="text-uppercase see-more"> Read more <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    

@endsection

 