@php
$isIndexPage = request()->is('index') || request()->is('/');
$headerClass = $isIndexPage ? 'header-transparent dark' : 'header-light';
@endphp


    <div class="header {{ $headerClass }}">
				<div class="container">
					<nav id="navigation" class="navigation navigation-potraitd">
						<div class="nav-header">
							<a class="nav-brand" href="{{ url('/') }}">
								<img src="{{ asset('') }}giganusa/img/logo.png" class="logo" alt="">
							</a>
							<div class="nav-toggle"></div>
							<div class="mobile_nav">
								<ul>
									<li class="list-buttons">
										<a href="JavaScript:Void(0);" data-bs-toggle="modal" data-bs-target="#login"><i class="fas fa-sign-in-alt me-2"></i>Log In</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="nav-menus-wrapper" style="transition-property: none;">
							<ul class="nav-menu">
							
								<li class="active"><a href="{{ url('/') }}">Home<span class="submenu-indicator"></span></a>
									
								</li>
								
								
								
{{-- 			
								<li><a href="{{ url('/about') }}">About Us<span class="submenu-indicator"></span></a>
								</li>
								<li><a href="{{ url('/contact') }}">Contacts<span class="submenu-indicator"></span></a>
								</li>
								<li><a href="{{ url('/faqs') }}">FAQ's<span class="submenu-indicator"></span></a>
								</li> --}}
						
								
							</ul>
							
							<ul class="nav-menu nav-menu-social align-to-right">

								
								<li class="list-buttons ms-2">
									<a href="{{ url('login') }}"><i class="fa-solid fa-cloud-arrow-up me-2"></i>Login</a>
								</li>
						
							
							
								
							</ul>
						</div>
					</nav>
				</div>
			</div>


			<div class="clearfix"></div>