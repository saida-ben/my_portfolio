@extends('layouts.layout')
@section('content')
<div id="preloader"></div>

<!-- Resume Section -->
<section id="resume" class="resume section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ __('resume.title') }}</h2>
    <p>{{ __('resume.intro') }}</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3 class="resume-title">{{ __('resume.summary_title') }}</h3>

        <div class="resume-item pb-0">
          <h4>{{ __('resume.name') }}</h4>
          <p><em>{{ __('resume.summary_description') }}</em></p>
          <ul>
            <li>{{ __('resume.phone') }}</li>
            <li>{{ __('resume.email') }}</li>
            <li><a href="https://github.com/saida-ben" target="_blank">https://github.com/saida-ben</a></li>
            <li><a href="https://www.linkedin.com/in/saida-benzariya-915712269/" target="_blank">https://www.linkedin.com/</a></li>
          </ul>
        </div><!-- End Resume Item -->

        <h3 class="resume-title">{{ __('resume.education_title') }}</h3>
        <div class="resume-item">
          <h4>{{ __('resume.degree_1') }}</h4>
          <h5>{{ __('resume.degree_1_year') }}</h5>
          <p><em>{{ __('resume.school_1') }}</em></p>
        </div><!-- End Resume Item -->

        <div class="resume-item">
          <h4>{{ __('resume.degree_2') }}</h4>
          <h5>{{ __('resume.degree_2_year') }}</h5>
          <p><em>{{ __('resume.school_2') }}</em></p>
        </div><!-- End Resume Item -->

        <div class="resume-item">
          <h4>{{ __('resume.degree_3') }}</h4>
          <h5>2020-1021</h5>
          <p><em>{{ __('resume.school_3') }}</em></p>
        </div><!-- End Resume Item -->

      </div>

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="resume-title">{{ __('resume.professional_experience_title') }}</h3>

        <div class="resume-item">
          <h4>{{ __('resume.job_1_title') }}</h4>
          <h5>{{ __('resume.job_1_duration') }}</h5>
          <p><em>{{ __('resume.company_1') }}</em></p>
          <ul>
            <li>{{ __('resume.job_1_responsibility_1') }}</li>
            <li>{{ __('resume.job_1_responsibility_2') }}</li>
          </ul>
        </div><!-- End Resume Item -->

        <div class="resume-item">
          <h4>{{ __('resume.job_2_title') }}</h4>
          <h5>{{ __('resume.job_2_duration') }}</h5>
          <p><em>{{ __('resume.company_2') }}</em></p>
          <ul>
            <li>{{ __('resume.job_2_responsibility_1') }}</li>
            <li>{{ __('resume.job_2_responsibility_2') }}</li>
          </ul>
        </div><!-- End Resume Item -->

        <div class="resume-item">
          <h4>{{ __('resume.job_3_title') }}</h4>
          <h5>{{ __('resume.job_3_duration') }}</h5>
          <p><em>{{ __('resume.company_3') }}</em></p>
          <ul>
            <li>{{ __('resume.job_3_responsibility_1') }}</li>
            <li>{{ __('resume.job_3_responsibility_2') }}</li>
          </ul>
        </div><!-- End Resume Item -->

      </div>

    </div>

  </div>

</section><!-- /Resume Section -->

@endsection
