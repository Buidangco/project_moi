
 <header class="header-area header-wrapper">
            <!-- header-top-bar -->
            <div class="header-top-bar plr-185">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="call-us">
                                <p class="mb-0 roboto">(+88) 01234-567890</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="top-link clearfix">
                                <ul class="link f-right">
                                    @if(Auth::guard('admin')->check())
                                    <li id="li1">
                                        <a href="my-account.html">
                                            <i class="zmdi zmdi-account"></i>
                                        {{Auth::guard('admin')->user()->name}}                            
                                         </a>
                                           
                                         
                                        
                                    </li>
                                     <li><a href="/Home2/donhang/{{Auth::guard('admin')->user()->id}}">
                                      <i class="zmdi zmdi-account"></i>Đơn hàng</a></li>
                                     <li>
                                        <a href="{{route('logout')}}">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Đăng xuất
                                        </a>
                                    </li>
                                    @else
                                    <li>
                                        <a href="/Home1/login">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/Home1/createlogin">
                                            <i class="zmdi zmdi-lock"></i>
                                            Đăng kí
                                        </a>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-area -->
            <div id="sticky-header" class="header-middle-area plr-185">
                <div class="container-fluid">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="{{url('image')}}/logo1.png" style=" width: 54px;" alt="main logo">
                                    </a>
                                </div>
                            </div>
                            <!-- primary-menu -->
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="/Home/home">Home</a></li>
                                        <li class="mega-parent"><a href="shop.html">Sản phẩm</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link f-left">
                                                    @foreach($loaisp as $loai)
                                                    <ul class="single-mega-item">
                                                        <li style="cursor: pointer;" class="menu-title" onclick="choncode('{{$loai->code}}')">
                                                          <!--   <a href="{{url('Home/chitietloai')}}/{{$loai->code}}"> -->
                                                            {{$loai->nameLoai}}
                                                            <!-- </a> -->
                                                        </li>
                                                    </ul>
                                                    @endforeach
                                                </div>
                                                <div class="mega-menu-photo f-left">
                                                    <a href="#">
                                                        <img src="{{url('image')}}/anhnen.jpg" alt="mega menu image">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="#">Pages</a>
                                            <div class="mega-menu-area mega-menu-area-2 clearfix">
                                                <div class="mega-menu-link mega-menu-link-2  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="shop.html">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product.html">Single Product</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="order.html">Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="My-account.html">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="about.html">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="dropdwn">
                                                <li><a href="blog-left-sidebar.html">Dropdown Repeat</a>
                                                    <ul class="dropdwn-repeat">
                                                        <li>
                                                            <a href="blog.html">Blog</a>
                                                        </li>
                                                        <li>
                                                            <a href="s">Blog Details</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="single-blog.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header-search & total-cart -->
      
                        </div>
                    </div>
                </div>
            </div>
        </header>