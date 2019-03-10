@if($timeConfig->opening_time != 'Closed' || $timeConfig->closing_time != 'Closed')
	@for($time = strtotime($timeConfig->opening_time); $time <= strtotime($timeConfig->closing_time); $time = strtotime('+60 minutes', $time))
		@php
			$available = $capacity;
			$bookings = \App\Booking::where('date', $date)->where('time', date("H:i:s", $time))->get();
			foreach ($bookings as $booking) {
				$available -= $booking->people;
			}
		@endphp
		@if ($available >= $people)
			@if (date('d-m-Y') == date('d-m-Y', $date))
				@if($time > strtotime(date('h:i:s d-m-Y')))
					<option value="{{ date("H:i:s", $time) }}">
			            {{ date("h:i", $time) }}
			            {{ date("A", $time) }}
			        </option>
				@endif
			@else
				<option value="{{ date("H:i:s", $time) }}">
		            {{ date("h:i", $time) }}
		            {{ date("A", $time) }}
		        </option>
			@endif
        @endif
	@endfor
@else
    <option value="">Closed</option>
@endif
