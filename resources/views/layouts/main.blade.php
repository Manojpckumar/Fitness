<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
 <!-- ===================================== Meta site ================================================ -->
 <meta charset="utf-8">
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
 <!-- ====== Laravel description site edit delete from admin panel ================== -->
 <meta name="description" content="{{ option('MetaDescription')  }}">
 <!-- ====== Laravel author site edit delete from admin panel ====================== -->
 <meta name="author" content="{{ option('Metaauthor')  }}">
 <!-- ====== Laravel keywords site edit delete from admin panel ================== -->
 <meta name="keywords" content="{{ option('MetaKeyWords')  }}">  
 <!-- ====== Laravel robots site edit delete from admin panel ================== -->
 <meta name="robots" content="{{ option('Metarobots') }}">
 <meta name="msapplication-TileColor" content="#ffffff">
 <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
 <meta name="theme-color" content="#ffffff">
 <meta name="twitter:card" content="summary">
 <meta name="twitter:site" content="@{{ option('Metarobots') }}">
 <meta name="twitter:creator" content="@{{ option('Metarobots') }}">
 <meta name="twitter:title" content="{{ option('Metarobots') }}">
 <meta name="twitter:description" content="{{ option('Metarobots') }}">
 <!-- ====== Laravel favicon icon ================== -->
 <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png') }}">
 <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png') }}">
 <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png') }}">
 <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png') }}">
 <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png') }}">
 <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png') }}">
 <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png') }}">
 <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png') }}">
 <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png') }}">
 <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}">
 <link rel="icon" type="image/png" sizes="32x32" href="{{ asset(option('Favicon')) }}">
 <link rel="icon" type="image/png" sizes="96x96" href="{{ asset(option('Favicon')) }}">
 <link rel="icon" type="image/png" sizes="16x16" href="{{ asset(option('Favicon')) }}">
 <link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}">
 <!-- ====== SiteTitle ========================================================================== -->
 <title>{{ option('SiteTitle') }}</title>
 <!-- ===========================================  googleapis =================================== -->
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
 <!-- ===========================================  head =================================== -->
 @if($Locale == 'ar')
 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
 <span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
 <link rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}" />
 @else
 @endif
</head>
<body>
    <!-- ===========================================  header content =================================== -->
    <header class="header" data-page="home">
        <div class="container-fluid d-flex flex-wrap align-items-center justify-content-between">
            <!-- ===========================================  logo =================================== -->
            <a class="brand-logo d-flex align-items-center header_logo" href="{!! url('') !!}">
                <img src="{!! asset(option('logo')) !!}" alt="{!! option('SiteTitle')  !!}">
            </a>
            <!-- ===========================================  logo =================================== -->
            <nav class="header_nav">
                <ul class="header_nav-list">
                  @foreach(Menus() as $Menu)
                  <li class="header_nav-list_item nav-item">
                    <a class="nav-link" href="{!! url($Menu->url) !!}" target="{!! $Menu->target !!}">
                        {!! $Menu->{'Title_'.$Locale} !!}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
        @guest
        <a class="header_btn btn btn-primary" href="{!! route('login') !!}">{!! __('main.Sign_In') !!}</a>
        <a class="header_btn btn btn-primary display-m" href="{!! route('register') !!}">{!! __('main.Sign_Up') !!}</a>
        @else
        @hasrole('Super-Admin')
        <a class="header_btn btn btn-primary" href="{!! url('admin') !!}">{!! Auth::user()->name !!}</a>
        <a class="header_btn btn btn-primary display-m" href="{!! route('logout') !!}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {!! __('main.Sign_Out') !!}</a>
        <form id="logout-form" action="{!! route('logout') !!}" method="POST" class="display-zero">
          @csrf
      </form>
      @else
      <a class="header_btn btn btn-primary" href="{!! route('logout') !!}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {!! __('main.Sign_Out') !!}</a>
      <form id="logout-form" action="{!! route('logout') !!}" method="POST" class="display-zero">
          @csrf
      </form>
      @endhasrole
      @endif
      <span class="header_trigger d-inline-flex d-lg-none flex-column justify-content-between">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </span>
