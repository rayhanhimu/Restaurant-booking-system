@extends('layouts.blank')

@section('content')



	<div style="background-image: url({{ asset('img/shared-img-2.jpg')}});" class="col-sm-12 search_bar">

		<div class="col-sm-6">
			<h3 style="margin-top: 50px; margin-bottom: 50px; color: #B20185; font-style: italic;">Can't Find what you are looking for? Try Search :</h3>
		</div>

		<div class="col-sm-6 form-group">

			<form class="" action="{{ route('restaurant_search') }}" method="get">
				<input class="form-control searchBar" type="text" name="name" placeholder="Search restaurant">
			</form>

		</div>

	</div>

	<div class="col-sm-12 box_container">
		@foreach ($restaurants as $key => $restaurant)
			<div class="col-sm-4 restaurant_box" style="margin-bottom:10px;">
				<a href="{{ route('restaurant_details', $restaurant->id) }}">
					<div class="restaurant_box_content">
						<div class="row">
							<div class="col-md-7">
								<img src="{{ asset($restaurant->photo) }}" class="img img-responsive image_style">
							</div>
							<div class="col-md-5">
								<h2>{{ $restaurant->name }}</h2>
								<h3>Rating: {{ ceil($restaurant->reviews->avg('rating')) }} </h3>
								<h4>{{ $restaurant->area->name }},{{ $restaurant->area->city->name }}</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
		@endforeach
	</div>




@endsection
