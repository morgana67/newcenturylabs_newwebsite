<table border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
    <tr>
        <td style="background:#fdfdfd;padding:0in 0in 0in 0in" valign="top">
            <table style="width:100.0%;border-radius:6px!important" border="0" cellpadding="0" cellspacing="0"
                   width="100%">
                <tbody>
                <tr>
                    <td style="padding:15.0pt 15.0pt 15.0pt 15.0pt" valign="top">
                        @if($message!="")
                            <p style="line-height:150%"><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373"> {{ $message }} </span></p>
                        @else
                            Your lab order will be emailed to you within a 4 hour window of your order, during our hours of operation 8 AM PST to 10 PM PST. Please note if you have ordered a doctor consult, you must wait until your final results are complete before communication. We look forward to serving you! Tel.: <a href="tel:{{ str_replace('-','',setting('site.hotline'))}}" value="{{ setting('site.hotline')}}" target="_blank">{{ setting('site.hotline')}}</a> <a href="mailto:{{ setting('site.email_receive_notification') }}" target="_blank">{{ setting('site.email_receive_notification') }}</a>
                            <p></p>
                        @endif
                        <h2 style="margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:130%"><span
                                style="font-size:13.5pt;line-height:130%;font-family:&quot;Helvetica&quot;,sans-serif;color:#557da1"><a
                                    href="{{$link ?? null}}" target="_blank"><span
                                        style="color:#557da1;font-weight:normal">Order: {{$order->id}}</span></a>
                                                                                ({{date('F d Y',strtotime($order->created_at))}})</span>
                        </h2>
                        <table style="width:100.0%;border:solid #eeeeee 1.0pt" border="1" cellpadding="0"
                               cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Product</b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Quantity</b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Price</b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Total</b></p>
                                </td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $sum = 0;
                            $i = 0;
                            ?>
                            @foreach ($order->details as $product)
                                <?php
                                $rowTotal = $product->price * $product->quantity;
                                $sum += $rowTotal;
                                ?>
                                <tr>
                                    <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt;word-wrap:break-word">
                                        <p><?php echo $product->product->name; ?></p>
                                    </td>
                                    <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal">{{ $product->quantity }}</p>
                                    </td>
                                    <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p><span>{{ $currency }}</span><span>{{ format_price($product->price) }}</span></p>
                                    </td>
                                    <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p><span>{{ $currency }}</span><span>{{ format_price($product->price * $product->quantity )  }}</span></p>
                                    </td>
                                </tr>
                            @endforeach

                                <tr>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal"><b>Gender:</b></p>
                                    </td>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal"><span></span><span>@if(user()->gender =='f') Female @else Male @endif

                                                                                                </span><u></u><u></u></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal"><b>D.O.B.<u></u><u></u></b></p>
                                    </td>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal"><span>{{date('F d Y',strtotime(user()->dob))}}</span><u></u><u></u></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal"><b>Payment
                                                Method:<u></u><u></u></b></p>
                                    </td>
                                    <td  colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal">Credit
                                            Card<u></u><u></u></p>
                                    </td>
                                </tr>
                                <tr>

                                <tr>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal"><b>Total:<u></u><u></u></b></p>
                                    </td>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal">
                                            <span>{{ $currency}}</span><span>{{format_price($order->totalAmount)}}</span><u></u><u></u></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <h2 style="margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:130%"><span style="font-size:13.5pt;line-height:130%;font-family:&quot;Helvetica&quot;,sans-serif;color:#557da1">Customer details</span></h2>
                        <p style="line-height:150%"><strong><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373">Email:</span></strong><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373">
                                                                                <a href="mailto:{{$order->email}}" target="_blank">{{$order->email}}</a></span></p>
                        <p style="line-height:150%"><strong><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373">Tel:</span></strong><span style="font-size:10.5pt;line-height:150%;font-family:&quot;Arial&quot;,sans-serif;color:#737373">
                                                                                <a href="tel:{{$order->phone}}" value="+{{$order->phone}}" target="_blank">{{$order->phone}}</a></span></p>
                        <table  style="width:100.0%" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tbody>
                            <tr>
                                <td style="width:50.0%;padding:0in 0in 0in 0in" valign="top" width="50%">
                                    <h3 style="margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:130%"><span style="font-size:12.0pt;line-height:130%;font-family:&quot;Helvetica&quot;,sans-serif;color:#557da1">Billing address</span></h3>
                                    <p> {{$order->firstName.' '.$order->lastName}}<br>
                                        {{$order->address}}<br>
                                        {{$order->address2}}<br>
                                        {{$order->zip}}<br/>
                                        {{$order->city}}, {{$order->state}}, {{$order->country->name}} <br>
                                    </p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>


