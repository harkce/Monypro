@extends('layouts.master')

@section('pageTitle', 'Masuk')

@section('content')
<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
	<div class="form-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1 class="text-center text-bold text-light mt-4x">Monypro</h1>
					<div class="well row pt-2x pb-3x bk-light">
						<div class="col-md-8 col-md-offset-2">
							<form action="" class="mt">
								{{ csrf_field() }}

								<label for="" class="text-uppercase text-sm">Masukkan Username</label>
								<input type="text" placeholder="Username" class="form-control mb">
								@if ($errors->has('email'))
									 <span class="help-block">
										  <strong>{{ $errors->first('email') }}</strong>
									 </span>
								@endif

								<label for="" class="text-uppercase text-sm">Masukkan Kata Sandi</label>
								<input type="password" placeholder="Kata Sandi" class="form-control mb">
								@if ($errors->has('password'))
									 <span class="help-block">
										  <strong>{{ $errors->first('password') }}</strong>
									 </span>
								@endif

								<!-- <div class="checkbox checkbox-circle checkbox-info">
									<input id="checkbox7" type="checkbox" checked>
									<label for="checkbox7">
										Keep me signed in
									</label>
								</div> -->

								<button class="btn btn-danger btn-block" type="submit">MASUK</button>

							</form>
						</div>
					</div>
					<!-- <div class="text-center text-light">
						<a href="#" class="text-light">Forgot password?</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
