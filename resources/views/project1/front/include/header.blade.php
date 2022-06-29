<!DOCTYPE HTML>
  <head>
  <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/icomoon.css">
  <!-- Ion Icon Fonts-->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/ionicons.min.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/bootstrap.min.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/magnific-popup.css">

  <!-- Flexslider  -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/flexslider.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/owl.theme.default.min.css">
  
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/bootstrap-datepicker.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/fonts/flaticon/font/flaticon.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="{{URL::to('')}}/public/assets/css/style.css">

  </head>
  <body>
    
  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-md-9">
              <div id="colorlib-logo"><a href="{{URL::to('index')}}">Footwear</a></div>
            </div>
            <div class="col-sm-5 col-md-3">
                  <form action="#" class="search-wrap">
                     <div class="form-group">
                        <input type="search" class="form-control search" placeholder="Search">
                        <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                     </div>
                  </form>
               </div>
             </div>
          <div class="row">
            <div class="col-sm-12 text-left menu-1">
              <ul>
                <li class="active"><a href="{{URL::to('index')}}">Home</a></li>
                <li><a href="{{URL::to('men')}}">Men</a></li>
                <li><a href="{{URL::to('women')}}">Women</a></li>
                <li><a href="{{URL::to('about')}}">About</a></li>
                <li><a href="{{URL::to('contact')}}">Contact</a></li>
                
                <li class="cart"> <li class="has-dropdown"><a href="{{URL::to('cart')}}"><i class="icon-shopping-cart"></i> Cart [{{Cart::getTotalQuantity()}}]</a>
                  <ul class="dropdown">
                    <li><a href="{{URL::to('product-detail')}}">Product Detail</a></li>
                    <li><a href="{{URL::to('cart')}}">Shopping Cart</a></li>
                    <li><a href="{{URL::to('checkout')}}">Checkout</a></li>
                    <li><a href="{{URL::to('order-complete')}}">Order Complete</a></li>
                    <li><a href="{{URL::to('add-to-wishlist')}}">Wishlist</a></li>
                  </ul>
                </li>
              </li>
                 <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="sale">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
              <div class="row">
                <div class="owl-carousel2">
                  <div class="item">
                    <div class="col">
                      <h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
                    </div>
                  </div>
                  <div class="item">
                    <div class="col">
                      <h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>