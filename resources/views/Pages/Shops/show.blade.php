@extends('layouts.main')

@section('content')
<!-- ===================================== Content Start ===================================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ============================================= content =================================== -->
<main class="post">
  <!-- promo section start -->
  <section class="promo section" 
  style="background: url('{!! asset(option('coverMessage')) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
  <div class="container">
      <div class="promo_content col-xl-6 mt-5">
          <h3 class="promo_content-header">{!! $Shop->{'Title_'.$Locale} !!}</h3>
          <p class="promo_content-text text">
            {!! $Shop->sku !!} 
        </p>
    </div>
</div>
<span class="overlay"></span>
</section>
<!-- promo section end -->
<div class="container d-lg-flex mt-5">
    <div class="post_main">
        <article class="post_main-article">
            <div class="post_main-article_img">
                <img class="lazy post-img border-rad" src="{!! asset($Shop->ImageUpload->filename) !!}"/>
            </div>
            <div class="post_main-article_header">
                <h2 class="title">{!! $Shop->{'Title_'.$Locale} !!}</h2>
                <div class="info highlight d-flex flex-wrap">
                    <span class="info_posted flex-grow-1 flex-sm-grow-0">
                        {!! date('M j, Y', strtotime($Shop->created_at)) !!}
                    </span>
                </div>
            </div>
            <div class="post_main-article_content">
                <p class="text">
                    {!! $Shop->{'body_'.$Locale} !!}
                </p>
            </div>
            <div class="post_aside-block--categories">
                <ul class="list display-inline p-2">
                    <li class="list-item">
                        <a class="link">-  {!! $Shop->sku !!}</a>
                    </li>
                    <li class="list-item">
                        <a class="link">-  {!! $Shop->price !!}</a>
                    </li>
                </ul>  
            </div>
        </article>
        <section class="post_main-comments mt-5">
            @if(isset($Shop->Comments)) 
            <h4 class="post_main-comments_header">{{ count($Shop->Comments) }} {{ __('main.Comments')}}</h4>
            @else
            <h4 class="post_main-comments_header">0 {{ __('main.Comments')}}</h4>
            @endif     
            <ul class="post_main-comments_list">
              <!-- =============================== Comments Posts ======================================== -->
              @foreach($Comments as $comment) 
              <li class="comment">
                <div class="comment_wrapper d-flex">
                  <span class="comment_wrapper-avatar">
                    <picture>
                     @if(isset($comment->User->ImageUpload->filename))
                     <img class="lazy avatar border-rad" 
                     src="{{ asset($comment->User->ImageUpload->filename) }}" 
                     alt="{!! $comment->User->name !!}" width="50" height="50"/>
                     @else
                     @endif
                 </picture>
             </span>
             <div class="comment_wrapper-main">
                @if(isset($comment->User->name))
                <span class="comment_wrapper-main_name">{!! $comment->User->name !!}</span>
                @else
                @endif
                <div class="comment_wrapper-main_info d-flex flex-column flex-sm-row align-items-sm-center">
                  <span class="timestamp highlight">{!! date('M j, Y', strtotime($comment->created_at)) !!}</span>
              </div>
              <p class="comment_wrapper-main_text">
                  {!! $comment->Comment !!}
              </p>
              <form class="display-inline" action="{{ route('Comments.destroy',$comment->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <p>
                     <button class="btn btn-primary btn-comment" type="submit">{{ __('Delete')}}</button>
                 </p>
             </form>
         </div>
     </div>
 </li>
 @endforeach
 <!-- =============================== Comments Posts ======================================== -->
</ul>
</section>
<section class="post_main-reply section--nopt mt-5">
    <h3 class="post_main-reply_header mb-3">{{ __('main.Reply')}}</h3>
    <form class="post_main-reply_form d-flex flex-wrap" method="post" action="{{ route('Comments.store')}}">
        {{ csrf_field() }}
        <input type="text" name="instagram_id" hidden="" value="{{ $Shop->id }}">
        <textarea type="text" class="field field--corner required @error('Comment') is-invalid @enderror" 
        name="Comment" rows="5" 
        placeholder="{{ __('main.Write_Comment')}}">
    </textarea>
    <button class="btn btn-primary" type="submit">{{ __('main.Reply')}}</button>
</form>
</section>
</div>
<aside class="post_aside mt-2">
  <div class="post_aside-block post_aside-block--search">

    <!-- ================================ Search form ================================================== -->
    <script>
      function SearchForm() {
        var x = document.forms["SearchForm"]["search"].value;
        if (x == null || x == "" || x.length > 30 ) {
          window.location.href = '{{ url('') }}';
          return false;
      }
  }
</script>
<!-- ================================ Search form ===================================================== -->
<form class="form d-flex" method="GET" action="{{ url('search') }}" role="search" name="SearchForm" onsubmit="return SearchForm()">
   {{ csrf_field() }}
   <input name="search" class="field required border-rad" type="search" placeholder="{{ __('main.Training_Search')}}" />
   <button class="btn" type="submit">
    <i class="icon-search"></i>
</button>
</form>
</div>
<div class="post_aside-block post_aside-block--recent">
    <h4 class="post_aside-block_header">{!! __('main.Blog_Posts') !!}</h4>
    <ul class="list">
      @foreach(Blogs() as $Blog)
      <li> 
          <h5><a href="{{ url('Blogs') }}/{{ $Blog->slug }}" class="title blog_footer">{{ $Blog->{'Title_'.$Locale} }}</a></h5>
          <span>{{ date('M j, Y', strtotime($Blog->created_at)) }}</span>
      </li>
      @endforeach
  </ul>
</div>
<div class="post_aside-block post_aside-block--categories">
    <h4 class="post_aside-block_header">{!! __('main.Categories') !!}</h4>
    <ul class="list">
      @foreach($Categories as $Category)
      <li class="list-item"> 
        <a class="link" href="{!! url('Cat') !!}/{!! $Category->slug  !!}">
          {!! $Category->{'Title_'.$Locale} !!}
      </a>
  </li>
  @endforeach  
</ul>
</div>
<div class="post_aside-block post_aside-block--categories">
    <h4 class="post_aside-block_header">{!! __('main.Buy_Product') !!}</h4>
    <ul class="list">
      <!--================ Start Popular Causes Area =================-->        
      <form  method="GET" id="payment-form" action="{!! URL::to('paypal') !!}">
        {!! csrf_field() !!}
        <input type="hidden" name="_token" value="ug6eemUCaFgFpEhMsNXGItcSnp67y91yci5xvp3J">

        <div class="form-block">
          <label class="contacts_main-form_label">{!! __('main.Buy_Price') !!}</label>
          <input
          class="field field--corner required width-100"
          id="amount" type="text" name="amount" placeholder="{!! __('main.Buy_Price') !!}"/>
      </div>
      <button class="btn btn-primary btn-comment" type="submit">
       {{ __('main.Buy_Product')}} 
   </button>
</form>  
</ul>
</div>
</aside>
</div>
</main>
<!-- ================================ Content ============================================== -->
@endsection