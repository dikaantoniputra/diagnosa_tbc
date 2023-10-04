@extends('layout.app')

@section('title')
    Diagnosa TBC
@endsection


@section('content')



			
			<!-- ============================ Hero Banner  Start================================== -->
			<div class="hero-header theme-bg-light">
				<div class="container">
					<div class="row gx-xl-3 gx-lg-2 align-items-center">
						<div class="col-xl-6 col-lg-7 col-md-12 col-sm-12">
							<h3 class="m-0 px-1 py-2 text-success ">Bimbingan Belajar  </h3>
							<h1 class="mb-4">Entina Smart<br>Yogyakarta</h1>
							
							
						
						</div>
						<div class="col-xl-6 col-lg-5 col-md-12 col-sm-12">
							<div class="hero-side-thumb">
								<figure>
									<img src="{{ asset('') }}giganusa/img/side-banner.png" class="img-fluid" alt="">
								</figure>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ============================ Hero Banner End ================================== -->
			
			<!-- ============================ Our Partners Start ================================== -->
			<section class="min">
				<div class="container">
					
					<div class="row justify-content-center mb-2">
						<div class="col-xl-4 col-lg-7 col-md-10 text-center">
							<div class="center mb-4">
								<h5 class="font--medium lh-lg">Bimbingan belajar Entina Smart  edukasi bagi siswa  <span class="theme-cl">SD</span> SMP</h5>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</section>


			<div class="clearfix"></div>

		
			
@endsection


@push('after-script')


<!-- Plugins js -->

<script src="{{ asset('') }}assets/libs/quill/quill.min.js"></script>

<!-- Init js-->
<script src="{{ asset('') }}assets/js/pages/form-quilljs.init.js"></script>

<script>

  </script>
@endpush


