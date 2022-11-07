@extends('layouts.main')

@section('content')
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ===========================================  content =================================== -->
<main>
    <!-- promo section start -->
    <section class="promo section" 
    style="background: url('{!! asset(option('coverAdSense')) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
    <div class="container">
        <div class="promo_content col-xl-4 mt-5">
            <h1 class="promo_content-header">{!! __('main.About') !!}</h1>
            <p class="promo_content-text text">
               {!! __('main.WHERE_HEADED') !!}  
           </p>
       </div>
   </div>
   <span class="overlay"></span>
</section>
<!-- about section start -->
<section class="about section">
    <div class="container d-xl-flex flex-wrap">
        <div class="about_info col-xl-5 d-sm-flex">
          <img class="lazy about_media-img border-rad" src="{!! asset(option('Book_background')) !!}" />
      </div>
      <div class="about_header p-4 section_header col-xl-7 mt-5 ">
        <h2 class="about_header-title section_header-title">
            {!! __('main.WHERE_HEADED') !!}
        </h2>
        <p> {!! __('main.Play_Everywhere') !!} </p>
    </div>
</div>
</section>
<!-- about section end -->
<section class="services section">
    <div class="container">
       <div class="services_header section_header col-xl-6">
        <h2 class="services_header-title section_header-title">{!!  __('main.Team_Coaches') !!} </h2>
        <span class="services_header-subtitle section_header-subtitle">{!!  __('main.Coaches') !!}</span>
        <p class="services_header-text text" >
           {!! __('main.Get_free') !!}
       </p>
   </div>
   <ul class="services_list d-md-flex flex-wrap">
    @foreach($Coaches as $Coache)
    <li class="blog_recent-post col-md-3">
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
</section>

<!-- gallery section start -->
<section class="gallery">
    <div class="container-fluid p-0">
        <div class="container">
            <div class="gallery_header section_header">
               <h2 class="gallery_header-title section_header-title mb-5"> {!! __('main.Blog_Posts') !!}</h2>
           </div>
       </div>
       <ul class="gallery_list d-md-flex flex-wrap">
        @foreach($Blogs as $Blog)
        <li class="gallery_list-item col-md-6 col-xl-3">
            <a class="gallery_list-item_trigger border-rad" href="{{ url('Blogs') }}/{{ $Blog->slug }}">
                <img class="lazy gallery_list-item_img display-media" src="{{ asset($Blog->ImageUpload->filename) }}"/>
            </a>
        </li>
        @endforeach
    </ul>
</div>
</section>
<!-- gallery section end -->
</main>
<!-- ===========================================  content =================================== -->
@endsection
