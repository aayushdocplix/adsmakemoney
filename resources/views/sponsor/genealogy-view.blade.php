@extends('admin.include.mainlayout')
@section('content')
<style type="text/css">
	/*----------------genealogy-scroll----------*/

.genealogy-scroll::-webkit-scrollbar {
    width: 5px;
    height: 8px;
}
.genealogy-scroll::-webkit-scrollbar-track {
    border-radius: 10px;
    background-color: #e4e4e4;
}
.genealogy-scroll::-webkit-scrollbar-thumb {
    background: #212121;
    border-radius: 10px;
    transition: 0.5s;
}
.genealogy-scroll::-webkit-scrollbar-thumb:hover {
    background: #d5b14c;
    transition: 0.5s;
}


/*----------------genealogy-tree----------*/
.genealogy-body{
    white-space: nowrap;
    overflow-y: hidden;
    padding: 50px;
    min-height: 500px;
    padding-top: 10px;
}
.genealogy-tree ul {
    padding-top: 20px; 
    position: relative;
    padding-left: 0px;
    display: flex;
}
.genealogy-tree li {
    float: left; text-align: center;
    list-style-type: none;
    position: relative;
    padding: 20px 5px 0 5px;
}
.genealogy-tree li::before, .genealogy-tree li::after{
    content: '';
    position: absolute; 
  top: 0; 
  right: 50%;
    border-top: 2px solid #ccc;
    width: 50%; 
  height: 18px;
}
.genealogy-tree li::after{
    right: auto; left: 50%;
    border-left: 2px solid #ccc;
}
.genealogy-tree li:only-child::after, .genealogy-tree li:only-child::before {
    display: none;
}
.genealogy-tree li:only-child{ 
    padding-top: 0;
}
.genealogy-tree li:first-child::before, .genealogy-tree li:last-child::after{
    border: 0 none;
}
.genealogy-tree li:last-child::before{
    border-right: 2px solid #ccc;
    border-radius: 0 5px 0 0;
    -webkit-border-radius: 0 5px 0 0;
    -moz-border-radius: 0 5px 0 0;
}
.genealogy-tree li:first-child::after{
    border-radius: 5px 0 0 0;
    -webkit-border-radius: 5px 0 0 0;
    -moz-border-radius: 5px 0 0 0;
}
.genealogy-tree ul ul::before{
    content: '';
    position: absolute; top: 0; left: 50%;
    border-left: 2px solid #ccc;
    width: 0; height: 20px;
}
.genealogy-tree li a{
    text-decoration: none;
    color: #666;
    font-family: arial, verdana, tahoma;
    font-size: 11px;
    display: inline-block;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
}

.genealogy-tree li a:hover+ul li::after, 
.genealogy-tree li a:hover+ul li::before, 
.genealogy-tree li a:hover+ul::before, 
.genealogy-tree li a:hover+ul ul::before{
    border-color:  #fbba00;
}

/*--------------memeber-card-design----------*/
.member-view-box{
    padding:0px 20px;
    text-align: center;
    border-radius: 4px;
    position: relative;
}
.member-image{
    width: 60px;
    position: relative;
}
.member-image img{
    {{asset('/publicpublic/app-assets-v/img/genealogy/width: 60px;
  ')}}  height: 60px;
    border-radius: 6px;
  /*background-color :#000;*/
  z-index: 1;
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
                                <h4 class="card-title">PRODUCTS SALES</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                <div class="body genealogy-body genealogy-scroll">
                                        <div class="genealogy-tree">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0);">
                                                        <div class="member-view-box">
                                                            <div class="member-image">
                                                                <img src="{{asset('public/app-assets-v/img/genealogy/user-active.png')}}" alt="Member">
                                                                <div class="member-details">
                                                                    <h3>{{ $zerolevel->name }}</h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <ul class="active">
                                                       @foreach($secondLevel as $seclevel)
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <div class="member-view-box">
                                                                    <div class="member-image">
                                                                        <img src="{{asset('public/app-assets-v/img/genealogy/user-active.png')}}" alt="Member">
                                                                        <div class="member-details">
                                                                            <h3 style="font-size: 0.6rem;">{{ $seclevel->name }}</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                            {!! genealogy_tree($seclevel->id) !!}
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
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