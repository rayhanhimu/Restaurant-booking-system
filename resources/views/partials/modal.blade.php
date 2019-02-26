<script type="text/javascript">
    function confirm_modal(delete_url)
    {
        jQuery('#confirm-delete').modal('show', {backdrop: 'static'});
        document.getElementById('delete_link').setAttribute('href' , delete_url);
    }

    function show_order_modal(id){
        $('#checkout-modal').modal('show', {backdrop: 'static'});
        $('input[name=restaurant_id]').val(id);
    }
</script>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">
                <p>You are about to delete this record. Do you want to proceed?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="delete_link" class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

<div id="checkout-modal" class="modal fade in">
    <div class="modal-dialog bootbox">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title" id="mySmallModalLabel">Booking information</h4>
            </div>
            <form class="form-horizontal" action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="restaurant_id" value="">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="name">Name</label>
                                <div class="col-sm-4">
                                    <input type="hidden" name="city_id" value="" required>
                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="phone">Phone</label>
                                <div class="col-sm-4">
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="address">Address</label>
                                <div class="col-sm-4">
                                    <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="people">Number of people </label>
                                <div class="col-sm-4">
                                    <input id="peoples" name="people" type="text" placeholder="Number of people" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="date">Date</label>
                                <div class="col-sm-4">
                                    <div id="demo-dp-txtinput">
		                                <input type="text" class="form-control" name="date" autocomplete="off" required>
		                            </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="time">Time</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="time" required id="available-times">

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="time">Time Duration</label>
                                <div class="col-sm-4">
                                    <select class="form-control" name="duration" required id="available-times">
                                    <option>1 Hours</option>
                                    <option>2 Hours</option>
                                    <option>3 Hours</option>
                                    <option>4 Hours</option>
                                    <option>5 Hours</option>
                                    <option>6 Hours</option>
                                    <option>7 Hours</option>
                                    <option>8 Hours</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-bb-handler="success" type="submit" class="btn btn-purple">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.datepicker').datepicker();
    });
</script>
