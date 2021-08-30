@extends('admin.include.mainlayout')
@section('content')

<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-wrapper"><div class="row">
        <div class="col-sm-12">
            <div class="content-header">Custom Ads</div>
            </div>
        </div>
        <!-- Headings -->
        <section id="html-headings-default">
        <div class="row match-height">
            <div class="col-md-12 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Create Ads</h4>
                </div>
                <div class="card-content">
                <div class="px-3">
                    
                    <form class="form" method="post" action="{{$url}}" enctype="multipart/form-data">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        @csrf
                    <div class="form-body">
                        <hr>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="title">Title <span class="required-color">*</span></label>
                            <input type="text" id="title" class="form-control" name="title" value="{{isset($custom_ad->title)?$custom_ad->title:old('title') }}" required>
                            <span style="color:red">
                                @error('title')
                                    {{$message}}
                                @enderror
                            </spna> 
                            </div>
                        </div>
                        
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="image">Image <span class="required-color">*</span></label>
                            <input type="file" id="image" class="form-control-file" name="image" value="{{old('image')}}" {{isset($custom_ad->image)?'':'required' }}>
                            @if (isset($custom_ad->image) )
                            <br/>
                            <img src="{{ asset('storage/app/'.$custom_ad->image) }}" width="100px" >
                            @endif
                            <span style="color:red">
                                @error('image')
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
                <h4 class="card-title">Existing Ads List</h4>
               
                </div>
                <div class="card-body">
                <div class="card-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Title</td>
                                <td>Image</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($customs_ads))
                                @foreach($customs_ads as $ads)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$ads->title}}</td>
                                        <td><img src="{{ asset('storage/app/'.$ads->image) }}" width="100px" ></td>
                                        <td> 
                                            <a class="danger" href="{{url('/custom-ads/edit/')}}/{{$ads->id}}" data-original-title="" title="">
                                            <i class="ft-edit-2"></i>
                                            </a>

                                            <a class="danger" href="{{url('/custom-ads/delete/')}}/{{$ads->id}}" data-original-title="" title="">
                                            <i class="ft-x"></i>
                                            </a>
                                        </td>
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