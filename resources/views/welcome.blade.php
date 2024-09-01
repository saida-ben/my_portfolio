
@extends('layouts.layout')
@section('content')
<div id="preloader"></div>

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <img src="{{asset('img/pexels-cottonbro-5474294.jpg')}}" alt="" data-aos="fade-in">
      <div class="container text-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>{{ __('home.name')}}</h2>
            <p>{{ __('home.title') }}</p>
            <a href="{{url('about')}}" class="btn-get-started">{{ __('home.link') }}</a>
          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

@endsection

