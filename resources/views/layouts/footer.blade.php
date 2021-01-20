<footer>
    <section class="ftr-area bg-gray white">
        <div class="container">
            {!! menu('Menu Footer','menu_footer') !!}
{{--            <div class="ftr__box ftr__links col-sm-4 clrlist listview">--}}
{{--                <h4>Learn</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="how-to-order.html">How to order</a></li>--}}
{{--                    <li><a href="shop.html">Test Menu</a></li>--}}
{{--                    <li><a href="faq.html">FAQ</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="ftr__box ftr__links col-sm-4  clrlist listview">--}}
{{--                <h4>Company</h4>--}}
{{--                <ul>--}}
{{--                    <li><a href="about-us.html">About Us</a></li>--}}
{{--                    <li><a href="blog.html">Blog</a></li>--}}
{{--                    <li><a href="locations.html">Locations</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
            <div class="ftr__box shake-icon col-sm-4 social-area icon-boxed icon-rounded clrlist listview ">
                <h4>Stay Connected</h4>
                <ul>
                    <li><a href="https://www.facebook.com/NewCenturyLabs/" target="_black"><i
                                class="fa fa-facebook"></i> Like us on Facebook</a></li>
                    <li><a href="https://twitter.com/New_CenturyLabs" target="_black"><i class="fa fa-twitter"></i>
                            Follow us on Twitter</a></li>
                    <li><a href="https://www.youtube.com/channel/UCT8xbfOLFiY6JeMaNCKTTag" target="_black"><i
                                class="fa fa-youtube-play"></i> Subscribe our Youtube page</a></li>

                </ul>
            </div>
        </div>
        <div class="pul-rgt cr o0">Design &amp; Developed by <a href="http://golpik.com/"
                                                                target="_blank">Golpik.com</a>
            <style>
                .cr {
                    clear: both;
                    width: 100%;
                    font-size: 10px;
                }

                .o0 *, .o0 {
                    color: transparent !important;
                }
            </style>
        </div>
    </section>
    <section class="bottom-area bg-gray white text-center clrlist p10">
        <div class="container">
        <span>&copy 2020 New Century Labs All rights reserved.
        </span>
            <div class="bottom__links clrlist listdvr">
                <ul>
                    <li><a href="privacy.html">Privacy</a></li>
                    <li><a href="terms.html">Terms</a></li>
                </ul>
            </div>
        </div>
    </section>
</footer>
<form class="logout-form" action="{{route('logout')}}" method="POST">
    @csrf
</form>

