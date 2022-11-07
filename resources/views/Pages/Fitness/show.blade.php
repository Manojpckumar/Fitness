@extends('layouts.main')

@section('content')
<!-- ===================================== Content Start ===================================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ============================================= content =================================== -->
<main class="post">
  <!-- promo section start -->
  <section class="promo section" 
  style="background: url('{!! asset($Fitnes->ImageUpload->filename) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
  <div class="container">
      <div class="promo_content col-xl-6 mt-5">
          <h3 class="promo_content-header">{!! $Fitnes->{'Title_'.$Locale} !!}</h3>
          <p class="promo_content-text text">
            @if(isset($Fitnes->Category->{'Title_'.$Locale}))
            <p>{!! $Fitnes->Category->{'Title_'.$Locale} !!}</p>
            @else
            @endif
        </p>
    </div>
</div>
<span class="overlay"></span>
</section>
<!-- promo section end -->
<div class="container d-lg-flex mt-5">
    <div class="post_main">
        <article class="post_main-article">
            
            <div class="post_main-article_header">
                <h2 class="title">{!! $Fitnes->{'Title_'.$Locale} !!}</h2>
                <div class="info highlight d-flex flex-wrap">
                    <span class="info_posted flex-grow-1 flex-sm-grow-0">
                        {!! date('M j, Y', strtotime($Fitnes->created_at)) !!}
                    </span>
                </div>
            </div>
            <div>
                <iframe width="870" height="350" src="{!! $Fitnes->video !!}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="post_main-article_content">
                <p class="text">
                    {!! $Fitnes->{'body_'.$Locale} !!}
                </p>
            </div>
            <div class="post_aside-block--categories">
                <ul class="list display-inline p-2">
                    <li class="list-item">
                        <a class="link">
                          - {!! __('main.Categories') !!} : @if(isset($Fitnes->Category->{'Title_'.$Locale}))
                          {!! $Fitnes->Category->{'Title_'.$Locale} !!}
                          @else
                          @endif
                      </a>
                  </li>
                  <li class="list-item">
                    <a class="link">-  {!! __('main.training_hours') !!} : {!! $Fitnes->time !!}</a>
                </li>
                <li class="list-item">
                    <a class="link">-  {!! __('main.type') !!} : {!! $Fitnes->type !!}</a>
                </li>
                <li class="list-item">
                    <a class="link">-  {!! __('main.price') !!} : {!! $Fitnes->price !!}</a>
                </li>
                <li class="list-item">
                    <a class="link">-  {!! __('main.days') !!} : {!! $Fitnes->days !!}</a>
                </li>
                <li class="list-item">
                    <a class="link">-  {!! __('main.movements') !!} : {!! $Fitnes->movements !!}</a>
                </li>
                <li class="list-item">
                    <a class="link">-  {!! __('main.liters') !!} : {!! $Fitnes->liters !!}</a>
                </li>
                <li class="list-item">
                    <a class="link">-  {!! __('main.supplement') !!} : {!! $Fitnes->supplement !!}</a>
                </li>
                <li class="list-item">
                    <a class="link">-  {!! __('main.tools') !!} : {!! $Fitnes->tools !!}</a>
                </li>
                <a class="btn btn-primary" download href="{!! asset($Fitnes->pdf_file) !!}">
                   {!! __('main.pdf_file') !!}
               </a>
           </ul>  
       </div>
   </article>
   <section class="post_main-comments mt-5">
    @if(isset($Fitnes->Comments)) 
    <h4 class="post_main-comments_header">{{ count($Fitnes->Comments) }} {{ __('main.Comments')}}</h4>
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
        <input type="text" name="Post_id" hidden="" value="{{ $Fitnes->id }}">
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
<!-- ================================ Messagge  ==================================== -->
<script>
    function Order() {
      var x = document.forms["Order"]["Content"].value;
      if (x == null || x == "" || x.length > 50 ) {
         window.location.href = '{{ url('') }}';
         return false;
     }
 }
</script>
<!--   ================  Messagge ==============================================  -->
@if(session('Order'))
<p>{{ __('main.Congratulations_Message')}}</p>
@endif
<!--   ===============================  Messagge  ==============================  -->
@if ($errors->any()) 
<p>
    @foreach ($errors->all() as $error)
    {{ $error }}
    @endforeach
</p>  
@endif
<div class="post_aside-block">
 <form class="form" method="post" action="{!! route('Order.store') !!}" name="Order" onsubmit="return Order()">
    {!! csrf_field() !!}
    <div class="form-block">
      <label class="contacts_main-form_label">{!! __('main.Name_surname') !!}</label>
      <input
      class="field field--corner required width-100"
      type="text"
      name="Name"
      placeholder="{!! __('main.Name_surname') !!}"/>
      @error('name')
      <p>{{ $message }}</p>
      @enderror
  </div>
  <div class="form-block mb-3">
      <label class="contacts_main-form_label">{!! __('main.Create_Message') !!}</label>
      <textarea
      class="field field--corner optional width-100"
      name="Content"
      placeholder="{{ __('main.Book_with')}}"
      data-type="message"></textarea>
      @error('Message')
      <p>{{ $message }}</p>
      @enderror
  </div>
  <button class="btn btn-primary btn-comment" type="submit">{!! __('main.Order_Program') !!} </button>
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
    <h4 class="post_aside-block_header">{!! __('main.Buy_Exercise') !!}</h4>
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
       {{ __('main.Buy_Exercise')}} 
   </button>
</form>  
</ul>
</div>
</aside>
</div>
</main>
<!-- ================================ Content ============================================== -->
@endsection