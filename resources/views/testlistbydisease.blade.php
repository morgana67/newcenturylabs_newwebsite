<style>
    .flip {
        /* padding: 5px; */

        /*background-color: #e5eecc;*/
        border: solid 1px #c3c3c3;
        -webkit-box-shadow: 0px 0px 0px 5px rgba(148, 148, 148, 1);
        -moz-box-shadow: 0px 0px 0px 5px rgba(148, 148, 148, 1);
        box-shadow: 0px 0px 0px 5px rgba(148, 148, 148, 1);
        margin-bottom: 28px;
        border-left-style: solid;
        border-left-width: 5px;
        border-left-color: #0076c4;
    }

    .panel {
        padding: 5px;
        text-align: center;
        background-color: #e5eecc;
        border: solid 1px #c3c3c3;
        padding: 50px;
        display: none;
    }

    .test:after {
        content: '\2807';
        font-size: 3em;
        color: #2e2e2e
    }

    /* .info-msg,{
      margin: 10px 0;
      padding: 10px;
      border-radius: 3px 3px 3px 3px;
    } */
    .info-msg {
        color: #059;
        /* background-color: #BEF; */
        text-align: center;
        /* height: 65px; */
        /* padding-top: 16px; */
        /* width: 600px; */
        font-size: 20px;
        /* margin-right: 10px; */
        /* margin-left: 635px; */
        /* margin-bottom: 58px; */
        margin-top: -16px;
    }
