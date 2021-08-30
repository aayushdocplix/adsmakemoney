@extends('admin.include.mainlayout')
@section('content')

<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-wrapper"><div class="row">
        <div class="col-sm-12">
            <div class="content-header">Generate Pins</div>
            </div>
        </div>
        <!-- Headings -->
        <section id="html-headings-default">
        <div class="row match-height">
            <div class="col-md-12 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Add Pins</h4>
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
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="numberOfPins">Number Of Pins<span class="required-color">*</span></label>
                            <input type="text" id="projectinput3" class="form-control" name="numberOfPins" value="{{old('numberOfPins')}}" placeholder="Enter Number Of Pins">
                            <span style="color:red">
                                @error('numberOfPins')
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
            
        </div>
        </section>
        <!--/ Headings -->
     </div>
</div>
<!-- END : End Main Content-->
@endsection