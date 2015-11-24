
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
	<title>image幻灯片</title>
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
                <ul class="nav navbar-nav">
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
                </div>
              </div>
          </div>
        </nav>
<div class="container">
    <div class="carousel" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item">
                {{--<img src="holder.js/1200x500/auto/text:Bootstrap" alt="">--}}
                <img src="images/1.jpg">
            </div>
            <div class="item">
               {{--<img src="holder.js/1200x500/auto/text:Javascript" alt="">--}}
               <img src="imges/2.png">
            </div>
        </div>
    </div>
</div>
</body>
</html>