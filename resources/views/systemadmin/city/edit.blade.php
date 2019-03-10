<form class="form-horizontal" action="{{ route('cities.update', $city->id) }}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
    @csrf
    <div class="modal-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="col-sm-4 control-label" for="name">Name</label>
                    <div class="col-sm-4">
                        <input id="name" name="name" type="text" placeholder="Category name" value="{{ $city->name }}" class="form-control input-md" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button data-bb-handler="success" type="submit" class="btn btn-purple">Save</button>
    </div>
</form>
