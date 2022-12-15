@extends('front.master')

@section('content')
  <!-- end navbar -->
  @foreach ($Services as $Ser)
  <header class="page-header" data-background="{{url('/')}}/theme/images/{{$Ser->image}}" data-stellar-background-ratio="0.7">
    <div class="container">
       <h2>{{$Ser->title}}</h2>
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
                {{-- <h6>What we do</h6> --}}
                <h2>{{$Ser->title}}
                </h2>
             </div>
             <!-- end section-title -->
          </div>
          <!-- end col-12 -->
          <div class="col-lg-6">
             <div class="side-content left">
                <p>
                    {!!html_entity_decode($Ser->content)!!}
                </p>

             </div>
             <!-- end side-content -->
          </div>
          <!-- end col-6 -->
          <div class="col-lg-6">
             <div class="side-image">
                <img src="{{url('/')}}/theme/images/{{$Ser->image}}" alt="Image">
                {{-- <div class="big-note-box">
                   <h4>What are you waiting for? <br>
                      Pre-Order today.
                   </h4>
                   <p>
                    Countryside is a membership category
                      of the <u>National Farmers</u>' Union (NFU). The
                      NFU champions <strong>British</strong> agriculture and
                      horticulture,
                   </p>
                </div> --}}
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


 <!-- end content-section -->
 @endforeach
@endsection
