@extends('layouts.master')
@section('title_site','Buat Permintaan')
@section('buat_permintaan','active')
@section('title_page','Buat Permintaan')

@section('breadcumb_nav')
    <li class="breadcrumb-item">Permintaan</a>
    </li>
    <li class="breadcrumb-item active">Buat Permintaan</li>
@endsection

@section('content')
<div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" id="horz-layout-basic">Info Permintaan</h4>
            </div>
            <div class="card-content collpase show">
              <div class="card-body">
              <form class="form form-horizontal" method="POST" action="{{ url('order') }}">
                  {{ csrf_field() }}
                  <div class="form-body">
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput1">Nama Peminta</label>
                      <div class="col-md-9">
                        {{-- <input type="text" id="projectinput1" class="form-control" placeholder="First Name"
                        name="fname"> --}}
                        <fieldset>
                            <div class="input-group">
                              <input type="hidden" name="no_badge" id="no_badge"/>
                              <input type="hidden" name="unit" id="unit"/>
                              <input type="text" class="form-control" placeholder="Pilih Peminta" aria-describedby="button-addon2" id="pegawai" name="pegawai" disabled>
                              <div class="input-group-append">
                                <button class="btn btn-primary" type="button" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#add" data-id="1234" data-post="data-php" data-action="view">Pilih Pegawai</button>
                              </div>
                            </div>
                          </fieldset>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput2">Prioritas</label>
                      <div class="col-md-9">
                        <select id="projectinput6" name="priority" class="select2 form-control">
                          <option value="none" selected="" disabled="">-- Prioritas --</option>
                          <option value="E">E</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput3">Kode & Nomor Mesin</label>
                      <div class="col-md-9">
                        <input type="text" id="projectinput3" class="form-control" placeholder="Kode & Nomor Mesin" name="kd_mesin">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput4">Deskripsi</label>
                      <div class="col-md-9">
                        <textarea id="projectinput9" rows="5" class="form-control" name="description" placeholder="Deskripsi"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput5">Kategori</label>
                      <div class="col-md-9">
                        <select id="category" name="category" class="form-control">
                            <option value="none" selected="" disabled="">-- Pilih Kategori --</option>
                            <option value="Pabrik">Pabrik</option>
                            <option value="Non-Pabrik">Non Pabrik</option>
                        </select>
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput6">Eksekutor</label>
                      <div class="col-md-9">
                        <select id="executor" name="executor" class="select2 form-control">
                          <option value="none" selected="">-- Pilih Eksekutor --</option>
                          @foreach ($executor as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        <script type="text/javascript">
                          window.url = "{{ url('/') }}"
                          $('#category').on('change', function() {
                            $('#executor').empty();
                            var category = $('#category').val();
                            var url = window.url + '/executor/'+category;
                            $.ajax({
                              url: url,
                              type: "GET",
                              dataType: "json",
                              success: function (data) {
                                console.log(data);
                                $('#executor').html('<option selected="" value=""> -- Pilih Eksekutor -- </option>');
                                $.each(data, function (key, value) {
                                  $('#executor').append('<option value="'+value.id+'">'+value.nama+'</option>');
                                });
                              }
                            });
                          }); 
                        </script>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput7">Penghentian Operasi Pabrik</label>
                      <div class="col-md-9 skin skin-square">
                        <fieldset>
                            {{ Form::radio('pop','ya') }}
                            <label for="input-radio-11">Ya</label>
                          </fieldset>
                          <fieldset>
                              {{ Form::radio('pop','tidak') }}
                            <label for="input-radio-12">Tidak</label>
                          </fieldset>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-3 label-control" for="projectinput9">Ketentuan Lain</label>
                      <div class="col-md-9">
                        <fieldset>
                            <input type="checkbox" name="cb_panas" id="input-radio-15">
                            <label for="input-radio-15">Ijin Pekerjaan Panas Disyaratkan</label>
                          </fieldset>
                          <fieldset>
                            <input type="checkbox" name="cb_dingin" id="input-radio-16">
                            <label for="input-radio-16">Ijin Pekerjaan Dingin Disyaratkan</label>
                          </fieldset>
                      </div>
                    </div>
                  </div>
                  <div class="form-actions">
                    <button type="submit" class="btn btn-info">
                      <i class="fa fa-check-square-o"></i> Submit
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- // Basic form layout section end -->
  </div>

  <div class="modal fade text-left" id="add" tabindex="-1" role="dialog" aria-hidden="true">
    @include('modals.pegawai')
    <script type="text/javascript">
      $(document).ready(function() {
           var table = $('#datatables').DataTable();
           $('#datatables tbody').on('click','tr',function() {
             $(this).toggleClass('selected');
             var ids = $.map(table.rows('.selected').data(), function(item) {
                return item[0];
             });
             var nama = $.map(table.rows('.selected').data(), function(item) {
                return item[1];
             });
             var unit = $.map(table.rows('.selected').data(), function(item) {
                return item[3]; 
             });
             console.log(ids);
             console.log(nama);
             $('#no_badge').val(ids);
             $('#pegawai').val(nama);
             $('#unit').val(unit);
             $('#modal .close').click();
             $(this).removeClass('selected');
            //  alert(table.rows('.selected').data().length);
           });
      }); 
   </script>
  </div>


@endsection

@section('customjs')

<script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="../../../assets/datatables/datatables.min.css"/>
<script type="text/javascript" src="../../../assets/datatables/datatables.min.js"></script>
<script src="../../../js/swal/sweetalert.min.js" type="text/javascript"></script>

@if(Session::has('_alt'))
<script type="text/javascript">
  swal("{{ session()->get('_e') == 'success' ? 'Berhasil' : 'Gagal' }}", "{{ session()->get('_alt') }}", "{{ session()->get('_e') }}");
</script>
@endif

@endsection