</style>
@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('../front/images/testmenu2.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Test Menu</h2>
                <h4>INFORMATION ABOUT “YOU” WHEN YOU WANT IT!</h4>
            </div>
        </div>
    </section>
    <section class="test-bd-area pt50 pb50">
        <div class="container">
            <p>Traditionally to order a lab test you have to make an appointment to see your doctor, wait in clinic
                waiting
                room with other sick patients, pay your copay, pay the doctors fee and get a surprise bill in the mail,
                why
                would you want to go through the stress? Browse our test menu and order on demand, on your terms, it’s
                the
                21st century.</p>
            <div class="test-menu-area table-responsive0">

                <div class="row">
                    <div class="col-sm-10"><h3 style="margin-bottom: 22px;">Vitamin<br></h3>

                    </div>
                    <div class="col-sm-2" style="padding-left: 65px;">
                        <button id="btn_add_to_cart_all" class="out-btn btn btn-default"
                                style="margin-top: 12px;background-color: #0076c4;color: white;">CHECKOUT
                        </button>
                    </div>
                    <!-- <input type="hidden" name="_token" value="eXCobM3GVbblofigprE2vU9ciECwU3OdyOd2obbV"> -->
                    <input type="hidden" name="disease_type_id" id="disease_type_id" value="5"/>


                </div>
                <style>
                    td[colspan] {
                        font-size: 28px;
                    }
                </style>

                <table id="example" class="table table-area0 table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="col-sm-2">Quest Test Codes</th>
                        <th class="col-sm-8">Tests Names</th>
                        <th class="col-sm-2">Select All<input type="checkbox" name="" id="checkAll" value="0"
                                                              style="margin-left: 10px;"></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th class="col-sm-2">Quest Test Codes</th>
                        <th class="col-sm-8">Tests Names</th>
                        <th class="col-sm-2">Select All</th>
                    </tr>
                    </tfoot>
                    <tbody>


                    <tr>
                        <td>19826</td>
                        <td><a href="../product/coenzyme-q10-coq10.html">Coenzyme Q10 (CoQ10)</a>
                            <a class="btn btn-view pul-rgt" href="../product/coenzyme-q10-coq10.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="41" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_41" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="55"/>
                            <input type="hidden" name="price" id="price" value="55"/>
                            <input type="hidden" name="product_id" id="product_id" value="41"/>
                        </form>
                    </tr>
                    <tr>
                        <td>466</td>
                        <td><a href="../product/folate-folic-acid.html">Folate (Folic Acid)</a>
                            <a class="btn btn-view pul-rgt" href="../product/folate-folic-acid.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="61" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_61" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="29"/>
                            <input type="hidden" name="price" id="price" value="29"/>
                            <input type="hidden" name="product_id" id="product_id" value="61"/>
                        </form>
                    </tr>
                    <tr>
                        <td>16601</td>
                        <td><a href="../product/Iodine-urine.html">Iodine Random Urine</a>
                            <a class="btn btn-view pul-rgt" href="../product/Iodine-urine.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="193" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_193" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="120"/>
                            <input type="hidden" name="price" id="price" value="120"/>
                            <input type="hidden" name="product_id" id="product_id" value="193"/>
                        </form>
                    </tr>
                    <tr>
                        <td>571</td>
                        <td><a href="../product/iron-total.html">Iron Total </a>
                            <a class="btn btn-view pul-rgt" href="../product/iron-total.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="90" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_90" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="17"/>
                            <input type="hidden" name="price" id="price" value="17"/>
                            <input type="hidden" name="product_id" id="product_id" value="90"/>
                        </form>
                    </tr>
                    <tr>
                        <td>622</td>
                        <td><a href="../product/magnesium.html">Magnesium</a>
                            <a class="btn btn-view pul-rgt" href="../product/magnesium.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="101" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_101" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="23"/>
                            <input type="hidden" name="price" id="price" value="23"/>
                            <input type="hidden" name="product_id" id="product_id" value="101"/>
                        </form>
                    </tr>
                    <tr>
                        <td>623</td>
                        <td><a href="../product/magnesium-rbc-red-blood-cell.html">Magnesium RBC (Red Blood Cell)</a>
                            <a class="btn btn-view pul-rgt" href="../product/magnesium-rbc-red-blood-cell.html">View</a>
                        </td>
                        <td><input type="checkbox" name="product_cart[]" value="102" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_102" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="33"/>
                            <input type="hidden" name="price" id="price" value="33"/>
                            <input type="hidden" name="product_id" id="product_id" value="102"/>
                        </form>
                    </tr>
                    <tr>
                        <td>16594</td>
                        <td><a href="../product/manganese-rbc.html">Manganese RBC </a>
                            <a class="btn btn-view pul-rgt" href="../product/manganese-rbc.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="103" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_103" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="35"/>
                            <input type="hidden" name="price" id="price" value="35"/>
                            <input type="hidden" name="product_id" id="product_id" value="103"/>
                        </form>
                    </tr>
                    <tr>
                        <td>718</td>
                        <td><a href="../product/phosphate-as-phosphorus.html">Phosphate (as Phosphorus)</a>
                            <a class="btn btn-view pul-rgt" href="../product/phosphate-as-phosphorus.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="114" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_114" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="19"/>
                            <input type="hidden" name="price" id="price" value="19"/>
                            <input type="hidden" name="product_id" id="product_id" value="114"/>
                        </form>
                    </tr>
                    <tr>
                        <td>17133</td>
                        <td><a href="../product/selenium-rbc.html">Selenium RBC</a>
                            <a class="btn btn-view pul-rgt" href="../product/selenium-rbc.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="123" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_123" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="46"/>
                            <input type="hidden" name="price" id="price" value="46"/>
                            <input type="hidden" name="product_id" id="product_id" value="123"/>
                        </form>
                    </tr>
                    <tr>
                        <td>7573</td>
                        <td><a href="../product/total-iron-iron-binding-capacity-saturation-calculated.html">Total Iron,
                                Iron Binding Capacity % Saturation (calculated) </a>
                            <a class="btn btn-view pul-rgt"
                               href="../product/total-iron-iron-binding-capacity-saturation-calculated.html">View</a>
                        </td>
                        <td><input type="checkbox" name="product_cart[]" value="91" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_91" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="19"/>
                            <input type="hidden" name="price" id="price" value="19"/>
                            <input type="hidden" name="product_id" id="product_id" value="91"/>
                        </form>
                    </tr>
                    <tr>
                        <td>5042</td>
                        <td><a href="../product/Vitamin-B1-Thiamine.html">Vitamin B1 (Thiamine)</a>
                            <a class="btn btn-view pul-rgt" href="../product/Vitamin-B1-Thiamine.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="168" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_168" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="89"/>
                            <input type="hidden" name="price" id="price" value="89"/>
                            <input type="hidden" name="product_id" id="product_id" value="168"/>
                        </form>
                    </tr>
                    <tr>
                        <td>927</td>
                        <td><a href="../product/vitamin-b12.html">Vitamin B12</a>
                            <a class="btn btn-view pul-rgt" href="../product/vitamin-b12.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="152" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_152" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="28"/>
                            <input type="hidden" name="price" id="price" value="28"/>
                            <input type="hidden" name="product_id" id="product_id" value="152"/>
                        </form>
                    </tr>
                    <tr>
                        <td>926</td>
                        <td><a href="../product/vitamin-b6.html">Vitamin B6</a>
                            <a class="btn btn-view pul-rgt" href="../product/vitamin-b6.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="151" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_151" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="60"/>
                            <input type="hidden" name="price" id="price" value="60"/>
                            <input type="hidden" name="product_id" id="product_id" value="151"/>
                        </form>
                    </tr>
                    <tr>
                        <td>391</td>
                        <td><a href="../product/Biotin.html">Vitamin B7 Biotin </a>
                            <a class="btn btn-view pul-rgt" href="../product/Biotin.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="183" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_183" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="249"/>
                            <input type="hidden" name="price" id="price" value="249"/>
                            <input type="hidden" name="product_id" id="product_id" value="183"/>
                        </form>
                    </tr>
                    <tr>
                        <td>929</td>
                        <td><a href="../product/vitamin-c.html">Vitamin C</a>
                            <a class="btn btn-view pul-rgt" href="../product/vitamin-c.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="153" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_153" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="37"/>
                            <input type="hidden" name="price" id="price" value="37"/>
                            <input type="hidden" name="product_id" id="product_id" value="153"/>
                        </form>
                    </tr>
                    <tr>
                        <td>92888</td>
                        <td><a href="../product/Vitamin-D-25Hydroxy-D2-D3.html">Vitamin D 25-Hydroxy (D2,D3)</a>
                            <a class="btn btn-view pul-rgt" href="../product/Vitamin-D-25Hydroxy-D2-D3.html">View</a>
                        </td>
                        <td><input type="checkbox" name="product_cart[]" value="198" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_198" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="45"/>
                            <input type="hidden" name="price" id="price" value="45"/>
                            <input type="hidden" name="product_id" id="product_id" value="198"/>
                        </form>
                    </tr>
                    <tr>
                        <td>17306</td>
                        <td><a href="../product/vitamin-d-25-hydroxy.html">Vitamin D, 25-Hydroxy</a>
                            <a class="btn btn-view pul-rgt" href="../product/vitamin-d-25-hydroxy.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="150" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_150" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="33"/>
                            <input type="hidden" name="price" id="price" value="33"/>
                            <input type="hidden" name="product_id" id="product_id" value="150"/>
                        </form>
                    </tr>
                    <tr>
                        <td>931</td>
                        <td><a href="../product/vitamin-e.html">Vitamin E</a>
                            <a class="btn btn-view pul-rgt" href="../product/vitamin-e.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="154" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_154" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="37"/>
                            <input type="hidden" name="price" id="price" value="37"/>
                            <input type="hidden" name="product_id" id="product_id" value="154"/>
                        </form>
                    </tr>
                    <tr>
                        <td>36585</td>
                        <td><a href="../product/Vitamin-K.html">Vitamin K </a>
                            <a class="btn btn-view pul-rgt" href="../product/Vitamin-K.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="165" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_165" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="175"/>
                            <input type="hidden" name="price" id="price" value="175"/>
                            <input type="hidden" name="product_id" id="product_id" value="165"/>
                        </form>
                    </tr>
                    <tr>
                        <td>945</td>
                        <td><a href="../product/zinc.html">Zinc </a>
                            <a class="btn btn-view pul-rgt" href="../product/zinc.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="159" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_159" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="31"/>
                            <input type="hidden" name="price" id="price" value="31"/>
                            <input type="hidden" name="product_id" id="product_id" value="159"/>
                        </form>
                    </tr>
                    <tr>
                        <td>6354</td>
                        <td><a href="../product/zinc-rbc.html">ZINC RBC</a>
                            <a class="btn btn-view pul-rgt" href="../product/zinc-rbc.html">View</a></td>
                        <td><input type="checkbox" name="product_cart[]" value="160" style="margin-left: 85px;"></td>
                        <form id="form_add_to_cart_160" class="prod-detail-form">
                            <input type="hidden" value="1" name="quantity" id="quantity"/>
                            <input type="hidden" name="total_price" id="total_price" value="45"/>
                            <input type="hidden" name="price" id="price" value="45"/>
                            <input type="hidden" name="product_id" id="product_id" value="160"/>
                        </form>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
