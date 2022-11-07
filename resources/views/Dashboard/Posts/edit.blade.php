@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
<div class="content "> 
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb">  
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item"><a href="{{ route('Posts.index') }}">{{ __('Programs')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Edit Programs')}}</li>
        </ol> 
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="fa fa-dumbbell"></i> {{ __('Edit')}} {{ $Post->Title_en }}</h3>
              </div>
            </div>
            <!-- END card -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PAGE COVER -->
  <!-- START CONTAINER FLUID -->
  <div class=" container-fluid container-fixed-lg">
    <!-- START card -->
    <div class="row">
      <div class="col-lg-9">
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">
              {{ __('Edit')}} {{ $Post->Title_en }}
            </div>
          </div>
          @if ($errors->any())    
          <div class="pgn-wrapper top-inline" data-position="top">
            <div class="pgn push-on-sidebar-open pgn-bar">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">{{ __('Close')}}</span></button>
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
              </div>
            </div>
          </div>
          @endif
          <div class="card-body">
           <!-- ========================= links Content Start Setting ============================================= -->
            <form action="{{ route('Posts.update',$Post->slug) }}" method="POST"  role="form" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group form-group-default required">
              <label for="Title_en">{{ __('Programs Title')}}</label>
              <input type="text" class="form-control @error('Title_en') is-invalid @enderror" required="" placeholder="ex: Programs" id="Title_en" name="Title_en" value="{{ $Post->Title_en }}">
              @error('Title_en')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 
            </div>
            <!-- START card -->
            <div class="card card-default">
              <div class="card-header ">
                <div class="card-title">{{ __('Programs Content')}}
                </div>
              </div>
              <div class="card-body no-scroll card-toolbar">
                <div class="summernote-wrapper">
                  <textarea  id='summernote' name="body_en">{{ $Post->body_en }}</textarea>
                </div>
              </div>
            </div>
            <!-- END card -->
            <div class="row">
              <div class="col-lg-12">
                <div class="sm-m-l-5 sm-m-r-5">
                  <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card card-default m-b-0">
                      <div class="card-header lang-title" role="tab" id="headingthree">
                        <div class="card-title">
                      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsethree" aria-expanded="false" aria-controls="collapseTwo" >
                      <button class="btn btn-primary btn-sm  btn-rounded m-r-10"> {{ __('Programs information')}}</button>
                      </a>
                      </div>
                      </div>
                      <div id="collapsethree" class="collapse" role="tabcard" aria-labelledby="headingthree">
                        <div class="card-body">
                        <div class="row">
                         <div class="tab-content bg-white col-xl-6">
                           <div class="form-group form-group-default input-group">
                            <div class="form-input-group">
                              <label>{{ __('Program Time')}}</label>
                              <input type="text" class="form-control" placeholder="Program Time" 
                                     name="time" value="{!!  $Post->time  !!}">
                            </div>
                          </div>
                          <div class="form-group form-group-default input-group">
                            <div class="form-input-group">
                              <label>{{ __('Program Type')}}</label>
                              <input type="text" class="form-control" placeholder="Program Type" name="type" value="{!!  $Post->type  !!}">
                            </div>
                          </div>
                           <div class="form-group form-group-default input-group">
                            <div class="form-input-group">
                              <label>{{ __('Price')}}</label>
                              <input type="text" class="form-control" placeholder="Price" value="{!!  $Post->price  !!}" name="price">
                            </div>
                          </div>
                          <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Meta Description')}}</label>
                          <input type="text" class="form-control" placeholder="Meta Description" value="{!!  $Post->meta_description  !!}" name="meta_description">
                          </div>
                        </div>
                        <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Meta keywords')}}</label>
                          <input type="text" class="form-control" placeholder="Meta keywords" value="{!!  $Post->meta_keywords  !!}" name="meta_keywords">
                          </div>
                        </div>
                        <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Program Days')}}</label>
                          <input type="text" class="form-control" placeholder="Program Days" value="{!!  $Post->days  !!}" name="days">
                          </div>
                        </div>
                        </div>
                        <div class="tab-content bg-white col-xl-6">
                            <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Number Of Movements')}}</label>
                          <input type="text" class="form-control" placeholder="Number Of Movements" value="{!!  $Post->movements  !!}" name="movements">
                          </div>
                        </div>
                        <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Number of liters of Water')}}</label>
                          <input type="text" class="form-control" placeholder="Number of liters of Water" value="{!!  $Post->liters  !!}" name="liters">
                          </div>
                        </div>
                        <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Type of nutritional Supplement')}}</label>
                          <input type="text" class="form-control" placeholder="Type of nutritional Supplement" value="{!!  $Post->supplement  !!}" name="supplement">
                          </div>
                        </div>
                        <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Playing Tools')}}</label>
                          <input type="text" class="form-control" placeholder="Playing Tools" value="{!!  $Post->tools  !!}" name="tools">
                          </div>
                        </div>
                        <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('Program File')}}</label>
                        <input type="text" class="form-control" placeholder="Program File" value="{!!  $Post->pdf_file  !!}" name="pdf_file">
                          </div>
                        </div>
                        <div class="form-group form-group-default input-group">
                          <div class="form-input-group">
                          <label>{{ __('video')}}</label>
                          <input type="text" class="form-control" placeholder="video" value="{!!  $Post->video  !!}" name="video">
                          </div>
                        </div>
                        </div>
                        </div>  
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- START card -->
             <div class="row">
              <div class="col-lg-6">
                <div class="sm-m-l-5 sm-m-r-5">
                  <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card card-default m-b-0">
                      <div class="card-header lang-title" role="tab" id="headingTwo">
                        <div class="card-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                        <button class="btn btn-primary btn-sm  btn-rounded m-r-10"> {{ __('France language')}}</button>  
                        </a>
                        </div>
                      </div>
                      <div id="collapseTwo" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                        <div class="card-body">
                          <div class="tab-content bg-white col-xl-12">
                        <div class="tab-pane active" id="France">
                          <div class="form-group form-group-default">
                            <label>{{ __('Program France language Title')}}</label>
                            <input type="text" name="Title_fr" class="form-control" placeholder="ex:Program France language Title" value="{{ $Post->Title_fr }}"> 
                          </div>
                          <!-- START card -->
                          <div class="form-group">
                            <textarea class="form-control" name="body_fr" placeholder="France language Content" rows="10">  {{ $Post->body_fr }}   
                            </textarea>
                          </div>
                        </div>
                      </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="sm-m-l-5 sm-m-r-5">
                  <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
                     <div class="card card-default m-b-0">
                      <div class="card-header lang-title" role="tab" id="headingThree">
                        <div class="card-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
                            <button class="btn btn-primary btn-sm  btn-rounded m-r-10"> {{ __('Arabic language')}}</button> 
                            </a>
                        </div>
                      </div>
                      <div id="collapseThree" class="collapse" role="tabcard" aria-labelledby="headingThree">
                        <div class="card-body">
                          <div class="tab-pane" id="Arabic">
                          <div class="form-group form-group-default">
                            <label>{{ __('Program Title Arabic')}}</label>
                            <input type="text" value="{{ $Post->Title_ar }}" class="form-control" name="Title_ar"  placeholder="ex:  The title for your Program"> 
                          </div>
                          <!-- START card -->
                          <div class="form-group">
                            <textarea class="form-control" name="body_ar" placeholder="Program Content Arabic" rows="10">{{ $Post->body_ar }}</textarea>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


            <!-- END card -->
            <button class="btn btn-success btn-cons btn-animated from-left fa fa-save pull-right" type="submit">
              <span>{{ __('save')}}</span>
            </button>
          </div>
        </div>
        <!-- END card -->
      </div>
      <div class="col-lg-3">
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">{{ __('Program Content')}}</div>
          </div>
          <div class="card-body">
              <p>{{ __('These are Default Program Category')}}</p>
              <div class="form-group form-group-default form-group-default-select2 required">
                <label>{{ __('Category')}}</label>
                <select class="full-width" data-placeholder="Select Category" data-init-plugin="select2" name="category_id">
                  <!-- ============================================= links Content Start Post ============================================= -->
                  @if(isset($Post->Category->Title_en))
                   <option value="{{ $Post->Category->id }}">Your {{ $Post->Category->Title_en }}</option>
                  @else
                  @endif
                  <!-- ===================== links Content Start Setting =========================== -->
                  <!-- ========================== links Content Start Setting ====================== -->
                  @if($Categores !== NULL)
                  @foreach($Categores as $Category)
                  <option value="{{ $Category->id }}">{{ $Category->Title_en }}</option>
                  @endforeach
                  @else
                  <option value="0">{{ __('NO Category')}}</option>
                  @endif
                  <option value="0">{{ __('NO Category')}}</option>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                </select>
              </div> 
              <p>{{ __('These are Default Program Created by')}} </p>
              <div class="form-group form-group-default form-group-default-select2 required">
                <label class="">{{ __('Created by')}}</label>
                <select class="full-width" data-placeholder="Select Created by" data-init-plugin="select2" name="author_id">
                  <!-- ============================================= links Content Start Post ============================================= -->
                  @if(isset($Post->User->name))
                   <option value="{{ $Post->User->id }}">{{ __('Created by')}} {{ $Post->User->name }}</option>
                  @else
                  @endif
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  <!-- ============================================= links Content Start Setting ============================================= -->
                  @if($Users !== NULL)
                  @foreach($Users as $Author)
                  <option value="{{ $Author->id }}">{{ $Author->name }}</option>
                  @endforeach
                  @else
                  <option value="0">{{ __('NO Created by')}}</option>
                  @endif
                  <option value="0">{{ __('NO Created by')}}</option>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                </select> 
              </div>
            <label>{{ __('Sliders')}}</label>
            <input type="checkbox" data-init-plugin="switchery"  name="featured" 
             <?php if($Post->featured == 'on') {echo "checked";}else{echo "value='on'";}?> />
             <span> Dont Change Image </span>
             <input type="checkbox" id="button"  onclick="myFunction()"> 
             <script>  
              function myFunction() {
                var myobj = document.getElementById("demo");
                myobj.remove();
              } 
              </script>
               <input type="hidden"  name="ImageUpload_id" value="{{ $Post->ImageUpload_id }}">
               <input  type="hidden"  name="ImageUpload_id" value="{{ $ImageUpload }}" id="demo">
            </form>
          </div>
        </div>
        <!-- END card -->
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header">
            <div class="card-title">
              {{ __('Drag and drop Program Image Upload')}}
            </div>
          </div>
          <div class="card-body no-scroll no-padding">
            <form method="post" action="{{url('Dashboard/image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
                <span class="thumbnail-wrapper d48 circul2 inline">
                @if(isset($Post->ImageUpload->filename))
                 <img src="{{ asset($Post->ImageUpload->filename) }}" alt="Your Program" data-src="{{ asset($Post->ImageUpload->filename) }}" width="42" height="42">
                 @else
                 <img alt="Program" width="42" height="42">
                 @endif
                </span>
               @csrf
              </form>
        </div>
      </div>
<!-- END card -->
</div>
</div>
<!-- END card -->
</div>
<!-- END CONTAINER FLUID -->
</div>
<!-- END PAGE CONTENT -->
@endsection