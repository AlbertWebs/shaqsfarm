@extends('front.master')

@section('content')
  <!-- end navbar -->
  @foreach ($Blog as $blog)
  <header class="page-header" data-background="{{url('/')}}/theme/images/{{$blog->image}}" data-stellar-background-ratio="0.7">
    <div class="container">
       <h3>{{$blog->title}}</h3>
       <p>{{$blog->meta}}</p>
    </div>
    <!-- end container -->
    <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element -->
 </header>
 <!-- end page-header -->
 <section class="content-section">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="blog-post">
                {{-- <figure><img src="{{url('/')}}/theme/images/{{$blog->image}}" alt="Image"></figure> --}}
                <div class="post-content">
                   <span class="post-date">{{date('M D, Y', strtotime($blog->created_at))}}</span>
                   <h3 class="post-title">{{$blog->title}}</h3>

                   <!-- end author -->
                   <p>
                    {!!html_entity_decode($blog->content)!!}
                   </p>

                </div>
                <!-- end post-content -->
             </div>

          </div>

       </div>
       <!-- end row -->
    </div>
    <!-- end container -->
 </section>
 @endforeach
@endsection
