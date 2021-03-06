@extends('layouts.app')

@section('content')

<div>
    @foreach ($bookings as $key => $booking)
        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-10">
                    <h3 class="panel-title">Date: {{ date('d-m-Y', $booking->date) }} ({{ ucfirst($booking->payment_status) }})</h3>
                </div>

            </div>
            <div class="panel-body">
                <table class="table table-responsive">
                    <tbody>
                        <tr style="border: 1px solid rgba(255,255,255,0.03);">
                            <div class="row">
                                <td style="border-top: 0px" class="col-md-1">{{ $booking->name }}</td>
                                <td style="border-top: 0px" class="col-md-2 text-center">{{ $booking->phone }}</td>
                                <td style="border-top: 0px" class="col-md-1 text-center">{{ $booking->time }}</td>
                                <td style="border-top: 0px" class="col-md-1 text-center">{{ $booking->people }} person</td>
                                <td style="border-top: 0px" class="col-md-1 text-center">
                                    @if ($booking->table_ids != null)
                                        @foreach (json_decode($booking->table_ids) as $table_id)
                                            {{ \App\Table::find($table_id)->name }}
                                        @endforeach
                                    @endif
                                </td>
                                <td style="border-top: 0px" class="col-md-5 text-center">
                                    @foreach ($booking->bookingDetails as $key => $detail)
                                        <div class="col-md-6">
                                            <li class="list-group-item">{{ $detail->foodMenu->name }} ({{ $detail->quantity }})</li>
                                        </div>
                                    @endforeach
                                </td>
                                <td>Paid: {{ $booking->paid_amount }} Tk</td>
                                <td>Due: {{ $booking->total - $booking->paid_amount }} Tk</td>
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>

@endsection
