@extends('front.master')

@section('content')
<header class="header">
    <div class="main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-image" data-background="{{asset('uploads/pexels-cottonbro-studio-4911726.jpg')}}"></div>
          <!-- end slider-image -->
          <div class="slide-inner">
            <h1>What’s Things in Season?</h1>
            <p>Your Guide to Eating Seasonally</p>
            <a href="#">SEE ALL TIPS</a> </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="slide-image" data-background="{{asset('uploads/pexels-chris-f-5187233.jpg')}}"></div>
          <!-- end slider-image -->
          <div class="slide-inner">
            <h1>What’s Things in Season?</h1>
            <p>Your Guide to Eating Seasonally</p>
            <a href="#">SEE ALL TIPS</a> </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="slide-image" data-background="{{asset('uploads/pexels-anna-shvets-5953800.jpg')}}"></div>
          <!-- end slider-image -->
          <div class="slide-inner">
            <h1>What’s Things in Season?</h1>
            <p>Your Guide to Eating Seasonally</p>
            <a href="#">SEE ALL TIPS</a> </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <div class="button-prev"><i class="lni lni-chevron-left"></i></div>
      <!-- end button-prev -->
      <div class="button-next"><i class="lni lni-chevron-right"></i></div>
      <!-- end button-next -->
      <div class="swiper-pagination"></div>
      <!-- end swiper-pagination -->
      <div class="parallax-element" data-stellar-ratio="2"></div>
      <!-- end parallax-element -->
    </div>
    <!-- end main-slider -->
  </header>
  <!-- end header -->
  <section class="content-section" data-background="{{asset('theme/images/section-bg01.png')}}" data-stellar-background-ratio="1.2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="side-content left">
            <h2>Welcome to Shaq's Farm</h2>
            <h6>High Quality Organic Food Guaranteed</h6>
            <p>Wild flowers , plants and fungi are the life support for
              all our wildlife and their colour and character light up
              our landscapes. But without our help , this priceless
              natural heritage is in danger of being lost.</p>
            <a href="#" class="custom-button">MORE INFORMATION</a> </div>
          <!-- end side-content -->
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
          <div class="side-slider">
            <div class="slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide"> <img src="{{asset('theme/images/side-slide01.jpg')}}" alt="Image"> </div>
                <!-- end swiper-slide -->
                {{-- <div class="swiper-slide"> <img src="{{asset('theme/images/side-slide02.jpg')}}" alt="Image"> </div> --}}
                <!-- end swiper-slide -->
                {{-- <div class="swiper-slide"> <img src="{{asset('theme/images/side-slide03.jpg')}}" alt="Image"> </div> --}}
                <!-- end swiper-slide -->
              </div>
              <!-- end swiper-wrapper -->
              <div class="swiper-pagination"></div>
              <!-- end swiper-pagination -->
            </div>
            <!-- end slider -->
            <div class="note-box">Real Results  Organic Farm</div>
            <!-- end note-box -->
          </div>
          <!-- end side-slider -->
        </div>
        <!-- end col-6 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section no-top-spacing">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Watermelon</h5>
            <figure>
              <img src="{{asset('theme/images/image-box01.jpg')}}" alt="Image">
            </figure>
            <p>Square Roots is an urban farming
              accelerator that was started with
              10 of Freight Farms</p>
          </div>
          <!-- end image-content-box -->
        </div>
        <!-- end col-4 -->

        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Onions</h5>
            <figure><img src="{{asset('theme/images/image-box02.jpg')}}" alt="Image"></figure>
            <p>Our high-tech vertical farms grow
              fresh microgreens, herbs & flowers
              Order online for local delivery.</p>
          </div>
          <!-- end image-content-box -->
        </div>
        <!-- end col-4 -->

        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Garlic</h5>
            <figure><img src="{{asset('theme/images/image-box03.jpg')}}" alt="Image"></figure>
            <p>Our high-tech vertical farms grow
              fresh microgreens, herbs & flowers
              Order online for local delivery.</p>
          </div>
          <!-- end image-content-box -->
        </div>
        <!-- end col-4 -->
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Kuku Kienyeji</h5>
            <figure>
              <img src="{{asset('theme/images/image-box01.jpg')}}" alt="Image">
            </figure>
            <p>Square Roots is an urban farming
              accelerator that was started with
              10 of Freight Farms</p>
          </div>
          <!-- end image-content-box -->
        </div>
        <!-- end col-4 -->

        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Mbuzi Farm</h5>
            <figure><img src="{{asset('theme/images/image-box02.jpg')}}" alt="Image"></figure>
            <p>Our high-tech vertical farms grow
              fresh microgreens, herbs & flowers
              Order online for local delivery.</p>
          </div>
          <!-- end image-content-box -->
        </div>
        <!-- end col-4 -->

        <div class="col-md-4">
          <div class="image-content-box">
            <h5>Sheep Farm</h5>
            <figure><img src="{{asset('theme/images/image-box03.jpg')}}" alt="Image"></figure>
            <p>Our high-tech vertical farms grow
              fresh microgreens, herbs & flowers
              Order online for local delivery.</p>
          </div>
          <!-- end image-content-box -->
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section" data-background="#fbf7f4">
    <div class="container">
      <div class="section-title">
        <figure> <img src="{{asset('theme/images/section-title-shape.png')}}" alt="Image"> </figure>
        <h6>Presidential campaigns</h6>
        <h2>Commitment to the Environment</h2>
      </div>
      <!-- end section-title -->
    </div>
    <!-- end container -->
    <div class="carousel-image-box">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <figure> <img src="{{asset('theme/images/carousel-image01.jpg')}}" alt="Image"> </figure>
          <div class="content"> <small>Dynamic  on using green</small>
            <h5>Dynamic Guidance Dunescapes</h5>
            <p>Dynamic Dunescapes is an exciting
              and ambitious project, rejuvenating
              some of England & Wales.</p>
          </div>
          <!-- end content -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure> <img src="{{asset('theme/images/carousel-image02.jpg')}}" alt="Image"> </figure>
          <div class="content"> <small>Guidance on using green</small>
            <h5>Tips for Ripening your Fruit</h5>
            <p>Rezilon herbicide uses the active ingredient indaziflam to target broadleaf and annual grass. </p>
          </div>
          <!-- end content -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure> <img src="{{asset('theme/images/carousel-image03.jpg')}}" alt="Image"> </figure>
          <div class="content"> <small>Guidance on using green</small>
            <h5>Health Benefits of a Raw Food</h5>
            <p>Wheat futures were lower overnight while corn and soybean futures were little changed.</p>
          </div>
          <!-- end content -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure> <img src="{{asset('theme/images/carousel-image04.jpg')}}" alt="Image"> </figure>
          <div class="content"> <small>Guidance on using green</small>
            <h5>Superfoods you should be eating</h5>
            <p>Farm managers, land brokers, appraisers, and other professionals note a modest decline.</p>
          </div>
          <!-- end content -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure> <img src="{{asset('theme/images/carousel-image05.jpg')}}" alt="Image"> </figure>
          <div class="content"> <small>Guidance on using green</small>
            <h5>Fields of Corns Dunescapes</h5>
            <p>Wheat futures were higher in overnight trading corn futures and soybean futures were little changed.</p>
          </div>
          <!-- end content -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <figure> <img src="{{asset('theme/images/carousel-image06.jpg')}}" alt="Image"> </figure>
          <div class="content"> <small>Guidance on using green</small>
            <h5>Discipline Is the Name of the Game</h5>
            <p>There will be opportunities to market your grain, and we want to encourage you to think about.</p>
          </div>
          <!-- end content -->
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <div class="swiper-pagination"></div>
      <!-- end swiper-pagination -->
    </div>
    <!-- end carousel-image-box -->
  </section>
  <section class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="counter-box"> <span class="odometer" data-count="20000" data-status="yes">0</span>
            <h6>Children connected to nature</h6>
            <figure><img src="{{asset('theme/images/counter-icon.png')}}" alt="Image"></figure>
          </div>
          <!-- end counter-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-md-4">
          <div class="counter-box"> <span class="odometer" data-count="3495" data-status="yes">0</span>
            <h6>Unique species on our nature reserves</h6>
            <figure><img src="{{asset('theme/images/counter-icon.png')}}" alt="Image"></figure>
          </div>
          <!-- end counter-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-md-4">
          <div class="counter-box"> <span class="odometer" data-count="15800" data-status="yes">0</span>
              <h6>Acres of meadow created or restored</h6>
            <figure><img src="{{asset('theme/images/counter-icon.png')}}" alt="Image"></figure>
          </div>
          <!-- end counter-box -->
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section no-bottom-spacing" data-background="{{asset('theme/images/section-image01.jpg')}}">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-9">
          <div class="services-list-box">
            <h5>WHAT WE DO</h5>
            <h2>Our Services</h2>
            <ul>
              <li>
                <figure><img src="{{asset('theme/images/icon08.png')}}" alt="Image"></figure>
                <div class="content">
                  <h6>Organic Fertiliser</h6>
                  <p>vegetables from FreshDirect. Our farms
                    deliver to us daily, ensuring you only eat
                    the best of what's in season</p>
                </div>
                <!-- end content -->
              </li>
              <li>
                <figure><img src="{{asset('theme/images/icon09.png')}}" alt="Image"></figure>
                <div class="content">
                  <h6>Farm Mechanization</h6>
                  <p>vegetables from FreshDirect. Our farms
                    deliver to us daily, ensuring you only eat
                    the best of what's in season</p>
                </div>
                <!-- end content -->
              </li>
              <li>
                <figure><img src="{{asset('theme/images/icon10.png')}}" alt="Image"></figure>
                <div class="content">
                  <h6>Water Management</h6>
                  <p>vegetables from FreshDirect. Our farms
                    deliver to us daily, ensuring you only eat
                    the best of what's in season</p>
                </div>
                <!-- end content -->
              </li>
            </ul>
          </div>
          <!-- end services-list-box -->
        </div>
        <!-- end col-5 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section" data-background="{{asset('theme/images/section-bg01.png')}}" data-stellar-background-ratio="1.2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title">
            <figure> <img src="{{asset('theme/images/section-title-shape.png')}}" alt="Image"> </figure>
            <h6>Discover nature</h6>
            <h2>We have expertise in these areas</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="{{asset('theme/images/side-image01.jpg')}}" alt="Image"> </figure>
        </div>
        <!-- end col-8 -->
        <div class="col-lg-4">
          <div class="side-content right">
            <h5>Sustainability and
              Climate Change</h5>
            <p>Our agricultural background means we’re
              equally at home meeting face-to-face with
              farmers as we are engaging.</p>
            <a href="#" class="custom-link">Learn More</a> </div>
          <!-- end side-content -->
        </div>
        <!-- end col-4 -->
        <div class="col-12 spacing-100"></div>
        <!-- end spacing-100 -->
        <div class="col-lg-4">
          <div class="side-content left">
            <h5>Advice and farm
              implement</h5>
            <p>Largest independent provider of agricultural
              and environmental consultancy, rural development
              services and policy advice.</p>
            <a href="#" class="custom-link">Learn More</a> </div>
          <!-- end side-content -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="{{asset('theme/images/side-image02.jpg')}}" alt="Image"> </figure>
        </div>
        <!-- end col-8 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section no-top-spacing">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          <div class="section-title">
            <h2>Why we're different</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="{{asset('theme/images/icon01.png')}}" alt="Image"></figure>
              <div class="content">
            <p>We are straight forward to deal
              with experts in our field.</p>
                  </div>
              <!-- end content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="{{asset('theme/images/icon02.png')}}" alt="Image"></figure>
              <div class="content">
            <p>We take responsible lending
              seriously and believe.</p>
                  </div>
              <!-- end content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="{{asset('theme/images/icon03.png')}}" alt="Image"></figure>
              <div class="content">
            <p>If we can’t help you, we will
              tell you quickly and honestly. </p>
                  </div>
              <!-- end content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="{{asset('theme/images/icon04.png')}}" alt="Image"></figure>
              <div class="content">
            <p>You can talk directly to a lending
              decision maker. </p>
                  </div>
              <!-- end content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="{{asset('theme/images/icon05.png')}}" alt="Image"></figure>
              <div class="content">
            <p>We offer a no-nonsense
              app roach and speak farming. </p>
                  </div>
              <!-- end content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="icon-box">
            <figure><img src="{{asset('theme/images/icon06.png')}}" alt="Image"></figure>
              <div class="content">
            <p>Loan officers have practical
              experience of building. </p>
                  </div>
              <!-- end content -->
          </div>
          <!-- end icon-box -->
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section" data-background="#009a4e">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="cd-horizontal-timeline">
            <h2 class="title">The Openfield Timeline</h2>
            <div class="timeline">
              <div class="events-wrapper">
                <div class="events">
                  <ol>
                    <li><a href="#0" data-date="01/01/2000" class="selected">2000</a></li>
                    <li><a href="#0" data-date="01/01/2004">2004</a></li>
                    <li><a href="#0" data-date="01/01/2008">2008</a></li>
                    <li><a href="#0" data-date="01/01/2012">2012</a></li>
                    <li><a href="#0" data-date="01/01/2016">2016</a></li>
                    <li><a href="#0" data-date="01/01/2020">2020</a></li>
                  </ol>
                  <span class="filling-line" aria-hidden="true"></span> </div>
                <!-- .events -->
              </div>
              <!-- .events-wrapper -->

            </div>
            <!-- end timeline -->

            <div class="events-content">
              <ol>
                <li class="selected" data-date="01/01/2000">
                  <div class="content">
                    <h2>Farming in the Middle Ages</h2>
                    <p> Farming improved in the Middle Ages.
                      One big improvement was the heavy
                      plow. Sometime. </p>
                  </div>
                  <!--end content -->
                </li>
                <li data-date="01/01/2004">
                  <div class="content">
                    <h2>Farming in the Middle Ages</h2>
                    <p> Farming improved in the Middle Ages.
                      One big improvement was the heavy
                      plow. Sometime. </p>
                  </div>
                  <!--end content -->
                </li>
                <li data-date="01/01/2008">
                  <div class="content">
                    <h2>Farming in the Middle Ages</h2>
                    <p> Farming improved in the Middle Ages.
                      One big improvement was the heavy
                      plow. Sometime. </p>
                  </div>
                  <!--end content -->
                </li>
                <li data-date="01/01/2012">
                  <div class="content">
                    <h2>Farming in the Middle Ages</h2>
                    <p> Farming improved in the Middle Ages.
                      One big improvement was the heavy
                      plow. Sometime. </p>
                  </div>
                  <!--end content -->
                </li>
                <li data-date="01/01/2016">
                  <div class="content">
                    <h2>Farming in the Middle Ages</h2>
                    <p> Farming improved in the Middle Ages.
                      One big improvement was the heavy
                      plow. Sometime. </p>
                  </div>
                  <!--end content -->
                </li>
                <li data-date="01/01/2020">
                  <div class="content">
                    <h2>Farming in the Middle Ages</h2>
                    <p> Farming improved in the Middle Ages.
                      One big improvement was the heavy
                      plow. Sometime. </p>
                  </div>
                  <!--end content -->
                </li>
              </ol>
            </div>
            <!-- end events-content -->
          </div>
          <!-- end cd-horizontal-timeline -->
        </div>
        <!-- end col-12 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <div class="content-section timeline-image" data-background="{{asset('theme/images/timeline-image.jpg')}}"> </div>
  <!-- end content-section -->
  <section class="content-section" data-background="{{asset('theme/images/section-bg01.png')}}" data-stellar-background-ratio="1.2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="section-title">
            <figure> <img src="{{asset('theme/images/section-title-shape.png')}}" alt="Image"> </figure>
            <h6>Source of our food</h6>
            <h2>Agricultural communities News</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-lg-4 col-md-6">
          <div class="latest-news">
            <figure><img src="{{asset('theme/images/news01.jpg')}}" alt="Image"><span>Dec 26, 2020</span></figure>
            <h4>Farming, Food and You</h4>
            <p>The Consumer Hub provides a forum
              for consumers to share ideas, questions,
              and concerns about agriculture. </p>
            <a href="#" class="custom-link">Join the conversation</a> </div>
          <!-- end latest-news -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4 col-md-6">
          <div class="latest-news">
            <figure><img src="{{asset('theme/images/news02.jpg')}}" alt="Image"><span>Dec 26, 2020</span></figure>
            <h4>You Follow the Food?</h4>
            <p>Food that looks at how farmers and
              the food industry keep us fed during
              the pandemic. </p>
            <a href="#" class="custom-link">Watch Now</a> </div>
          <!-- end latest-news -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-4">
          <div class="latest-news">
            <figure><img src="{{asset('theme/images/news03.jpg')}}" alt="Image"><span>Dec 26, 2020</span></figure>
            <h4>Making Life Easier</h4>
            <p>Believes more precise and economical
              at the time of planting you are, more
              profitable you will be at the time. </p>
            <a href="#" class="custom-link">Join the conversation</a> </div>
          <!-- end latest-news -->
        </div>
        <!-- end col-4 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section no-spacing">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="years-box"> <span>46</span>
            <p>Years of experience for <br>
              agriculture industry</p>
          </div>
          <!-- end years-box -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-7 offset-lg-1">
          <div class="testimonial bottom-overlap">
            <p>Despite slightly declining beef
              consumption rates in this country,
              beef is still what’s for dinner in many
              American households. </p>
            <figure><img src="{{asset('theme/images/avatar01.jpg')}}" alt="Image"></figure>
            <div class="infos">
              <h6>Qlark Thomas</h6>
              <small>— The FoodPrint of Beef</small> </div>
            <!-- end infos -->
          </div>
          <!-- end testimonial -->
        </div>
        <!-- end col-7 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
  <!-- end content-section -->
  <section class="content-section no-spacing">
    <div class="highlight-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide" data-background="{{asset('theme/images/highlight01.jpg')}}">
          <div class="container">
            <h6>New Research</h6>
            <h2>Global Sustainability <br>
              Goals Launched</h2>
            <a href="#" class="custom-button">More Information</a> </div>
          <!-- end container -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide" data-background="{{asset('theme/images/highlight02.jpg')}}">
          <div class="container">
            <h6>Fields Fermantation</h6>
            <h2>For Better Soleil<br>
              We Care All Fields</h2>
            <a href="#" class="custom-button">More Information</a> </div>
          <!-- end container -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide" data-background="{{asset('theme/images/highlight03.jpg')}}">
          <div class="container">
            <h6>Drink Opportuinities</h6>
            <h2>Core Material of Wine<br>
              Oct Black Grape</h2>
            <a href="#" class="custom-button">More Information</a> </div>
          <!-- end container -->
        </div>
        <!-- end swiper-slide -->
      </div>
      <!-- end swiper-wrapper -->
      <div class="custom-pagination"></div>
      <!-- end custom-pagination -->
    </div>
    <!-- end highlight-slider -->
  </section>
  <!-- end content-section -->
  <section class="content-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h6>Consultative partners</h6>
            <h2>Partners who share their knowledge and <br>
              experience in agriculture</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item"><img src="{{asset('theme/images/logo01.jpg')}}" alt="Image"></figure>
        </div>
        <!-- end col-2 -->
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item"><img src="{{asset('theme/images/logo02.jpg')}}" alt="Image"></figure>
        </div>
        <!-- end col-2 -->
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item"><img src="{{asset('theme/images/logo03.jpg')}}" alt="Image"></figure>
        </div>
        <!-- end col-2 -->
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item"><img src="{{asset('theme/images/logo04.jpg')}}" alt="Image"></figure>
        </div>
        <!-- end col-2 -->
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item"><img src="{{asset('theme/images/logo05.jpg')}}" alt="Image"></figure>
        </div>
        <!-- end col-2 -->
        <div class="col-lg-2 col-md-4 col-6">
          <figure class="logo-item"><img src="{{asset('theme/images/logo06.jpg')}}" alt="Image"></figure>
        </div>
        <!-- end col-2 -->
      </div>
      <!-- end row -->
    </div>
    <!-- end container -->
  </section>
@endsection
