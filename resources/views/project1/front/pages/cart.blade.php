@extends ('project1/front/layout/inner')

  @section ('content')
 <div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="{{URL::to('index')}}">Home</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>
 @if(Session::has('message'))
  <p class="alert {{Session::get ('alert-class', 'alert-info') }} "> {{Session::get('message')}}</p>
@endif
		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center">
								<span>Quantity</span>
							</div>
							<div class="one-eight text-center">
								<span>Total</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>
						<?php $cartCollection = Cart::getContent(); ?>
                           @foreach($cartCollection as $items)
						<div class="product-cart d-flex">
							<div class="one-forth">
								<div class="product-img" >
									<img src="{{$items['attributes']->img}}"  height="30px" width="50px" alt="Free html5 bootstrap 4 template">
								</div>
								<div class="display-tc">
									<h3>{{$items->name}}</h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{$items->price}}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<input type="text" id="quantity" name="quantity" class="form-control input-number text-center" value="" min="1" max="100">{{$items->quantity}} </input>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span class="price">{{$items->price*$items->quantity}}</span>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<a class="btn btn-danger"  href="{{URL::to('')}}/remove/{{$items->id}}">Remove</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-8">
									<form action="#">
										<div class="row form-group">
											
											<div class="one-eight text-center">
							
							</div>
										</div>
									</form>
								</div>
								<div class="col-sm-4 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>${{Cart::getTotal()}}</span></p>
											<p><span>Delivery:</span> <span>$25.00</span></p>
											<?php    $a=0.05;   ?>
											<p><span>Discount:</span> <span>$<?php  $dis=Cart::getTotal()*$a;
											  echo $dis; ?></span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>$<?php 
                                              echo  $total=Cart::getTotal()+25-$dis;
											?></span></p>
										</div>
										<div class="display-tc">
									<a class="btn btn-danger"  href="{{URL::to('')}}/order" >NEXT</a>
								</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>



				<form action='https://sandbox.2checkout.com/checkout/purchase' method='post'>
<input type='hidden' name='sid' value='901403919' />
<input type='hidden' name='mode' value='2CO' />
<input type='hidden' name='li_0_type' value='product' />
<input type='hidden' name='li_0_name' value='invoice123' />
<input type='hidden' name='li_0_price' value='25' />
<input type='hidden' name='card_holder_name' value='Checkout Shopper' />
<input type='hidden' name='street_address' value='123 Test Address' />
<input type='hidden' name='street_address2' value='Suite 200' />
<input type='hidden' name='email' value='bilalmanzoor4444@gmail.com' />
<input type='hidden' name='phone' value='+923034105303' />
<input name='submit' type='submit' value='Checkout' />
</form>










				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Related Products</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{URL::to('')}}/public/assets/images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Boots Shoes Maca</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{URL::to('')}}/public/assets/images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Women's Minam Meaghan</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{URL::to('')}}/public/assets/images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Men's Taja Commissioner</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 mb-4 text-center">
						<div class="product-entry border">
							<a href="#" class="prod-img">
								<img src="{{URL::to('')}}/public/assets/images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="#">Russ Men's Sneakers</a></h2>
								<span class="price">$139.00</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
 
  @stop