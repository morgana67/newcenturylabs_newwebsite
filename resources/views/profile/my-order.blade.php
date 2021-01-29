@php
    use Carbon\Carbon as Carbon;
@endphp
@extends('layouts.site')
@section('content')
    <section class="bnr-area page-bnr-area bg-full bg-cntr valigner"
             style="background-image:url('/front/images/bnr-signup.jpg');">
        <div class="container">
            <div class="bnr__cont valign white text-center col-sm-12 text-uppercase anime-flipInX">
                <h2>My Orders</h2>
                <h4></h4>
            </div>
        </div>
    </section>

        <section class="billing-area ">
            <div class="container">
                <div class="page-content container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-bordered">
                                <div class="panel-body">
                                    <table id="dataTable" class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Total Amount</th>
                                            <th>Payment Status</th>
                                            <th>Order Status</th>
                                            <th>Create At</th>
                                            <th class="actions text-right">{{ __('voyager::generic.actions') }}</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->firstName.' '.$order->lastName}}</td>
                                                <td>{{$order->email}}</td>
                                                <td>${{$order->totalAmount}}</td>
                                                <td>{{$order->paymentStatus}}</td>
                                                <td>{{$order->orderStatus}}</td>
                                                <td>{{$order->created_at}}</td>
                                                <td class="no-sort no-click bread-actions">
                                                    <a href="{{route('orderDetail', ['id' => $order->id])}}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                                        <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Detail</span>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pull-left">
                                        <div role="status" class="show-res" aria-live="polite">{{ trans_choice(
                                    'voyager::generic.showing_entries', $orders->total(), [
                                        'from' => $orders->firstItem(),
                                        'to' => $orders->lastItem(),
                                        'all' => $orders->total()
                                    ]) }}</div>
                                    </div>
                                    <div class="pull-right">
                                        {{ $orders->links() }}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
