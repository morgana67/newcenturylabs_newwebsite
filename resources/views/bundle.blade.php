@extends('layouts.site')
@section('content')
    <section class="inr-intro-area pt100 pb40">
        <div class="container">
            <div class="page__title text-center mb30">
                <h2>BUNDLE PACKAGE TEST</h2>
                <span></span>
            </div>

            <p>We want you to get the most information about your body when information about “you” matter most. From
                wellness starters to proactive warrior&reg; tests holding over 100 bio markers, you get actionable
                information at your fingertips. You can order bundle tests and add individual tests from our test
                menu</p>
        </div>
    </section>


    <section class="packages-area bg-snow p30 mb30 box-scale--hover">
        <div class="container">

            <div class="pack-box col-sm-3 ">
                <div clsas="pack__hed">
                    <h4>Wellness Starter</h4>
                    <h2>$<span id="price">99</span>
                    </h2>
                    <div class="rating-area clrlist">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="cont">
                    <p>Great way to get a general understanding of many important biomarkers. Includes a quick look at
                        your heart health, blood chemistry, electrolyte functions, liver health, and diabetes.</p>
                    <div class="lnk-btn inline-btns">
                        <a href="javascript:void(0);" onclick="AddToCart('12', '99');">Add to Cart</a>
                    </div>
                </div>

            </div>
            <div class="pack-box col-sm-3 ">
                <div clsas="pack__hed">
                    <h4>Wellness Baseline</h4>
                    <h2>$<span id="price">159</span>
                    </h2>
                    <div class="rating-area clrlist">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="cont">
                    <p>Slightly more tests than you would get at your physical exam which, includes essential
                        information about hormone balance, heart health, diabetes, and various abnormalities.</p>
                    <div class="lnk-btn inline-btns">
                        <a href="javascript:void(0);" onclick="AddToCart('133', '159');">Add to Cart</a>
                    </div>
                </div>

            </div>
            <div class="pack-box col-sm-3 ">
                <div clsas="pack__hed">
                    <h4>Optimal Wellness</h4>
                    <h2>$<span id="price">279</span>
                    </h2>
                    <div class="rating-area clrlist">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="cont">
                    <p>A much greater focus on nutrition, inflammation that help connect important markers leading to
                        metabolic syndrome risk, and other potential disease screenings</p>
                    <div class="lnk-btn inline-btns">
                        <a href="javascript:void(0);" onclick="AddToCart('134', '279');">Add to Cart</a>
                    </div>
                </div>

            </div>
            <div class="pack-box col-sm-3 ">
                <div clsas="pack__hed">
                    <h4>Proactive Warrior®</h4>
                    <h2>$<span id="price">699</span>
                    </h2>
                    <div class="rating-area clrlist">
                        <ul>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="cont">
                    <p>The most advanced check up to help reclassify heart disease risk with advanced risk profile
                        tests, highly advanced hormone testing, including stress hormones, with additional focus on
                        essential nutritional needs and disease screenings </p>
                    <div class="lnk-btn inline-btns">
                        <a href="javascript:void(0);" onclick="AddToCart('135', '699');">Add to Cart</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        function AddToCart(product_id, total) {

            var form = {product_id: product_id, total_price: total, quantity: 1};
            var jqxhr = $.get("cart/add", form, function () {
                //alert( "Product added to cart." );
                window.location = "cart/view.html";

            })
                .done(function () {
                    //alert( "second success" );
                })
                .fail(function () {
                    //alert( "error" );
                })
                .always(function () {
                    //alert( "finished" );
                });

        }

        // window.location="cart/add?product_id="+product_id+"&total_price="+total+"&quantity=1";

    </script>


    <section class="table-area0 pack-table pt30 pb30 table-valign a--hidden">
        <div class="container">

            <div class="table-responsive">

                <table class="table table-hover">
                    <thead>
                    <th>Category</th>
                    <th>Bio Markers</th>
                    <th>Wellness Starter</th>
                    <th>Wellness Baseline</th>
                    <th>Optimal Wellness</th>
                    <th>Proactive Warrior®</th>
                    </thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>$99</th>
                        <th>$159</th>
                        <th>$279</th>
                        <th>$699</th>
                    </tr>


                    <tr>
                        <td colspan="6">Cardiovascular</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Total Cholesterol</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>HDL Cholesterol</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Triglycerides</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Non-HDL</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Lipoprotein Fractionation</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Ion Mobility</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Apolipoprotein B</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Lipoprotein (a)</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Lipid Particle size</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Homocysteine</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>SED RATE (general inflammation nonspecific)</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>hs-CRP</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Diabetes Risk</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Hemoglobin A1c (HbA1c)</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Glucose</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Blood Health</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>WBC</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>RBC</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Hemoglobin</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Hematocrit</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>MCV</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>MCH</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>MCHC</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>RDW</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Platelet Count</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>MPV</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Lymphocytes</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Monocytes</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Eosinophils</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Basophils</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Ferritin</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Iron Total & Binding</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Kidney Health</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>BUN/Creatinine Ratio</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Creatinine with GFR</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Liver Health</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Gamma Glutamyl Transferase GGT</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Albumin</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Albumin/Globulin Ratio</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>ALP Alkaline Phosphatase</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>ALT</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>AST</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Total Bilirubin</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Globulin</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Total Protein</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Electrolyte Health</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Potassium</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Sodium</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Carbon Dioxide</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Calcium</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Chloride</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Hormone Balance</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>DHEA</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Cortisol AM</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>TSH</td>

                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>T3F</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>TF4</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>T-4 Total</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>T3 Total</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>T3 Reverse</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Thyroid Peroxidase</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Thyroglobulin Antibodies</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Vitamins</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Vitamin D</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>B12</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Magnesium, RBC</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>SELENIUM RBC</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td colspan="6">Urine Analysis</td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Color</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Appearance</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Bilirubin</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Ketones</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Specific gravity</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>pH</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Protein</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Nitrite</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Leukocyte esterase</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Leukocytes</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Erythrocytes</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Epithelial cells.squamous</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Transitional cells</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Epithelial cells.renal</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Amorphous sediment</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Yeast</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Microscopic observation</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Bacteria</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Service comment</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Crystals</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Calcium oxalate crystals</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Triple phosphate crystals</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Urate crystals</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Hyaline casts</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Granular casts</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Casts</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Reducing substances</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                    <tr>
                        <td><a href="#">View</a></td>
                        <td>Glucose</td>

                        <td><i class="fa fa-times"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                    </tr>
                </table>

            </div>

        </div>
    </section>
@endsection
