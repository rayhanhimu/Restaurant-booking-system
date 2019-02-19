@extends('layouts.blank')

@section('content')



	<div style="background-image: url({{ asset('img/shared-img-2.jpg')}});" class="col-sm-12 search_bar">

		<div class="col-sm-6">
			<h3 style="margin-top: 50px; margin-bottom: 50px; color: #B20185; font-style: italic;">Can't Find what you are looking for? Try Search :</h3>
		</div>

		<div class="col-sm-6 form-group">

			<input class="form-control searchBar" type="text" placeholder="Search restaurant">

		</div>

	</div>

	<div class="col-sm-12 box_container">
		@foreach ($restaurants as $key => $restaurant)
			<div class="col-sm-4 restaurant_box">
				<a href="{{ route('restaurant_details', $restaurant->id) }}">
					<div class="restaurant_box_content">
						<div class="row">
							<div class="col-md-7">
								<img src="{{ asset('img/img2.jpg') }}" class="img img-responsive image_style">
							</div>
							<div class="col-md-5">
								<h2>{{ $restaurant->name }}</h2>
								<h3>Ratting: 4 </h3>
								<h4>{{ $restaurant->area->name }},{{ $restaurant->area->city->name }}</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
		@endforeach
	</div>



@endsection
