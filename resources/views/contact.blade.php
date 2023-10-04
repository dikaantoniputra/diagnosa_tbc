@extends('layout.app')

@section('title')
    Kontak Kami
@endsection

@section('content')

<!-- ============================ Page Title Start================================== -->
<section class="bg-cover" style="background:#016551 url({{ asset('') }}giganusa/img/bg2.png)no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <h2 class="ipt-title text-light">Get In touch</h2>
                <span class="text-light opacity-75">Get all latest news and updates</span>
                
            </div>
        </div>
    </div>
</section>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Contact Start ================================== -->
<section>

    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-10 text-center">
                <div class="sec-heading center">
                    <label class="label text-success bg-light-success">Grow Your Business</label>
                    <h2>Activate Next Now</h2>
                    <p>Please fill the form and we will guide you to the best solution. Our experts will get in touch soon.</p>
                </div>
            </div>
        </div>
    
        <!-- row Start -->
        <div class="row align-items-center justify-content-center">
        
            <div class="col-lg-10 col-md-12">
                
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control simple">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control simple">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" class="form-control simple">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                            <label>Phone.</label>
                            <input type="text" class="form-control simple">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control simple"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit Request</button>
                        </div>
                    </div>
                </div>				
            </div>		
            
        </div>
        <!-- /row -->

  				
        
    </div>
            
</section>

<!-- ============================ Call To Action End ================================== -->
@endsection



