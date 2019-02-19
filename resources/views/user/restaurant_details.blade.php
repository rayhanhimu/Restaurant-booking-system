@extends('layouts.blank')

@section('content')

<div style="color: pink ; text-align: left;">
    <h5 class="text_hedding" style="padding-left:20px">{{ $restaurant->name }}</h5>
</div>

<div class="row">
    <div id="demo-gallery" style="display:none;">
        <a href="#">
            <img alt="The winding road"
                 src="{{ asset('img/img4.jpg') }}"
                 data-image="{{ asset('img/img4.jpg') }}"
                 data-description="The winding road description"
                 style="display:none">
        </a>
        <a href="#">
            <img alt="The winding road"
                 src="{{ asset('img/img4.jpg') }}"
                 data-image="{{ asset('img/img4.jpg') }}"
                 data-description="The winding road description"
                 style="display:none">
        </a>
        <a href="#">
            <img alt="The winding road"
                 src="{{ asset('img/img4.jpg') }}"
                 data-image="{{ asset('img/img4.jpg') }}"
                 data-description="The winding road description"
                 style="display:none">
        </a>
        <a href="#">
            <img alt="The winding road"
                 src="{{ asset('img/img4.jpg') }}"
                 data-image="{{ asset('img/img4.jpg') }}"
                 data-description="The winding road description"
                 style="display:none">
        </a>
    </div>
</div>


<div class="tab-base div_content">

    <!--Nav Tabs-->
    <ul class="nav nav-tabs">
        <li class="active">
            <a  class="tab_content text_hedding" data-toggle="tab" href="#demo-lft-tab-1"> Menu</a>
        </li>
        <li>
            <a  class="tab_content text_hedding" data-toggle="tab" href="#demo-lft-tab-2">Review</a>
        </li>
        <li>
            <a class="tab_content text_hedding" data-toggle="tab" href="#demo-lft-tab-3">Info</a>
        </li>
    </ul>

    <!--Tabs Content-->
    <div class="tab-content">
        <div id="demo-lft-tab-1" class="tab-pane fade active in">
            <p class="text-main text-semibold">First Tab Content</p>
        </div>
        <div id="demo-lft-tab-2" class="tab-pane fade">
            <p class="text-main text-semibold">Second Tab Content</p>
        </div>
        <div id="demo-lft-tab-3" class="tab-pane fade">
            <p class="text-main text-semibold">Third Tab Content</p>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-3">
        <h3 class="text_hedding">Category</h3>
        <ul class="list-group">
            @foreach ($restaurant->food_categories as $key => $category)
                <li class="list-group-item" style="font-size:15px;">{{ $category->name }}</li>
            @endforeach
        </ul>
    </div>

    <div class="col-md-5">
        @foreach ($restaurant->food_categories as $key => $category)
            <div class="panel">
                <div class="panel-heading">
                    <div class="col-md-10">
                        <h3 class="panel-title text_hedding">{{ $category->name }}</h3>
                    </div>
                </div>
                <div class="panel-body">
                    <table class="table table-responsive">
                        <tbody>
                            @foreach ($category->FoodMenus as $key => $menu)
                                <tr style="border: 1px solid rgba(255,255,255,0.03);">
                                    <td style="border-top: 0px" class="col-md-3">{{ $menu->name }}</td>
                                    <td style="border-top: 0px" class="col-md-3" align="right"><span class="badge badge-primary">{{ $menu->ratio }}</span></td>
                                        <td style="border-top: 0px" class="col-md-3">{{ $menu->price }}tk</td>

                                    <td style="border-top: 0px" class="col-md-3" align="right">
                                        <button class="btn btn-info">ADD</button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-md-4">

        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title text_hedding">Your Order</h3>
            </div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item" style="border:none;">
                        <h5>Sub Sandwich BBQ Chicken 6 Inch</h5>
                        <div>
                            <div class="col-md-6">
                                <div class="col-md-3">
                                    <button class="btn btn-warning">+</button>
                                </div>
                                <div class="col-md-3">
                                    <h5>2</h5>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-danger">-</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>300 <strong>Tk</strong></h5>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel-footer">
                <h5>Total 300 <strong>Tk</strong></h5>
                <button class="btn btn-lg btn-warning" style="width: 100%;">Checkout</button>
            </div>
        </div>

    </div>

</div>


@endsection
