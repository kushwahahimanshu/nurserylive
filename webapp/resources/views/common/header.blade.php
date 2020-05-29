<header>
    <div class="mobile-fix-option"></div>
    <div class="top-header">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="top-header-left">
                        <div class="shpping-order d-block">
                            <h6>free shipping on order over ₹499 </h6>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 col-sm-6">
                    <div class="top-header-right">
                        <div class="top-menu-block"> 
                            <ul> 
                                @guest 
                                <li><a href="#">todays deal</a></li> 
                                <li><a href="#">easy returns</a></li>
                                <li><a href="{{url('/my-cart')}}">My Cart</a></li> 
                                <li><a href="{{url('/login-page')}}"  onclick="openAccount()">login</a></li>
                                <li><a href="{{url('/register-page')}}"  onclick="openAccount()">Register</a></li>
                                @else
                                <li><a href="{{url('/my-account')}}">My Account</a></li> 
                                <li><a href="{{url('/my-cart')}}">My Cart</a></li> 
                                <li><a href="{{url('/my-wishlist')}}">My Wishlist</a></li> 
                                <li><a href="{{url('/my-order')}}">My Orders</a></li> 
                                <li><a href="{{url('/track-order')}}">Track Orders</a></li>
                                <li><a href="{{ route('logout') }}"  onclick="openAccount()">Logout</a></li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="layout-header1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu-block">
                        <div class="menu-left">
                            <div class="sm-nav-block">
                                <span class="sm-nav-btn"><i class="fa fa-bars"></i></span>
                                <ul class="nav-slide">
                                    <li>
                                        <div class="nav-sm-back">
                                            back <i class="fa fa-angle-right pl-2"></i>
                                        </div>
                                    </li>
                                    @foreach($category1 as $r)
                                      <li> <img src="{{asset($r->image)}}" alt="catergory-product"style="height: 39px; width: 39px;"> <a href="{{url('show-category/'.$r->category)}}">&nbsp;</a>{{strtoupper($r->category)}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="brand-logo">
                                <a href="{{url('/')}}">
                                    <img src="{{url('images/new/logo.png')}}" class="img-fluid  " alt="logo-header">
                                </a>
                            </div>
                        </div>
                        <div class="menu-right">
                            <div class="toggle-block">
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>  
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                                        </li> 
                                        <li>
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        @foreach($header1 as $r2) 
                                        <li @if($r2->layout != 'single') class="mega" @endif id="hover-cls"><a href="#">{{$r2->item_name}}</a>
                                            @if($r2->layout == 'single')  
                                            <?php 
                                            $data = DB::table('header_menus')->where('item_name',$r2->item_name)->pluck('subcategory')->first();   
                                            $data1 =  json_decode($data); 
                                            ?>  
                                            @foreach($data1 as $r)
                                            <ul>
                                                @foreach($r as $rm2)
                                                <li><a href="{{asset($rm2->link)}}">{{$rm2->name}}</a></li>
                                                @endforeach
                                            </ul>
                                            @endforeach
                                            @endif  
                                            <!--product-meu start-->
                                            @if($r2->layout == 'six')   
                                            <ul class="mega-menu full-mega-menu ">
                                                <li>
                                                    <div class="container">
                                                        <?php 
                                                        $data = DB::table('header_menus')->where('item_name',$r2->item_name)->pluck('subcategory')->first();   
                                                        $data1 =  json_decode($data);   
                                                        ?> 
                                                        <div class="row">
                                                            @foreach($data1 as $r) 
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>{{$r->title}}</h5>
                                                                    </div>
                                                                    <div class="menu-content">
                                                                        @foreach($r->sub_cat as $r1) 
                                                                        <ul>
                                                                            <li><a href="{{asset($r1->link)}}">{{$r1->name}}</a></li> 
                                                                        </ul>
                                                                        @endforeach  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endforeach  
                                                        </div> 
                                                        <div class="row menu-banner">
                                                            <?php  $data = explode(',', $r2->image); ?>
                                                            @foreach($data as $r)
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <img src="{{asset($r)}}" alt="menu-banner" class="img-fluid">
                                                                </div>
                                                            </div>
                                                            @endforeach   
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- </li> -->
                                            @endif 
                                            <!--product-meu end--> 
                                            <!--mega-meu start-->
                                            @if($r2->layout == 'four') 

                                            <ul class="mega-menu full-mega-menu ratio_landscape">
                                                <li>
                                                    <div class="container">
                                                        <?php 
                                                        $data = DB::table('header_menus')->where('item_name',$r2->item_name)->pluck('subcategory')->first();   
                                                        $data1 =  json_decode($data);   
                                                        ?> 
                                                        <div class="row">
                                                            @foreach($data1 as $r)  
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="menu-title">
                                                                        <h5>{{$r->title}}</h5></div>
                                                                        <div class="menu-content">
                                                                            @foreach($r->sub_cat as $r1) 
                                                                            <ul>
                                                                                <li><a href="{{asset($r1->link)}}">{{$r1->name}}</a></li> 
                                                                            </ul>
                                                                            @endforeach  
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach  
                                                                <div class="col mega-box product ">
                                                                    <?php  $data = explode(',', $r2->image); ?>
                                                                    @foreach($data as $r)
                                                                    <div class="mega-img">
                                                                        <img src="{{asset($r)}}" alt="menu-banner" class="img-fluid">
                                                                    </div>
                                                                    @endforeach   
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <!--  </li> -->
                                                @endif 
                                            </li>
                                            <!--mega-meu end--> 
                                            @endforeach  
                                        </ul>
                                    </nav>
                                </div>
                                <div class="d-md-none">
                                    <div class="icon-nav">
                                        <ul>
                                            <li class="mobile-user onhover-dropdown d-md-none" onclick="openAccount()"><a href="#"><i class="icon-user"></i></a>
                                            </li>
                                            <li class="mobile-wishlist d-md-none" onclick="openWishlist()">
                                                <a href="#">
                                                    <i class="icon-heart"></i>
                                                    <div class="cart-item">
                                                        <div>0 item<span>wishlist</span></div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="mobile-search"><a href="#"><i class="icon-search"></i></a>
                                                <div class="search-overlay">
                                                    <div>
                                                        <span class="close-mobile-search">×</span>
                                                        <div class="overlay-content">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <form>
                                                                            <div class="form-group"><input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product"></div>
                                                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="mobile-setting mobile-setting-hover" onclick="openSetting()"><a href="#"><i class="icon-settings"></i></a>
                                            </li>
                                        </ul>
                                        <div class="cart-block mobile-cart cart-hover-div d-md-none" onclick="openCart()">
                                            <a href="#"><span class="cart-product">0</span><i class="icon-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="navbar-menu">
                            <div class="category-left">
                                <div class=" nav-block">
                                    <div class="nav-left">
                                        <nav class="navbar" data-toggle="collapse" data-target="#navbarToggleExternalContent" style="cursor: pointer;">
                                            <button class="navbar-toggler" type="button">
                                                <span class="navbar-icon"><i class="fa fa-arrow-down"></i></span>
                                            </button>
                                            <h5 class="mb-0 ml-3 text-white title-font">Shop by category</h5>
                                        </nav>
                                        <div class="collapse nav-desk" id="navbarToggleExternalContent">
                                            <ul class="nav-cat title-font">
                                                @foreach($category1 as $r)
                                                <li> <img src="{{asset($r->image)}}" alt="catergory-product" style="height: 39px; width: 39px;"> <a href="{{url('show-category/'.$r->category)}}">&nbsp;{{$r->category}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-block">
                                    <div class="input-box">
                                        <div class="big-deal-form">
                                            <div class="input-group ">
                                                <input type="text" class="form-control" placeholder="Search a Product" id="search">
                                                <div class="input-group-append">
                                                    <span class="search"><i class="fa fa-search" onclick="validate()"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="category-right">
                                <div class="btn-group">
                                    <div class="gift-block" data-toggle="dropdown">
                                        <div class="grif-icon">
                                            <i class="icon-truck"></i>
                                        </div>
                                        <div class="gift-offer">
                                            <p> on order over ₹499 </p>
                                            <span>Free Shipping</span>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </header>
<!--header end-->