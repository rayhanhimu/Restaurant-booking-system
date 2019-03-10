@php
    $booking = $array['booking'];
	echo $array['content'];
@endphp

<p>To cancel the booking <a href="{{ route('booking.cancel', $booking->id) }}">Click here</a></p>
