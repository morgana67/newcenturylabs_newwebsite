<table border="0" cellpadding="0" cellspacing="0" width="600">
    <tbody>
    <tr>
        <td style="background:#fdfdfd;padding:0in 0in 0in 0in" valign="top">
            <table style="width:100.0%;border-radius:6px!important" border="0" cellpadding="0" cellspacing="0"
                   width="100%">
                <tbody>
                <tr>
                    <td style="padding:15.0pt 15.0pt 15.0pt 15.0pt" valign="top">
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
                                    <p class="MsoNormal"><b>Total:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{ $currency}}</span><span>{{format_price($order->totalAmount)}}</span><u></u><u></u></p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Name:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->firstName.' '.$order->lastName}}</span><u></u><u></u></p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Email:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <a href="mailto:{{$order->email}}"
                                           target="_blank">{{$order->email}}</a>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Phone:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <a href="tel:{{$order->phone}}"
                                           value="+{{$order->phone}}"
                                           target="_blank">{{$order->phone}}</a>
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Address:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->address}}</span><u></u><u></u></p>
                                </td>
                            </tr>

                            @if(!empty($order->address2))
                                <tr>
                                    <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal"><b>Address2:<u></u><u></u></b></p>
                                    </td>
                                    <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                        <p class="MsoNormal">
                                            <span>{{$order->address2}}</span><u></u><u></u></p>
                                    </td>
                                </tr>
                            @endif

                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Country:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->country->name}}</span><u></u><u></u></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>State:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->state}}</span><u></u><u></u></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>City:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->city}}</span><u></u><u></u></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Zip:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->zip}}</span><u></u><u></u></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Message:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->message}}</span><u></u><u></u></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Payment Type:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->paymentType}}</span><u></u><u></u></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Order Status:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->orderStatus}}</span><u></u><u></u></p>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal"><b>Payment Status:<u></u><u></u></b></p>
                                </td>
                                <td style="border:solid #eeeeee 1.0pt;padding:4.5pt 4.5pt 4.5pt 4.5pt">
                                    <p class="MsoNormal">
                                        <span>{{$order->paymentStatus}}</span><u></u><u></u></p>
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
