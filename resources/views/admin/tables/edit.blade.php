@extends('layouts.app')

@section('content')

    <!-- Titlebar -->
    <div id="titlebar">
        <div class="row">
            <div class="col-lg-12">
                <h2>Tables</h2>
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
    <div class="row">
        <div class="col-lg-12">
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('tables.update') }}">
                        @csrf
                        <div class="add-listing">
                            <div class="add-listing-section">
                                <div class="add-listing-headline">
                                    <h3><i class="sl sl-icon-doc"></i>Edit Table</h3>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <h5>Restaurant Type</h5>
                                        <select class="chosen-select-no-single" name="restaurant_type_id" required="true">
                                                @foreach(json_decode($restaurantTable->restaurant->restaurant_type_id) as $restaurant_type)
                                                    <option value="{{ $restaurant_type }}" <?php if($restaurant_type == $restaurantTable->restaurant_type_id) echo "selected"; ?> >
                                                        {{ \App\RestaurantType::find($restaurant_type)->name }}
                                                    </option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <h5>Table Name</h5>
                                        <input type="text" name="name" required="true" value="{{ $restaurantTable->name }}">
                                    </div>
                                </div>
                                <div class="row with-forms">
                                    <div class="col-md-12">
                                        <h5>Capacity</h5>
                                        <input type="number" min="0" name="capacity" required="true" value="{{ $restaurantTable->capacity }}">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="{{ $restaurantTable->id }}">
                                <input type="submit" name="submit" class="button" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Copyrights -->
    <div class="col-lg-12">
        <div class="copyrights">© 2017 Listeo. All Rights Reserved.</div>
    </div>

@endsection
