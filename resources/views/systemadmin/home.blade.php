@extends('layouts.app')

@section('content')

@foreach (\App\Restaurant::all() as $key => $restaurant)
    <div class="col-md-4">
        <div class="media pad-all bord-btm">
            <div class="row">
                <div class="col-lg-10">
                    <div class="media-body pad-lft">
                        <h4 class="mar-no text-main">{{ $restaurant->name }}</h4>
                        <span class="text-sm text-muted">{{ $restaurant->area->name }},{{ $restaurant->area->city->name }}</span>
                    </div>
                </div>
                <div class="col-lg-2">
                    @if ($restaurant->status == 0)
                        <div class="pull-right">
                            <a href="{{ route('restaurants.approve', $restaurant->id) }}" class="btn btn-success">Approve</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endforeach


@endsection
