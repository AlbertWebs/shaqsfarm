<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="theme-color" content="#009a4e"/>
      <title>{{$title}}</title>
      <meta name="author" content="Designekta Studios">
      <meta name="description" content="Shaqs Farm demonstrates leading environmental stewardship, makes optimal use of land under responsible farming practices, and values its reputation as an ethical food producer of national significance.">
      <meta name="keywords" content="shaqsfarm, agriculture, food, fruit, organic, veges, vegetable, soleil, water, nature, green, flour, bread, healty, diet, market">
      <!-- SOCIAL MEDIA META -->
      <meta property="og:description" content="Shaqs Farm demonstrates leading environmental stewardship, makes optimal use of land under responsible farming practices, and values its reputation as an ethical food producer of national significance.">
      <meta property="og:image" content="{{url('/')}}/uploads/favicon.png">
      <meta property="og:site_name" content="Shaqs Farm">
      <meta property="og:title" content="{{$title}}">
      <meta property="og:type" content="website">
      <meta property="og:url" content="{{url('/')}}">
      <!-- TWITTER META -->
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@shaqsfarm">
      <meta name="twitter:creator" content="@shaqsfarm">
      <meta name="twitter:title" content="shaqsfarm">
      <meta name="twitter:description" content="shaqsfarm | Agriculture Farming Foundation">
      <meta name="twitter:image" content="{{url('/')}}/uploads/favicon.png">
      <!-- FAVICON FILES -->
      <link href="{{url('/')}}/uploads/favicon.png" rel="apple-touch-icon" sizes="144x144">
      <link href="{{url('/')}}/uploads/favicon.png" rel="apple-touch-icon" sizes="114x114">
      <link href="{{url('/')}}/uploads/favicon.png" rel="apple-touch-icon" sizes="72x72">
      <link href="{{url('/')}}/uploads/favicon.png" rel="apple-touch-icon">
      <link href="{{url('/')}}/uploads/favicon.png" rel="shortcut icon">
      <!-- CSS FILES -->
      <link rel="stylesheet" href="{{asset('theme/css/lineicons.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/timeline.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/fancybox.min.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/swiper.min.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/odometer.min.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('theme/css/style.css')}}">
      <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/6388a5f9daff0e1306da6e54/1gj6sgmls';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
    <!--End of Tawk.to Script-->
   </head>
   <body>
      {{-- <div class="preloader"> <img src="{{asset('theme/images/preloader.gif')}}" alt="Image"> </div> --}}
      <!-- end preloader -->
      <div class="page-transition"></div>
      <!-- end page-transition -->
      <div class="search-box">
         <div class="inner">
            <form>
               <input type="search" placeholder="Type here to search">
               <input type="submit" value="SEARCH">
            </form>
         </div>
      </div>
      <!-- end search-box -->
      <aside class="side-widget">
         <div class="inner">
            <div class="logo"> <a href="{{url('/')}}"><img src="{{asset('uploads/logo-color.png')}}" alt="Shaqs Farm"></a> </div>
            <!-- end logo -->
            <div class="hide-mobile">
               <p>
                Shaqs Farm demonstrates leading environmental stewardship, makes optimal use of land under responsible farming practices, and values its reputation as an ethical food producer of national significance.
               </p>
               <figure class="gallery">
                    <a href="{{asset('uploads/pexels-chris-f-5187233.jpg')}}" data-fancybox><img src="{{asset('uploads/pexels-chris-f-5187233.jpg')}}" alt="Image"></a>
                    <a href="{{asset('uploads/pexels-cottonbro-studio-4911708.jpg')}}" data-fancybox><img src="{{asset('uploads/pexels-cottonbro-studio-4911708.jpg')}}" alt="Image"></a>
                    <a href="{{asset('uploads/pexels-cottonbro-studio-4911726.jpg')}}" data-fancybox><img src="{{asset('uploads/pexels-cottonbro-studio-4911726.jpg')}}" alt="Image"></a>
                    <a href="{{asset('uploads/pexels-julia-11715001.jpg')}}" data-fancybox><img src="{{asset('uploads/pexels-julia-11715001.jpg')}}" alt="Image"></a>
                </figure>
               <h6 class="widget-title">CONTACT INFO</h6>
               <address class="address">
                  <p>+1 (202) 540 0134<br>
                     <a href="#">organic@shaqsfarm.com</a>
                  </p>
               </address>
               <h6 class="widget-title">FOLLOW US</h6>
               <ul class="social-media">
                  <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                  <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                  <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                  <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                  <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
               </ul>
            </div>
            <!-- end hide-mobile -->
            <div class="show-mobile">
               <div class="site-menu">
                  <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>
                        <a href="#">What's Green</a>
                        <ul>
                            <?php
                            $Products = DB::table('products')->where('category','1')->get();
                        ?>
                            @foreach ($Products as $product)
                            <li><a href="{{url('/')}}/products/{{$product->slung}}">{{$product->title}}</a></li>
                            @endforeach
                        </ul>
                     </li>
                     <li>
                        <a href="#">Animal Products</a>
                        <ul>

                                <?php
                                $Products = DB::table('products')->where('category','2')->get();
                            ?>
                            @foreach ($Products as $product)
                            <li><a href="{{url('/')}}/products/{{$product->slung}}">{{$product->title}}</a></li>
                            @endforeach
                        </ul>
                     </li>
                     <li><a href="news.html">News</a></li>
                     <li><a href="{{url('/')}}/the-company">About</a></li>
                     <li><a href="{{url('/')}}/contact-us">Contact</a></li>
                  </ul>
               </div>
               <!-- end site-menu -->
            </div>
            <!-- end show-mobile -->
            <small>Copyright © {{date('Y')}} Shaqs Farm | Venshaq Holdongs Limited</small>
         </div>
         <!-- end inner -->
      </aside>
      <!-- end side-widget -->
      <div class="topbar">
         <div class="container">
            <div class="text">That's right, we only sell 100% organic</div>
            <div class="social-media">
               Follow us
               <ul>
                  <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                  <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                  <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                  <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                  <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
               </ul>
            </div>
            <div class="phone"><i class="lni lni-mobile"></i> +1 (202) 540 0134</div>
         </div>
         <!-- end container -->
      </div>
      <!-- end topbar -->
      <nav class="navbar">
         <div class="container">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('uploads/logo.png')}}" srcset="{{asset('uploads/logo.png')}}" alt="Shaqs Farm Limited">
                </a>
            </div>
            <!-- end logo -->
            <div class="site-menu">
               <ul>
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li>
                     <a href="#">What's Green</a>
                     <ul>
                        <?php
                           $Products = DB::table('products')->where('category','1')->get();
                        ?>
                        @foreach ($Products as $product)
                        <li><a href="{{url('/')}}/products/{{$product->slung}}">{{$product->title}}</a></li>
                        @endforeach
                     </ul>
                  </li>
                  <li>
                     <a href="#">Animal Products</a>
                     <ul>
                        <?php
                            $Products = DB::table('products')->where('category','2')->get();
                        ?>
                        @foreach ($Products as $product)
                        <li><a href="{{url('/')}}/products/{{$product->slung}}">{{$product->title}}</a></li>
                        @endforeach
                     </ul>
                  </li>

                  <li><a href="{{url('/')}}/the-company">About</a></li>
                  <li><a href="{{url('/')}}/contact-us">Contact</a></li>
               </ul>
            </div>
            <!-- end site-menu -->
            <div class="search-button"><i class="lni lni-search-alt"></i></div>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" rel="stylesheet" />
            <div class="search-buttons" onclick="window.location.href='{{url('/')}}/fresh-from-the-farm'"><i class="fa fa-shopping-cart"></i></div>
            <!-- end search-button -->
            <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
            <!-- end hamburger-menu -->
         </div>
         <!-- end container -->
      </nav>
      <!-- end navbar -->
      @yield('content')
      <!-- end content-section -->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-6">
                  <div class="logo">
                        <a href="#">
                            <img src="{{asset('uploads/logo.png')}}" srcset="{{asset('uploads/logo.png')}}" alt="Shaqs Farms">
                        </a>
                  </div>
                  <!-- end logo -->
                  <p>
                    Shaqs Farm demonstrates leading environmental stewardship, makes optimal use of land under responsible farming practices, and values its reputation as an ethical food producer of national significance.
                  </p>
               </div>
               <!-- end col-4 -->
               {{-- <div class="col-lg-6">
                  <h6 class="widget-title">OUR NEWSLETTER!</h6>
                  <form>
                     <input type="text" placeholder="enter your email address....">
                     <input type="submit" value="SUBSCRIBE">
                  </form>
               </div> --}}
               {{-- <hr> --}}
               <!-- end col-8 -->
               <div class="footer-separator"></div>
               <!-- end footer-separator -->
               <div class="col-md-4">
                  <h6 class="widget-title">Discover Gardens</h6>
                  <ul class="footer-menu">
                    <?php
                        $Products = DB::table('products')->where('category','1')->get();
                    ?>
                    @foreach ($Products as $product)
                    <li>{{$product->title}}</li>
                    @endforeach
                  </ul>
               </div>
               <!-- end col-4 -->
               <div class="col-md-3">
                  <h6 class="widget-title">Discover Yards</h6>
                  <ul class="footer-menu">
                    <?php
                    $Products = DB::table('products')->where('category','2')->get();
                ?>
                @foreach ($Products as $product)
                <li>{{$product->title}}</li>
                @endforeach
                  </ul>
               </div>
               <!-- end col-4 -->
               <div class="col-md-5">
                  <h6 class="widget-title">CONTACT INFO</h6>
                  <p>
                     <a style="color:#ffffff" href="tel:+1 (202) 540 0134"><span class="lni lni-mobile"></span> +1 (202) 540 0134</a><br>
                     <a style="color:#ffffff" href="mailto:organic@shaqsfarm.com"><span class="lni lni-envelope"></span> organic@shaqsfarm.com</a><br>
                     <a style="color:#ffffff" href="https://goo.gl/maps/WkhGnjY7vREuFNNi9"><span class="lni lni-map-marker"></span> Malik Heights, Ngong Road, Nairobi, Kenya</a>
                  </p>
               </div>
               <!-- end col-4 -->
               <div class="col-12">
                  <div class="footer-bottom">
                     <span>Copyright © {{date('Y')}} Shaqs Farm | Venshaq Holdings Limited</span>
                     <span>Powered By <a href="http://designekta.com/">Designekta Studios</a></span>
                  </div>
                  <!-- end footer-bottom -->
               </div>
               <!-- end col-12 -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </footer>
      <!-- end footer -->
      <!-- JS FILES -->
      <script src="{{asset('theme/js/jquery.min.js')}}"></script>
      <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('theme/js/swiper.min.js')}}"></script>
      <script src="{{asset('theme/js/fancybox.min.js')}}"></script>
      <script src="{{asset('theme/js/imagesloaded.pkgd.min.js')}}"></script>
      <script src="{{asset('theme/js/isotope.min.js')}}"></script>
      <script src="{{asset('theme/js/jquery.stellar.js')}}"></script>
      <script src="{{asset('theme/js/timeline.js')}}"></script>
      <script src="{{asset('theme/js/odometer.min.js')}}"></script>
      <script src="{{asset('theme/js/scripts.js')}}"></script>
   </body>
</html>

