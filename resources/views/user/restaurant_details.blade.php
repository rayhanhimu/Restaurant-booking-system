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
                                                    <button class="btn btn-info" onclick="addToCart({{ $menu->id }})">ADD</button>
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

                    <div class="panel" id="order_details">
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
                                <button class="btn btn-lg btn-warning" onclick="show_order_modal('{{ $restaurant->id }}')" style="width: 100%;">Checkout</button>
                            </div>
                        @endif

                    </div>

                </div>

            </div>
        </div>
        <div id="demo-lft-tab-2" class="tab-pane fade">
            <div class="col-sm-offset-2 col-sm-6">
                <div id="listing-reviews" class="listing-section">
				<h3 class="listing-desc-headline margin-top-75 margin-bottom-20">Reviews <span>(12)</span></h3>

				<div class="clearfix"></div>

				<!-- Reviews -->
				<section class="comments listing-reviews">

					<ul>
						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Rayhan himu<span class="date">June 2018</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Good food</p>

								<div class="review-images mfp-gallery-container">
									<a href="images/review-image-01.jpg" class="mfp-gallery"><img src="images/review-image-01.jpg" alt=""></a>
								</div>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>12</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Rayhan<span class="date">May 2018</span>
									<div class="star-rating" data-rating="4"></div>
								</div>
								<p>Good food</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review <span>2</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /></div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Anik<span class="date">June 2018</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Nice place</p>

								<div class="review-images mfp-gallery-container">
									<a href="images/review-image-02.jpg" class="mfp-gallery"><img src="images/review-image-02.jpg" alt=""></a>
									<a href="images/review-image-03.jpg" class="mfp-gallery"><img src="images/review-image-03.jpg" alt=""></a>
								</div>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i>Review <span>4</span></a>
							</div>
						</li>

						<li>
							<div class="avatar"><img src="http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70" alt="" /> </div>
							<div class="comment-content"><div class="arrow-comment"></div>
								<div class="comment-by">Tushar<span class="date">May 2018</span>
									<div class="star-rating" data-rating="5"></div>
								</div>
								<p>Nice place</p>
								<a href="#" class="rate-review"><i class="sl sl-icon-like"></i> Helpful Review</a>
							</div>

						</li>
					 </ul>
				</section>

				<!-- Pagination -->
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<!-- Pagination -->
						<div class="pagination-container margin-top-30">
							<nav class="pagination">
								<ul>
									<li><a href="#" class="current-page">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<!-- Pagination / End -->
			</div>


			<!-- Add Review Box -->
			<div id="add-review" class="add-review-box">

				<!-- Add Review -->
				<h3 class="listing-desc-headline margin-bottom-20">Add Review</h3>

				<span class="leave-rating-title">Your rating </span>

				<!-- Rating / Upload Button -->
				<div class="row">
					<div class="col-md-6">
						<!-- Leave Rating -->
						<div class="clearfix"></div>
						<div class="leave-rating margin-bottom-30">
							<input type="radio" name="rating" id="rating-1" value="1"/>
							<label for="rating-1" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-2" value="2"/>
							<label for="rating-2" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-3" value="3"/>
							<label for="rating-3" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-4" value="4"/>
							<label for="rating-4" class="fa fa-star"></label>
							<input type="radio" name="rating" id="rating-5" value="5"/>
							<label for="rating-5" class="fa fa-star"></label>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="col-md-6">
						<!-- Uplaod Photos -->
						<div class="add-review-photos margin-bottom-30">
							<div class="photoUpload">
							    <span><i class="sl sl-icon-arrow-up-circle"></i> Upload Photos</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>
				</div>

				<!-- Review Comment -->
				<form id="add-comment" class="add-comment">
					<fieldset>

						<div class="row">
							<div class="col-md-6">
								<label>Name:</label>
								<input type="text" value=""/>
							</div>

							<div class="col-md-6">
								<label>Email:</label>
								<input type="text" value=""/>
							</div>
						</div>

						<div>
							<label>Review:</label>
							<textarea cols="40" rows="3"></textarea>
						</div>

					</fieldset>

					<button class="button">Submit Review</button>
					<div class="clearfix"></div>
				</form>

			</div>
			<!-- Add Review Box / End -->

            </div>
        </div>
        <div id="demo-lft-tab-3" class="tab-pane fade">
            <div class="col-sm-offset-4 col-sm-4">
                <div class="boxed-widget opening-hours margin-top-35">
                <div class="listing-badge now-open">Now Open</div>
                    <h3><i class="sl sl-icon-clock"></i> Opening Hours</h3>
                    <ul>
                        <li>Monday <span>9 AM - 5 PM</span></li>
                        <li>Tuesday <span>9 AM - 5 PM</span></li>
                        <li>Wednesday <span>9 AM - 5 PM</span></li>
                        <li>Thursday <span>9 AM - 5 PM</span></li>
                        <li>Friday <span>9 AM - 5 PM</span></li>
                        <li>Saturday <span>9 AM - 3 PM</span></li>
                        <li>Sunday <span>Closed</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript">

        function addToCart(id){
            $.post('{{ route('addToCart') }}',{_token:'{{ @csrf_token() }}', id:id}, function(data){
                $('#order_details').html(data);
            });
        }

        function updateQuantity(key, em){
            var quantity = $(em).val();
            $.post('{{ route('updateQuantity') }}',{_token:'{{ @csrf_token() }}', key:key, quantity: quantity}, function(data){
                $('#order_details').html(data);
            });
        }

        function removeFromCart(key){
            $.post('{{ route('removeFromCart') }}',{_token:'{{ @csrf_token() }}', key:key}, function(data){
                $('#order_details').html(data);
            });
        }

        function show_modal(){
            show_order_modal('{{ $restaurant->id }}');
        }

        $('input[name=date]').on('change', function(){
            var date = $('input[name=date]').val();
            var people = $('input[name=people]').val();
            $.post('{{ route('available-times') }}', {_token:'{{ @csrf_token() }}', date:date, people:people, id:{{ $restaurant->id }}}, function(data){
                $('#available-times').html(data);
            });
        });

        $('input[name=people]').on('keyup', function(){
            var date = $('input[name=date]').val();
            var people = $('input[name=people]').val();
            $.post('{{ route('available-times') }}', {_token:'{{ @csrf_token() }}', date:date, people:people, id:{{ $restaurant->id }}}, function(data){
                $('#available-times').html(data);
            });
        });
    </script>
@endsection
