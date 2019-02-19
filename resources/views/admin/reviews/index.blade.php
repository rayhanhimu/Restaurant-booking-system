@extends('layouts.app')

@section('content')

<div><h3>Reviews</h3></div>
<div class="comments media-block">
    <a class="media-left" href="#"><img class="img-circle img-sm" alt="Profile Picture" src="img/profile-photos/2.png"></a>
    <div class="media-body">
        <div class="comment-header">
            <a href="#" class="media-heading box-inline text-main text-bold">John Doe</a>
            <p class="text-muted text-sm">Today 10:41AM - 12/09/2017</p>
        </div>
        <p>Review</p>
        <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-like"></i> Like </a>
        <a class="btn btn-sm btn-default"><i class="icon-lg demo-pli-right-4"></i> Reply</a>
    </div>
</div>

@endsection