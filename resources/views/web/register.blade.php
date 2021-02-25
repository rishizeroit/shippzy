@extends('web.app.layout')
@section('title', 'Register')
@section('content')
<main class="main" role="main">
		<!-- Page info -->
		<header class="site-title color">
			<div class="wrap">
				<div class="container">
					<h1>Register</h1>
					<nav role="navigation" class="breadcrumbs">
						<ul>
							<li><a href="index.html" title="Home">Home</a></li>
							<li>Register</li>
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
					<form id="customer_add" action="{{route('customer.register')}}" method="post">
						@csrf
						@method('POST')
							<div class="f-row">
								<div class="full-width">
									<label for="name">Your name and surname</label>
									<input type="text" name="name" value="{{ old('name') }}" id="name">
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									<label for="email">Your email address</label>
									<input type="email" name="email" value="{{ old('email') }}" id="email">
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									<label for="password">Your password</label>
									<input type="password" name="password" id="password">
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									<label for="password2">Repeat password</label>
									<input type="password" name="password_confirmation" id="password2">
								</div>
							</div>
							<div class="f-row">
								<div class="full-width check">
									<div class="checker" id="uniform-checkbox"><span><input type="checkbox" id="checkbox" required></span></div>
									<label for="checkbox">I agree with terms and conditions.</label>
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									<button type="submit" value="Create an account" class="btn color medium full">Submit</button>
								</div>
							</div>
							
							<p>Already have an account? <a href="login.html">Login</a>.</p>
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