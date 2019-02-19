@extends('layouts.app')

@section('content')

	@foreach(\App\City::all() as $city)
		<div class="col-sm-6">
			<div class="panel">
			    <div class="panel-heading">
			    	<div class="col-sm-10">
			    		<h3 class="panel-title">{{ $city->name }}</h3>
			    	</div>
			    	<div class="col-sm-2">
			    		<button onclick="area_modal({{ $city->id }})" style="margin: 20px 0 20px 20px;" class="btn  btn-warning">+</button>
			    	</div>
			    </div>
			    <div class="panel-body">
				    <table class="table table-responsive">
				    	<tbody>
							@foreach ($city->areas as $key => $area)
								<tr style="border: 1px solid rgba(255,255,255,0.03);">
									<td style="border-top: 0px" class="col-sm-3">{{ $area->name }}</td>
									<td style="border-top: 0px" class="col-sm-3" align="right">
										<button class="btn btn-info"><i class="demo-psi-pen-5 icon-lg"></i></button>
										<button class="btn btn-danger" onclick="confirm_modal('{{ route('areas.destroy', $area->id) }}')"><i class="demo-psi-recycling icon-lg"></i></button>
									</td>
								</tr>
							@endforeach
				    	</tbody>
				    </table>
				</div>
			</div>
		</div>
	@endforeach


	<div id="demo-sm-modal" class="modal fade in">
	    <div class="modal-dialog bootbox">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
	                <h4 class="modal-title" id="mySmallModalLabel">Area Name</h4>
	            </div>
				<form class="form-horizontal" action="{{ route('areas.store') }}" method="POST">
	            	@csrf
		            <div class="modal-body">
	                    <div class="row">
	                        <div class="col-sm-12">
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="name">Name</label>
	                                    <div class="col-sm-4">
											<input type="hidden" name="city_id" value="" required>
	                                        <input id="name" name="name" type="text" placeholder="Area Name" class="form-control input-md" required>
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



@endsection

@section('script')
	<script type="text/javascript">
	    function area_modal(id)
	    {
			$('input[name=city_id]').val(id);
	        $('#demo-sm-modal').modal('show', {backdrop: 'static'});
	    }
	</script>
@endsection
