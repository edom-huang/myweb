<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="/css/style.css" type="text/css">
	<script src="/js/jquery-1.11.3.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/holder.js"></script>
	<title>bootstap test</title>
</head>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <button class="navbar-toggle" data-toggle="collapse" data-target="#responsive-navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><strong>edom-huang</strong>.net</a>
            <div class="collapse navbar-collapse" id="responsive-navbar">
                <ul class="nav navbar-nav" id="theNav">
                    <li class="active"><a href="#">课程</a> </li>
                    <li><a href="#">博客</a> </li>
                    <li><a href="#">手册</a> </li>
                </ul>
                <form action="" class="navbar-form navbar-left">
                    <input type="text" placeholder="搜索" class="form-control">
                    <button type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </form>
                <a href="" class="btn btn-primary btn-sm navbar-btn navbar-right hidden-xs">订阅课程</a>
                <div class="profile navbar-right">
                    <ul class="nav navbar-nav ">
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">登录</a> </li>
                        <li><a href="#">注册</a> </li>
                    </ul>
                    {{--<p class="navbar-text">你好，<a href="#" class="navbar-link">Edom</a> </p>--}}
                </div>
              </div>
          </div>
        </nav>
        {{--<div class="container">--}}
            {{--<p class="alert alert-info">this 4-column-wide div gets wrapped onto a new line as one--}}
            {{--contiguous unit.this 4-column-wide div gets wrapped onto a new line as one contiguous unit.--}}
            {{--this 4-column-wide div getswrapped onto a new line as one contiguous unit.--}}
            {{--this 4-column-wide div gets wrapped onto a new line as one contiguous unit.--}}
            {{--this 4-column-wide div gets wrapped onto a new line as one contiguous unit.</p>--}}
        {{--</div>--}}
            <div class="carousel slidev" data-ride="carousel" data-interval="4000" id="slideshow">
                <ol class="carousel-indicators">
                    <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                    <li data-target="#slideshow" data-slide-to="1"></li>
                    <li data-target="#slideshow" data-slide-to="2"></li>
                    <li data-target="#slideshow" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" >
                    <div class="item active">
                        <img src="images/1.jpg" class="carousel-img" >
                        <div class="carousel-caption">
                            <h2>图片一</h2>
                            <p>这是图片一</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/2.png" class="carousel-img">
                         <div class="carousel-caption">
                             <h2>图片二</h2>
                              <p>这是图片二</p>
                         </div>
                    </div>
                    <div class="item">
                        <img src="images/3.jpg" class="carousel-img">
                        <div class="carousel-caption">
                            <h2>图片三</h2>
                            <p>这是图片三</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="images/4.jpg" class="carousel-img">
                         <div class="carousel-caption">
                            <h2>图片四</h2>
                            <p>这是图片四</p>
                         </div>
                </div>
                <a href="#slideshow" data-slide="prev" class="left carousel-control">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#slideshow" data-slide="next" class="right carousel-control">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <div class="modal fade" id="login-modal" tabindex="-1" >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                        <h4>用户登录</h4>
                    </div>
                    <div class="modal-body">
                        <p>用户登录用的表单</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary">登录</button>
                    </div>
                </div>
            </div>
        </div>
        {{--导航栏测试部分--}}
    <div class="container">
        <ul id="mytab" class="nav nav-pills" role="tablist">
            <li role="presentation" class="active"><a href="">home</a> </li>
            <li role="presentation" ><a href="">Hello</a> </li>
            <li role="presentation" ><a href="">World</a> </li>
        </ul>
    </div>
<script>
    $(function(){
        $('#login-modal').modal({
            show:false,
            backdrop:false
        });
//        点击时显示哪个导航为active
        $("#mytab a,#theNav a").click(function(e) {
          e.preventDefault();
          $(this).tab("show");
        })
    });
</script>
</body>
</html>