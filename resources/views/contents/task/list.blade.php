@extends('layouts.master')
@section('title_site','Task List')
@section('task_list','active')
@section('title_page','Task List')

@section('breadcumb_nav')
    <li class="breadcrumb-item">Task</a>
    </li>
    <li class="breadcrumb-item active">Task List</li>
@endsection


@section('content')
<section id="listData">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-content collapse show">
          <div class="card-body">
            <div class="table-responsive table-data">
              <table data-order='[[ 0, "desc" ]]' class="table table-middle table-bordered table-hover" id="tasktable" width="100%">
                <thead>
                  <tr>
                    <td>ID</td>
                    <td>Task</td>
                    <td>Priority</td>
                    <td>Unit</td>
                    <td>Actions</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($orders as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                      @if ($item->priority == 'E')
                        <span class="badge badge-danger">{{ $item->priority }}</span>
                      @endif
                      @if ($item->priority == '1')
                        <span class="badge badge-warning">{{ $item->priority }}</span>
                      @endif
                      @if ($item->priority == '2')
                        <span class="badge badge-primary">{{ $item->priority }}</span>
                      @endif
                      @if ($item->priority == '3')
                        <span class="badge badge-info">{{ $item->priority }}</span>
                      @endif
                      @if ($item->priority == '4')
                        <span class="badge badge-success">{{ $item->priority }}</span>
                      @endif
                    </td>
                    <td>{{ $item->unit }}</td>
                    <td id="action-menu">
                      <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                      <div class="dropdown-menu" x-placement="bottom-start">
                      
                        <a data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#detail" class="dropdown-item preview" data-order_id="{{ $item->id }}" data-nama="{{ $item->pegawais->nama }}" data-executor="{{ $item->executors->nama }}">Detail</a>
                        <a data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#confirm" class="dropdown-item" data-order_id="{{ $item->id }}" data-nama="{{ $item->pegawais->nama }}" data-executor="{{ $item->executors->nama }}"></i>Confirm</a>

                        <div class="dropdown-divider"></div>
                        
                        <a data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#reject" class="dropdown-item reject" data-order_id="{{ $item->id }}" data-nama="{{ $item->pegawais->nama }}" data-executor="{{ $item->executors->nama }}">Reject</a>

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
  </div>

 <div class="modal fade text-left" id="reject" tabindex="-1" role="dialog" aria-hidden="true">
    @include('modals.reject')
    
  </div>

  <script>
      $(document).ready(function() {
        $('#reject').on('shown.bs.modal', function(e) {
          var id = $('#action-menu').data('order_id');
          console.log(id);
          $('#id').val(id);
          $('#tujuan').val('unit');
        });
      });
  </script>

<div class="modal fade text-left" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
  @include('modals.detail_task')

</div>

  <div class="modal fade text-left" id="confirm" tabindex="-1" role="dialog" aria-hidden="true">
    @include('modals.pegawai')
    <script type="text/javascript">
      $(document).ready(function() {
           $('#tasktable').DataTable();
           var table = $('#datatables').DataTable();
           $('#datatables tbody').on('click','tr',function() {
             $(this).toggleClass('selected');
             var no_badge = $.map(table.rows('.selected').data(), function(item) {
                return item[0];
             });
             $('#modal .close').click();
             $(this).removeClass('selected');
             var id = $('#action-menu').data('order_id');
             var uri = "{{ url('/') }}";
             var url = uri + '/confirm/'+no_badge+'/'+id;
             console.log(id);
             $.ajax({
               url: url,
               type: "GET",
               dataType: "json",
               success: function (data) {
                 console.log('masuk sini');
                 window.location.href = "{{ route('progress') }}";
               }
             });
           });

           $('.preview').click(function() {
            window.item_id = $(this).data('order_id');
            window.nama = $(this).data('nama');
            window.executor = $(this).data('executor');
           });

           $('.reject').click(function() {
            window.item_id = $(this).data('order_id');
            window.nama = $(this).data('nama');
            window.executor = $(this).data('executor');
           });

           $('#detail').on('shown.bs.modal', function() {
             var id = window.item_id;
             var nama = window.nama;
             var executor = window.executor;
             console.log(id);
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
                   $('#pop').val(data.penghentian);
                   $('#ketentuan').val(data.ketentuan);
                   $('#finished_at').val(data.finished_at);
                   $('#keterangan').val(data.keterangan);
               }
             });
           });
      }); 
   </script>
  </div>

</section>

@endsection

@section('customjs')

<script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="../../../assets/datatables/datatables.min.css"/>
<script type="text/javascript" src="../../../assets/datatables/datatables.min.js"></script>

@endsection
