@extends('admin.include.mainlayout')
@section('content')

 <!-- BEGIN : Main Content-->
        <div class="main-content">
        <div class="content-wrapper">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                
                               
                            <div class="media pb-1">
                                        <div class="media-body text-left">
                                        <h4 class="card-title">Users List</h4>
                                        </div>
                                        <!-- <div class="media-right white text-right">
                                            <a href="#" onclick="transfer();" class="btn btn-info mr-1 mb-1">Transfer</a>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Referral Code</th>
                                                                                   
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @if(isset($users))
                                            @foreach($users as $user)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td><a href="{{url('/users/')}}/{{$user->id}}">{{$user->name}}</a></td>
                                                    <td>{{$user->email}}</td>
                                                    <td>{{$user->referral_code}}</td>
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
             

              

            </div>
        </div>
        <!-- END : End Main Content-->


@endsection