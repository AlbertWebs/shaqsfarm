@extends('front.master')

@section('content')
<header class="page-header" data-background="{{asset('theme/images/page-header-bg.jpg')}}" data-stellar-background-ratio="0.7">
    <div class="container">
       <h2>Contact</h2>
       <p>We Love Organic, Try Us Today</p>
    </div>
    <!-- end container -->
    <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element -->
 </header>
 <!-- end page-header -->
 <section class="content-section no-bottom-spacing" data-background="images/section-bg01.png" data-stellar-background-ratio="1.2">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="section-title text-left">
                <h6>Here's how you can get in touch</h6>
                <h2> Having Questions? <br>
                   We would love to hear from you <br>
                   Mail Us Today!
                </h2>
             </div>
             <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-6">
             <div class="contact-form">
                <div class="form-group">
                   <input type="text" placeholder="Full Name">
                </div>
                <!-- end form-group -->
                <div class="form-group">
                   <input type="text" placeholder="E-mail Address">
                </div>
                <!-- end form-group -->
                <div class="form-group">
                   <input type="text" placeholder="Subject">
                </div>
                <!-- end form-group -->
                <div class="form-group">
                   <textarea placeholder="Message"></textarea>
                </div>
                <!-- end form-group -->
                <div class="form-group">
                   <input type="submit" value="SEND MESSAGE">
                </div>
                <!-- end form-group -->
             </div>
             <!-- end contac-form -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
             <div class="contact-box">
                <figure><img src="{{asset('theme/images/contact-icon01.png')}}" alt="Image"></figure>
                <div class="content">
                   <h6>Waiting Your Call!</h6>
                   <p>+1 (202) 540 0134</p>
                </div>
                <!-- end content -->
             </div>
             <!-- end contact-box -->
             <div class="contact-box">
                <figure><img src="{{asset('theme/images/contact-icon02.png')}}" alt="Image"></figure>
                <div class="content">
                   <h6>Email the editor</h6>
                   <p>organic@shaqsfarm.com</p>
                </div>
                <!-- end content -->
             </div>
             <!-- end contact-box -->
             <div class="contact-box">
                <figure><img src="{{asset('theme/images/contact-icon03.png')}}" alt="Image"></figure>
                <div class="content">
                   <h6>Registered office at</h6>
                   <p>Malik Heights, Ngong Road, Nairobi, Kenya
                   </p>
                </div>
                <!-- end content -->
             </div>
             <!-- end contact-box -->
          </div>
          <!-- end col-6 -->
       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 <!-- end content-section -->
 <div class="google-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.168613544265!2d36.7827816!3d-1.2995093!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdfee283a57b3021f!2sVenshaq%20Holdings%20Limited!5e0!3m2!1sen!2ske!4v1670762021244!5m2!1sen!2ske" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
 </div>
@endsection
