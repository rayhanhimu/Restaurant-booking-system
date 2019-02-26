@extends('layouts.app')

@section('content')

    <!-- Content -->
    <div class="row">
        <div class="col-lg-12">
                <div class="col-lg-6">
                    <form method="POST" action="{{ route('tables.insert') }}">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label" for="name">Table Name</label>
                                <div class="col-sm-4">
                                    <input id="name" name="name" type="text" placeholder="Table name" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <label class="col-sm-4 control-label" for="capacity">Table Capacity</label>
                                <div class="col-sm-4">
                                    <input id="capacity" name="capacity" type="number" placeholder="Capacity" class="form-control input-md">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button data-bb-handler="success" type="submit" class="btn btn-purple">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
