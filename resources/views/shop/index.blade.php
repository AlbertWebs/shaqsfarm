@extends('shop.master')

@section('content')
 <!--Page Header Start-->
 <section class="page-header">
    <div class="page-header-bg" style="background-image: url('{{asset('theme/images/page-header-bg.jpg')}}')">
    </div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{url('/')}}">Home</a></li>
                <li><span>/</span></li>
                <li>Shop Online</li>
            </ul>
            <h2>Place Order</h2>
        </div>
    </div>
</section>
<!--Page Header End-->

<!--Product Start-->
<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="product__items">
                    {{-- <div class="row">
                        <div class="col-xl-12">
                            <div class="product__showing-result">
                                <div class="product__showing-text-box">
                                    <p class="product__showing-text">Showing 1–9 of 12 Results</p>
                                </div>
                                <div class="product__showing-sort">
                                    <div class="select-box">
                                        <select class="wide">
                                            <option data-display="Sort by popular">Sort by popular</option>
                                            <option value="1">Sort by popular</option>
                                            <option value="2">Sort by Price</option>
                                            <option value="3">Sort by Ratings</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="product__all">
                        <div class="row">
                            @foreach ($Product as $product)
                                    {{--  --}}
                                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                                        <div class="services-two__single">
                                            <div class="services-two__img">
                                                <img src="{{url('/')}}/theme/images/{{$product->image}}" alt="">
                                            </div>
                                            <div class="services-two__content">
                                                <div class="services-two__icon">
                                                    <span class="icon-dairy-products"></span>
                                                </div>
                                                <div class="services-two__more-details">
                                                    <a href="{{url('/')}}/product/{{$product->slung}}"><i class="icon-right-arrow"></i>More Detail</a>
                                                </div>
                                            </div>
                                            <div class="services-two__title-box">
                                                <p class="services-two__subtitle">Shaq's Farm</p>
                                                <h3 class="services-two__title"><a href="{{url('/')}}/product/{{$product->slung}}">{{$product->title}}<</a></h3>
                                            </div>
                                            <div class="services-two__hover-content">
                                                <p class="services-two__hover-sub-title">Shaq's Farm</p>
                                                <h3 class="services-two__hover-title"><a href="{{url('/')}}/product/{{$product->slung}}">{{$product->title}}<</a>
                                                </h3>
                                                <p class="services-two__hover-text">{{$product->meta}}</p>
                                                <div class="services-two__hover-more-details">
                                                    <a href="{{url('/')}}/product/{{$product->slung}}"><i class="icon-right-arrow"></i>Order Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  --}}
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Product End-->

@endsection
