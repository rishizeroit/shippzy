@extends('web.app.layout')
@section('title', 'Login')
@section('content')
<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Login</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul> 
							<li><a href="#" title="Home">Home</a></li>
							<li>Login</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- //Page info -->
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content one-half modal">
					<!--Login-->
					<div class="box">
						@if (session('message'))
							<div class="alert alert-{{session('alert-class')}}" role="alert">
								{!! session('message') !!}
							</div>
						@endif
						<form id="customer_login" action="{{route('authenticate.login')}}" method="post">
						@method('POST')
						  @csrf
						  <div class="f-row">
								<div class="full-width">
									<h3 id="error"></h3>
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									<label for="username">Your username</label>
									<input type="email" name="email" id="username">
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									<label for="password">Your password</label>
									<input type="password" name="password" id="password">
								</div>
							</div>
							<div class="f-row">
								<div class="full-width check">
									<div class="checker" id="uniform-checkbox"><span><input type="checkbox" id="checkbox"></span></div>
									<label for="checkbox">Remember me next time</label>
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									<button type="submit" value="Login" class="btn color medium full">Submit</button>
								</div>
							</div>
							
							<p><a href="#">Forgotten password?</a><br>Dont have an account yet? <a href="{{route('customer.register')}}">Sign up</a>.</p>
						</form>
					</div>
					<!--//Login-->
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>

@endsection
@push('scripts')
<script src="{{base_url('js/front/customer.js')}}"></script>
@endpush