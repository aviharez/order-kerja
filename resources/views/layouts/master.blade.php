<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>@include('layouts.head')</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  <!-- fixed-top-->
  @include('layouts.navbar')
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.sidebar')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
          <h3 class="content-header-title mb-0 d-inline-block">@yield('title_page')</h3>
          <div class="row breadcrumbs-top d-inline-block">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                  @yield('breadcumb_nav')
              </ol>
            </div>
          </div>
        </div>
        <div class="content-header-right col-md-4 col-12">
          <div class="btn-group float-md-right">
            @yield('button_header')
          </div>
        </div>
      </div>
      @if (Session::has('_msg'))
        @php
            $e = session()->get('_e'); $msg = session()->get('_msg');
        @endphp
        <div class="alert alert-success alert-icon-left alert-dismissable mb-2" role="alert">
            <span class="alert-icon"><i class="fa fa-check-circle"></i></span>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Success. </strong>{{$msg}}
        </div>
      @endif
      @if (session('errors'))
          @if ($errors->any())
              <div class="bs-callout-primary callout-border-left mt-1 p-1" style="margin-bottom: 10px;">
                <button type="button" class="close" aria-label="Close" onclick="this.parentNode.parentNode.removeChild(this.parentNode)">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>Kesalahan Input</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
              </div>
          @endif
      @endif

      <div class="content-body">
          @yield('content')
      </div>
    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  @include('layouts.footer')
  <!-- BEGIN VENDOR JS-->
  <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="../../../app-assets/vendors/js/ui/prism.min.js"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN ROBUST JS-->
  <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END ROBUST JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
  @yield('customjs')
</body>
</html>