<header>
    <section class="hdr-area hdr-nav hdr--sticky blur-nav--hover0 cross-toggle fixed">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation" id="slide-nav">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.html" class="navbar-brand">
                            <img src="{{asset('front/images/logo.png')}}" alt="Logo"/>
                        </a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="slidemenu">
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                            <ul class="nav navbar-nav navbar-main">
                                <li><a href="/how-to-order">HOW TO ORDER</a></li>
                                <li class=""><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                aria-haspopup="true" aria-expanded="false">TEST MENU<span
                                            class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/shop">Single Test Menu</a></li>
                                        <li><a href="/bundle">Wellness Tests</a></li>
                                        <li><a href="/testbydisease">Test By Disease</a></li>

                                        <li><a href="/faq">faq</a></li>
                                        <li><a href="/privacy">privacy</a></li>
                                        <li><a href="/terms">terms</a></li>
                                        <li><a href="/signup">signup</a></li>
                                        <li><a href="/register">register</a></li>
                                        <li><a href="/cart">cart</a></li>
                                        <li><a href="/blog-detail">blog-detail</a></li>
                                        <li><a href="/product-detail">product-detai</a></li>

                                    </ul>
                                </li>


                                <li><a href="/about-us">ABOUT US</a></li>
                                <li><a href="/locations">LOCATIONS</a></li>
                                <li><a href="/blog">BLOG</a></li>
                                @if(!is_customer())
                                    <li class="login-link"><a href="{{route('login')}}">Login</a></li>
                                @else
                                    <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="!#" class="pagelinkcolor">My Orders</a></li>
                                            <li><a href="{{route('profile.changePassword')}}" class="pagelinkcolor">Change Password</a></li>
                                            <li><a href="{{route('profile.profile')}}" class="pagelinkcolor">Profile</a></li>
                                            <li><a href="!#" class="pagelinkcolor" id="logout">Log Out</a></li>
                                        </ul>
                                    </li>
                                @endif

                                <li class="cart-item">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-haspopup="true" aria-expanded="false"><i
                                            class="fa fa-shopping-cart fa-2"></i> <span>Cart<sup
                                                class="badge"></sup></span> </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);" class="pagelinkcolor">No items</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </section>
</header>
