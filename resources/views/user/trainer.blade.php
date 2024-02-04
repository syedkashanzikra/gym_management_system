@extends('layouts.headerfooter')

@section('header-foot')
    


  <!-- trainer section -->

  <section class="trainer_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2 class="text display-4">
          Our Gym Trainers
        </h2>
      </div>
      <div class="row">
        @foreach($trainers as $trainer)
            <div class="col-lg-4 col-md-6 mx-auto">
                <div class="box">
                    <div class="name">
                        <h5>{{ $trainer->trainer_name }}</h5>
                    </div>
                    <div class="img-box">
                      <img  src="{{ (!empty($trainer->trainer_image)) ? asset('upload/trainer_images/' . $trainer->trainer_image) : asset('upload/images/no_image.jpg') }}" alt="Trainer Image">
                  </div>
                  
                    <div class="social_box">
                        <a href="{{ $trainer->trainer_facebook }}">
                            <img src="{{ asset('theme/images/facebook-logo.png') }}" alt="Tainer_Fb_Link">
                        </a>
                        <a href="{{ $trainer->trainer_twitter }}">
                            <img src="{{ asset('theme/images/twitter.png') }}" alt="Tainer_Twitter_Link">
                        </a>
                        <a href="{{ $trainer->trainer_instagram }}">
                            <img src="{{ asset('theme/images/instagram-logo.png') }}" alt="Tainer_Insta_Link">
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    </div>
  </section>

  <!-- end trainer section -->

  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Location
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +02 1234567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->


@endsection


