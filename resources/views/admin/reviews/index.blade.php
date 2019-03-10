@extends('layouts.app')

@section('content')

<div><h3>Reviews</h3></div>
@foreach (Auth::user()->restaurant->reviews as $key => $review)
    <div class="row">
        <div class="comments media-block">
            <div class="col-sm-6">
                <div class="media-body">
                    <div class="comment-header">
                        <a href="#" class="media-heading box-inline text-main text-bold">{{ $review->name }}</a>
                        <p class="text-muted text-sm">{{ date('h:i A d-m-Y', strtotime($review->created_at)) }}</p>
                    </div>
                    <p>{{ $review->review }}</p>
                </div>
            </div>
            <div class="col-sm-4">
                <img src="{{ asset($review->photo) }}" alt="" class="img-md">
            </div>
            <div class="col-sm-2">
                <button class="btn btn-danger" onclick="confirm_modal('{{ route('reviews.destroy', $review->id) }}')"><i class="demo-psi-recycling icon-lg"></i></button>
            </div>
        </div>
    </div>
@endforeach

@endsection
