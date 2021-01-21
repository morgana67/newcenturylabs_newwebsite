@extends('layouts.site')
@section('css')
    <style>
        .StripeElement {
            box-sizing: border-box;

            height: 40px;

            padding: 10px 12px;

            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;

            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endsection
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner" style="background-image:url('{{ asset('/front/images/bnr-checkout.jpg') }}');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>Checkout</h2>
                <h4></h4>
            </div>
        </div>
    </section>

    <section class="billing-area pt50">
        <div class="container">

            <div style="display: none;" class="payment-errors alert alert-danger"></div>



            <div class="address col-sm-6">
                <div class="patient col-sm-12  fom-shad">
                    <h3><mark>1</mark> Patient's Information</h3>
                    <div class="patient col-sm-12">
                        <input type="checkbox" name="is_different" id="is_different">
                        Patient information different from my information.
                    </div>
                    <div class="form-group col-sm-6">
                        <h5><label for="firstName">First Name *</label></h5>
                        <input class="form-control" placeholder="First Name *" id="firstName" required="required" name="firstName" type="text" value="Luong">
                    </div>
                    <div class="form-group col-sm-6">
                        <h5><label for="lastName">Last Name *</label></h5>
                        <input class="form-control" placeholder="Last Name *" id="lastName" required="required" name="lastName" type="text" value="Nguyen">
                    </div>
                    <div class="form-group col-sm-6">
                        <h5><label for="email">Email *</label></h5>
                        <input class="form-control" placeholder="Email *" id="email" name="email" type="text" value="luongnd2286@gmail.com">
                    </div>
                    <div class="form-group col-sm-6">
                        <h5><label for="gender">Gender *</label></h5>
                        <div class="inline-form">
                            <input checked="checked" name="gender" type="radio" value="m" id="gender">
                            <label for="Male">Male</label>
                            <input name="gender" type="radio" value="f" id="gender">
                            <label for="Female">Female</label>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 clrhm">
                        <h5><label for="dob">Date of birth *</label></h5>
                        <div class="form-group col-sm-2 clrhm pl0">
                            <h5><label for="date">Date</label></h5>
                            <select class="form-control" required="required" id="date" name="date"><option value="1" selected="selected">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                        </div>

                        <div class="form-group col-sm-4 clrhm">
                            <h5><label for="month">Month</label></h5>
                            <select class="form-control" required="required" id="month" name="month"><option value="1" selected="selected">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select>
                        </div>
                        <div class="form-group col-sm-3 clrhm">
                            <h5><label for="year">Year</label></h5>
                            <select class="form-control" required="required" id="year" name="year"><option value="2016" selected="selected">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option></select>
                        </div>

                    </div>

                    <div class="form-group col-sm-12">
                        <h5><label for="Address Line 1 *">Address Line 1 *</label></h5>
                        <input class="form-control" placeholder="Street Address *" id="address1" required="required" name="address1" type="text" value="123">
                    </div>

                    <div class="form-group col-sm-12">
                        <h5><label for="Address Line 2">Address Line 2</label></h5>
                        <input class="form-control" placeholder="Appartment.Suite (Optional)" id="address2" name="address2" type="text">
                    </div>
                    <div class="form-group col-sm-12 ">
                        <h5><label for="Country *">Country *</label></h5>
                        <select class="form-control" required="required" name="country_id"><option value="1">Afghanistan</option><option value="2">Albania</option><option value="3">Algeria</option><option value="4">American Samoa</option><option value="5">Andorra</option><option value="6">Angola</option><option value="7">Anguilla</option><option value="8">Antarctica</option><option value="9">Antigua and Barbuda</option><option value="10">Argentina</option><option value="11">Armenia</option><option value="12">Aruba</option><option value="13">Australia</option><option value="14">Austria</option><option value="15">Azerbaijan</option><option value="16">Bahamas</option><option value="17">Bahrain</option><option value="18">Bangladesh</option><option value="19">Barbados</option><option value="20">Belarus</option><option value="21">Belgium</option><option value="22">Belize</option><option value="23">Benin</option><option value="24">Bermuda</option><option value="25">Bhutan</option><option value="26">Bolivia</option><option value="27">Bosnia and Herzegovina</option><option value="28">Botswana</option><option value="29">Bouvet Island</option><option value="30">Brazil</option><option value="31">British Indian Ocean Territory</option><option value="32">Brunei Darussalam</option><option value="33">Bulgaria</option><option value="34">Burkina Faso</option><option value="35">Burundi</option><option value="36">Cambodia</option><option value="37">Cameroon</option><option value="38">Canada</option><option value="39">Cape Verde</option><option value="40">Cayman Islands</option><option value="41">Central African Republic</option><option value="42">Chad</option><option value="43">Chile</option><option value="44">China</option><option value="45">Christmas Island</option><option value="46">Cocos (Keeling) Islands</option><option value="47">Colombia</option><option value="48">Comoros</option><option value="49">Congo</option><option value="50">Cook Islands</option><option value="51">Costa Rica</option><option value="52">Croatia (Hrvatska)</option><option value="53">Cuba</option><option value="54">Cyprus</option><option value="55">Czech Republic</option><option value="56">Denmark</option><option value="57">Djibouti</option><option value="58">Dominica</option><option value="59">Dominican Republic</option><option value="60">East Timor</option><option value="61">Ecuador</option><option value="62">Egypt</option><option value="63">El Salvador</option><option value="64">Equatorial Guinea</option><option value="65">Eritrea</option><option value="66">Estonia</option><option value="67">Ethiopia</option><option value="68">Falkland Islands (Malvinas)</option><option value="69">Faroe Islands</option><option value="70">Fiji</option><option value="71">Finland</option><option value="72">France</option><option value="73">France, Metropolitan</option><option value="74">French Guiana</option><option value="75">French Polynesia</option><option value="76">French Southern Territories</option><option value="77">Gabon</option><option value="78">Gambia</option><option value="79">Georgia</option><option value="80">Germany</option><option value="81">Ghana</option><option value="82">Gibraltar</option><option value="83">Guernsey</option><option value="84">Greece</option><option value="85">Greenland</option><option value="86">Grenada</option><option value="87">Guadeloupe</option><option value="88">Guam</option><option value="89">Guatemala</option><option value="90">Guinea</option><option value="91">Guinea-Bissau</option><option value="92">Guyana</option><option value="93">Haiti</option><option value="94">Heard and Mc Donald Islands</option><option value="95">Honduras</option><option value="96">Hong Kong</option><option value="97">Hungary</option><option value="98">Iceland</option><option value="99">India</option><option value="100">Isle of Man</option><option value="101">Indonesia</option><option value="102">Iran (Islamic Republic of)</option><option value="103">Iraq</option><option value="104">Ireland</option><option value="105">Israel</option><option value="106">Italy</option><option value="107">Ivory Coast</option><option value="108">Jersey</option><option value="109">Jamaica</option><option value="110">Japan</option><option value="111">Jordan</option><option value="112">Kazakhstan</option><option value="113">Kenya</option><option value="114">Kiribati</option><option value="115">Korea, Democratic People's Republic of</option><option value="116">Korea, Republic of</option><option value="117">Kosovo</option><option value="118">Kuwait</option><option value="119">Kyrgyzstan</option><option value="120">Lao People's Democratic Republic</option><option value="121">Latvia</option><option value="122">Lebanon</option><option value="123">Lesotho</option><option value="124">Liberia</option><option value="125">Libyan Arab Jamahiriya</option><option value="126">Liechtenstein</option><option value="127">Lithuania</option><option value="128">Luxembourg</option><option value="129">Macau</option><option value="130">Macedonia</option><option value="131">Madagascar</option><option value="132">Malawi</option><option value="133">Malaysia</option><option value="134">Maldives</option><option value="135">Mali</option><option value="136">Malta</option><option value="137">Marshall Islands</option><option value="138">Martinique</option><option value="139">Mauritania</option><option value="140">Mauritius</option><option value="141">Mayotte</option><option value="142">Mexico</option><option value="143">Micronesia, Federated States of</option><option value="144">Moldova, Republic of</option><option value="145">Monaco</option><option value="146">Mongolia</option><option value="147">Montenegro</option><option value="148">Montserrat</option><option value="149">Morocco</option><option value="150">Mozambique</option><option value="151">Myanmar</option><option value="152">Namibia</option><option value="153">Nauru</option><option value="154">Nepal</option><option value="155">Netherlands</option><option value="156">Netherlands Antilles</option><option value="157">New Caledonia</option><option value="158">New Zealand</option><option value="159">Nicaragua</option><option value="160">Niger</option><option value="161">Nigeria</option><option value="162">Niue</option><option value="163">Norfolk Island</option><option value="164">Northern Mariana Islands</option><option value="165">Norway</option><option value="166">Oman</option><option value="167">Pakistan</option><option value="168">Palau</option><option value="169">Palestine</option><option value="170">Panama</option><option value="171">Papua New Guinea</option><option value="172">Paraguay</option><option value="173">Peru</option><option value="174">Philippines</option><option value="175">Pitcairn</option><option value="176">Poland</option><option value="177">Portugal</option><option value="178">Puerto Rico</option><option value="179">Qatar</option><option value="180">Reunion</option><option value="181">Romania</option><option value="182">Russian Federation</option><option value="183">Rwanda</option><option value="184">Saint Kitts and Nevis</option><option value="185">Saint Lucia</option><option value="186">Saint Vincent and the Grenadines</option><option value="187">Samoa</option><option value="188">San Marino</option><option value="189">Sao Tome and Principe</option><option value="190">Saudi Arabia</option><option value="191">Senegal</option><option value="192">Serbia</option><option value="193">Seychelles</option><option value="194">Sierra Leone</option><option value="195">Singapore</option><option value="196">Slovakia</option><option value="197">Slovenia</option><option value="198">Solomon Islands</option><option value="199">Somalia</option><option value="200">South Africa</option><option value="201">South Georgia South Sandwich Islands</option><option value="202">Spain</option><option value="203">Sri Lanka</option><option value="204">St. Helena</option><option value="205">St. Pierre and Miquelon</option><option value="206">Sudan</option><option value="207">Suriname</option><option value="208">Svalbard and Jan Mayen Islands</option><option value="209">Swaziland</option><option value="210">Sweden</option><option value="211">Switzerland</option><option value="212">Syrian Arab Republic</option><option value="213">Taiwan</option><option value="214">Tajikistan</option><option value="215">Tanzania, United Republic of</option><option value="216">Thailand</option><option value="217">Togo</option><option value="218">Tokelau</option><option value="219">Tonga</option><option value="220">Trinidad and Tobago</option><option value="221">Tunisia</option><option value="222">Turkey</option><option value="223">Turkmenistan</option><option value="224">Turks and Caicos Islands</option><option value="225">Tuvalu</option><option value="226">Uganda</option><option value="227">Ukraine</option><option value="228">United Arab Emirates</option><option value="229">United Kingdom</option><option value="230" selected="selected">United States</option><option value="231">United States minor outlying islands</option><option value="232">Uruguay</option><option value="233">Uzbekistan</option><option value="234">Vanuatu</option><option value="235">Vatican City State</option><option value="236">Venezuela</option><option value="237">Vietnam</option><option value="238">Virgin Islands (British)</option><option value="239">Virgin Islands (U.S.)</option><option value="240">Wallis and Futuna Islands</option><option value="241">Western Sahara</option><option value="242">Yemen</option><option value="243">Yugoslavia</option><option value="244">Zaire</option><option value="245">Zambia</option><option value="246">Zimbabwe</option></select>
                    </div>
                    <div class="form-group col-sm-6 ">
                        <h5><label for="state *">State *</label></h5>
                        <input class="form-control" placeholder="State / Region *" id="state" required="required" name="state" type="text" value="AR">

                    </div>
                    <div class="form-group col-sm-6">
                        <h5><label for="city *">City *</label></h5>
                        <input class="form-control" placeholder="Town / City *" id="city" required="required" name="city" type="text" value="123">
                    </div>
                    <div class="form-group col-sm-6">
                        <h5><label for="zip *">Zip *</label></h5>
                        <input class="form-control" placeholder="Postal Code / Zipcode *" id="zip" required="required" name="zip" type="text" value="123">
                    </div>
                    <div class="form-group col-sm-6">
                        <h5><label for="phone *">Phone *</label></h5>
                        <input class="form-control" placeholder="Phone *" id="phone" required="required" name="phone" type="text" value="123">
                    </div>


                </div>
            </div>

            <div class="col2 col-sm-6">

                <div class="order-summary col-sm-12  fom-shad mb30">

                    <h3><mark>2</mark>  Order Summary</h3>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>LAB TEST</th>
                            <th>TOTAL</th>
                        </tr>
                        </thead>

                        <tbody><tr>
                            <td for="LAB TEST">Aluminum  Random Urine (1) </td>
                            <td for="TOTAL">$30</td>
                        </tr>
                        <tr>
                            <td for="LAB TEST">Alpha-Fetoprotein Tumor Marker (AFP) (1) </td>
                            <td for="TOTAL">$56</td>
                        </tr>
                        <tr>
                            <td for="LAB TEST">One time Specimen Collection Fee (1) </td>
                            <td for="TOTAL">$12</td>
                        </tr>
                        <tr class="h4">
                            <td for="LAB TEST">Total</td>
                            <td for="TOTAL">$98</td>
                        </tr></tbody></table>
                </div>


                <div class="payment-info col-sm-12  fom-shad mb30">
                    <h3><mark>3</mark> Payment Information</h3>
                    <div id="card-element"></div>
                    <div id="card-errors" role="alert" style="padding-bottom: 30px"></div>
                </div>

                <div class="payment-info col-sm-12 fom-shad mb30">
                    <div class="form-group">
                        <h3><mark>4</mark>  Additional Message</h3>
                        <textarea class="form-control" name="message" cols="105" rows="7"></textarea>

                    </div>
                    <div class="terms col-sm-12">
                        <div style="display: none;" class="terms-errors alert alert-danger">
                        </div>
                        <input type="checkbox" name="terms" id="terms" $required="">
                        I accept the <a target="_black" href="https://newcenturylabs.com/terms">Terms of Service</a>.
                    </div>
                    <script>
                        function check_terms_services() {
                            var terms = jQuery("#terms").prop("checked");

                            if (terms == false) {
                                $('.terms-errors').show();
                                $('.terms-errors').text('Please accept our terms of service.');
                                $('.terms-errors').addClass('alert alert-danger');

                                return false;
                            }

                        }
                    </script>                <!--
                type="button"
                -->
                    <div class="form-group col-sm-12 p0 mb30">
                        <button id="place_order" class="form-control btn-primary w100">PLACE ORDER</button>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <script>

        $('#form').submit(function (event) {

            $('.terms-errors').hide();
            $('.payment-errors').hide();


            var term = check_terms_services();
            if (term === false) {
                return false;
            }

            var form = $('#form');
            form.find('#place_order').prop('disabled', true);
            Stripe.card.createToken(form, stripeResponseHandler);

            return false;
        });


        function stripeResponseHandler(status, response) {
            var form = $('#form');
            // alert(response.error.type);
            if (response.id) {
                var token = response.id;
                form.append($('<input type="hidden" name="stripeToken" />').val(token));
                form.get(0).submit();
            } else {
                $('.payment-errors').show();
                $('.payment-errors').text(response.error.message);
                $('.payment-errors').addClass('alert alert-danger');


                var scrollPos = $("#form").offset().top;
                $(window).scrollTop(scrollPos);
                // $('.payment-errors').focus();
                form.find('#place_order').prop('disabled', false);
                return false;

            }

        }

        /*
         $('#form').on('submitted', function () {
         // do anything here...
         });
         */
        $("#is_different").on("change", function () {
            if ($("#is_different").is(':checked')) {

                $("#firstName").val('');
                $("#lastName").val('');
                $("#email").val('');
                $("#address1").val('');
                $("#address2").val('');
                $("#state").val('');
                $("#city").val('');
                $("#zip").val('');
                $("#phone").val('');
            } else
            {
                {{--$("#firstName").val('<?php echo $user->firstName; ?>');--}}
                {{--$("#lastName").val('<?php echo $user->lastName; ?>');--}}
                {{--$("#email").val('<?php echo $user->email; ?>');--}}
                {{--$("#address1").val('<?php echo $address->address; ?>');--}}
                {{--$("#address2").val('<?php echo $address->address2; ?>');--}}
                {{--$("#state").val('<?php echo $address->state; ?>');--}}
                {{--$("#city").val('<?php echo $address->city; ?>');--}}
                {{--$("#zip").val('<?php echo $address->zip; ?>');--}}
                {{--$("#phone").val('<?php echo $address->phone; ?>');--}}
            }

        });
    </script>
@endsection
@section('script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client.
        var stripe = Stripe('{{env('STRIPE_SECRET_PK')}}');

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                },
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            },
            hidePostalCode: true,
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
@endsection
