@extends('layouts.master')
@section('content')
<div class="container" >
    <div class="col-sm-offset-4 col-sm-3">
      <form class="form-signin" action="/auth/create" method="POST">
      <br/>
      <br>
        <h2 class="form-signin-heading">欢迎注册</h2>
        {!! csrf_field() !!}
        <label for="inputName" class="sr-only">Name</label>
        <input type="text" name="name"  class="form-control" value="{{ old('name') }}"placeholder="Name" required autofocus>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control"  value="{{ old('password') }}" placeholder="Password" required>
        <label for="inputConfirmPassword" class="sr-only">ConfirmPassword</label>
        <input type="password" name="password_confirmation"  class="form-control"  value="{{ old('password_confirmation') }}"placeholder="ConfirmPassword" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me">记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" >注册</button>
      </form>
      </div>
    </div>
@endsection