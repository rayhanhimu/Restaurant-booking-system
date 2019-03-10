@extends('layouts.blank')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <h4 class="modal-title" id="mymdallModalLabel">Booking information</h4>
            <form class="form-horizontal" action="{{ route('checkout') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="restaurant_id" value="{{ $id }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="name">Name</label>
                                <div class="col-md-6">
                                    <input type="hidden" name="city_id" value="" required>
                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="phone">Phone</label>
                                <div class="col-md-6">
                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label class="col-md-6 control-label" for="phone">Email</label>
                                    <div class="col-md-6">
                                        <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required>
                                    </div>
                                </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="address">Address</label>
                                <div class="col-md-6">
                                    <input id="address" name="address" type="text" placeholder="Address" class="form-control input-md" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="date">Date</label>
                                <div class="col-md-6">
                                    <div id="demo-dp-txtinput">
                                        <input type="text" class="form-control" name="date" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="time">Time</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="time" required id="available-times">

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="time">Available Capacity</label>
                                <div class="col-md-6">
                                    <p class="form-control" id="available-capacity"></p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-6 control-label" for="people">Number of people </label>
                                <div class="col-md-6">
                                    <input id="peoples" name="people" type="text" placeholder="Number of people" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label" for="time">Time Duration</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="duration" required id="available-times">
                                        <option>1 Hours</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group pull-right">
                                <button data-bb-handler="success" type="submit" class="btn btn-purple">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <h4 class="modal-title" id="mymdallModalLabel">Floor plan</h4>
            @foreach (\App\Restaurant::find($id)->tables as $key => $table)
                <div class="col-md-4">
                    <img src="{{ asset($table->photo) }}" alt="" class="img-xl">
                    <br>
                    <p>Capacity: {{ $table->capacity }}</p>
                </div>
            @endforeach
        </div>

    </div>

@endsection

@section('script')
    <script type="text/javascript">

            $('input[name=date]').on('change', function(){
                var date = $('input[name=date]').val();
                var people = $('input[name=people]').val();
                $.post('{{ route('available-times') }}', {_token:'{{ @csrf_token() }}', date:date, people:people, id:{{ $id }}}, function(data){
                    $('#available-times').html(data.options);
                    getAvailableCapacity();
                    console.log(data);
                });
            });

            $('input[name=people]').on('keyup', function(){
                var date = $('input[name=date]').val();
                var people = $('input[name=people]').val();
                $.post('{{ route('available-times') }}', {_token:'{{ @csrf_token() }}', date:date, people:people, id:{{ $id }}}, function(data){
                    $('#available-times').html(data.options);
                    console.log(data);
                });
            });

            $('select[name=time]').on('change', function(){
                getAvailableCapacity();
            });

            function getAvailableCapacity(){
                var date = $('input[name=date]').val();
                var people = $('input[name=people]').val();
                var time = $('select[name=time]').val();

                $.post('{{ route('available-capacity') }}', {_token:'{{ @csrf_token() }}', date:date, people:people, time:time, id:{{ $id }}}, function(data){
                    $('#available-capacity').html(data+' seats available');
                    console.log(data);
                });
            }

    </script>
@endsection
