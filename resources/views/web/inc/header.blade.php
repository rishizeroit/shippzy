		<!-- Preloader -->
		<div class="preloader">
			<div id="followingBallsG">
				<div id="followingBallsG_1" class="followingBallsG"></div>
				<div id="followingBallsG_2" class="followingBallsG"></div>
				<div id="followingBallsG_3" class="followingBallsG"></div>
				<div id="followingBallsG_4" class="followingBallsG"></div>
			</div>
		</div>
		<!-- //Preloader -->
		
		<!-- Header -->
		<header class="header" role="banner">
			<div class="wrap">
				<!-- Logo -->
				<div class="logo">
					<a href="/" title="Transfers"><img src="{{base_url('web/images/logo.png')}}" alt="Transfers" /></a>
				</div>
				<!-- //Logo -->
				
					<div class="form-header">
						<input type="text" name="Search" value="Search">
						<button type="button" class="icon-btn">icon</button>
					</div>


				<!-- Main Nav -->
				<nav role="navigation" class="main-nav">

					<ul>
						<li class="active"><a href="/" title="">GET QUOTES</a></li>
						<li><a href="#" title="">FREIGHT SERVICES </a></li>
						<!-- <li><a href="#" title=""> LEARN </a></li> -->
						@if(Auth::check()) 
						<li><a href="#" title="">{{ucfirst(Auth::user()->name)}}</a>
							<ul>
								<li><a href="/logout" title="Post">Logout</a></li>
								<li><a href="#" title="Post">Blog</a></li>

							</li>
						@else
						<li><a href="#" title="">Account</a>
							<ul>
								<li><a href="/login" title="Post">Login</a></li>
								<li><a href="#" title="Post">Blog</a></li>
							</ul>
						</li>
						@endif
						<!-- @if(Auth::check()) 
						<li><a href="#" title="">{{ucfirst(Auth::user()->name)}}</a>
							<ul>
								<li><a href="/login" title="Post">Login</a></li>
								<li><a href="#" title="Post">Blog</a></li>
							</ul>
						</li>
						@endif -->


					</ul>
				</nav>
				<!-- //Main Nav -->
			</div>
		</header>
		<!-- //Header -->