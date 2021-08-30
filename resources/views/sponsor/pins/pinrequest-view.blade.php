@extends('admin.include.mainlayout')
@section('content')

 <!-- BEGIN : Main Content-->
        <div class="main-content">
        <div class="content-wrapper"><!--Statistics cards Starts-->
            <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-blackberry">
                <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">$2156</h3>
                        <span>Total Tax</span>
                        </div>
                        <div class="media-right white text-right">
                        <i class="icon-pie-chart font-large-1"></i>
                        </div>
                    </div>
                    </div>
                    <div id="Widget-line-chart" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-ibiza-sunset">
                <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">$1567</h3>
                        <span>Total Cost</span>
                        </div>
                        <div class="media-right white text-right">
                        <i class="icon-bulb font-large-1"></i>
                        </div>
                    </div>
                    </div>
                    <div id="Widget-line-chart1" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                    </div>

                </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-green-tea">
                <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">$4566</h3>
                        <span>Total Sales</span>
                        </div>
                        <div class="media-right white text-right">
                        <i class="icon-graph font-large-1"></i>
                        </div>
                    </div>
                    </div>
                    <div id="Widget-line-chart2" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-pomegranate">
                <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">$8695</h3>
                        <span>Total Earning</span>
                        </div>
                        <div class="media-right white text-right">
                        <i class="icon-wallet font-large-1"></i>
                        </div>
                    </div>
                    </div>
                    <div id="Widget-line-chart3" class="height-75 WidgetlineChart WidgetlineChartshadow mb-2">
                    </div>
                </div>
                </div>
            </div>
            </div>
            <!--Statistics cards Ends-->

                <!--Line with Area Chart 1 Starts-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                
                               
                            <div class="media pb-1">
                                        <div class="media-body text-left">
                                        <h4 class="card-title">PIN REQUEST</h4>
                                        </div>
                                        <div class="media-right white text-right">
                                        <a href="{{url('/pin-request/create')}}"  class="btn btn-info mr-1 mb-1"><i class="fa fa-plus mr-1"></i>Create</a>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered dom-jQuery-events">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Referral Code</th>
                                            <th>DEPOSIT DATE</th>
                                            <th>PACKAGE</th>
                                            <th>NO OF PINS</th>
                                            <th>PAYMENT MODE</th>
                                            <th>REFERENCE NO</th>
                                            <th>BANK</th>
                                            <th>Receipt File</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($pinRequests as $pinRequest)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$pinRequest->referral_code}}</td>
                                                <td>{{$pinRequest->deposit_date}} {{$pinRequest->deposit_time}}</td>
                                                <td>{{$pinRequest->package_id}}</td>
                                                <td>{{$pinRequest->pin_quentity}}</td>
                                                <td>{{$pinRequest->payment_method}}</td>
                                                <td>{{$pinRequest->refrence_number}}</td>
                                                <td>{{$pinRequest->bank_id}}</td>
                                                <td><a href="{{ asset('storage/app/'.$pinRequest->receipt_file) }}" target="_blank"><img src="{{ asset('storage/app/'.$pinRequest->receipt_file) }}" width="100px" /></a></td>
                                            </tr>
                                            @endforeach
                                        
                                        </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             

              

            </div>
        </div>
        <!-- END : End Main Content-->
@endsection