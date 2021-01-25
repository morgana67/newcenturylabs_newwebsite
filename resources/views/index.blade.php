@php
    use Jenssegers\Agent\Agent as Agent;
    $Agent = new Agent();
@endphp
@extends('layouts.site')
@section('content')
    <section class="slider-area no-ctrl fadeft">
        <div class="carousel slide" data-interval="false" data-ride="carousel" id="carousel-example-generic">
            <ol class="carousel-indicators hidden">
                <li class="active" data-slide-to="0" data-target="#carousel-example-generic">&nbsp;</li>
                <li data-slide-to="1" data-target="#carousel-example-generic">&nbsp;</li>
                <li data-slide-to="2" data-target="#carousel-example-generic">&nbsp;</li>
            </ol>
            <!-- Wrapper for slides -->

            <div class="carousel-inner">
                <div class="item active">
                    <img alt="..." src="/front/images/slide1.jpg"/>
                    <div class="container posrel">
                        <div class="caro-caps anime-flipInX">
                            <h1>The most <strong>affordable</strong>&nbsp;blood tests online</h1>

                            <p>We offer over 200 blood tests online from single tests to advanced compressive panels you
                                can order from the comfort of your home.</p>

                            <div class="lnk-btn inline-block more-btn"><a href="{{route('register')}}">Sign Up With Us</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="box-area text-center pt20 pb50">
        <div class="hed">
            <h2>IT&rsquo;S EASY TO GET STARTED</h2>

            <p>Place your order on your desk top or any mobile device.<br/>
                Get your lab order straight to your email.</p>
        </div>
    </section>
    <section class="slider-area no-ctrl fadeft">
            <div class="box-area text-center col-md-4">
                <div class="box col-sm-12 anime-left ">
                    <div class="box__img"><img alt="" src="/front/images/icon1.png"/></div>

                    <div class="box__cont ">
                        <h4>View labs &amp; order test</h4>

                        <p>Your lab order will be emailed to you securely</p>

                        <div class="lnk-btn more-btn"><a href="#">LEARN MORE</a></div>
                    </div>
                </div>

                <div class="box col-sm-12 anime-in">
                    <div class="box__img"><img alt="" src="/front/images/icon2.png"/></div>

                    <div class="box__cont">
                        <h4>Print your lab order</h4>

                        <p>Your lab order can be easily printed from your home PC</p>

                        <div class="lnk-btn more-btn"><a href="#">LEARN MORE</a></div>
                    </div>
                </div>

                <div class="box col-sm-12 anime-right">
                    <div class="box__img"><img alt="" src="/front/images/icon3.png"/></div>

                    <div class="box__cont">
                        <h4>Visit one of or our locations</h4>

                        <p>Visit one of our 2,300 friendly affiliated Quest Diagnostics patient service centers with your
                            lab order, no appointment needed!</p>

                        <div class="lnk-btn more-btn"><a href="#">LEARN MORE</a></div>
                    </div>
                </div>
            </div>
        <div class="col-md-8">
            <div class="col-sm-12">
                <iframe width="100%" {{$Agent->isMobile() ? '' :'height=550' }}  src="https://www.youtube.com/embed/TlNw-ybTo-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
{{--                <div class="container posrel">--}}
{{--                    <div class="caro-caps anime-flipInX">--}}
{{--                        <h1>The most <strong>affordable</strong>&nbsp;blood tests online</h1>--}}

{{--                        <p>We offer over 200 blood tests online from single tests to advanced compressive panels you--}}
{{--                            can order from the comfort of your home.</p>--}}

