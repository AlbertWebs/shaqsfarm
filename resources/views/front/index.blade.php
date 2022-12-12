@extends('front.master')

@section('content')
<header class="header">
    <div class="main-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slide-image" data-background="{{asset('uploads/pexels-cottonbro-studio-4911726.jpg')}}"></div>
          <!-- end slider-image -->
          <div class="slide-inner">
            <h1>Available in all Season!</h1>
            <p>We Farm Like The World Depends On it</p>
            <a href="#">Learn More</a> </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="slide-image" data-background="{{asset('uploads/pexels-chris-f-5187233.jpg')}}"></div>
          <!-- end slider-image -->
          <div class="slide-inner">
            <h1>Fresh From The Farm</h1>
            <p></p>
            <a href="#">Learn More</a> </div>
          <!-- end slide-inner -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide">
          <div class="slide-image" data-background="{{asset('uploads/pexels-anna-shvets-5953800.jpg')}}"></div>
          <!-- end slider-image -->
          <div class="slide-inner">
            <h1>Goats Available in Plenty</h1>
            {{-- <p>Your Guide to Eating Seasonally</p> --}}
            <a href="#">Learn More</a> </div>
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
            <p>
                Shaqs Farm demonstrates leading environmental stewardship, makes optimal use of land under responsible farming practices, and values its reputation as an ethical food producer of national significance. <br><br>
                Shaqs Farm is committed to generating significant value for adjacent communities and to being equal opportunity employer of choice in the sector and region.
            </p>
            <a href="{{url('/')}}/the-company" class="custom-button">MORE INFORMATION</a> </div>
          <!-- end side-content -->
        </div>
        <!-- end col-6 -->
        <div class="col-lg-6">
          <div class="side-slider">
            <div class="slider">
              <div class="swiper-wrapper">
                <div class="swiper-slide"> <img src="{{asset('theme/images/pexels-juliana-james-4258187-onion.jpg')}}" alt="Image"> </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide"> <img src="{{asset('theme/images/pexels-lisa-gromova-7284760-waterMelons.jpg')}}" alt="Image"> </div>
                <!-- end swiper-slide -->
                <div class="swiper-slide"> <img src="{{asset('theme/images/side-slide01.jpg')}}" alt="Image"> </div>
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
            <h5>Watermelons</h5>
            <figure>
              <img src="{{asset('theme/images/pexels-pixabay-59830.jpg')}}" alt="Image">
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
            <figure><img src="{{asset('theme/images/pexels-muhammad-khawar-nazir-12999831.jpg')}}" alt="Image"></figure>
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
            <figure><img src="{{asset('theme/images/pexels-nick-collins-1392590.jpg')}}" alt="Image"></figure>
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
              <img src="{{asset('theme/images/pexels-samer-daboul-1216482.jpg')}}" alt="Image">
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
            <figure><img src="{{asset('theme/images/pexels-jonas-von-werne-1344000.jpg')}}" alt="Image"></figure>
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

  <!-- end content-section -->
  <section class="content-section no-bottom-spacing" style="background-image: url('uploads/pexels-snapwire-390025.jpg'); background-position: 50% 50%;">
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
                  <h6>Farm Supplies</h6>
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
            <h6>Discover Venshaq Holdings Limited</h6>
            <h2>We have expertise in these areas</h2>
          </div>
          <!-- end section-title -->
        </div>
        <!-- end col-12 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="{{asset('uploads/pexels-julia-11715001.jpg')}}" alt="Image"> </figure>
        </div>
        <!-- end col-8 -->
        <div class="col-lg-4">
          <div class="side-content right">
            <h5>Accelarating Sustainable Business Growth</h5>
            <p>We partner with innovative leaders with unique ideas, strong management teams, and demonstrated ability to help us achieve our strategic goal of a maximum long term return to our shareholders.</p>
            <a href="https://venshaq.com/" class="custom-link">Learn More</a> </div>
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
            <a href="" class="custom-link">Learn More</a> </div>
          <!-- end side-content -->
        </div>
        <!-- end col-4 -->
        <div class="col-lg-8">
          <figure class="side-image"> <img src="{{asset('uploads/pexels-chris-f-5187233.jpg')}}" alt="Image"> </figure>
        </div>
        <!-- end col-8 -->
        <div class="col-12 spacing-100"></div>
        {{--  --}}
        <!-- end spacing-100 -->
        <!-- end col-4 -->
        <div class="col-lg-8">
            <figure class="side-image"> <img src="{{asset('uploads/pexels-cottonbro-studio-4911708.jpg')}}" alt="Image"> </figure>
        </div>
        <div class="col-lg-4">
            <div class="side-content left">
            <h5>Partner With Us</h5>
            <p>We invest where we can attain the highest growth opportunities and advancements, by focussing our investments on businesses in Frontier Markets .</p>
            <a href="" class="custom-link">Learn More</a> </div>
            <!-- end side-content -->
        </div>

        <!-- end col-8 -->
        {{--  --}}
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
  <section class="content-section"  data-stellar-background-ratio="1.2" data-background="#fbf7f4" style="background: rgb(251, 247, 244);">
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
            <figure><img src="{{asset('theme/images/news01.jpg')}}" alt="Image"><span>Dec 26, 2022</span></figure>
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
            <figure><img src="{{asset('theme/images/news02.jpg')}}" alt="Image"><span>Dec 26, 2022</span></figure>
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
            <figure><img src="{{asset('theme/images/news03.jpg')}}" alt="Image"><span>Dec 26, 2022</span></figure>
            <h4>Making Life Easier</h4>
            <p>Believes more precise and economical
              at the time of planting you are, more
              profitable you will be at the time. </p>
            <a href="#" class="custom-link">Join the conversation</a>
        </div>
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
          <div class="years-box"> <span>4</span>
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
              Kenyan households. </p>
            <figure><img src="{{asset('uploads/199259143_4389625377747506_3043984032264076715_n.jpg')}}" alt="Image"></figure>
            <div class="infos">
              <h6>Albert Muhatia</h6>
              <small>— Local Researcher</small> </div>
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
              Organic Tomatoes</h2>
            <a href="#" class="custom-button">More Information</a> </div>
          <!-- end container -->
        </div>
        <!-- end swiper-slide -->
        <div class="swiper-slide" data-background="{{asset('theme/images/highlight02.jpg')}}">
          <div class="container">
            <h6>Agricultural Yards </h6>
            <h2>We Support Our <br>
                Government's Agenda</h2>
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
