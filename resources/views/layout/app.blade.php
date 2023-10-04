<!doctype html>
<html lang="en">

<head>
	<title>@yield('title')</title>
    @include('includelanding.meta')

    @stack('before-style')
    @include('includelanding.style')
    @stack('after-style')
</head>

<body>

        <div id="preloader"><div class="preloader"><span></span><span></span></div></div>

        <div id="main-wrapper">

        @include('includelanding.navbar')
                    @yield('content')    
        @include('includelanding.footer')

        
        <!-- Log In Modal -->
			<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginmodal" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
					<div class="modal-content" id="loginmodal">
						<span class="mod-close" data-bs-dismiss="modal" aria-hidden="true"><i class="fas fa-close"></i></span>
						<div class="modal-header">
							<div class="mdl-thumb"><img src="{{ asset('') }}giganusa/img/ico.png" class="img-fluid" width="70" alt=""></div>
							<div class="mdl-title"><h4 class="modal-header-title">Login</h4></div>
						</div>
						<div class="modal-body">
							<div class="modal-login-form">
								<form class="signin-form" action="/login" method="POST">
									@csrf
									<div class="form-floating mb-4">
										<input type="email" class="form-control" placeholder="name@example.com" name="email">
										<label>Email</label>
									</div>
									
									<div class="form-floating mb-4">
										<input type="password" class="form-control" placeholder="Password" name="password">
										<label>Password</label>
									</div>
									
									<div class="form-group">
										<button type="submit" class="btn btn-primary full-width font--bold btn-lg">Log In</button>
									</div>
									
									{{-- <div class="modal-flex-item mb-3">
										<div class="modal-flex-first">
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="savepassword" value="option1">
												<label class="form-check-label" for="savepassword">Save Password</label>
											</div>
										</div>
										<div class="modal-flex-last">
											<a href="JavaScript:Void(0);">Forget Password?</a>
										</div>
									</div> --}}
								</form>
							</div>
							{{-- <div class="social-login">
								<ul>
									<li><a href="JavaScript:Void(0);" class="btn connect-fb"><i class="fa-brands fa-facebook"></i>Facebook</a></li>
									<li><a href="JavaScript:Void(0);" class="btn connect-google"><i class="fa-brands fa-google"></i>Google+</a></li>
								</ul>
							</div> --}}
						</div>
						<div class="modal-footer">
							<p>Belum Punya Akun ?<a href="{{ url('/register') }}" class="theme-cl font--bold ms-1">Sign Up</a></p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Modal -->
			
			<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
    
        </div>
       
 
    @stack('before-script')
    @include('includelanding.script')
    @stack('after-script')
	
</body>

</html>
