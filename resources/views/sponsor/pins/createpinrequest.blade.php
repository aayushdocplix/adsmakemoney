@extends('admin.include.mainlayout')
@section('content')

 <!-- BEGIN : Main Content-->
        <div class="main-content">
        <div class="content-wrapper">
                <!--Line with Area Chart 1 Starts-->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">CREATE PIN REQUEST</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <form action="{{$url}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="referral_code">Referral Code <span class="required-color">*</span></label>
                                            <input type="number" id="basic-form-2" class="form-control" name="referral_code" value="" required>
                                            <span style="color:red">
                                                    @error('referral_code')
                                                        {{$message}}
                                                    @enderror
                                            </spna>
                                        </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="package">Package <span class="required-color">*</span></label>
                                            <select class="select2 form-control" name="package">
                                                @foreach($packages as $tempPackage)
                                                    <option value="{{$tempPackage->id}}">{{$tempPackage->name}}({{$tempPackage->price}})</option>
                                                @endforeach
                                            </select>
                                            <span style="color:red">
                                                    @error('package')
                                                        {{$message}}
                                                    @enderror
                                            </spna>
                                        </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                            <label for="pin-quentity">Pin Quantity <span class="required-color">*</span></label>
                                            <input type="number" id="basic-form-2" class="form-control" name="pinQuentity">
                                            <span style="color:red">
                                                    @error('pinQuentity')
                                                        {{$message}}
                                                    @enderror
                                            </spna>
                                        </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                        <label for="package">Select Payment Method <span class="required-color">*</span></label>
                                            <select class="select2 form-control" name="paymentMethod">
                                                <option value="1">CASH</option>
                                                <option value="2">NEFT</option>
                                                <option value="3">RTGS</option>
                                                <option value="4">UPI</option>
                                                <option value="5">CHEQUE</option>
                                                <option value="6">DEFAND DERAFT</option>
                                                <option value="7">PAYTM</option>
                                                <option value="7">OTHER</option>
                                            </select>
                                            <span style="color:red">
                                                    @error('paymentMethod')
                                                        {{$message}}
                                                    @enderror
                                            </spna>
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                        <label for="package">Select Bank <span class="required-color">*</span></label>
                                            <select class="select2 form-control" name="bankName">
                                                @foreach($banks as $tempbank)
                                                    <option value="{{$tempbank->id}}">{{$tempbank->name}} - {{$tempbank->ifsc_code}}</option>
                                                @endforeach
                                            </select>
                                            <span style="color:red">
                                                    @error('bankName')
                                                        {{$message}}
                                                    @enderror
                                            </spna>
                                        </div>
                                        </div>

                                         <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                        <label for="reference-number">Reference Number <span class="required-color">*</span></label>
                                        <input type="text" id="basic-form-5" class="form-control" name="refrenceNumber">
                                        <span style="color:red">
                                                    @error('refrenceNumber')
                                                        {{$message}}
                                                    @enderror
                                            </spna>
                                        </div>
                                        </div>

                                       
                                    </div>

                                    <div class="form-row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group mb-2">
                                        <label for="basic-form-8">Upload Receipt <span class="required-color">*</span></label>
                                         <input type="file" class="form-control-file" id="basic-form-8" name="receiptFile">
                                         <span style="color:red">
                                                    @error('receiptFile')
                                                        {{$message}}
                                                    @enderror
                                            </spna>
                                        </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                             <div class="form-group mb-2">
                                                 <label for="reference-number">Deposit date <span class="required-color">*</span></label>
                                                <input type='date' class="form-control" placeholder="Basic Pick-a-date" name="depositDate">
                                                 <span style="color:red">
                                                    @error('depositDate')
                                                        {{$message}}
                                                    @enderror
                                                </spna> 
                                             </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-2">
                                                <label for="basic-form-8">Deposit Time <span class="required-color">*</span></label>
                                            
                                                 <input type='time' class="form-control" placeholder="Basic Pick-a-time" name="depositTime">
                                                 <span style="color:red">
                                                    @error('depositTime')
                                                        {{$message}}
                                                    @enderror
                                                 </spna> 
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary mr-2"><i class="ft-check-square mr-1"></i>Save</button>
                                   
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             

              

            </div>
        </div>
        <!-- END : End Main Content-->
@endsection