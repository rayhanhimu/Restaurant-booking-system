<div class="panel-heading">
    <h3 class="panel-title text_hedding">Your Order</h3>
</div>
@if(Session::has('cart'))
    <div class="panel-body">
        <ul class="list-group">
            @php
                $total = 0;
            @endphp
            @foreach (Session::get('cart') as $key => $item)
                @php
                    $menu = \App\FoodMenu::find($item['id']);
                @endphp
                <li class="list-group-item row" style="border:none; margin-bottom: 10px;">
                    <h5>{{ $menu->name }}</h5>
                    <div>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" name="quantity" onchange="updateQuantity({{ $key }}, this)" value="{{ $item['quantity'] }}">
                        </div>
                        <div class="col-sm-6">
                            @php
                                $total = $total + $item['price'] * $item['quantity'];
                            @endphp
                            <h5>{{ $item['price'] * $item['quantity'] }} <strong>Tk</strong></h5>
                        </div>
                        <div class="col-sm-2">
                            <button type="button" class="btn btn-danger" name="button" onclick="removeFromCart({{ $key }})">Remove</button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
    <div class="panel-footer">
        <h5>Total {{ $total }} <strong>Tk</strong></h5>
        <a class="btn btn-lg btn-warning" href="{{ route('order', $restaurant_id) }}" style="width: 100%;">Checkout</a>
    </div>
@endif
