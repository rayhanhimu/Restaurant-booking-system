@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-6">

        <!--Weather widget-->
        <!--===================================================-->
        <div id="demo-weather-widget-md" class="panel panel-info text-center">
            <div class="panel-body">
                <img class="img img-responsive" src="{{ asset(Auth::user()->restaurant->photo) }}"
                style="max-height: 400px;">
                <button data-toggle="modal" data-target="#photo-modal" class="btn btn-primary" style="margin-top:10px;">Upload Photo</a>
            </div>
        </div>
        <!--===================================================-->
        <!--End Weather widget-->

    </div>
    @if(Auth::user()->restaurant != null)
        <div class="col-lg-6">

            <!--Large weather widget-->
            <!--===================================================-->
            <div id="demo-weather-widget-lg" class="panel panel-info" role="modal">
                <div class="panel-body">
                    <div class="media pad-all bord-btm">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="media-body pad-lft">
                                    <h4 class="mar-no text-main">{{ Auth::user()->restaurant->name }}</h4>
                                    <p>{{ Auth::user()->restaurant->type }}</p>
                                    <span class="text-sm text-muted">{{ Auth::user()->restaurant->area->name }}, {{ Auth::user()->restaurant->area->city->name }}</span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="pull-right">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--===================================================-->
            <!--End Large weather widget-->

            <div class="row">
                <div class="col-sm-4">

                    <!--Extra small weather widget-->
                    <!--===================================================-->

                    <div class="panel media middle">
                        <div class="media-left bg-primary pad-all">
                            <canvas id="demo-weather-xs-icon-1" width="48" height="48"></canvas>
                        </div>
                        <div class="media-body pad-lft">
                            <p class="text-2x mar-no text-main">
                                @php
                                    $total_menu = 0;
                                    foreach (Auth::user()->restaurant->food_categories as $key => $category) {
                                        $total_menu += $category->FoodMenus->count();
                                    }
                                @endphp
                                {{ $total_menu }}
                            </p>
                            <p class="text-muted mar-no">Food Items</p>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End Extra small weather widget-->

                </div>
                <div class="col-sm-4">

                    <!--Extra small weather widget-->
                    <!--===================================================-->
                    <div class="panel media middle">
                        <div class="media-left bg-success pad-all">
                            <canvas id="demo-weather-xs-icon-1" width="48" height="48"></canvas>
                        </div>
                        <div class="media-body pad-lft">
                            <p class="text-2x mar-no text-main">{{ Auth::user()->restaurant->bookings->where('status', 1)->count() }}</p>
                            <p class="text-muted mar-no">Bookings</p>
                        </div>
                    </div>
                    <!--===================================================-->
                    <!--End Extra small weather widget-->

                </div>
                <div class="col-sm-4">
                    <div class="panel media middle">
                        <div class="media-left bg-danger pad-all">
                            <canvas id="demo-weather-xs-icon-1" width="48" height="48"></canvas>
                        </div>
                        <div class="media-body pad-lft">
                            <p class="text-2x mar-no text-main">{{ Auth::user()->restaurant->reviews->count() }}</p>
                            <p class="text-muted mar-no">Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>

<div id="photo-modal" class="modal fade in">
    <div class="modal-dialog bootbox">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title" id="mySmallModalLabel">Booking information</h4>
            </div>
            <form class="form-horizontal" action="{{ route('restaurants.photo') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-sm-4 control-label" for="photo">PHoto</label>
                                <div class="col-sm-4">
                                    <input id="photo" name="photo" type="file" placeholder="Choose file" accept="image/jpeg" class="form-control input-md" required>
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
