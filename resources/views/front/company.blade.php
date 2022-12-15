@extends('front.master')

@section('content')
  <!-- end navbar -->
  <header class="page-header" data-background="{{asset('theme/images/page-header-bg.jpg')}}" data-stellar-background-ratio="0.7">
    <div class="container">
       <h2>Who We Are</h2>
       <p style="max-width:500px; margin:0 auto;">Shaqs Farm is committed to generating significant value for adjacent communities and to being equal opportunity employer of choice in the sector and region.</p>
    </div>
    <!-- end container -->
    <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element -->
 </header>
 <!-- end page-header -->
 <section class="content-section" data-background="images/section-bg01.png')}}" data-stellar-background-ratio="1.2">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-12">
             <div class="section-title text-left">
                <h6>who we are</h6>
                <h2>About Shaq's Farm
                </h2>
             </div>
             <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-6">
             <div class="side-content left">
                <p>
                    Shaqs Farm demonstrates leading environmental stewardship, makes optimal use of land under responsible farming practices, and values its reputation as an ethical food producer of national significance.
                </p>
                <p>
                    Shaqs Farm is committed to generating significant value for adjacent communities and to being equal opportunity employer of choice in the sector and region.
                </p>
                <p>
                    We aim to achieve the highest standards of quality and care for the land, animals, and people who help us bring good food to your table. Utilizing managed rotational grazing of diverse pasture grasses, we participate in regenerative agriculture that acknowledges the place of livestock in building living biology in our soil
                </p>
             </div>
             <!-- end side-content -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
             <div class="side-image">
                <img src="{{asset('theme/images/side-slide01.jpg')}}" alt="Image">
                <div class="big-note-box">
                   <h4>What are you waiting for? <br>
                      Pre-Order today.
                   </h4>
                   <p>
                    {{-- Countryside is a membership category
                      of the <u>National Farmers</u>' Union (NFU). The
                      NFU champions <strong>British</strong> agriculture and
                      horticulture, --}}
                   </p>
                </div>
                <!-- end big-note-box -->
             </div>
             <!-- end side-image -->
          </div>
          <!-- end col-6 -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>

 <section class="content-section bottom-white-space" data-background="#fbf7f4">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-12">
             <div class="section-title">
                <figure> <img src="{{asset('theme/images/section-title-shape.png')}}" alt="Shaqs Farm"> </figure>
                <h6>Challenges of tomorrow</h6>
                <h2>Our past, present and future</h2>
             </div>
             <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-4 col-md-6">
             <figure class="image-title-box">
                <img src="{{asset('theme/images/image-title-box01.jpg')}}" alt="Image">
                <figcaption>
                   <h4><a href="#">Our History</a></h4>
                </figcaption>
             </figure>
             <!-- end image-title-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
             <figure class="image-title-box">
                <img src="{{asset('theme/images/image-title-box02.jpg')}}" alt="Image">
                <figcaption>
                   <h4><a href="#">Innovation</a></h4>
                </figcaption>
             </figure>
             <!-- end image-title-box -->
          </div>
          <!-- end col-4 -->
          <div class="col-lg-4 col-md-6">
             <figure class="image-title-box">
                <img src="{{asset('theme/images/pexels-engin-akyurt-2894205.jpg')}}" alt="Image">
                <figcaption>
                   <h4><a href="#">Purpose</a></h4>
                </figcaption>
             </figure>
             <!-- end image-title-box -->
          </div>
          <!-- end col-4 -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 <section class="content-section">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="section-title">
                <h2>How it works</h2>
             </div>
             <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-4 col-md-6">
             <div class="circle-icon-box">
                <figure><img src="{{asset('theme/images/circle-icon01.png')}}" alt="Image"></figure>
                <p>
                   Browse our catelogue,
                </p>
             </div>
             <!-- end circle-icon-box -->
          </div>
          <!-- end col-3 -->
          <div class="col-lg-4 col-md-6">
             <div class="circle-icon-box">
                <figure><img src="{{asset('theme/images/circle-icon02.png')}}" alt="Image"></figure>
                <p>
                    Give us a <a href="tel:">call</a> or Send us and <a href="mailto:info@shaqsfarm.com">email</a>
                </p>
             </div>
             <!-- end circle-icon-box -->
          </div>
          <!-- end col-3 -->
          <div class="col-lg-4 col-md-6">
             <div class="circle-icon-box">
                <figure><img src="{{asset('theme/images/icon04.png')}}" alt="Image"></figure>
                <p>
                    Shipping Arrangements & Delivery
                </p>
             </div>
             <!-- end circle-icon-box -->
          </div>
          <!-- end col-3 -->

          <!-- end col-3 -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 <!-- end content-section -->
 <section class="content-section" data-background="#009a4e">
    <div class="container">
       <div class="row">
          {{-- <div class="col-lg-4">
             <div class="experts-box">
                <h6>Meet our experts</h6>
                <div class="experts-slider">
                   <div class="swiper-wrapper">
                      <div class="swiper-slide">
                         <figure>
                            <img src="{{asset('theme/images/expert01.jpg')}}" alt="Image">
                            <figcaption>
                               <h5>Henry Clements</h5>
                               <small>Senior Vegan Farmer</small>
                               <ul>
                                  <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                  <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                  <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                  <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                  <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                               </ul>
                            </figcaption>
                         </figure>
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                         <figure>
                            <img src="{{asset('theme/images/expert02.jpg')}}" alt="Image">
                            <figcaption>
                               <h5>Dennis Abraham</h5>
                               <small>Organic Farm Expert</small>
                               <ul>
                                  <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                  <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                  <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                  <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                  <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                               </ul>
                            </figcaption>
                         </figure>
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                         <figure>
                            <img src="{{asset('theme/images/expert03.jpg')}}" alt="Image">
                            <figcaption>
                               <h5>Erick Clark </h5>
                               <small>Vegan Farm Expert</small>
                               <ul>
                                  <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                  <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                  <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                  <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                  <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                               </ul>
                            </figcaption>
                         </figure>
                      </div>
                      <!-- end swiper-slide -->
                      <div class="swiper-slide">
                         <figure>
                            <img src="{{asset('theme/images/expert04.jpg')}}" alt="Image">
                            <figcaption>
                               <h5>Jack Laramska</h5>
                               <small>Farm Director</small>
                               <ul>
                                  <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                                  <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                                  <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                  <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                                  <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                               </ul>
                            </figcaption>
                         </figure>
                      </div>
                      <!-- end swiper-slide -->
                   </div>
                   <!-- end swiper-wrapper -->
                   <div class="swiper-pagination"></div>
                   <!-- end swiper-pagination -->
                </div>
                <!-- end experts-slider -->
             </div>
          </div> --}}
          <!-- end col-4 -->
          <div class="col-lg-7 offset-lg-1" style="margin:0 auto;">
             <div class="accordion-box">
                <h6>Shaqs Farm Faq's</h6>
                <div class="accordion" id="accordion" role="tablist">
                   <div class="card">
                      <div class="card-header" role="tab" id="headingOne"> <a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What new products are you planning?
                         </a>
                      </div>
                      <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                         <div class="card-body">Our registered office is in Nairobi, but the nerve centre is with
                            our underwriting team in Kitui. More importantly, we’ll always
                            visit you on site before making a move, so you can meet the people
                            you will deal with
                         </div>
                         <!-- end card-body -->
                      </div>
                      <!-- end collapse -->
                   </div>
                   <!-- end card -->
                   <div class="card">
                      <div class="card-header" role="tab" id="headingTwo"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How are you different?
                         </a>
                      </div>
                      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                         <div class="card-body">Our registered office is in Nairobi, but the nerve centre is with
                            our underwriting team in Kitui. More importantly, we’ll always
                            visit you on site before making a move, so you can meet the people
                            you will deal with
                         </div>
                         <!-- end card-body -->
                      </div>
                      <!-- end collapse -->
                   </div>
                   <!-- end card -->
                   <div class="card">
                      <div class="card-header" role="tab" id="headingThree"> <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Where can I get access to your products?</a> </div>
                      <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                         <div class="card-body">Our registered office is in Nairobi, but the nerve centre is with
                            our underwriting team in Kitui. More importantly, we’ll always
                            visit you on site before making a move, so you can meet the people
                            you will deal with
                         </div>
                         <!-- end card-body -->
                      </div>
                      <!-- end collapse -->
                   </div>
                   <!-- end card -->
                   <div class="card">
                      <div class="card-header" role="tab" id="headingFour"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> How long does it take to have the products ready</a> </div>
                      <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                         <div class="card-body">Our registered office is in Nairobi, but the nerve centre is with
                            our underwriting team in Kitui. More importantly, we’ll always
                            visit you on site before making a move, so you can meet the people
                            you will deal with
                         </div>
                         <!-- end card-body -->
                      </div>
                      <!-- end collapse -->
                   </div>
                   <!-- end card -->
                </div>
                <!-- end accordion -->
             </div>
             <!-- end accordion-box -->
          </div>
          <!-- end col-8 -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 <!-- end content-section -->
 <section class="content-section">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-12">
             <div class="section-title">
                <figure> <img src="{{asset('theme/images/section-title-shape.png')}}" alt="Image"> </figure>
                <h6>What I provide</h6>
                <h2>Services We Offer?</h2>
             </div>
          </div>
          <!-- end col-12 -->
          <div class="col-md-6">
             <div class="icon-box left" style="min-height:380px;">
                <figure><img src="{{asset('theme/images/icon08.png')}}" alt="Image"></figure>
                <div class="content">
                   <h6>Farm Supplies</h6>
                   <p>We deal in a wide range of organic Farm products like Chicken, Goat, Sheep, Eggs, Watermelons, Onions, Garlic, Tomatoes and Many More
                   </p>
                </div>
                <!-- end content -->
             </div>
             <!-- end icon-box -->
          </div>
          <!-- end col-6 -->
          <div class="col-md-6">
             <div class="icon-box left">
                <figure><img src="{{asset('theme/images/icon02.png')}}" alt="Image"></figure>
                <div class="content">
                   <h6>Farm Mechanization</h6>
                   <p>We supply a full range of technologically advanced, scientifically proven and environmentally sustainable products. The combination of our technical, consulting and innovative products ensure customers are provided solutions specifically tailored to meet their requirements.
                   </p>
                </div>
                <!-- end content -->
             </div>
             <!-- end icon-box -->
          </div>

       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 <!-- end content-section -->
 <section class="content-section no-spacing">
    <ul class="gallery-grid">
       <li>
          <figure style="border-radius:10px"><a href="{{asset('theme/images/gallery01.jpg')}}" data-fancybox><img src="{{asset('theme/images/gallery01.jpg')}}" alt="Image"></a></figure>
       </li>
       <!-- end li -->
       <li>
          <figure style="border-radius:10px"><a href="{{asset('theme/images/gallery02.jpg')}}" data-fancybox><img src="{{asset('theme/images/gallery02.jpg')}}" alt="Image"></a></figure>
       </li>
       <!-- end li -->
       <li>
          <figure style="border-radius:10px"><a href="{{asset('theme/images/gallery06.jpg')}}" data-fancybox><img src="{{asset('theme/images/gallery06.jpg')}}" alt="Image"></a></figure>
       </li>
       <!-- end li -->
    </ul>
 </section>


 <!-- end content-section -->
 <section class="content-section">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="section-title">
                <h6>Consultative partners</h6>
                <h2>Partners
                </h2>
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
 <!-- end content-section -->
@endsection
