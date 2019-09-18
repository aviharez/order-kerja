@extends('layouts.master')
@section('title_site','Finished Task')
@section('finished_task','active')
@section('title_page','Finished Task')

@section('breadcumb_nav')
    <li class="breadcrumb-item">Task</a>
    </li>
    <li class="breadcrumb-item active">Finished Task</li>
@endsection

@section('content')
<div class="content-body">
    <section class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <!-- Task List table -->
              <div class="table-responsive">
                <table id="ordertable" data-order='[[ 0, "desc" ]]' class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle zero-configuration" width="100%"">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Task</th>
                      <th>Priority</th>
                      <th>Unit</th>
                      <th>Tanggal</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($orders as $item)
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
                        <td>{{ $item->updated_at }}</td>
                        <td id="action-menu">
                                <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                <div class="dropdown-menu" x-placement="bottom-start">
                                  <a data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#detail" class="dropdown-item preview" data-order_id="{{ $item->id }}" data-nama="{{ $item->pegawais->nama }}" data-executor="{{ $item->executors->nama }}">Detail</a>
                                </div>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!--/ Task List table -->
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
         var table = $('#ordertable').DataTable();

         $('.preview').click(function() {
            window.item_id = $(this).data('order_id');
            window.nama = $(this).data('nama');
            window.executor = $(this).data('executor');
         });

         $('#detail').on('show.bs.modal', function(e) {
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
               $('#unit').val(data.unit);
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

<div class="modal fade text-left" id="detail" tabindex="-1" role="dialog" aria-hidden="true">
  @include('modals.detail_task')

</div>

@endsection

@section('customjs')

<script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="../../../assets/datatables/datatables.min.css"/>
<script type="text/javascript" src="../../../assets/datatables/datatables.min.js"></script>

@endsection