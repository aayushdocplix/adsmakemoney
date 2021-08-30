<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard1 - Apex responsive bootstrap 4 admin template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('public/app-assets-v/img/ico/apple-icon-60.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('public/app-assets-v/img/ico/apple-icon-76.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('public/app-assets-v/img/ico/apple-icon-120.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('public/app-assets-v/img/ico/apple-icon-152.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/app-assets-v/img/ico/favicon.ico')}}">
    <link rel="shortcut icon" type="image/png" href="{{asset('public/app-assets-v/img/ico/favicon-32.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/fonts/feather/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/vendors/css/perfect-scrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/vendors/css/prism.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/vendors/css/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/vendors/css/tables/datatable/datatables.min.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN APEX CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public/app-assets-v/css/app.css')}}">
    <!-- END APEX CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    </head>
    <body class="antialiased">
        <div class="row">
           
            @if(isset($youtubeVideos))
                @foreach($youtubeVideos as $tempYoutubeVideo)
                <div class="col-lg-4">
                <div class="embed-responsive embed-responsive-16by9">
                <iframe  src="{{$tempYoutubeVideo->video_url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <button class="btn btn-danger mr-1 mb-1"  onclick="authenticate('{{$tempYoutubeVideo->channel_id}}')">SUBSCRIBE</button>
                </div>
                @endforeach
            @endif
            
        </div>
            <!-- BEGIN VENDOR JS-->
    <script src="{{asset('public/app-assets-v/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>

    <script src="https://apis.google.com/js/api.js"></script>
    <script>
  /**
   * Sample JavaScript code for youtube.subscriptions.insert
   * See instructions for running APIs Explorer code samples locally:
   * https://developers.google.com/explorer-help/guides/code_samples#javascript
   */

  function authenticate(channelID) {
    return gapi.auth2.getAuthInstance()
        .signIn({scope: "https://www.googleapis.com/auth/youtube.force-ssl"})
        .then(function() { console.log("Sign-in successful"); loadClient(channelID)},
              function(err) { console.error("Error signing in", err); });
  }
  function loadClient(channelID) {
    gapi.client.setApiKey("AIzaSyDK9mtMzTXNdlyZEzTVfV-rW1J2-ki88g4");
    return gapi.client.load("https://www.googleapis.com/discovery/v1/apis/youtube/v3/rest")
        .then(function() { console.log("GAPI client loaded for API"); execute(channelID)},
              function(err) { console.error("Error loading GAPI client for API", err); });
  }
  // Make sure the client is loaded and sign-in is complete before calling this method.
  function execute(channelID) {
    return gapi.client.youtube.subscriptions.insert({
      "part": [
        "snippet"
      ],
      "resource": {
        "snippet": {
          "resourceId": {
            "kind": "youtube#channel",
            "channelId": channelID
          }
        }
      }
    })
        .then(function(response) {
                // Handle the results here (response.result has the parsed body).
                console.log("Response", response);
              },
              function(err) { console.error("Execute error", err); });
  }
  gapi.load("client:auth2", function() {
    gapi.auth2.init({client_id: "42801892416-f8j5b7jfoe1sd4b0ms2rc84bt42tsg1p.apps.googleusercontent.com"});
  });
</script>

    </body>
</html>
