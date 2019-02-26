@extends('layouts.app')

@section('content')

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-md-12">
                <h2>Time Configurations</h2>
            </div>
        </div>
    </div>

    <!-- Content -->

    @if(isset($timeConfigs))

        @if(count($timeConfigs) < 1)
            <div class="row">
                <div class="col-md-12" align="right">
                    <a href="{{ route('timeConfig.add') }} " class="button border with-icon">Add Time Config <i class="sl sl-icon-plus"></i></a>
                </div>
            </div>
        @endif

        <div class="row">

            <div class="col-md-12">
                @if(count($timeConfigs) < 1)
                    <h4>No time configuration found.</h4>
                @else
                    <form method="POST" action="{{ route('timeConfig.update') }}">
                        @csrf
                              <!-- Section -->
                              <div class="add-listing-section">

                                    @foreach($timeConfigs as $timeConfig)

                                        <div class="row opening-day">
                                            <div class="col-md-2"><h5>{{ $timeConfig->day }}</h5></div>
                                            <div class="col-md-5">
                                                <select class="form-control" data-placeholder="Opening Time" name="opening_time[]">
                                                    <option label="Opening Time"></option>
                                                    <option value="Closed" @if($timeConfig->opening_time == 'Closed') {{ 'selected' }} @endif>Closed</option>
                                                    <option value="01:00:00" @if($timeConfig->opening_time == '01:00:00') {{ 'selected' }} @endif>1 AM</option>
                                                    <option value="02:00:00" @if($timeConfig->opening_time == '02:00:00') {{ 'selected' }} @endif>2 AM</option>
                                                    <option value="03:00:00" @if($timeConfig->opening_time == '03:00:00') {{ 'selected' }} @endif>3 AM</option>
                                                    <option value="04:00:00" @if($timeConfig->opening_time == '04:00:00') {{ 'selected' }} @endif>4 AM</option>
                                                    <option value="05:00:00" @if($timeConfig->opening_time == '05:00:00') {{ 'selected' }} @endif>5 AM</option>
                                                    <option value="06:00:00" @if($timeConfig->opening_time == '06:00:00') {{ 'selected' }} @endif>6 AM</option>
                                                    <option value="07:00:00" @if($timeConfig->opening_time == '07:00:00') {{ 'selected' }} @endif>7 AM</option>
                                                    <option value="08:00:00" @if($timeConfig->opening_time == '08:00:00') {{ 'selected' }} @endif>8 AM</option>
                                                    <option value="09:00:00" @if($timeConfig->opening_time == '09:00:00') {{ 'selected' }} @endif>9 AM</option>
                                                    <option value="10:00:00" @if($timeConfig->opening_time == '10:00:00') {{ 'selected' }} @endif>10 AM</option>
                                                    <option value="11:00:00" @if($timeConfig->opening_time == '11:00:00') {{ 'selected' }} @endif>11 AM</option>
                                                    <option value="12:00:00" @if($timeConfig->opening_time == '12:00:00') {{ 'selected' }} @endif>12 PM</option>
                                                    <option value="13:00:00" @if($timeConfig->opening_time == '13:00:00') {{ 'selected' }} @endif>1 PM</option>
                                                    <option value="14:00:00" @if($timeConfig->opening_time == '14:00:00') {{ 'selected' }} @endif>2 PM</option>
                                                    <option value="15:00:00" @if($timeConfig->opening_time == '15:00:00') {{ 'selected' }} @endif>3 PM</option>
                                                    <option value="16:00:00" @if($timeConfig->opening_time == '16:00:00') {{ 'selected' }} @endif>4 PM</option>
                                                    <option value="17:00:00" @if($timeConfig->opening_time == '17:00:00') {{ 'selected' }} @endif>5 PM</option>
                                                    <option value="18:00:00" @if($timeConfig->opening_time == '18:00:00') {{ 'selected' }} @endif>6 PM</option>
                                                    <option value="19:00:00" @if($timeConfig->opening_time == '19:00:00') {{ 'selected' }} @endif>7 PM</option>
                                                    <option value="20:00:00" @if($timeConfig->opening_time == '20:00:00') {{ 'selected' }} @endif>8 PM</option>
                                                    <option value="21:00:00" @if($timeConfig->opening_time == '21:00:00') {{ 'selected' }} @endif>9 PM</option>
                                                    <option value="22:00:00" @if($timeConfig->opening_time == '22:00:00') {{ 'selected' }} @endif>10 PM</option>
                                                    <option value="23:00:00" @if($timeConfig->opening_time == '23:00:00') {{ 'selected' }} @endif>11 PM</option>
                                                    <option value="00:00:00" @if($timeConfig->opening_time == '0:00:00') {{ 'selected' }} @endif>12 AM</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <select class="form-control" data-placeholder="Closing Time" name="closing_time[]">
                                                    <option label="Closing Time"></option>
                                                    <option value="Closed" @if($timeConfig->closing_time == 'Closed') {{ 'selected' }} @endif>Closed</option>
                                                    <option value="01:00:00" @if($timeConfig->closing_time == '01:00:00') {{ 'selected' }} @endif>1 AM</option>
                                                    <option value="02:00:00" @if($timeConfig->closing_time == '02:00:00') {{ 'selected' }} @endif>2 AM</option>
                                                    <option value="03:00:00" @if($timeConfig->closing_time == '03:00:00') {{ 'selected' }} @endif>3 AM</option>
                                                    <option value="04:00:00" @if($timeConfig->closing_time == '04:00:00') {{ 'selected' }} @endif>4 AM</option>
                                                    <option value="05:00:00" @if($timeConfig->closing_time == '05:00:00') {{ 'selected' }} @endif>5 AM</option>
                                                    <option value="06:00:00" @if($timeConfig->closing_time == '06:00:00') {{ 'selected' }} @endif>6 AM</option>
                                                    <option value="07:00:00" @if($timeConfig->closing_time == '07:00:00') {{ 'selected' }} @endif>7 AM</option>
                                                    <option value="08:00:00" @if($timeConfig->closing_time == '08:00:00') {{ 'selected' }} @endif>8 AM</option>
                                                    <option value="09:00:00" @if($timeConfig->closing_time == '09:00:00') {{ 'selected' }} @endif>9 AM</option>
                                                    <option value="10:00:00" @if($timeConfig->closing_time == '10:00:00') {{ 'selected' }} @endif>10 AM</option>
                                                    <option value="11:00:00" @if($timeConfig->closing_time == '11:00:00') {{ 'selected' }} @endif>11 AM</option>
                                                    <option value="12:00:00" @if($timeConfig->closing_time == '12:00:00') {{ 'selected' }} @endif>12 PM</option>
                                                    <option value="13:00:00" @if($timeConfig->closing_time == '13:00:00') {{ 'selected' }} @endif>1 PM</option>
                                                    <option value="14:00:00" @if($timeConfig->closing_time == '14:00:00') {{ 'selected' }} @endif>2 PM</option>
                                                    <option value="15:00:00" @if($timeConfig->closing_time == '15:00:00') {{ 'selected' }} @endif>3 PM</option>
                                                    <option value="16:00:00" @if($timeConfig->closing_time == '16:00:00') {{ 'selected' }} @endif>4 PM</option>
                                                    <option value="17:00:00" @if($timeConfig->closing_time == '17:00:00') {{ 'selected' }} @endif>5 PM</option>
                                                    <option value="18:00:00" @if($timeConfig->closing_time == '18:00:00') {{ 'selected' }} @endif>6 PM</option>
                                                    <option value="19:00:00" @if($timeConfig->closing_time == '19:00:00') {{ 'selected' }} @endif>7 PM</option>
                                                    <option value="20:00:00" @if($timeConfig->closing_time == '20:00:00') {{ 'selected' }} @endif>8 PM</option>
                                                    <option value="21:00:00" @if($timeConfig->closing_time == '21:00:00') {{ 'selected' }} @endif>9 PM</option>
                                                    <option value="22:00:00" @if($timeConfig->closing_time == '22:00:00') {{ 'selected' }} @endif>10 PM</option>
                                                    <option value="23:00:00" @if($timeConfig->closing_time == '23:00:00') {{ 'selected' }} @endif>11 PM</option>
                                                    <option value="00:00:00" @if($timeConfig->closing_time == '0:00:00') {{ 'selected' }} @endif>12 AM</option>
                                                </select>
                                            </div>
                                        </div>

                                    @endforeach
                                    <!-- Day / End -->

                              </div>
                              <!-- Section / End -->

                    <input type="submit" name="submit" class="btn btn-purple" value="Submit" style="margin-top: 20px;">

                    </form>

                @endif
            </div>
        </div>

    @endif

@endsection
