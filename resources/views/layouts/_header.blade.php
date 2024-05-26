<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enhanced Header Design</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f0f2f5;
      font-family: Arial, sans-serif;
      color: #333;
    }

    .header-top {
      background-color: #343a40;
      color: #fff;
      padding: 10px 0;
    }

    .header-top a {
      color: #fff;
      transition: color 0.3s ease;
    }

    .header-top a:hover {
      color: #ffd700;
    }

    .header-middle {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      padding: 10px 0;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .header-middle .logo img {
      max-width: 100%;
      height: auto;
    }

    .main-nav .menu > li > a {
      color: #333;
      padding: 10px 15px;
      font-weight: bold;
      transition: color 0.3s ease;
    }

    .main-nav .menu > li > a:hover,
    .main-nav .menu > li.active > a {
      color: #007bff;
    }

    .main-nav .megamenu {
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .main-nav .megamenu .menu-title {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .main-nav .megamenu a {
      color: #333;
      transition: color 0.3s ease;
    }

    .main-nav .megamenu a:hover {
      color: #007bff;
    }

    .header-search .form-control {
      width: 250px;
      transition: width 0.3s ease;
    }

    .header-search .form-control:focus {
      width: 300px;
    }

    .header-right .icon-search,
    .header-right .icon-shopping-cart {
      font-size: 1.5rem;
      color: #333;
      transition: color 0.3s ease;
    }

    .header-right .icon-search:hover,
    .header-right .icon-shopping-cart:hover {
      color: #007bff;
    }

    .header-right .cart-dropdown .dropdown-menu {
      width: 300px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .header-right .cart-dropdown .dropdown-cart-products .product {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .header-right .cart-dropdown .dropdown-cart-products .product img {
      width: 50px;
      height: 50px;
      object-fit: cover;
      margin-right: 10px;
      border-radius: 5px;
    }

    .header-right .cart-dropdown .btn-remove {
      font-size: 1rem;
      color: #dc3545;
      transition: color 0.3s ease;
    }

    .header-right .cart-dropdown .btn-remove:hover {
      color: #c82333;
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="header-top">
      <div class="container">
        <div class="header-left">
          <!-- Optional left-side content -->
        </div>
        <div class="header-right">
          <ul class="top-menu">
            <li>
              <a href="#">Links</a>
              <ul>
                <li><a href="tel:#"><i class="icon-phone"></i>Call: 00011122234</a></li>
                <li><a href="{{url('wishlist')}}"><i class="icon-heart-o"></i>My Wishlist <span>(3)</span></a></li>
                <li><a href="{{url('about')}}">About Us</a></li>
                <li><a href="{{url('contact')}}">Contact Us</a></li>
                <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="header-middle sticky-header">
      <div class="container">
        <div class="header-left">
          <button class="mobile-menu-toggler">
            <span class="sr-only">Toggle mobile menu</span>
            <i class="icon-bars"></i>
          </button>
          <a href="{{url('')}}" class="logo">
            <img src="{{url('assets/images/logo.png')}}" alt="Logo" width="105" height="25">
          </a>
          <nav class="main-nav">
            <ul class="menu sf-arrows">
              <li class="megamenu-container active">
                <a href="{{url('')}}">Home</a>
              </li>
              <li>
                <a href="javascript:;" class="sf-with-ul">Shop</a>
                <div class="megamenu megamenu-md">
                  <div class="row no-gutters">
                    <div class="col-md-12">
                      <div class="menu-col">
                        <div class="row">
                          @php
                          $getCategoryHeader = App\Models\CategoryModel::getRecordMenu()
                          @endphp
                          @foreach ($getCategoryHeader as $value_h_c)
                          @if (!empty($value_h_c->getSubCategory->count()))
                          <div class="col-md-4">
                            <a href="{{url($value_h_c->slug)}}" class="menu-title">{{$value_h_c->name}}</a>
                            <ul>
                              @foreach ($value_h_c->getSubCategory as $value_h_sub)
                              <li><a href="{{url($value_h_c->slug.'/'.$value_h_sub->slug)}}">{{$value_h_sub->name}}</a></li>
                              @endforeach
                            </ul>
                          </div>
                          @endif
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="product.html" class="sf-with-ul">Product</a>
                <div class="megamenu megamenu-sm">
                  <div class="row no-gutters">
                    <div class="col-md-6">
                      <div class="menu-col">
                        <div class="menu-title">Product Details</div>
                        <ul>
                          <li><a href="product.html">Default</a></li>
                          <li><a href="product-centered.html">Centered</a></li>
                          <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                          <li><a href="product-gallery.html">Gallery</a></li>
                          <li><a href="product-sticky.html">Sticky Info</a></li>
                          <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                          <li><a href="product-fullwidth.html">Full Width</a></li>
                          <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="banner banner-overlay">
                        <a href="category.html">
                          <img src="{{url('assets/images/menu/banner-2.jpg')}}" alt="Banner">
                          <div class="banner-content banner-content-bottom">
                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
        <div class="header-right">
          <div class="header-search">
            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
            <form action="{{ route('product.search') }}" method="post">
              @csrf
              <div class="header-search-wrapper">
                <label for="q" class="sr-only">Search</label>
                <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." value="{{!empty(Request::get('q')) ? Request::get('q') : ''}}" required>
              </div>
            </form>
          </div>
          <div class="dropdown cart-dropdown">
            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              <i class="icon-shopping-cart"></i>
              <span class="cart-count">{{Cart::getContent()->count()}}</span>
            </a>
            @if(!empty(Cart::getContent()->count()))
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-cart-products">
                @foreach (Cart::getContent() as $header_cart)
                @php
                $getCartProduct = App\Models.ProductModel::getSingle($header_cart->id);
                @endphp
                @if(!empty($getCartProduct))
                @php
                $getProductImage = $getCartProduct->getImageSingle($getCartProduct->id);
                @endphp
                <div class="product">
                  <div class="product-cart-details">
                    <h4 class="product-title">
                      <a href="{{url($getCartProduct->slug)}}">{{ $header_cart->id }} {{$getCartProduct->title}}</a>
                    </h4>
                    <span class="cart-product-info">
                      <span class="cart-product-qty">{{ $header_cart->quantity }}</span> x ${{ number_format($header_cart->price,2) }}
                    </span>
                  </div>
                  <figure class="product-image-container">
                    <a href="{{url($getCartProduct->slug)}}" class="product-image">
                      <img src="{{ $getProductImage->getLogo() }}" alt="product">
                    </a>
                  </figure>
                  <a href="{{url('cart/delete/'.$header_cart->id)}}" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                </div>
                @endif
                @endforeach
              </div>
              <div class="dropdown-cart-total">
                <span>Total</span>
                <span class="cart-total-price">${{number_format(Cart::getSubTotal(),2)}}</span>
              </div>
              <div class="dropdown-cart-action">
                <a href="cart" class="btn btn-primary">View Cart</a>
                <a href="{{url('checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </header>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
