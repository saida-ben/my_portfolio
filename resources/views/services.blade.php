@extends('layouts.layout')
@section('content')
<div id="preloader"></div>

<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ __('services.title') }}</h2>
    <p>{{ __('services.description') }}</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item item-red position-relative">
          <div class="icon">
            <img src="{{ asset('img/icon-graphics-black.svg')}}" alt="">
          </div>
          <a href="#" class="stretched-link">
            <h3>{{ __('services.web_design.title') }}</h3>
          </a>
          <p>{{ __('services.web_design.description') }}</p>
          <a href="#" class="stretched-link"></a>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item item-orange position-relative">
          <div class="icon">
            <img src="{{ asset('img/icon-development-black copy.svg')}}" alt="">
          </div>
          <a href="#" class="stretched-link">
            <h3>{{ __('services.web_development.title') }}</h3>
          </a>
          <p>{{ __('services.web_development.description') }}</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item item-teal position-relative">
          <div class="icon">
            <img src="{{ asset('img/icon-content-black.svg')}}" alt="">
          </div>
          <a href="#" class="stretched-link">
            <h3>{{ __('services.conception_web.title') }}</h3>
          </a>
          <p>{{ __('services.conception_web.description') }}</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->

@endsection
