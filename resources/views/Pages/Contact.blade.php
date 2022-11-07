@extends('layouts.main')

@section('content')
<!--********************* SITE CONTENT *********************-->
<!--********************************************************-->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ===========================================  content =================================== -->
<main>
  <!-- promo section start -->
  <section class="promo section mt-5" 
  style="background: url('{!! asset(option('covernew')) !!}') center/cover no-repeat,rgba(32,32,32,.7);">
  <div class="container">
    <div class="promo_content col-xl-4">
      <h1 class="promo_content-header">{!! __('main.Contact_Us') !!}</h1>
      <p class="promo_content-text text">
        {!! __('main.Play_Everywhere') !!}
      </p>
    </div>
  </div>
  <span class="overlay"></span>
</section>
<!-- promo section end -->
<section class="contacts section">
  <div class="container">
    <div class="contacts_main d-flex flex-column flex-lg-row justify-content-between">
      <ul class="contacts_main-data">
        <li class="contacts_main-data_item">
          <h3 class="title">{!! __('main.E-Mail_Address') !!}</h3>
          <a class="data link" href="mailto:{!! option('Email') !!}">{!! option('Email') !!}</a>
        </li>
        <li class="contacts_main-data_item">
          <h3 class="title">{!! __('main.Address') !!}</h3>
          <span class="data">{{ option('Address') }}</span>
        </li>
        <li class="contacts_main-data_item contacts_main-data_item--tel">
          <h3 class="title">{!! __('main.PhoneNumber') !!}</h3>
          <div class="wrapper d-flex flex-column flex-md-row">
            <a class="data link" href="tel:{!! option('PhoneNumber') !!}">
             {!! option('PhoneNumber') !!}
           </a>
         </div>
       </li>
     </ul>
     <!--   ================  Messagge ==============================================  -->
     @if(session('Messagge'))
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
    <!-- ===============================  Messagge  ==================================== -->
    <!-- ================================ Messagge  ==================================== -->
    <script>
      function Contacts() {
        var x = document.forms["Contact"]["Content"].value;
        if (x == null || x == "" || x.length > 50 ) {
         window.location.href = '{{ url('') }}';
         return false;
       }
     }
   </script>
   <!-- ================================ Messagge  ================================ -->
   <form class="col-lg-8" method="post" action="{{ route('Contact.store') }}" name="Contact" onsubmit="return Contacts()">
     {{ csrf_field() }}
     <div class="form-block">
      <label class="contacts_main-form_label">{!! __('main.Name_surname') !!}</label>
      <input
      class="field field--corner required width-100"
      type="text"
      name="name"
      placeholder="{!! __('main.Name_surname') !!}"
      />
      @error('name')
      <div class="uk-alert-warning" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{ $message }}</p>
      </div>
      @enderror
    </div>
    <div class="form-block">
      <label class="contacts_main-form_label">{!! __('main.Create_Message') !!}</label>
      <textarea
      class="field field--corner optional width-100"
      name="Message"
      placeholder="{!! __('main.Create_Message') !!}"
      data-type="message"></textarea>
      @error('Message')
      <div class="uk-alert-warning" uk-alert>
        <a class="uk-alert-close" uk-close></a>
        <p>{{ $message }}</p>
      </div>
      @enderror
    </div>
    <button class="schedule_btn btn btn-primary" type="submit">{{ __('main.Message')}} </button>
  </form>
</div>
</div>
</section>

</main>
<!-- ===========================================  content =================================== -->
@endsection
