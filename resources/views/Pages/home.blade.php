@extends('layouts.main')

@section('content')
<!--********************* SITE CONTENT *********************-->
<!--********************************************************-->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ===========================================  content =================================== -->
<main>
    <!-- hero section start -->
    <section class="hero d-flex"> 
        <div class="hero_slider">
            <div class="hero_slider-wrapper swiper-wrapper">
                @foreach($Fitness as $Fitnes)
                @if(isset($Fitnes->ImageUpload->filename))
                <div class="hero_slider-slide swiper-slide" data-bg="{{ asset($Fitnes->ImageUpload->filename) }}"></div>
                @else
                @endif
                @endforeach
            </div>
            <div class="hero_slider-pagination swiper-pagination"></div>
            <div class="hero_slider-controls d-none d-md-flex justify-content-between">
                <span class="hero_slider-control hero_slider-control--prev">
                    <i class="icon-arrow_left"></i>
                </span>
                <span class="hero_slider-control hero_slider-control--next">
                    <i class="icon-arrow_right"></i>
                </span>
            </div>
        </div>
        <div class="container d-flex flex-column justify-content-center align-items-center align-items-md-start align-items-lg-center align-items-xl-start">
            <div class="hero_content col-xl-7 col-xxl-6">
                <h1 class="hero_content-header"> {!! __('main.Build_Powerful') !!} </h1>
                <p class="hero_content-text text">
                    {!! __('main.Timetables_Calculator') !!}
                    <span class="linebreak"> {!! __('main.Powerlift_lets') !!} </span>
                </p>
                <span class="hero_content-tel d-inline-flex align-items-center">
                    <a class="about_info-btn btn btn-primary" href="{!! url('About') !!}">{!! __('main.learn_more') !!}</a>
                </span>
            </div>
        </div>
        <span class="hero_overlay"></span>
    </section>
    <!-- hero section end -->
    <!-- about section start -->
    <section class="about section--nopb">
        <div class="container d-xl-flex justify-content-between">
            <div class="about_header section_header col-xl-6">
                <h2 class="about_header-title section_header-title" data-aos="fade-right">
                   {!! __('main.functional_fitness') !!}
                   <span class="linebreak">{!! __('main.Build_Powerful') !!}</span>
               </h2>
               <span
               class="about_header-subtitle section_header-subtitle"
               data-aos="fade-right"
               data-aos-delay="50"
               data-aos-once="false">{!! __('main.it_Powerful') !!}</span>
           </div>
           <div class="about_info col-xl-6">
            <p class="about_info-text text" data-aos="fade-left">
                {!! __('main.Play_Everywhere') !!}
            </p>
            <div class="wrapper" data-aos="fade-up" data-aos-delay="100">
                <a class="about_info-btn btn btn-primary" href="{!! url('About') !!}">{!! __('main.About') !!}</a>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->
<!-- Program section start -->
<section class="blog section">
    <div class="container">
        <div class="blog_header section_header">
            <h2 class="blog_header-title section_header-title"> {!! __('main.What_functional') !!} </h2>
            <span class="blog_header-subtitle section_header-subtitle">{!! __('main.Program') !!}  </span>
        </div>
        <ul class="blog_recent d-md-flex flex-wrap">
            @foreach($FitnesGrids as $Fitnes)
            <li class="blog_recent-post  col-md-6 col-xl-4" data-aos="fade-up">
                <a class="blog_recent-post_wrapper d-md-flex flex-column" 
                href="{{ url('Fitness') }}/{{$Fitnes->slug}}">
                <div class="media display-media">
                   <img class="lazy thumbnail" src="{{ asset($Fitnes->ImageUpload->filename) }}" 
                   alt="{{ $Fitnes->meta_description }}" />
               </div>
               <div class="main d-md-flex flex-column justify-content-between">
                <h4 class="title display-b">{!! $Fitnes->{'Title_'.$Locale} !!}</h4>
                <span class="date highlight">{!! $Fitnes->price !!} | {!! $Fitnes->days !!} | {!! $Fitnes->time !!}</span>
            </div>
        </a>
    </li>
    @endforeach 
