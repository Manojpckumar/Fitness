@extends('layouts.main')

@section('content')
<!-- ============================== Content Start =========================================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ============================== content ================================================= -->
<main>
    <!-- promo section start -->
    <section class="promo section mt-5" 
    style="background: url('{!! asset(option('coverSettings')) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
    <div class="container">
        <div class="promo_content col-xl-4">
            <h1 class="promo_content-header">{!! __('main.OurTeams') !!}</h1>
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
          @foreach($Coaches as $Coache)
          <li class="blog_recent-post col-md-3 mb-3">
            <div class="team_list-item_wrapper d-flex flex-column">
                <div class="media">
                    <img class="lazy media_img border-rad" 
                    data-src="{{ asset($Coache->ImageUpload->filename) }}" src="{{ asset($Coache->ImageUpload->filename) }}"/>
                </div>
                <div class="info d-flex flex-column justify-content-between">
                    <h3 class="name">{!! $Coache->{'Title_'.$Locale} !!}</h3>
                    <span class="speciality highlight">{!! $Coache->position !!}</span>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
<div class="pagination feed_pagination d-flex justify-content-center align-items-center">
  {!! $Coaches->links() !!}
</div>
</section>
<!-- feed section end -->
</main>
<!-- ============================================= Content ================================== -->
@endsection