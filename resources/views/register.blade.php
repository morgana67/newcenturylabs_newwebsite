@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('front/images/bnr-signup.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>SIGN UP</h2>
                <h4></h4>
            </div>
        </div>
    </section>


    <section class="inr-intro-area pt30">
        <div class="container">


        </div>
    </section>

    <form method="POST" action="" accept-charset="UTF-8" class="form"
          name="register"><input name="_token" type="hidden" value="eXCobM3GVbblofigprE2vU9ciECwU3OdyOd2obbV">
        <section class="billing-area ">
            <div class="container">

                <div class="fom fom-shad pt20 col-sm-9 p0 pul-cntr">

                    <div class="form-group col-sm-6">
                        <input placeholder="First Name *" class="form-control" required="required" name="firstName"
                               type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <input placeholder="Last Name *" class="form-control" required="required" name="lastName"
                               type="text">
                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Email *" class="form-control" required="required" name="email" type="text">
                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Password *" class="form-control"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" name="password"
                               type="password" value="">

                    </div>

                    <div class="form-group col-sm-12">
                        <input data-match-error="Whoops, these don&#039;t match" placeholder="Confirm Password *"
                               data-match="#password" class="form-control" required="required"
                               name="password_confirmation" type="password" value="">
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="alert alert-info">
                            Your password must contain minimum 8 characters, at least 1 uppercase alphabet, 1 lowercase
                            alphabet, 1 number and 1 special character.
                        </div>
                    </div>

                    <div class="form-group col-sm-6 clrhm">
                        <h5><label for="gender">Gender *</label></h5>
                        <div class="inline-form">

                            <input checked="checked" name="gender" type="radio" value="m" id="gender">
                            <label for="Male">Male</label>
                            <input name="gender" type="radio" value="f" id="gender">
                            <label for="Female">Female</label>
                        </div>
                    </div>

                    <div class="form-group col-sm-12 clrhm">
                        <label><label for="gender">Date of birth*</label></label>
                        <br>
                        <div class="form-group col-sm-2 pl0">
                            <select class="form-control" required="required" name="date">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>

                        <div class="form-group col-sm-3">
                            <select class="form-control" required="required" name="month">
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <select class="form-control" required="required" name="year">
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group col-sm-12">
                        <input placeholder="Country United States (US)" class="form-control" readonly="readonly"
                               required="required" name="country" type="text">
                    </div>

                    <div class="form-group col-sm-6">
                        <select name="state" id="state" required class="form-control">
                            <option>State *</option>
                            <option value="AK">Alaska</option>
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="AZ">Arizona</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DC">District of Columbia</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="IA">Iowa</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MD">Maryland</option>
                            <option value="ME">Maine</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MO">Missouri</option>
                            <option value="MS">Mississippi</option>
                            <option value="MT">Montana</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="NE">Nebraska</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NV">Nevada</option>
                            <option value="NY">New York</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VA">Virginia</option>
                            <option value="VT">Vermont</option>
                            <option value="WA">Washington</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WV">West Virginia</option>
                            <option value="WY">Wyoming</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="City *" class="form-control" required="required" name="city" type="text">
                    </div>


                    <div class="form-group col-sm-12">
                        <input placeholder="Address *" class="form-control" required="required" name="address"
                               type="text">
                    </div>


                    <div class="form-group col-sm-6">
                        <input placeholder="Postal Code / Zipcode *" class="form-control" required="required" name="zip"
                               type="text">
                    </div>

                    <div class="form-group col-sm-6">
                        <input placeholder="Phone *" class="form-control" required="required" name="phone" type="text">
                    </div>
                    <div class="form-group col-sm-6">
                        <script type="text/javascript">
                            var RecaptchaOptions = {"curl_timeout": 1, "lang": "en"};
                        </script>
                        <script src='../www.google.com/recaptcha/api0125.js?render=onload&amp;hl=en'></script>
                        <div class="g-recaptcha" data-sitekey="6LfDeBEUAAAAADjEUrNZafnWg0Em4-dhHWf60Zn4"></div>
                        <noscript>
                            <div style="width: 302px; height: 352px;">
                                <div style="width: 302px; height: 352px; position: relative;">
                                    <div style="width: 302px; height: 352px; position: absolute;">
                                        <iframe
                                            src="https://www.google.com/recaptcha/api/fallback?k=6LfDeBEUAAAAADjEUrNZafnWg0Em4-dhHWf60Zn4"
                                            frameborder="0" scrolling="no"
                                            style="width: 302px; height:352px; border-style: none;">
                                        </iframe>
                                    </div>
                                    <div style="width: 250px; height: 80px; position: absolute; border-style: none;
                  bottom: 21px; left: 25px; margin: 0; padding: 0; right: 25px;">
                <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 80px; border: 1px solid #c1c1c1;
                         margin: 0; padding: 0; resize: none;"></textarea>
                                    </div>
                                </div>
                            </div>
                        </noscript>
                    </div>
                    <div class="form-group col-sm-6 text-right">
                        <button type="submit" class="btn btn-flat btn-primary ">SIGNUP</button>
                    </div>
                    <div class="form-group col-sm-12">
                        <small>We do not support orders from the following states:
                            <strong>NY, NJ RI, MD, HI</strong></small>
                    </div>
                    <input name="role_id" type="hidden" value="2">
                </div>
            </div>
        </section>
    </form>
@endsection
