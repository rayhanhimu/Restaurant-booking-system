<ul>
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
    					<li>{{ date("h:i", $time) }} {{ date("A", $time) }} - <span>
    			             {{ $available }} seats available </span>
    			        </li>
    				@endif
    			@else
                    <li>{{ date("h:i", $time) }} {{ date("A", $time) }} - <span>
                         {{ $available }} seats available </span>
                    </li>
    			@endif
    		@else
                <li>{{ date("h:i", $time) }} {{ date("A", $time) }} - <span>
                     {{ $available }} seats available </span>
                </li>
            @endif
    	@endfor
    @else
    @endif
</ul>
