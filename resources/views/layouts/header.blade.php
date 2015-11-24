<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/css/footer.css" type="text/css">
	<link rel="stylesheet" href="/css/company.css" type="text/css">
	<link rel="stylesheet" href="/css/support.css" type="text/css">`
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar  navbar-blue navbar-fixed-top" role="navigation" id="header">
     <div class="container hidden-xs" >
         <div class="row">
         <div class="col-lg-2 col-xs-2 col-md-2">
        <img src="/images/sinacloud_logo.png">
       </div>
       {{--<div class="col-lg-10 col-xs-10 col-md-10">--}}
        <div class="col-lg-1 col-xs-1 col-md-1">
            <a href="{{route('index')}}" class="active">首页</a>
        </div>
         <div class="col-lg-1 col-xs-1 col-md-1">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                   产品 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-menu-left" id="dropdown-text">
                               <li><a href="#">云应用 SAE</a></li>
                               <li><a href="#">云主机 SEC</a></li>
                               <li><a href="#">云存储 SCS</a></li>
                               <li><a href="#">云商店 SCM</a></li>
                               <li><a href="#">云邮箱 SEM</a></li>
            </ul>
         </div>
         <div class="col-lg-1 col-xs-1 col-md-1">
            <a href="{{route('company')}}">企业版</a>
         </div>
         <div class="col-lg-1 col-xs-1 col-md-1">
            <a href="{{route('support')}}">支持中心</a>
         </div>
         <div class="col-lg-1 col-xs-1 col-md-1">
            <a href="#">价格</a>
         </div>
         <div class="col-lg-1 col-xs-1 col-md-1">
            <a href="#">成功案列</a>
         </div>
         <div class="col-lg-1 col-xs-1 col-md-1">
            <a href="#">社区</a>
         </div>
         <div class="col-lg-3 col-xs-3 col-md-3">
               <ul class="nav navbar-nav navbar-right">
                          	@if (Auth::guest())
                                <li><a href="/auth/register"><span class="glyphicon glyphicon-heart" style="color: rgb(212, 106, 64);" aria-hidden="true"></span>&nbsp;注册</a></li>
                                <li ><a href="/auth/login"><span class="glyphicon glyphicon-arrow-right" style="color: green;" aria-hidden="true"></span>&nbsp;登录&nbsp;&nbsp;</a></li>
                           	@else
                                <li class="navbar-text"><span class="glyphicon glyphicon-user" style="color: rgb(0, 0, 255);"aria-hidden="true"></span>&nbsp;{{ Auth::user()->name }}</li>
                                <li ><a href="/auth/logout"><span class="glyphicon glyphicon-arrow-left" style="color: green;" aria-hidden="true"></span>&nbsp;登出&nbsp;&nbsp;</a></li>
                          	@endif
               </ul>
         </div>

          {{--<ul class="nav navbar-nav">--}}
             {{--<li class="active"><a href="{{route('index')}}">首页</a></li>--}}
             {{--<li class="dropdown">--}}
                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown">--}}
                   {{--产品 <b class="caret"></b>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu dropdown-menu-left" id="dropdown-text">--}}
                   {{--<li><a href="#">云应用 SAE</a></li>--}}
                   {{--<li><a href="#">云主机 SEC</a></li>--}}
                   {{--<li><a href="#">云存储 SCS</a></li>--}}
                   {{--<li><a href="#">云商店 SCM</a></li>--}}
                   {{--<li><a href="#">云邮箱 SEM</a></li>--}}
                {{--</ul>--}}
             {{--</li>--}}
               {{--<li><a href="{{route('company')}}">企业版</a></li>--}}
               {{--<li><a href="{{route('support')}}">支持中心</a></li>--}}
               {{--<li><a href="#">价格</a></li>--}}
               {{--<li><a href="#">成功案列</a></li>--}}
               {{--<li><a href="#">社区</a></li>--}}
          {{--</ul>--}}
          {{--<ul class="nav navbar-nav navbar-right">--}}
              	{{--@if (Auth::guest())--}}
                    {{--<li><a href="/auth/register"><span class="glyphicon glyphicon-heart" style="color: rgb(212, 106, 64);" aria-hidden="true"></span>&nbsp;注册</a></li>--}}
                    {{--<li style="padding-right: 50px;"><a href="/auth/login"><span class="glyphicon glyphicon-arrow-right" style="color: green;" aria-hidden="true"></span>&nbsp;登录&nbsp;&nbsp;</a></li>--}}
               	{{--@else--}}
                    {{--<li class="navbar-text"><span class="glyphicon glyphicon-user" style="color: rgb(0, 0, 255);"aria-hidden="true"></span>&nbsp;{{ Auth::user()->name }}</li>--}}
                    {{--<li style="padding-right: 50px;"><a href="/auth/logout"><span class="glyphicon glyphicon-arrow-left" style="color: green;" aria-hidden="true"></span>&nbsp;登出&nbsp;&nbsp;</a></li>--}}
              	{{--@endif--}}
          {{--</ul>--}}
       {{--</div>--}}
       </div>
       </div>
    </nav>
 </body>
 </html>