@extends('layouts.app')

@section('content')
<div>
	@foreach (\App\FoodCategory::where('restaurant_id', Auth::user()->restaurant->id)->get() as $key => $category)
		<div class="col-sm-6">
			<div class="panel">
			    <div class="panel-heading">
			    	<div class="col-sm-10">
			    		<h3 class="panel-title">{{ $category->name }}</h3>
			    	</div>
			    	<div class="col-sm-2">
			    		<button onclick="menu_modal({{ $category->id }})" style="margin: 20px 0 20px 20px;" class="btn  btn-warning">+</button>
			    	</div>
			    </div>
			    <div class="panel-body">
				    <table class="table table-responsive">
				    	<tbody>
				    		@foreach ($category->FoodMenus as $menu)
								<tr style="border: 1px solid rgba(255,255,255,0.03);">
									<td style="border-top: 0px" class="col-sm-3">{{ $menu->name }}</td>
									<td style="border-top: 0px" class="col-sm-3 text-center">{{ $menu->ratio }}</td>
									<td style="border-top: 0px" class="col-sm-3" align="right"><span class="badge badge-success">{{ $menu->price }}tk</span></td>
									<td style="border-top: 0px" class="col-sm-3" align="right">
										<a href="#" class="btn btn-mint btn-icon"><i class="demo-psi-pen-5 icon-lg"></i></a>
										<a onclick="confirm_modal('{{ route('food_menus.destroy', $menu->id) }}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
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
					<form class="form-horizontal" action="{{ route('food_menus.store') }}" method="POST">
		            	@csrf
			            <div class="modal-body">
		                    <div class="row">
		                        <div class="col-sm-12">
									<input type="hidden" name="food_category_id" value="">
									<div class="form-group">
	                                    <label class="col-sm-4 control-label" for="name">Food Name</label>
	                                    <div class="col-sm-4">
	                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md"></div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="ratio">Ratio</label>
	                                    <div class="col-sm-4">
	                                        <input id="ratio" name="ratio" type="text" placeholder="Ratio" class="form-control input-md"></div>
	                                </div>
	                                <div class="form-group">
	                                    <label class="col-sm-4 control-label" for="price">Price</label>
	                                    <div class="col-sm-4">
	                                        <input id="price" name="price" type="number" min="0" step="1" placeholder="00" class="form-control input-md"></div>
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

</div>
@endsection

@section('script')
	<script type="text/javascript">
	    function menu_modal(id)
	    {
			$('input[name=food_category_id]').val(id);
	        $('#demo-sm-modal').modal('show', {backdrop: 'static'});
	    }
	</script>
@endsection
