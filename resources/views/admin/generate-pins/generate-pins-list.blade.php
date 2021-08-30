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
                                        <h4 class="card-title">Generated Pins List</h4>
                                        </div>
                                        <div class="media-right white text-right">
                                            <a href="{{url('/generate-pins')}}"  class="btn btn-info mr-1 mb-1"><i class="fa fa-plus mr-1"></i>Create</a>
                                            <a href="#" onclick="transfer();" class="btn btn-info mr-1 mb-1">Transfer</a>
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
                                            <th>CREATED DATE</th>
                                            <th>PIN</th>
                                            <th>PACKAGE</th>
                                            <th>AMOUNT</th>
                                                                                   
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($generatedPins))
                                            @foreach($generatedPins as $generatedPin)
                                                @foreach($generatedPin->getAdminPins as $tempAdminPins)
                                                <tr>
                                                    <td>{{$loop->iteration}}. <input type="checkbox" name="pins_id" id="pins_id" value="{{$tempAdminPins->id}}"></td>
                                                    <td>{{$generatedPin->created_at}}</td>
                                                    <td>{{$tempAdminPins->referral_code}}</td>
                                                    <td>{{$generatedPin->getPackage['name']}}</td>
                                                    <td>{{$generatedPin->getPackage['price']}}</td>
                                                </tr>
                                                @endforeach
                                            @endforeach
                                            @endif
                                        
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="" method="post" id="transfer_form">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Transfer</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <input type="number" value="" name="user_id" id="user_id" class="form-control" placeholder="Member Id" required />
            <input type="hidden" value="" name="referral_id" id="referral_id" required />
            <span class="text-danger" id="transfer_form_error"></span>
            <span class="text-success" id="transfer_success_message"></span>
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