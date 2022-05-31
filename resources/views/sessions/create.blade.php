@extends('layouts.default')
@section('title', '登录')

@section('content')
<div class="offset-md-2 col-md-8">
  <div class="card ">
    <div class="card-header">
      <h5>登录</h5>
    </div>
    <div class="card-body">
      @include('users._errors')

      <form method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">メールアドレス：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">パスワード：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">登録状態保存</label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">登録</button>
      </form>

      <hr>

      <p>アカウントはまだない？<a href="{{ route('signup') }}">登録しよう！</a></p>
    </div>
  </div>
</div>
@stop 