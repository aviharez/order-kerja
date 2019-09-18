<div class="modal-dialog">
    <div class="modal-content">
        <form method="POST" action="{{ route('approve') }}">
            {{ csrf_field() }}
            <div class="modal-header bg-info">
                <h4 class="modal-title text-white">Approvement</h4>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="bank_code">No Badge</label>
                    <input type="hidden" name="ids" id="ids"/>
                    <input type="text" class="form-control" placeholder="No Badge" name="no_badge" id="no_badge">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Ok</button>
            </div>
        </form>
    </div>
</div>