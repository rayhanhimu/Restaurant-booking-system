@extends('layouts.app')

@section('content')

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Time Configuration</h2>
            </div>
        </div>
    </div>

    <!-- Notice
    <div class="row">
        <div class="col-md-12">
            <div class="notification success closeable margin-bottom-30">
                <p>Your listing <strong>Hotel Govendor</strong> has been approved!</p>
                <a class="close" href="#"></a>
            </div>
        </div>
    </div> -->


        <div class="row">
            <!-- Listings -->
            <div class="col-lg-12 col-md-12">
                <div class="dashboard-list-box margin-top-0">
                    <h4>Restaurant(s)</h4>
                    <ul>
                        @foreach(Auth::user()->restaurants as $restaurant)
                        <li>
                            <div class="list-box-listing">
                                <div class="list-box-listing-img"><a href="#"><img src="images/listing-item-01.jpg" alt=""></a></div>
                                <div class="list-box-listing-content">
                                    <div class="inner">
                                        <h3><a href="#">{{ $restaurant->name }}</a></h3>
                                        <div>
                                            <ul>
                                                @foreach($restaurant->timeConfigs as $timeConfig)
                                                    @if($timeConfig->opening_time == 'Closed' || $timeConfig->closing_time == 'Closed')
                                                        <li>{{ $timeConfig->day.' Closed' }}</li><br>
                                                    @else
                                                        <li>{{ $timeConfig->day.' '.date('h:m', strtotime($timeConfig->opening_time)).'-'.date('h:m', strtotime($timeConfig->closing_time)) }}</li><br>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="buttons-to-right">
                                <a href="{{ route('timeConfig.show', $restaurant->code) }}" class="button gray"><i class="sl sl-icon-note"></i> Edit</a>
                               
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

<!-- Copyrights -->
<div class="col-md-12">
    <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
</div>

@endsection
