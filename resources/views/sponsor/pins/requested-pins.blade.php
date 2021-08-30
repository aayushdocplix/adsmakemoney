@extends('admin.include.mainlayout')
@section('content')
<style>
    .modal-backdrop {
    width: 0;
    height: 0;
}
</style>

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
                                        <h4 class="card-title">REQUESTED PINS</h4>
                                        </div>
                                        <!-- <div class="media-right white text-right">
                                        <a href="{{url('/pin-request/create')}}"  class="btn btn-info mr-1 mb-1"><i class="fa fa-plus mr-1"></i>Create</a>
                                        </div> -->
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
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($pinRequests as $pinRequest)
                                            <tr>
                                                <td>1</td>
                                                <td>{{$pinRequest->referral_code}}</td>
                                                <td>{{$pinRequest->deposit_date}} {{$pinRequest->deposit_time}}</td>
                                                <td>{{$pinRequest->package_name}}</td>
                                                <td>{{$pinRequest->pin_quentity}}</td>
                                                <td>{{$pinRequest->payment_method}}</td>
                                                <td>{{$pinRequest->refrence_number}}</td>
                                                <td>{{$pinRequest->bank_name}}</td>
                                                <td><a href="{{ asset('storage/app/'.$pinRequest->receipt_file) }}" target="_blank"><img src="{{ asset('storage/app/'.$pinRequest->receipt_file) }}" width="100px" /></a></td>
                                                <td> @if($pinRequest->status=='Approved')
                                                    <a class="btn white btn-round btn-success">{{$pinRequest->status}}</a>
                                                    @elseif($pinRequest->status=='Rejected')
                                                    <a class="btn white btn-round btn-danger">{{$pinRequest->status}}</a>
                                                    @else
                                                    <a class="btn white btn-round btn-warning">{{($pinRequest->status!='')?$pinRequest->status:'Requested'}}</a>
                                                @endif</td>
                                                <td> 
                                                    <a class="btn white btn-round btn-primary" onclick="pinRequestedAction('{{ $pinRequest->id }}', '{{ $pinRequest->status }}', '{{ $pinRequest->description }}')">Take</a>
                                                </td>
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

        
<!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="post" id="requested_pins">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Action</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <select class="form-control mb-2" name="status" id="status" required>
               <option value="">Select</option>
               <option value="Approved">Approve</option>
               <option value="Rejected">Reject</option>
            </select>
            <textarea name="description" id="description" class="form-control" placeholder="Description" required></textarea>
            <input type="hidden" value="" name="pin_id" id="pin_id" required />
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection