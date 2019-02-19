@extends('layouts.app')

@section('content')

<div>
        <div class="panel">
            <div class="panel-heading">
                <div class="col-md-10">
                    <h3 class="panel-title">Current date</h3>
                </div>
               
            </div>
            <div class="panel-body">  
                <table class="table table-responsive">
                    <tbody>
                        <tr style="border: 1px solid rgba(255,255,255,0.03);">
                            <div class="row">
                                <td style="border-top: 0px" class="col-md-1">Rayhan</td>
                                <td style="border-top: 0px" class="col-md-2 text-center">01776231545</td>
                                <td style="border-top: 0px" class="col-md-1 text-center">09:30AM</td>
                                 <td style="border-top: 0px" class="col-md-1 text-center">10 person</td>
                                  <td style="border-top: 0px" class="col-md-5 text-center">
                                    <div class="col-md-6">
                                        <li class="list-group-item">soup</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="list-group-item">burger</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="list-group-item">fried chiccken</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="list-group-item">7UP</li>
                                    </div>
                                    <div class="col-md-6">
                                        <li class="list-group-item">soft drink</li>
                                    </div>
                                </td>
                                <td style="border-top: 0px" class="col-md-1" align="right"><button class="btn btn-success">Approve</button></td>
                                 <td style="border-top: 0px" class="col-md-1" align="right"><button class="btn btn-danger">Declined</button></td>
                            </div>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection