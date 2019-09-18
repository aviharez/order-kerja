<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template.">
  <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Approvement | POK</title>
  <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../app-assets/images/ico/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../app-assets/images/ico/favicon-16x16.png">
  <link rel="manifest" href="../../../app-assets/images/ico//site.webmanifest">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,400,500,700"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN ROBUST CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
  <!-- END ROBUST CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-top-icon-menu.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <script src="{{URL::asset('assets/vendor/jquery-3.2.1.min.js')}}"></script>
  <!-- END Custom CSS-->
</head>
<body class="horizontal-layout horizontal-top-icon-menu 2-columns   menu-expanded"
data-open="hover" data-menu="horizontal-menu" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-static-top navbar-light navbar-border navbar-shadow navbar-brand-center">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item">
            <a class="navbar-brand">
              <img class="brand-logo" alt="robust admin logo" src="../../../app-assets/images/logo/logonya.png">
              <h3 class="brand-text">POK</h3>
            </a>
          </li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          </ul>
          <ul class="nav navbar-nav float-right">
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="../../../app-assets/images/portrait/small/avatar-s-1.png"
                  alt="avatar"><i></i></span>
                <span class="user-name">{{ $pegawai }}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                  <a class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="/login"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <h3 class="content-header-title">Order Approvement</h3>
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
        <!-- Zero configuration table -->
        <section id="configuration">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-content collapse show">
                  <div class="card-body card-dashboard">
                    <table data-order='[[ 0, "desc" ]]' class="table table-bordered zero-configuration">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama</th>
                          <th>Order</th>
                          <th>Eksekutor</th>
                          <th>Tanggal Pengajuan</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($orders as $item)
                              <tr>
                                  <td>{{ $item->id }}</td>
                                  <td>{{ $item->pegawais->nama }}</td>
                                  <td>{{ $item->description }}</td>
                                  <td>{{ $item->executors->nama }}</td>
                                  <td>{{ $item->created_at }}</td>
                              <td id="action-menu">
                                                <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu" x-placement="bottom-start">
                                                  <a data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#detail" class="dropdown-item btndetail" data-order_id="{{ $item->id }}" data-nama="{{ $item->pegawais->nama }}" data-executor="{{ $item->executors->nama }}">Detail</a>
                                                  <a class="dropdown-item approve" href={{ route('approve', $item->id) }}>Approve</a>
                                                <a data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#reject" class="dropdown-item btnreject" data-order_id="{{ $item->id }}" data-nama="{{ $item->pegawais->nama }}" data-executor="{{ $item->executors->nama }}">Reject</a>
                                                </div>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
 
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/ Zero configuration table -->
      </div>
    </div>
  </div>

  <div class="modal fade text-left" id="reject" tabindex="-1" role="dialog" aria-hidden="true">
    @include('modals.reject')

  </div>

  <div class="modal fade text-left" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
    @include('modals.detail')

  </div>

  <script>
      $(document).ready(function() {
        $('.btnreject').click(function() {
          window.item_id = $(this).data('order_id');
          window.nama = $(this).data('nama');
          window.executor = $(this).data('executor');
        });

        $('.btndetail').click(function() {
          window.item_id = $(this).data('order_id');
          window.nama = $(this).data('nama');
          window.executor = $(this).data('executor');
        });

        $('#reject').on('shown.bs.modal', function(e) {
          var id = window.item_id;
          $('#id').val(id);
          $('#tujuan').val('apr');
        });

        $('#detail').on('shown.bs.modal', function(e) {
          var id = window.item_id;
          var nama = window.nama;
          var executor = window.executor;
          var url = '/detail-order/'+id;
          $.ajax({
            url: url,
            type: "GET",
            dataType: "json",
            success: function (data) {
              console.log(data);
                $('#peminta').val(nama);
                $('#tanggal').val(data.created_at);
                $('#kd_mesin').val(data.kd_mesin);
                $('#description').text(data.description);
                $('#prioritas').val(data.priority);
                $('#eksekutor').val(executor);
                $('#pop').val(data.penghentian);
                $('#ketentuan').val(data.ketentuan);
                $('#status').val(data.status);
                $('#approved_at').val(data.approved_at);
                $('#confirmed_at').val(data.confirmed_at);
                $('#confirmed_by').val(data.confirmed_by);
                $('#finished_at').val(data.finished_at);
                $('#keterangan').text(data.keterangan);
            }
          });
        });

        });

      $(window).on('load', function() {
        $('#manager').modal('show');
      });
  </script>

  <div class="modal fade text-left" id="manager" tabindex="-1" role="dialog" aria-hidden="true">
      @include('modals.manager');
    </div>

  {{-- <script>
    $(document).ready(function() {
     
    });
    
    </script> --}}


  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="http://www.pupuk-kujang.co.id"
        target="_blank">
        TI PKC </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script type="text/javascript" src="../../../app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
  <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN ROBUST JS-->
  <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END ROBUST JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="../../../app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
  <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>