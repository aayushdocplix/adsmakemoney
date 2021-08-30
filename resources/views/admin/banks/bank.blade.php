@extends('admin.include.mainlayout')
@section('content')

<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-wrapper"><div class="row">
        <div class="col-sm-12">
            <div class="content-header">Banks</div>
            </div>
        </div>
        <!-- Headings -->
        <section id="html-headings-default">
        <div class="row match-height">
            <div class="col-md-12 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Add Bank</h4>
                </div>
                <div class="card-content">
                <div class="px-3">
                    <form class="form" method="post" action="{{$url}}">
                        @csrf
                    <div class="form-body">
                        <hr>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="bankName">Bank Name <span class="required-color">*</span></label>
                            <input type="text" id="projectinput1" class="form-control" name="bankName" value="{{old('bankName')}}">
                            <span style="color:red">
                                @error('bankName')
                                    {{$message}}
                                @enderror
                            </spna> 
                            </div>
                        </div>
                        
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="bankIfsc">Bank IFSC Code <span class="required-color">*</span></label>
                            <input type="text" id="projectinput3" class="form-control" name="bankIfsc" value="{{old('bankIfsc')}}">
                            <span style="color:red">
                                @error('bankIfsc')
                                    {{$message}}
                                @enderror
                            </spna>
                            </div>
                        </div>
                        
                        </div>
                    </div>

                    <div class="form-actions">
                       
                        <button type="submit" class="btn btn-raised btn-raised btn-primary">
                        <i class="fa fa-check-square-o"></i> Save
                        </button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-12 col-lg-7">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Existing Banks List</h4>
               
                </div>
                <div class="card-body">
                <div class="card-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>IFSC</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($banks))
                                @foreach($banks as $tempBank)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$tempBank->name}}</td>
                                        <td>{{$tempBank->ifsc_code}}</td>
                                        <td>{{$tempBank->status==1?'Active':'Inactive'}}</td>
                                        
                                    </tr>
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
        </section>
        <!--/ Headings -->
     </div>
</div>
<!-- END : End Main Content-->
@endsection