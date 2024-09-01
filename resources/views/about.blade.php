

@extends('layouts.layout')
@section('content')
<div id="preloader"></div>

<!-- About Section -->
<section id="about" class="about section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{__('about.title')}}</h2>
    <p>{{__('about.intro')}}</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4 justify-content-center">
      <div class="col-lg-3">
        <img src="{{ asset('img/profile-img.png') }}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 content">
        <h2>{{__('about.web_developer_title')}}</h2>
        <p class="fst-italic py-3">{{__('about.web_developer_description')}}
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.birthday')}}:</strong> <span>{{__('about.personal_info.birthday_value')}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.website')}}:</strong> <span>{{__('about.personal_info.website_value')}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.phone')}}:</strong> <span>{{__('about.personal_info.phone_value')}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.city')}}:</strong> <span>{{__('about.personal_info.city_value')}}</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.age')}}:</strong> <span>{{__('about.personal_info.age_value')}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.degree')}}:</strong> <span>{{__('about.personal_info.degree_value')}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.freelance')}}:</strong> <span>{{__('about.personal_info.freelance_value')}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>{{__('about.personal_info.city')}}:</strong> <span>{{__('about.personal_info.city')}}</span></li>
            </ul>
          </div>
        </div>
        <p class="py-3">
         {{__('about.motivation')}}


      </p>
      </div>
    </div>

  </div>

</section><!-- /About Section -->

<!-- Skills Section -->
<section id="skills" class="skills section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{__('about.skills')}}</h2>
    <p>{{__('about.skills_intro')}}</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row skills-content skills-animation">

      <div class="col-lg-4">

        <div class="progress">
          <span class="skill"><span>{{__('about.skill_set.html')}} , {{__('about.skill_set.css')}}</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80"></div>
          </div>
        </div><!-- End Skills Item -->



        <div class="progress">
          <span class="skill"><span>Bootstrap CSS , Tailwind CSS</span> <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="60"></div>
          </div>
        </div><!-- End Skills Item -->

        
        <div class="progress">
          <span class="skill"><span>{{__('about.skill_set.javascript')}}</span> <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="60" aria-valuemax="60"></div>
          </div>
        </div><!-- End Skills Item -->


      </div>


      <div class="col-lg-4">

        <div class="progress">
          <span class="skill"><span>{{__('about.skill_set.php_laravel')}}</span> <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>{{__('about.skill_set.sql')}}</span> <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->



        <div class="progress">
          <span class="skill"><span>json , xml</span> <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        
      </div>

      <div class="col-lg-4">

        <div class="progress">
          <span class="skill"><span>Modélisation de Systèmes d'Information avec Merise
          </span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        <div class="progress">
          <span class="skill"><span>Modélisation et Conception avec UML</span> <i class="val">60%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->


        <!-- End Skills Item -->


        <div class="progress">
          <span class="skill"><span>figma</span> <i class="val">80%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- End Skills Item -->

        
      </div>


    </div>

  </div>

</section><!-- /Skills Section -->



<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{__('about.testimonials')}}</h2>
    <p>{{__('about.testimonials_intro')}}</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 1500
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>

      <div class="swiper-wrapper">

      <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="icon">
              <img src="{{asset('img/github-142-svgrepo-com.svg')}}" alt="Logo PHP" class="img-fluid">
              </div>  
              <h3>vscode</h3>
              <p> un éditeur de code source</p>
            </div>
        </div><!-- End testimonial item -->
        
        <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="icon">
              <img src="{{asset('img/git-svgrepo-com.svg')}}" alt="Logo " class="img-fluid">
              </div>  
              <h3>vscode</h3>
              <p> un éditeur de code source</p>
            </div>
        </div><!-- End testimonial item -->


        <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="icon">
                 <img src="{{asset('img/vscode-svgrepo-com.svg')}}" alt="" >
              </div>  
              <h3>vscode</h3>
              <p> un éditeur de code source</p>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="icon">
              <img src="{{asset('img/mysql-logo-svgrepo-com.svg')}}" alt="Logo PHP" class="img-fluid">
              </div>  
              <h3>vscode</h3>
              <p> un éditeur de code source</p>
            </div>
        </div><!-- End testimonial item -->


        <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="icon">
              <img src="{{asset('img/xampp-svgrepo-com.svg')}}" alt="Logo" class="img-fluid">
              </div>  
              <h3>vscode</h3>
              <p> un éditeur de code source</p>
            </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="icon">
              <img src="{{asset('img/powerbi-svgrepo-com.svg')}}" alt="Logo PHP" class="img-fluid">
              </div>  
              <h3>vscode</h3>
              <p> un éditeur de code source</p>
            </div>
        </div><!-- End testimonial item -->




        <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="icon">
              <img src="{{asset('img/webflow-svgrepo-com.svg')}}" alt="Logo PHP" class="img-fluid">
              </div>  
              <h3>vscode</h3>
              <p> un éditeur de code source</p>
            </div>
        </div><!-- End testimonial item -->


 
      </div>

  
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->




<!-- Stats Section -->
<section id="stats" class="stats section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{__('about.facts')}}</h2>
    <p>{{__('about.facts_intro')}}</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
          <p>{{__('about.fact_set.languages')}}</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
          <p> {{__('about.fact_set.projects')}}</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
          <p>{{__('about.fact_set.certifications')}}</p>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="100 " data-purecounter-duration="1" class="purecounter">+</span>
          <p>{{__('about.fact_set.learning_hours')}}</p>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->


@endsection
