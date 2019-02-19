@extends('layouts.app')

@section('content')


<div class="row">
    <div class="col-lg-6">

        <!--Weather widget-->
        <!--===================================================-->
        <div id="demo-weather-widget-md" class="panel panel-info text-center">
            <div class="panel-body">
                <img class="img img-responsive" src="{{ asset('img/shared-img-2.jpg') }}"
                style="max-height: 400px;">
            </div>
        </div>
        <!--===================================================-->
        <!--End Weather widget-->

    </div>
    <div class="col-lg-6">

        <!--Large weather widget-->
        <!--===================================================-->
        <div id="demo-weather-widget-lg" class="panel panel-info">
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
                        <p class="text-2x mar-no text-main">32</p>
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
                        <p class="text-2x mar-no text-main">50</p>
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
                        <p class="text-2x mar-no text-main">32</p>
                        <p class="text-muted mar-no">Reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
