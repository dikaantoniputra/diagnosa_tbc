
<!DOCTYPE html>
<html lang="en">
    <head>
      @stack('before-style')
      @include('include.head')
      @stack('after-style')
    </head>

    <!-- body start -->
    <body onload="info_noti()">

        <!-- Begin page -->
        <div class="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            @include('include.leftsidebar')
            <!-- Left Sidebar End -->

            <!-- Topbar Start -->
              @include('include.navbar')
            <!-- end Topbar -->

            

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="page-wrapper">
              <div class="page-content">

                  @yield('content')

                </div> <!-- content -->

                
            </div>

            


      


        <div class="overlay toggle-icon"></div>
		     <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

         @include('include.footer')

        </div>
        <!-- END wrapper -->
	
        
        @stack('before-script')
          @include('include.script')
        @stack('after-script')


        @yield('third-party-js')

        <!-- init js-->
        @yield('init-js')
    </body>
</html>