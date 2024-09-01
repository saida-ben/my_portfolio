@extends('layouts.layout')
@section('content')
<div id="preloader"></div>

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <form action="{{ route('contact.store') }}" method="POST">
      @csrf
      <div class="row gy-4">
        <div class="col-md-6">
          <label for="name-field" class="pb-2">Votre Nom</label>
          <input type="text" name="name" id="name-field" class="form-control" required>
        </div>
        <div class="col-md-6">
          <label for="email-field" class="pb-2">Votre Email</label>
          <input type="email" class="form-control" name="email" id="email-field" required>
        </div>
        <div class="col-md-12">
          <label for="subject-field" class="pb-2">Objet</label>
          <input type="text" class="form-control" name="subject" id="subject-field" required>
        </div>
        <div class="col-md-12">
            <label for="message-field" class="pb-2">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message-field" required></textarea>
        </div>
        <div class="col-md-12 text-center">
          <button type="submit" class="btn btn-primary">Envoyer le Message</button>
        </div>
      </div>
    </form>

  </div>

</section><!-- /Contact Section -->

@endsection