</div>
</header>
<!-- ===========================================  header content =================================== -->
<!-- Homepage content start -->
@yield('content')
<!-- Homepage content end -->
<footer class="footer section-nopb">
    <div class="container d-flex flex-column flex-md-row flex-md-wrap justify-content-between">
        <div class="footer_block col-lg-3 pe-sm-5">
            <a class="brand-logo d-flex align-items-center header_logo " href="{!! url('') !!}">
                <img src="{!! asset(option('logo')) !!}" alt="{!! option('SiteTitle')  !!}" class="width-40 mb-3">
            </a>
            <p>
               @if($Locale == 'ar')
               {!! option('Home_ar') !!}
               @elseif($Locale == 'fr')
               {!! option('Home_fr') !!}
               @else
               {!! option('Home_en') !!}
               @endif
           </p>
           <h4 class="about_info-fact_title aos-init aos-animate mt-3">{!! __('main.Our_Socials') !!}</h4>
           <!-- ===========================================  Our Socials =================================== -->
           <ul class="footer_contacts-socials d-flex align-items-center">
            <li class="list-item">
                <a class="link" href="{!! option('Facebook') !!}" target="_blank" rel="noopener norefferer">
                    <i class="icon-facebook"></i>
                </a>
            </li>
            <li class="list-item">
                <a class="link" href="{!! option('Twitter') !!}" target="_blank" rel="noopener norefferer">
                    <i class="icon-twitter"></i>
                </a>
            </li>
            <li class="list-item">
                <a class="link" href="{!! option('Instagram') !!}" target="_blank" rel="noopener norefferer">
                    <i class="icon-instagram"></i>
                </a>
            </li>
        </ul>
        <!-- =========================================== Our Socials =================================== -->
    </div>
    <div class="footer_contacts footer_block col-xl-3 pe-sm-5">
        <h4 class="about_info-fact_title aos-init aos-animate">{!! __('main.Blog_Posts') !!}</h4>
        <ul>
          @foreach(Blogs() as $Blog)
          <li> 
              <h5><a href="{{ url('Blogs') }}/{{ $Blog->slug }}" class="title blog_footer">{{ $Blog->{'Title_'.$Locale} }}</a></h5>
              <span>{{ date('M j, Y', strtotime($Blog->created_at)) }}</span>
          </li>
          @endforeach
      </ul>
  </div>
  <div class="footer_contacts footer_block col-xl-3 pe-sm-5">
    <h4 class="about_info-fact_title aos-init aos-animate">{!! __('main.LOCATIONS') !!}</h4>
    <img src="{{ asset('assets/images/futer-map-img.png') }}">
    <p class="footer_contacts-address">
        <span class="linebreak">{!! option('Address') !!}</span>
        <span class="linebreak"></span>
    </p>
</div>
<div class="footer_contacts footer_block col-xl-3 pe-sm-5">
    <h4 class="about_info-fact_title aos-init aos-animate">{!! __('main.information') !!}</h4>
    <p class="footer_contacts-address">
        <a class="link" href="tel:{!! option('PhoneNumber') !!}"><i class="icon-phone"></i> {!! option('PhoneNumber') !!}</a>
        <a class="footer_contacts-mail" href="mailto:{!! option('Email') !!}">{!! option('Email') !!}</a>
        <p class="footer_copyright flex-grow-1">
         <span class="linebreak">{!! __('main.All_reserved') !!}</span>
         @if(option('Language') == 'on')
         @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
         <a  class="text-dark" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
          {{ $properties['native'] }}
      </a>
      @endforeach 
      @else
      @endif
  </p>
</div>
</div>
</footer>
<!-- =========================================== script =================================== -->
<script src="{{ asset('assets/js/other.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- =========================================== script =================================== -->
</body>
</html>
