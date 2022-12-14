@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
<!-- ====================== links Roles Content Start =============================================== -->
  @if ($message = Session::get('success'))
  <div class="pgn-wrapper" data-position="top-right">
    <div class="pgn push-on-sidebar-open pgn-flip">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">×</span>
          <span class="sr-only">{{ __('Close')}}</span>
        </button><span>{{ $message }}</span>
      </div>
    </div>
  </div>
  @endif 
  <!-- ====================== links Roles Content Start =============================================== -->
  @if ($message = Session::get('Delete'))
  <div class="pgn-wrapper" data-position="bottom-right">
    <div class="pgn push-on-sidebar-open pgn-flip">
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">×</span>
          <span class="sr-only">{{ __('Close')}}</span>
        </button><span>{{ $message }}</span>
      </div>
    </div>
  </div>
  @endif
  <!-- ====================== links Roles Content Start =============================================== -->
<div class="content ">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Shops')}}</li>
        </ol>
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3>
                  <i class="fas fa-shopping-basket"></i> {{ __('Shops')}} 
                  <a href="{{ route('Instagrams.create') }}" class="btn btn-tag btn-success btn-tag-rounded">
                   {{ __('Add Shops')}} 
                  </a>
                </h3>
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
  <div class=" container-fluid   container-fixed-lg bg-white">
    <!-- START card -->
    <div class="card card-transparent">
      <div class="card-header ">
        <div class="card-title">{{ __('Table Shops')}}
        </div>
        <div class="pull-right">
          <div class="col-xs-12">
            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="card-body">
        <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
          <thead>
            <tr>
              <th>{{ __('Image')}}</th>
              <th>{{ __('Tiltle')}}</th>
              <th>{{ __('Content')}}</th>
              <th class="text-right">{{ __('Edit')}}</th>
              <th class="text-right">{{ __('Delete')}}</th>
            </tr>
          </thead>
          <tbody>
            <!-- ================================ Instagrams Content Start ======================== -->
            @foreach($Instagrams as $Instagram)
            <tr>
              <td class="v-align-middle semi-bold">
                <span class="thumbnail-wrapper d48 circul2 inline">
                @if(isset($Instagram->ImageUpload->filename))
                 <img src="{{ asset($Instagram->ImageUpload->filename) }}" alt="{{ $Instagram->Title_en  }}" data-src="{{ asset($Instagram->ImageUpload->filename) }}" width="32" height="32">
                 @else
                 <td class="v-align-middle"><a class="btn btn-tag">{{ __('Images')}}</a></td>
                 <img alt="{{ $Instagram->Title_en  }}" width="32" height="32">
                 @endif
                </span>
              </td>
              <td class="v-align-middle semi-bold">
                <p>{{ $Instagram->Title_en  }}</p>
              </td>
              <td class="v-align-middle">{{ $Instagram->body_en  }}</td>
              <td class="v-align-middle text-right">
                <p>
                <a href="{{ route('Instagrams.edit',$Instagram->slug) }}" 
                   class="btn btn-complete btn-cons btn-animated from-left fa fa-edit">
                   <span>{{ __('Edit')}}</span>
                 </a>
                </p>
              </td>
              <td class="v-align-middle text-right">
                <p>
                <form action="{{ route('Instagrams.destroy',$Instagram->id) }}" method="POST" class="displayinline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-cons btn-animated from-top fa  fa-remove">
                    <span>{{ __('Delete')}}</span>
                  </button>
                </form>
                </p>
              </td>
            </tr>
            @endforeach
            <!-- ================================ Instagrams Content Start ======================== -->
          </tbody>
        </table>
        <!-- ====================== links Instagrams Content Start =============================================== -->
         {{ $Instagrams->links() }}
        <!-- ====================== links Instagrams Content Start =============================================== -->
      </div>
    </div>
    <!-- END card -->
  </div>
  <!-- END CONTAINER FLUID -->
</div>
<!-- END PAGE CONTENT -->
@endsection