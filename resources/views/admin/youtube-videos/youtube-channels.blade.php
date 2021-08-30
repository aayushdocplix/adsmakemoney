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
            <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-form">Youtube Videos List</h4>
                </div>
                <div class="card-content">
                <div class="px-3">
                    <div class="row mt-3 mb-3">
                    @if(isset($youtubeVideos))
                        @foreach($youtubeVideos as $tempYoutubeVideo)
                        <div class="col-lg-4 text-center">
                        <div class="embed-responsive embed-responsive-16by9">
                        <iframe  src="{{$tempYoutubeVideo->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <button class="btn btn-danger mr-1 mb-1 mt-1"  onclick="authenticate('{{$tempYoutubeVideo->channel_id}}')">SUBSCRIBE</button>
                        </div>
                        @endforeach
                    @endif
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

@endsection