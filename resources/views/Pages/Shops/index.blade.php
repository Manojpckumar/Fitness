@extends('layouts.main')

@section('content')
<!-- ============================== Content Start =========================================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ============================== content ================================================= -->
<main>
    <!-- promo section start -->
    <section class="promo section mt-6" 
    style="background: url('{!! asset(option('coverMessage')) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
    <div class="container">
        <div class="promo_content col-xl-4">
            <h1 class="promo_content-header">{!! __('main.Shops') !!}</h1>
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
            @foreach($Shops as $Shop)
            <li class="blog_recent-post col-md-6 col-xl-4 mb-3">
                <a class="feed_posts-post_wrapper d-flex flex-column justify-content-between" 
                href="{!! url('Shops') !!}/{!! $Shop->slug !!}">
                <div class="media mb-0">
                    <img class="lazy post-img border-rad"  src="{!! asset($Shop->ImageUpload->filename) !!}"/>
                    <span class="price-img">{!! $Shop->price !!}</span>
                </div>
                <div class="main d-flex flex-column justify-content-between flex-grow-1">
                    <h3 class="title">{!! $Shop->{'Title_'.$Locale} !!}</h3>
                    <div class="info highlight">
                        <span class="info_date">{!! $Shop->sku !!}</span>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</div>
<div class="pagination feed_pagination d-flex justify-content-center align-items-center">
  {!! $Shops->links() !!}
</div>
</section>
<!-- feed section end -->
</main>
<!-- ============================================= Content ================================== -->
@endsection