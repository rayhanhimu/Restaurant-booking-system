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

<div id="checkout-modal" class="modal fade in col-sm-12">
    <div class="modal-dialog bootbox">
        
    </div>
</div>

<div id="edit-modal" class="modal fade in">
    <div class="modal-dialog bootbox">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title" id="mySmallModalLabel">Edit information</h4>
            </div>
            <div id="content">

            </div>
        </div>
    </div>
</div>
