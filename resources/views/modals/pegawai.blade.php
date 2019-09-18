<div class="modal-dialog modal-lg" id="modal">
    <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="edit_title">Pilih Pegawai</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                            <table class="table table-striped table-bordered table-middle zero-configuration" id="datatables" width="100%">
                              <thead>
                                <tr>
                                  <th>No Badge</th>
                                  <th>Nama</th>
                                  <th>Org Name</th>
                                  <th>Unit Kerja</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($pegawai as $item)
                                <tr>
                                  <td>{{ $item->no_badge }}</td>
                                  <td>{{ $item->nama }}</td>
                                  <td>{{ $item->org_name }}</td>
                                  <td>{{ $item->unit_kerja }}</td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Pilih</button>
            </div> --}}
    </div>
</div>
