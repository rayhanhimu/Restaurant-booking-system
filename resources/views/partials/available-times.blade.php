@if($timeConfig->opening_time != 'Closed' || $timeConfig->closing_time != 'Closed')
	@for($time = strtotime($timeConfig->opening_time); $time <= strtotime($timeConfig->closing_time); $time = strtotime('+30 minutes', $time))
		@php
			$bookings = \App\Booking::where('date', $date)->where('time', $time)->get();
			foreach ($bookings as $booking) {
				foreach (json_decode($booking->table_ids) as $table_id) {
					$capacity -= \App\Table::find($table_id)->capacity;
				}
			}
		@endphp
		@if ($capacity >= $people)
			<option value="{{ date("H:i:s", $time) }}">
	            @if($time>=strtotime('13:00:00'))
	                {{ date("H:i", $time - strtotime('12:00:00')) }}
	            @else
	                {{ date("H:i", $time) }}
	            @endif
	            {{ date("A", $time) }}
	        </option>
        @endif
	@endfor
@else
    <option value="">Closed</option>
@endif
