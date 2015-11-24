@extends('layouts.master')
@section('title')
支持中心-新浪云
@endsection
@section('content')
<div class="support-img"><img src="/images/support/support_banner.png"></div>
<div class="container-fluid" >
    <div class="row">
        <div class="col-lg-2 col-xs-2 col-md-2"></div>
        <div class="col-lg-6 col-xs-6 col-md-6">
            <h4 class="pro-h4">支持中心</h4>
        </div>
        <div class="col-lg-2 col-xs-2 col-md-2">
            <!--Search Field-->
            <div class="support-serach">
                <form action="post" url="">
            	<label for="inputSearch" class="sr-only">Search</label>
                <input type="text"  name="search" value="" placeholder="Place for Search " required autofocus>
                <a href="#"><span class='glyphicon glyphicon-search'></span></a>
                </form>
            </div>
        </div>
        <div class="col-lg-2 col-xs-2 col-md-2"></div>
   </div>
</div>
{{--产品文档部分--}}
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-1 col-xs-1 col-md-1"></div>
            <div class="col-lg-10 col-xs-10 col-md-10" id="nav">
                <ul class="nav-ul">
                    <li><a href="#">产品文档</a> </li>
                    <li><a href="#">产品文档</a> </li>
                    <li><a href="#">产品文档</a> </li>
                </ul>
            </div>
        <div class="col-lg-1 col-xs-1 col-md-1"></div>
    </div>
</div>