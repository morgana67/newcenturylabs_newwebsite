@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('../front/images/testmenu2.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2></h2>
                <h3>ABO Group and RH Type </h3>
            </div>
        </div>
    </section>
    <section class="description-area">
        <div class="container">
            <div class="description-box col-sm-6">
                <div class="description__inr">
                    <div class="description__cont">
                        <h3>Description</h3>
                        <p>ABO grouping is a test performed to determine an individual's blood type. It is based on the
                            premise that individuals have antigens on their red blood cells (RBCs) that correspond to
                            the 4 main blood groups: A, B, O, or AB.</p>
                        <p>ABO type and Rh are needed to identify candidates for Rh immune globulin and to assess the
                            risk of hemolytic disease of the newborn</p>
                    </div>
                </div>
            </div>
            <div class="description-box col-sm-6">
                <div class="description__inr">

                    <div class="circle__cont text-center ">

                        <h3>ABO Group and RH Type </h3>

                        <h2><sup>$</sup>29</h2>
                        <strong>Average competitors price</strong>
                        <h4><sup>$</sup>65</h4>
                        <strong>Pricing based on average direct to consumer pricing.</strong>
                        <div class="checkout-area">
                            <button id="btn_add_to_cart" class="out-btn btn btn-default">CHECKOUT</button>
                            <form id="form_add_to_cart" class="prod-detail-form">
                                <input type="hidden" value="1" name="quantity" id="quantity"/>
                                <input type="hidden" name="total_price" id="total_price" value="29"/>
                                <input type="hidden" name="price" id="price" value="29"/>
                                <input type="hidden" name="product_id" id="product_id" value="8"/>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="fasting-area">
        <div class="container">
            <div class="fasting-cont fasting-list clrlist listview">
                <ul>
                    <li><strong>Fasting Required:</strong> No</li>
                    <li><strong>Preferred Specimen:</strong> Whole Blood</li>
                    <li><strong>Reference Range(s):</strong> See Lab Report</li>
                    <li><strong>Limitations:</strong>Interferences may include abnormal plasma proteins, cold
                        autoagglutinins, positive direct antiglobin test, and bacteremia.
                    </li>
                    <li><strong>Turnaround Time:</strong> 3 days</li>
                    <li><strong>Test Code:</strong> 7788</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
