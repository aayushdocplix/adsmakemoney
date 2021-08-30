@extends('admin.include.mainlayout')
@section('content')

<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-wrapper"><div class="row">
        <div class="col-sm-12">
            <div class="content-header">Youtube Videos</div>
            </div>
        </div>
        <!-- Headings -->
        <section id="html-headings-default">
        <div class="row match-height">
            <div class="col-md-12 col-lg-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Add Videos</h4>
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
                            <label for="videoUrl">Video URL<span class="required-color">*</span></label>
                            <input type="text" id="projectinput1" class="form-control" name="videoUrl" value="{{old('videoUrl')}}">
                            <span style="color:red">
                                @error('videoUrl')
                                    {{$message}}
                                @enderror
                            </spna> 
                            </div>
                        </div>
                        
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                            <label for="channelId">Channel ID<span class="required-color">*</span></label>
                            <input type="text" id="projectinput3" class="form-control" name="channelId" value="{{old('channelId')}}">
                            <span style="color:red">
                                @error('channelId')
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
                <h4 class="card-title">Existing Packages List</h4>
               
                </div>
                <div class="card-body">
                <div class="card-content">
                    <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Video URL</td>
                                <td>Channel ID</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($youtubeVideos))
                                @foreach($youtubeVideos as $tempyoutubeVideo)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$tempyoutubeVideo->video_url}}</td>
                                        <td>{{$tempyoutubeVideo->channel_id}}</td>
                                        <td>{{$tempyoutubeVideo->status==1?'Active':'Inactive'}}</td>
                                        
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
<!-- <div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/rJG2YHnqqnk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> -->
@endsection