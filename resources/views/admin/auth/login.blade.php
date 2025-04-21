@extends('admin.layouts.plain')

@section('content')
<h1>Hệ thống Nhà thuốc</h1>
<p class="account-subtitle">Đăng nhập</p>
@if (session('login_error'))
<x-alerts.danger :error="session('login_error')" />
@endif
<!-- Form -->
<form action="{{route('login')}}" method="post">
	@csrf
	<div class="form-group">
		<input class="form-control" name="email" type="text" placeholder="Email">
	</div>
	<div class="form-group">
		<input class="form-control" name="password" type="password" placeholder="Mật khẩu">
	</div>
	<div class="form-group">
		<button class="btn btn-success btn-block" type="submit">Đăng nhập</button>
	</div>
</form>
<!-- /Form -->

<!-- Visit codeastro.com for more projects -->

<div class="text-center forgotpass"><a href="{{route('password.request')}}">Quên mật khẩu?</a></div>
<div class="text-center dont-have">Chưa có tài khoản? <a href="{{route('register')}}">Đăng ký</a></div>
@endsection