<!DOCTYPE html>
<html lang="en">

    <head>
        @include('css.css')
    </head>

    <body>

        <!-- Spinner Start -->
        @include('spinner.spinner')
        <!-- Spinner End -->

        <!-- Topbar Start -->
        {{-- @include('topbar.topbar') --}}
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
           <!-- navbar Start -->
           @include('navbar.navbar')
           <!-- navbar End -->

            <!-- Header Start -->
            <div class="container-fluid bg-breadcrumb">
                <div class="container text-center py-5" style="max-width: 900px;">
                    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimonial</h4>
                    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-primary">Testimonial</li>
                    </ol>
                </div>
            </div>
            <!-- Header End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Testimonial Start -->
          <section id="testimonial">
          @include('testimonial.testimonial')
          </section>
        <!-- Testimonial End -->

         <!-- Footer Start -->
         @include('footer.footer')
         <!-- Footer End -->

         <!-- Copyright Start -->
         @include('copyright.copyright')
         <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        @include('script.script')
    </body>

</html>
