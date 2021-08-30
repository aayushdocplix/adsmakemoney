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
                        <h3 class="font-large-1 mb-0">{{ $totalUserCount }}</h3>
                        <span>Total Members</span>
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
                        <h3 class="font-large-1 mb-0">0</h3>
                        <span>Paid Members</span>
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
                        <h3 class="font-large-1 mb-0">0</h3>
                        <span>Blocked Members</span>
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
                        <h3 class="font-large-1 mb-0">0</h3>
                        <span>Today's Activation</span>
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
            <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="card gradient-blackberry">
                <div class="card-content">
                    <div class="card-body pt-2 pb-0">
                    <div class="media">
                        <div class="media-body white text-left">
                        <h3 class="font-large-1 mb-0">{{ $usedPins }}</h3>
                        <span>Used Pins</span>
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
                        <h3 class="font-large-1 mb-0">{{ $unusedPins }}</h3>
                        <span>Unused Pins</span>
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
                        <h3 class="font-large-1 mb-0">0</h3>
                        <span>Pending Pin Request</span>
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
            
            </div>
            <!--Statistics cards Ends-->

            

            <div class="row match-height">
           
            <div class="col-xl-12 col-lg-12 col-12">
                <div class="card">
                <div class="card-header pb-2">
                    <h4 class="card-title">Last 5 Registrations</h4>
                </div>
                <div class="card-content">
                    <table class="table table-responsive-sm text-center">
                    <thead>
                        <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Referral Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lastFiveUsers as $user)
                        <tr>
                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d-M-Y H:i')}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->referral_code }}</td>
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
        <!-- END : End Main Content-->
@endsection