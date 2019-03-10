@extends('layouts.app')

@section('content')

    @if(isset($restaurantTables))

    <div class="row">
        <div class="col-md-12" align="right">
            <a href="{{ route('tables.add') }}" class="btn btn-warning">Add Table <i class="sl sl-icon-plus"></i></a>
        </div>
    </div>

    <br>

    <div class="row">

        <div class="col-md-12">
            @if(count($restaurantTables) < 1)
                <h4>No tables found.</h4>
            @else
                <table class="table table-responsive">

                    <tbody>
                        <tr>
                            <th>No.</th>
                            <th>Table Name</th>
                            <th>Capacity</th>
                            <th>Photo</th>
                            <th>Action</th>

                        </tr>

                        @foreach($restaurantTables as $key => $restaurantTable)
                        <tr>
                            <td data-label="Column 1">{{ $key+1 }}</td>
                            <td data-label="Column 2">{{ $restaurantTable->name }}</td>
                            <td data-label="Column 3">{{ $restaurantTable->capacity }}</td>
                            <td data-label="Column 4"><img src="{{ asset($restaurantTable->photo) }}" class="img-md" ></td>
                            <td data-label="Column 5">
                                <a onclick="confirm_modal('{{ route('tables.delete', $restaurantTable->id) }}');" class="btn btn-danger btn-icon"><i class="demo-psi-recycling icon-lg"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
    @endif

@endsection
