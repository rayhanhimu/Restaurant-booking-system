@extends('layouts.blank')

@section('content')

<div>

	<div style="background-image: url({{ asset('img/f1.jpg')}})"; class="home-background">
		<div>
			<h1 class="home-heading">Looking For a Party Place?<br> Book Now.</h1>
		</div>
		<div class="row" style="background-color:white; padding-top: 25px; padding-bottom: 25px; margin-bottom: 400px; border-radius: 10px;">

			<div class="col-sm-2">
				<h3>Select your Location</h3>
			</div>

			<div class="col-sm-10">
				<form class="form form-horizontal" action="{{ route('restaurant_list') }}" role="form" method="POST">
					@csrf
					<div class="form-group">
						<div class="col-sm-4">
							<select class="form-control search" name="city" id="city">
								<option value="">Select your city</option>
								@foreach(\App\City::all() as $city)
									<option value="{{ $city->id }}">{{ $city->name }}</option>
								@endforeach
							</select>
						</div>

						<div class="col-sm-4">
							<select class="form-control search" name="area" id="area">
								<option value="">Select your Area</option>
							</select>
						</div>

						<div class="col-sm-3">
							<button id="demo-state-btn" class="btn btn-danger btn-lg search-btn">Search</button>
						</div>
					</div>
				</form>
			</div>

		</div>

	</div>

	<div id="demo-sm-modal" class="modal fade in">
	    <div class="modal-dialog bootbox">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
	                <h4 class="modal-title" id="mySmallModalLabel">Restaurant Information</h4>
	            </div>
	            <form class="form-horizontal" action="{{ route('restaurants.store') }}" method="POST">
	            	@csrf
		            <div class="modal-body">
	                    <div class="row">
	                        <div class="col-sm-12">

                                <div class="form-group">
                                    <label class="col-sm-4 control-label" for="name">Restaurant Name</label>
                                    <div class="col-sm-4">
                                        <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required></div>
                                </div>

								<div class="form-group">
                                    <label class="col-sm-4 control-label" for="name">City Name</label>
                                    <div class="col-sm-4">
										<select class="form-control" name="city" id="city-restaurant" required>
											<option>Select your city</option>
											@foreach(\App\City::all() as $city)
												<option value="{{ $city->id }}">{{ $city->name }}</option>
											@endforeach
										</select>
									</div>
                                </div>

								<div class="form-group">
                                    <label class="col-sm-4 control-label" for="name">Area Name</label>
                                    <div class="col-sm-4">
										<select class="form-control" name="area" id="area-restaurant" required>
											<option>Select your Area</option>
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

</div>

@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function(){

			get_areas();

			$('#city').on('change', function(){
				get_areas();
			});

			function get_areas(){
				var city_id = $('#city').val();
				$.post('{{ route('cities.getareas') }}', {_token:'{{ @csrf_token() }}', city_id:city_id}, function(data){
					$('#area').html(null);
					$('#area').append($('<option>', {
						value: null,
						text: 'Select your Area'
					}));
		            for (var i = 0; i < data.length; i++) {
		                $('#area').append($('<option>', {
		                    value: data[i].id,
		                    text: data[i].name
		                }));
		            }
				});
			}

			$('#city-restaurant').on('change', function(){
				var city_id = $('#city-restaurant').val();
				$.post('{{ route('cities.getareas') }}', {_token:'{{ @csrf_token() }}', city_id:city_id}, function(data){
					$('#area-restaurant').html(null);
					$('#area-restaurant').append($('<option>', {
						value: null,
						text: 'Select your Area'
					}));
		            for (var i = 0; i < data.length; i++) {
		                $('#area-restaurant').append($('<option>', {
		                    value: data[i].id,
		                    text: data[i].name
		                }));
		            }
				});
			});
		});
	</script>
@endsection
