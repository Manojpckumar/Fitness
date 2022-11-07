@extends('layouts.main')

@section('content')
<!-- ================================= Content Start ============================================================= -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<main>
    <!-- promo section start -->
    <section class="promo section mt-5" 
    style="background: url('{!! asset(option('coverAdSense')) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
    <div class="container">
        <div class="promo_content col-xl-4">
            <h1 class="promo_content-header">{!!  $Category->{'Title_'.$Locale} !!}</h1>
            <p class="promo_content-text text"  >
              {!! __('main.Play_Everywhere') !!}
          </p>
      </div>
  </div>
  <span class="overlay"></span>
</section>
<!-- promo section end -->
<!-- feed section start -->
<section class="feed section">
    <div class="container">
        <ul class="feed_posts d-md-flex flex-wrap">
          @foreach($FitnesGrids as $Fitnes)
          <li class="blog_recent-post  col-md-6 col-xl-4">
              <a class="blog_recent-post_wrapper d-md-flex flex-column" 
              href="{{ url('Fitness') }}/{{$Fitnes->slug}}">
              <div class="media display-media">
                <img class="lazy thumbnail" 
                src="{{ asset($Fitnes->ImageUpload->filename) }}" 
                alt="{{ $Fitnes->meta_description }}" />
            </div>
            <div class="main d-md-flex flex-column justify-content-between">
                <h4 class="title display-b">{!! $Fitnes->{'Title_'.$Locale} !!}</h4>
                <span class="date highlight">{!! $Fitnes->price !!} | {!! $Fitnes->days !!} | {!! $Fitnes->time !!}</span>
            </div>
            <p class="preview">{!! substr($Fitnes->{'body_'.$Locale}, 0, 95) !!}. </p></a>
        </li>
        @endforeach
    </ul>
</div>
<div class="pagination feed_pagination d-flex justify-content-center align-items-center">
  {!! $FitnesGrids->links() !!}
</div>
</section>
<!-- feed section end -->
</main>
<!-- =========================================== Content end   ============================================================= -->
@endsection