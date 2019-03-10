@extends('layouts.app')

@section('content')

<div class="panel">

    <!-- Bubble Numbers Form Wizard -->
    <!--===================================================-->
    <div id="demo-step-wz">
        <div class="wz-heading wz-w-label bg-info">

            <!--Progress bar-->
            <div class="progress progress-xs">
                <div style="width: 25%; margin: 0px 12.5%;" class="progress-bar progress-bar-dark"></div>
            </div>

            <!--Nav-->
            <ul class="wz-steps wz-icon-bw wz-nav-off text-lg">
                <li class="col-xs-4 active">
                    <a data-toggle="tab" href="#demo-step-tab1" aria-expanded="false">
                        <span class="icon-wrap icon-wrap-xs icon-circle bg-dark mar-ver">
					                                    <span class="wz-icon icon-txt text-bold">1</span>
                        <i class="wz-icon-done demo-psi-like"></i>
                        </span>
                        <small class="wz-desc box-block text-semibold">Account</small>
                    </a>
                </li>
                <li class="col-xs-4">
                    <a data-toggle="tab" href="#demo-step-tab2" aria-expanded="true">
                        <span class="icon-wrap icon-wrap-xs icon-circle bg-dark mar-ver">
					                                    <span class="wz-icon icon-txt text-bold">2</span>
                        <i class="wz-icon-done demo-psi-like"></i>
                        </span>
                        <small class="wz-desc box-block text-semibold">Password</small>
                    </a>
                </li>
                <li class="col-xs-4">
                    <a data-toggle="tab" href="#demo-step-tab3" aria-expanded="false">
                        <span class="icon-wrap icon-wrap-xs icon-circle bg-dark mar-ver">
					                                    <span class="wz-icon icon-txt text-bold">3</span>
                        <i class="wz-icon-done demo-psi-like"></i>
                        </span>
                        <small class="wz-desc box-block text-semibold">Address</small>
                    </a>
                </li>
            </ul>
        </div>

        <!--Form-->
        <form class="form-horizontal" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel-body">
                <div class="tab-content">

                    <!--First tab-->
                    <div id="demo-step-tab1" class="tab-pane fade active in" >
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email</label>
                            <div class="col-lg-7">
                                <input type="email" class="form-control" name="email" placeholder="Email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Name</label>
                            <div class="col-lg-7">
                                <input type="text" class="form-control" name="name" placeholder="Name"value="{{ Auth::user()->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Photo</label>
                            <div class="col-lg-7">
                                <input type="file" class="form-control" name="photo">
                            </div>
                        </div>
                    </div>

                    <!--Second tab-->
                    <div id="demo-step-tab2" class="tab-pane">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Current Password</label>
                            <div class="col-lg-7">
                                <input type="password" placeholder="Current Password" name="current_password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">New Password</label>
                            <div class="col-lg-7">
                                <input type="password" placeholder="New Password" name="new_password" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Retype Password</label>
                            <div class="col-lg-7">
                                <input type="password" placeholder="Retype Password" name="retype_password" class="form-control">
                            </div>
                        </div>
                    </div>

                    <!--Third tab-->
                    <div id="demo-step-tab3" class="tab-pane">
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Phone Number</label>
                            <div class="col-lg-7">
                                <input type="text" placeholder="Phone number" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Address</label>
                            <div class="col-lg-7">
                                <input type="text" placeholder="Address" name="address" class="form-control" value="{{ Auth::user()->address }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Website</label>
                            <div class="col-lg-7">
                                <input type="text" placeholder="Website" name="website" class="form-control" value="{{ Auth::user()->website }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Footer button-->
            <div class="panel-footer text-right">
                <div class="box-inline">
                    <button type="submit" class="finish btn btn-info">Finish</button>
                </div>
            </div>
        </form>
    </div>
    <!--===================================================-->
    <!-- End Bubble Numbers Form Wizard -->

</div>

@endsection
