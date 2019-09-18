<div class="modal-dialog">
    <div class="modal-content">
    <form method="POST" action="{{ route('close_task') }}">
            {{ csrf_field() }}
            <div class="modal-header bg-success">
                <h4 class="modal-title text-white">Keterangan Penyelesaian</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
                    <div class="modal-body">
                            <label>Tanggal </label>
                            <div class="form-group">
                                <input type="hidden" name="id" id="id"/>
                                <input type="date" class="form-control" name="tanggal">
                            </div>
                            <label>Keterangan </label>
                            <div class="form-group">
                                <textarea id="projectinput9" rows="5" class="form-control" name="keterangan" placeholder="Keterangan"></textarea>
                            </div>
                    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Ok</button>
            </div>
        </form>
    </div>
</div>