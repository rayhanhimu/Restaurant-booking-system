@extends('layouts.app')

@section('content')

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-lg-12">
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

    <!-- Content -->

    <form method="POST" action="{{ route('timeConfig.update') }}">
        @csrf
    
    <div class="row">
        <div class="col-lg-12">
              <!-- Section -->
              <div class="add-listing-section margin-top-45">
                
                <!-- Headline -->
                <div class="add-listing-headline">
                    <h3><i class="sl sl-icon-clock"></i> Edit Opening/Closing Time</h3>
                    <input type="hidden" name="id" value="{{ $timeConfig->id }}">
                </div>
                    <!-- Day -->
                    <div class="row opening-day">
                        <div class="col-md-2"><h5>{{ $timeConfig->day }}</h5></div>
                        <div class="col-md-5">
                            <select class="chosen-select" data-placeholder="Opening Time" name="opening_time">
                                <option value="Closed">Closed</option>
                                <option value="01:00:00">1 AM</option>
                                <option value="02:00:00">2 AM</option>
                                <option value="03:00:00">3 AM</option>
                                <option value="04:00:00">4 AM</option>
                                <option value="05:00:00">5 AM</option>
                                <option value="06:00:00">6 AM</option>
                                <option value="07:00:00">7 AM</option>
                                <option value="08:00:00">8 AM</option>
                                <option value="09:00:00">9 AM</option>
                                <option value="10:00:00">10 AM</option>
                                <option value="11:00:00">11 AM</option>
                                <option value="12:00:00">12 PM</option>  
                                <option value="13:00:00">1 PM</option>
                                <option value="14:00:00">2 PM</option>
                                <option value="15:00:00">3 PM</option>
                                <option value="16:00:00">4 PM</option>
                                <option value="17:00:00">5 PM</option>
                                <option value="18:00:00">6 PM</option>
                                <option value="19:00:00">7 PM</option>
                                <option value="20:00:00">8 PM</option>
                                <option value="21:00:00">9 PM</option>
                                <option value="22:00:00">10 PM</option>
                                <option value="23:00:00">11 PM</option>
                                <option value="00:00:00">12 AM</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <select class="chosen-select" data-placeholder="Closing Time" name="closing_time">
                                <option value="Closed">Closed</option>
                                <option value="01:00:00">1 AM</option>
                                <option value="02:00:00">2 AM</option>
                                <option value="03:00:00">3 AM</option>
                                <option value="04:00:00">4 AM</option>
                                <option value="05:00:00">5 AM</option>
                                <option value="06:00:00">6 AM</option>
                                <option value="07:00:00">7 AM</option>
                                <option value="08:00:00">8 AM</option>
                                <option value="09:00:00">9 AM</option>
                                <option value="10:00:00">10 AM</option>
                                <option value="11:00:00">11 AM</option>
                                <option value="12:00:00">12 PM</option>  
                                <option value="13:00:00">1 PM</option>
                                <option value="14:00:00">2 PM</option>
                                <option value="15:00:00">3 PM</option>
                                <option value="16:00:00">4 PM</option>
                                <option value="17:00:00">5 PM</option>
                                <option value="18:00:00">6 PM</option>
                                <option value="19:00:00">7 PM</option>
                                <option value="20:00:00">8 PM</option>
                                <option value="21:00:00">9 PM</option>
                                <option value="22:00:00">10 PM</option>
                                <option value="23:00:00">11 PM</option>
                                <option value="00:00:00">12 AM</option>
                            </select>
                        </div>
                    </div>
                    <!-- Day / End -->
              </div>
              <!-- Section / End -->
        </div>
    </div>
    
    <input type="submit" name="submit" class="button" value="Update" style="margin-top: 20px;">

    </form> 

    <!-- Copyrights -->
    <div class="col-lg-12">
        <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
    </div>


@endsection
