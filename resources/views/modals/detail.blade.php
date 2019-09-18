<div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form method="POST">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title">Detail</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                                <label>Peminta</label>
                                <div class="form-group">
                                    <input type="hidden" name="id" id="id"/>
                                    <input type="text" class="form-control" name="peminta" id="peminta" disabled>
                                </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                                <label>Tanggal Permintaan</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="tanggal" id="tanggal" disabled>
                                </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label>Kode & Nomor Mesin</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kd_mesin" id="kd_mesin" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label>Prioritas</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="prioritas" id="prioritas" disabled>
                            </div>
                        </div>
                    </div>      
                    <label>Deskripsi</label>
                    <div class="form-group">
                        <textarea rows="5" class="form-control" id="description" name="description" value="nyoba val" disabled>
                            
                        </textarea>
                    </div>
                    <label>Eksekutor</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="eksekutor" id="eksekutor" disabled>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label>Penghentian Operasi Pabrik</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pop" id="pop" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label>Ketentuan Lainnya</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="ketentuan" id="ketentuan" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label>Status</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="status" id="status" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label>Tanggal Approve</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="approved_at" id="approved_at" disabled>
                            </div>
                        </div>
                    </div>  
                    
                    
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <label>Tanggal Konfirmasi</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="confirmed_at" id="confirmed_at" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <label>Dikonfirmasi Oleh</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="confirmed_by" id="confirmed_by" disabled>
                            </div>
                        </div>
                    </div>  
                    
                    
                    <label>Tanggal Penyelesaian</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="finished_at" id="finished_at" disabled>
                    </div>
                    <label>Keterangan</label>
                    <div class="form-group">
                        <textarea rows="5" class="form-control" id="keterangan" name="keterangan" disabled></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>