@extends('layouts.master')
@section('content')
<div class="container">
    <div class="col-sm-offset-4 col-sm-3">
      <form class="form-signin" action="/auth/signin" method="post">
        <h2 class="form-signin-heading">请登录</h2>
        {!! csrf_field() !!}
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text" id="inputEmail" class="form-control" name="name" value="{{old('name')}}" placeholder="name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">登录</button>
      </form>
        </div>
    </div>
@endsection
