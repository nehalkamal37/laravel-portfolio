<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio - Developer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('website/assets/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('website/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,500,500i,600,600i,700,700i&subset=cyrillic" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('website/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('website/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('website/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Lonely
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column align-items-center justify-content-center">
    @auth
    <h1>Hi, I'm {{Auth::user()->first_name }}!</h1>
    @endauth
    @guest
    <h1>Hi, I'm ... !</h1>

    @endguest
    <h2>I am a web developer</h2>
    <a href="#about" class="btn-get-started scrollto">
      <i class="bi bi-chevron-double-down"></i></a>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      
      
             @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                    <a href="{{ route('dashboard2') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard </a>

                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
 --
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

      <div class="logo">
        <h1><a href="index.html">Web Developer</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#resume">Resume</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>soft skills</h3>
              <p>
              </p>
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <p><strong> communication:</strong>
                    conveying ideas and understanding requirements from clients and team members.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <p><strong>
                      Problem-solving and creative thinking:</strong>
                      ability to think out of the box and solve issues
                       while working on a project.</p> 
                                       </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <p><strong>time management:</strong> Prioritizing tasks and managing time efficiently to meet deadlines.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <p><strong>searching skills</strong>through effictive platforms and documntaions.</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Technical Skills</h2>
          <p>here is briefly the main technical skills.</p>
        </div>

        <div class="row skills-content">
          @foreach($skills as $skill)

          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">{{$skill->name}} </span>
              <div class="progress-bar-wrap">
              
              </div>
            </div>
          </div>
@endforeach

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"> <i class="val"></i></span>
            
            </div>
            


          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>.</p>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Sumary</h3>
            <div class="resume-item pb-0">
              @auth
              <h4>{{Auth::user()->first_name.' '.Auth::user()->last_name  }}</h4>
              @endauth
             @auth <p><em>{{ $cvData->sumary}}.</em></p>@endauth
              <p>
              <ul>
                @auth
                <li>{{Auth::user()->address }}</li>
                <li>{{Auth::user()->phone }}</li>
                <li>{{Auth::user()->email }}</li>
                @endauth
              </ul>
              </p>
            </div>

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              @auth
              <h4>{{ $cvData->edu}}</h4>
              <h5>{{ $cvData->edu_years}}</h5>
              @endauth
              <p><em>Bachelor degree, Computer science department.</em></p>
              <p></p>
            </div>
        <!--    <div class="resume-item">
              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
              <h5>2010 - 2014</h5>
              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>
            </div> -->
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              
              @foreach($cvAll as $data)
              <h4>intern php/laravel developer</h4>
              <h5>2023 - present</h5>
              <p><em> </em></p>
              <p>
              <ul>
                @php $project=explode('-',$data->projects);  @endphp
 @foreach($project as $pro)

        <li>  <h6>{{ $pro}}</h6></li>
@endforeach
              
                @endforeach
                
                
              </ul>
              </p>
            </div>
           
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">web application development</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">code quality and testing</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">database management</a></h4>
              <p class="description"></p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">maintenance and support</a></h4>
              <p class="description"></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Projects</h2>
          <p>a part of my work devided to sperate sections.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-laravel">laravel</li>
              <li data-filter=".filter-native">native</li>
              <li data-filter=".filter-front">front</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @foreach($projects as $project)

          <div class="col-lg-4 col-md-6 portfolio-item filter-{{$project->type}}">
            <div class="portfolio-wrap">
             <img src="{{ asset('uploads/projects/'.$project->image)}}"
              class="image3" alt="" width="355px;"  >
              
             {{-- <img src="{{ asset('website/assets/img/portfolio/portfolio-1.jpg')}}"
               class="img-fluid" alt="">--}}

              <div class="portfolio-info">
                <h4>{{$project->name}}</h4>
                <p>{{$project->type}}</p>
              </div>
              <div class="portfolio-links">
   <a href="{{ asset('website/assets/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
   <a href="{{ route('project.data',$project->id)}}" title="More Details">
    <i class="bx bx-link"></i></a>
  
  
  
  </div>
            </div>
         
          </div>
@endforeach
        

         

       

         

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= --
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div>
            !-- End testimonial item --

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div>

          

         
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>for any information do not hesitate to contact.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>developer</h3>
              <p></p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div class="d-flex align-items-center">
                <i class="bi bi-geo-alt"></i>
                @auth
                <p>{{ Auth::user()->address}}<br></p>
                @endauth
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-envelope"></i>
                @auth
                <p>{{ Auth::user()->email}}</p>
                @endauth             
               </div>

              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-phone"></i>
                @auth
                <p>{{ Auth::user()->phone}}</p>
                @endauth
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">

            <form action="{{route('contact.store')}}" method="post" 
           >
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name"
                 placeholder="Your Name" >
                 @error('name')
                 <div class="alert alert-warning" role="alert">
                 {{$message}}
                 </div>
                 @enderror  
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                @error('email')
                <div class="alert alert-warning" role="alert">
                {{$message}}
                </div>
                @enderror  
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
              </div>
              @error('subject')
              <div class="alert alert-warning" role="alert">
              {{$message}}
              </div>
              @enderror  
              <div class="form-group mt-3">
                <textarea class="form-control" name="msg" rows="5" placeholder="Message" ></textarea>
              </div>
              @error('msg')
              <div class="alert alert-warning" role="alert">
              {{$message}}
              </div>
              @enderror  
              <!--<div class="my-3">
                --<div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->

 @if(Session('success'))
<div class="alert alert-success" role="alert">
{{Session('success')}}</div>
  @endif
              <div class="text-center">
                <button style="color:palevioletred" type="submit">Send Message</button>
              </div>
            </form>
          </div>
{{--     the other fooooooooorm     --}}

          
          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Lonely</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-lonely/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('website/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('website/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('website/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('website/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('website/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('website/assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{ asset('website/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
    <script src="{{ asset('website/assets/js/main.js') }}"></script>

</body>

</html>