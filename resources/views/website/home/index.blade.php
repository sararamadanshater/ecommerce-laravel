@extends('website.layout')
@section('content')

    <!-- Page Content -->
    <!-- Banner Starts Here -->
   
    <div class="banner">
      {{-- <div class="container ">
        <div class="row">
          <div class="col-md-12"> --}}
            <div class="main_slider">

              <div id="carouselExampleControls" class="carousel slide slide2" data-ride="carousel">
                  <div class="carousel-inner">
                      @foreach($sliders as $key => $slider)
                      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                          <img src="{{ $slider['image'] }}" class="d-block w-100 fluide-img" alt="Slider" style="min-height: 300px">
                      </div>
                      @endforeach
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <div class="main_bg p-2 transition-me">
                          <i class="icon-chevron-left h2"></i>
                      </div>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <div class="main_bg p-2 transition-me">
                          <i class="icon-chevron-right h2"></i>
                      </div>
                  </a>
              </div>
            </div>
          {{-- </div>
        </div>
      </div>  --}}
    </div>   
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>@lang('website.categories')</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              @foreach($categories as $category)
              <a href="{{route('category', $category['id'])}}">
                <div class="featured-item">
                  <img src="{{ $category['image'] }}" alt="Item 1" style="height: 300px">
                  <h4>{{ $category['name_' . app()->getLocale()] }}</h4>
                  {{-- <h6>$15.00</h6> --}}
                </div>
              </a>
              @endforeach
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->


    <!-- Subscribe Form Starts Here -->
    <div class="subscribe-form">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Subscribe on PIXIE now!</h1>
            </div>
          </div>
          <div class="col-md-8 offset-md-2">
            <div class="main-content">
              <p>Integer vel turpis ultricies, lacinia ligula id, lobortis augue. Vivamus porttitor dui id dictum efficitur. Phasellus vel interdum elit.</p>
              <div class="container">
                <form id="subscribe" action="" method="get">
                  <div class="row">
                    <div class="col-md-7">
                      <fieldset>
                        <input name="email" type="text" class="form-control" id="email" 
                        onfocus="if(this.value == 'Your Email...') { this.value = ''; }" 
                    	onBlur="if(this.value == '') { this.value = 'Your Email...';}"
                    	value="Your Email..." required="">
                      </fieldset>
                    </div>
                    <div class="col-md-5">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">Subscribe Now!</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Subscribe Form Ends Here -->

@endsection


    
   
