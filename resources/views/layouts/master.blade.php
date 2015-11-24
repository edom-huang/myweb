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

	<title>@yield('title')</title>
</head>
<body>
{{--导航栏部分--}}
    <div class="container">
       @include('layouts.header')
    </div>
{{--错误提示信息部分--}}
      <div class="container-fluid">
        {{--显示自定义的信息--}}
       @if(Session::has('message'))
         <p class="alert">{{ Session::get('message') }}</p>
        @endif
        {{--显示错误信息 --}}
        @include('errors.errors')
       </div>
{{--内容部分--}}
    <div>
        @yield('content')
    </div>
{{--footer部分--}}
    <div class="container">
        @include('layouts.footer')
    </div>
</body>
</html>