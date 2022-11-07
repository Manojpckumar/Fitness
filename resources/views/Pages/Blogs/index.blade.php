@extends('layouts.main')

@section('content')
<!-- ============================== Content Start =========================================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ============================== content ================================================= -->
<main>
    <!-- promo section start -->
    <section class="promo section mt-5" 
    style="background: url('{!! asset(option('covernew')) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
    <div class="container">
        <div class="promo_content col-xl-4">
            <h1 class="promo_content-header">{!! __('main.Blogs') !!}</h1>
            <p class="promo_content-text text">
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
          @foreach($Blogs as $Blog)
          <li class="blog_recent-post  col-md-6 col-xl-4 mb-3">
              <a class="blog_recent-post_wrapper d-md-flex flex-column" 
              href="{!! url('Blogs') !!}/{!! $Blog->slug !!}">
              <div class="media display-media">
                <img class="lazy thumbnail" 
                src="{{ asset($Blog->ImageUpload->filename) }}" 
                alt="{{ $Blog->meta_description }}" />
            </div>
            <div class="main d-md-flex flex-column justify-content-between">
                <h4 class="title display-b">{!! $Blog->{'Title_'.$Locale} !!}</h4>
                <span class="date highlight">{!! date('M j, Y', strtotime($Blog->created_at)) !!}</span>
            </div>
            <p class="preview">{!! substr($Blog->{'body_'.$Locale}, 0, 95) !!}. </p></a>
        </li>
        @endforeach
    </ul>
</div>
<div class="pagination feed_pagination d-flex justify-content-center align-items-center">
  {!! $Blogs->links() !!}
</div>
</section>
<!-- feed section end -->
</main>
<!-- ============================================= Content ================================== -->
@endsection