</ul>
</div>
</section>
<!-- Program section end -->
<!-- schedule section start -->
<section class="schedule section" 
style="background: url('{!! asset(option('Book_background')) !!}') center/cover no-repeat;">
<span class="overlay"></span>
<div class="schedule_container container d-xl-flex flex-wrap">
    <div class="schedule_content col-xl-6">
        <h2 class="schedule_content-header" data-aos="fade-right">{!! __('main.Book_Program') !!}</h2>
        <p class="schedule_content-text text mb-3" data-aos="fade-right">{!! __('main.Videos_Workout') !!}</p>
    </div>
    <div class="schedule_hours col-xl-6">
        <h2 class="schedule_hours-header" data-aos="fade-left">{!! __('main.Opening_Hours') !!}</h2>
        <div class="schedule_hours-list d-md-flex">
            <div class="schedule_hours-list_group">
                <span class="list-item" data-aos="fade-up">
                    <span class="weekday">{!! __('main.Monday:') !!}</span>
                    {!! __('main.hours') !!} 
                </span>
                <span class="list-item" data-aos="fade-up">
                    <span class="weekday">{!! __('main.Tuesday:') !!}</span>
                    {!! __('main.hours') !!} 
                </span>
                <span class="list-item" data-aos="fade-up">
                    <span class="weekday">{!! __('main.Wednesday:') !!}</span>
                    {!! __('main.hours') !!} 
                </span>
            </div>
            <div class="schedule_hours-list_group">
                <span class="list-item" data-aos="fade-up">
                    <span class="weekday">{!! __('main.Thursday:') !!}</span>
                    {!! __('main.hours') !!} 
                </span>
                <span class="list-item" data-aos="fade-up">
                    <span class="weekday">{!! __('main.Friday:') !!}</span>
                    {!! __('main.hours') !!}
                </span>
                <span class="list-item" data-aos="fade-up">
                    <span class="weekday">{!! __('main.Sat/sun:') !!}</span>
                    {!! __('main.CLOSED') !!} 
                </span>
            </div>
        </div>
    </div>
    <div class="wrapper schedule_wrapper" data-aos="fade-up">
        <a class="schedule_btn btn btn-primary" href="{!! url('Contact_us') !!}">{!! __('main.Message') !!}</a>
    </div>
</div>
</section>
<!-- schedule section end -->
<!-- services section start -->
<section class="services section">
    <div class="container">
        <div class="services_header section_header col-xl-6">
            <h2 class="services_header-title section_header-title" data-aos="fade-right">{!!  __('main.Team_Coaches') !!} </h2>
            <span class="services_header-subtitle section_header-subtitle">{!!  __('main.Coaches') !!}</span>
            <p class="services_header-text text" data-aos="fade-left">
               {!! __('main.Get_free') !!}
           </p>
       </div>
       <ul class="blog_recent d-md-flex flex-wrap">
        @foreach($Coaches as $Coache)
        <li class="blog_recent-post col-md-3">
            <div class="team_list-item_wrapper d-flex flex-column">
                <div class="media" data-aos="zoom-in" data-aos-duration="650">
                    <img class="lazy media_img border-rad" 
                    data-src="{{ asset($Coache->ImageUpload->filename) }}" src="{{ asset($Coache->ImageUpload->filename) }}"/>
                </div>
                <div class="info d-flex flex-column justify-content-between">
                    <h3 class="name" data-aos="fade-down">{!! $Coache->{'Title_'.$Locale} !!}</h3>
                    <span class="speciality highlight" data-aos="fade-up">{!! $Coache->position !!}</span>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
</section>
<!-- services section end -->
</main>
<!-- ===========================================  content =================================== -->
@endsection
