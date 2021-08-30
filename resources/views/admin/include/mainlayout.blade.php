<!DOCTYPE html>
<html lang="en" class="loading">
  <!-- BEGIN : Head-->
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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
      #toast-container>div{
        opacity: 1;
      }
      </style>
  </head>
  <!-- END : Head-->

  <!-- BEGIN : Body-->
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">
      @include('admin.include.vertical-header')
      @include('admin.include.vertical-navbar')
      <div class="main-panel">
        @yield('content')
        @include('admin.include.vertical-footer')
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    @include('admin.include.vertical-theme-customizer')
   
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('public/app-assets-v/vendors/js/core/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/core/popper.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/prism.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/jquery.matchHeight-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/screenfull.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/pace/pace.min.js')}}" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{asset('public/app-assets-v/vendors/js/datatable/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/vendors/js/chartist.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN APEX JS-->
    <script src="{{asset('public/app-assets-v/js/app-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/js/notification-sidebar.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/js/customizer.js')}}" type="text/javascript"></script>
    <!-- END APEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{asset('public/app-assets-v/js/dashboard1.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/app-assets-v/js/data-tables/datatable-basic.js')}}" type="text/javascript"></script>
    
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- END PAGE LEVEL JS-->
    <style>
        .required-color{
            color:red;
            font-size:16px;
        }
    </style>
     <script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
    <script type="text/javascript">
	$(function () {
        $('.genealogy-tree ul').hide();
        $('.genealogy-tree>ul').show();
        $('.genealogy-tree ul.active').show();
        $('.genealogy-tree li').on('click', function (e) {
            var children = $(this).find('> ul');
            if (children.is(":visible")) children.hide('fast').removeClass('active');
            else children.show('fast').addClass('active');
            e.stopPropagation();
        });
    });
    </script>
    <script>
      function transfer(){
        var count_checked = $("[name='pins_id']:checked").length; 
        if(count_checked == 0){
          alert('Please select atleast 1 record to transfer.')
        }else{
          var checkedValues = [];
          $.each($("input[name='pins_id']:checked"), function() {
              checkedValues.push($(this).val());
          });
          $("#referral_id").val(checkedValues);
          $('#exampleModal').modal('toggle');
        }
      }

      $(document).ready(function () {
        
        $('#transfer_form').on('submit', function(event){
                event.preventDefault();
                $(':input[type="submit"]').prop('disabled', true);
                $('#transfer_form_error').text('');
                $.ajax({
                        url: "{{ URL::to('transfer-pins') }}",
                        type: "POST",
                        data:{
                            _token: '{{ csrf_token() }}',
                            referral_id:$('#referral_id').val(),
                            user_id:$('#user_id').val(),
                        },
                        success:function(response){
                            if(response.status=='1'){
                              $('#transfer_success_message').text(response.message);
                              window.location.href="{{ URL::to('generate-pins/list') }}";
                            }else if(response.status=='0'){
                                 $('#transfer_form_error').text(response.message);
                            }
                            $(':input[type="submit"]').prop('disabled', false);
                        },
                        error: function(response) {
                            if(response.responseJSON.status == '0'){
                                $('#transfer_form_error').text(response.responseJSON.message);
                            }
                            $(':input[type="submit"]').prop('disabled', false);
                        }
                });
        });
      
});

function pinRequestedAction(id, status, description){
    $("#pin_id").val(id);
    $("#status").val(status);
    $("#description").val(description);
    $('#statusModal').modal('toggle');
}
$(document).ready(function () {
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
        $('#requested_pins').on('submit', function(event){
                event.preventDefault();
                $(':input[type="submit"]').prop('disabled', true);
                $('#requested_pins_error').text('');
                $.ajax({
                        url: "{{ route('requested-pins-action') }}",
                        type: "POST",
                        data:{
                            _token: '{{ csrf_token() }}',
                            status:$('#status').val(),
                            description:$('#description').val(),
                            pin_id:$('#pin_id').val(),
                        },
                        Accept: "application/json",
                        success:function(response){
                            if(response.status=='1'){
                              toastr.success(response.message);
                              window.location.href="{{ route('requested-pins') }}";
                            }else if(response.status=='0'){
                              toastr.error(response.message);
                            }
                            $(':input[type="submit"]').prop('disabled', false);
                        },
                        error: function(response) {
                            toastr.error(response.responseJSON.message);
                            $(':input[type="submit"]').prop('disabled', false);
                        }
                });
        });
      
});

    </script>
  </body>
  <!-- END : Body-->
</html>