{{--                        <div class="lnk-btn inline-block more-btn"><a href="register.html">Sign Up With Us</a></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>

    </section>


{{--    <section class="box-area text-center pt20 pb50">--}}
{{--        <div class="container">--}}
{{--            <div class="hed">--}}
{{--                <h2>IT&rsquo;S EASY TO GET STARTED</h2>--}}

{{--                <p>Place your order on your desk top or any mobile device.<br/>--}}
{{--                    Get your lab order straight to your email.</p>--}}
{{--            </div>--}}

{{--            <div class="box col-sm-4 anime-left ">--}}
{{--                <div class="box__img"><img alt="" src="/front/images/icon1.png"/></div>--}}

{{--                <div class="box__cont ">--}}
{{--                    <h4>View labs &amp; order test</h4>--}}

{{--                    <p>Your lab order will be emailed to you securely</p>--}}

{{--                    <div class="lnk-btn more-btn"><a href="#">LEARN MORE</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="box col-sm-4 anime-in">--}}
{{--                <div class="box__img"><img alt="" src="/front/images/icon2.png"/></div>--}}

{{--                <div class="box__cont">--}}
{{--                    <h4>Print your lab order</h4>--}}

{{--                    <p>Your lab order can be easily printed from your home PC</p>--}}

{{--                    <div class="lnk-btn more-btn"><a href="#">LEARN MORE</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="box col-sm-4 anime-right">--}}
{{--                <div class="box__img"><img alt="" src="/front/images/icon3.png"/></div>--}}

{{--                <div class="box__cont">--}}
{{--                    <h4>Visit one of or our locations</h4>--}}

{{--                    <p>Visit one of our 2,300 friendly affiliated Quest Diagnostics patient service centers with your--}}
{{--                        lab order, no appointment needed!</p>--}}

{{--                    <div class="lnk-btn more-btn"><a href="#">LEARN MORE</a></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="most-area text-center bg-full pt50 pb50">
        <div class="container">
            <div class="most__cont col-sm-7 valigner anime-left">
                <div class="valign">
                    <h3>THE MOST <span>AFFORDABLE</span> BLOOD TESTS ONLINE</h3>

                    <p>Wouldn&rsquo;t you like to know what&rsquo;s going on in your body without paying an arm and a
                        leg? We make getting a blood tests affordable and easy to access the way it should be. You can
                        now order any blood tests on your terms, on demand 24 hour a day 7 days per week from your
                        desktop or any mobile device.</p>

                    <div class="lnk-btn browse-btn"><a href="{{route('shop')}}">View all Test &gt;&gt;</a></div>
                </div>
            </div>

            <div class="most__img col-sm-5">
                <div class="most__inr box">
                    <div class="most__inr__img hidden"><img alt="" src="/front/images/box1.jpg"/>
                    </div>

                    <div class="most__inr__cont text-center ">
                        <h3>CMP</h3>

                        <p>(Complete Metabolic Panel)</p>

                        <h2><sup>$</sup>14.00</h2>
                        <strong>Average competitors price</strong>

                        <h4><sup>$</sup>45.00</h4>
                        <strong>Pricing based on average direct to consumer pricing.</strong></div>
                </div>
            </div>
        </div>
    </section>

    <section class="most-area text-center pt50 pb50">
        <div class="container">
            <div class="most__cont col-sm-7 valigner anime-right pul-rgt">
                <div class="valign">
                    <h3>Empower <span>yourself</span> get to know the real &ldquo;YOU&rdquo; Take <span>control</span>
                        of your health!</h3>

                    <p>Did you know that 70-80% of all clinical decisions come from blood tests and disease happens
                        before you get a symptom. Don&#39;t neglect yourself, empower yourself and take charge.</p>

                    <div class="lnk-btn browse-btn"><a href="{{route('how-to-order')}}">Let&rsquo;s Get Proactive &gt;&gt;</a>
                    </div>
                </div>
            </div>

            <div class="most__img col-sm-5 pul-lft ">
                <div class="most__inr box">
                    <div class="most__inr__img"><img alt="" src="/front/images/box2.jpg"/></div>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="vdo-area text-center">--}}
{{--        <div class="container0">--}}
{{--            <div class="col-sm-12 p0">--}}
{{--                <iframe frameborder="0" height="420" src="https://www.youtube.com/embed/TlNw-ybTo-w"--}}
{{--                        width="100%"></iframe>--}}

{{--                <div class="vdo__cont hidden">--}}
{{--                    <h2>THIS IS WHAT KIM HAD TO SAY</h2>--}}

{{--                    <p>&ldquo;New Century Labs is my hero&rdquo;</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="testlab-area text-center bg-full white p100 valigner mt40 rotate-img--hover"
             style="background-image: url('/front/images/testlab-bg.jpg')">
        <div class="container">
            <div class="valign">
                <h4>My blood tests are so affordable and I&rsquo;m now able to have a more meaningful conversation with
                    my doctor</h4>
            </div>
        </div>
    </section>

    <section class="faq-area pb50">
        <div class="container">
            <div class="hed text-center">
                <h2>FAQ</h2>
            </div>

            <div calss="cont">
                <h3>Still have questions?</h3>

                <p>Here are some of the commonly asked questions people have about lab testing</p>

                <div class="panel-group accordion-arr" id="accordion">
                    <div class="col-sm-6 p0">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapseOne">Can I take my lab test results to my
                                    doctor? </a></h4>
                            </div>

                            <div class="panel-collapse collapse " id="collapseOne">
                                <div class="panel-body">Absolutely! We encourage you to take your lab test results to
                                    your doctor if you need to.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapseTwo">When do I get my results? </a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapseTwo">
                                <div class="panel-body">It depends on the test most tests take 24-72 hours to complete
                                    however some test may take longer, please click on the test you are interested in to
                                    find out more information.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapseThree">Can I order a lab test not offered on
                                    your website? </a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapseThree">
                                <div class="panel-body">Yes, all you have to do is email customer service with the test
                                    code and name of the test and we will make sure you get it.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapse4">Do I need to fast before I go to the draw
                                    center? </a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse4">
                                <div class="panel-body">It depends on the test, some test do not require fasting, please
                                    read the description on under patient prep to find out if fasting is required.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p0">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapse5">Can I rebill my insurance provider for my
                                    lab tests? </a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse5">
                                <div class="panel-body">We would be more than happy to send you an itemized receipt for
                                    you to submit to your insurance provider. There is no guarantee they will pay for
                                    your lab test.
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapse5i">Do you take HSA/FSA cards for lab
                                    tests? </a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse5i">
                                <div class="panel-body"><span
                                        style="line-height: 107%; font-family: Calibri, sans-serif; font-size: 12pt;">Absolutely, we take Health Savings cards in addition to Visa MasterCard, Discover and American Express.</span>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapse6">Can you give any medical advice? </a></h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse6">
                                <div class="panel-body">NCL does not provide any medical advice or promote any vitamin
                                    supplements, please discuss your lab test results with your doctor
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                           href="#collapse7">How do I contact customer service? </a>
                                </h4>
                            </div>

                            <div class="panel-collapse collapse" id="collapse7">
                                <div class="panel-body">You can call 1-800-519-2997 and email customer service at
                                    customerservice@newcenturylabs.com
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

