<div class="modal-dialog">
        <div class="modal-content">
        <form method="POST" action="{{ route('reject') }}">
                {{ csrf_field() }}
                <div class="modal-header bg-danger">
                    <h4 class="modal-title text-white">Keterangan Penolakan</h4>
                    <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="bank_code">Keterangan</label>
                        <input type="hidden" name="id" id="id"/>
                        <input type="hidden" name="tujuan" id="tujuan"/>
                        <textarea id="projectinput9" rows="5" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Ok</button>
                </div>
            </form>
        </div>
    </div>