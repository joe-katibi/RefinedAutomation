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
        @include('topbar.topbar')
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <section id="navbar-hero">
        @include('home.navbarhero')
        </section>
        <!-- Navbar & Hero End -->

        <!-- About Us Start -->
        <section id="about-us">
            @include('aboutus.aboutus')
        </section>
        <!-- About Us End -->

        <!-- Services Start -->
        <section id="services">
            @include('our-services.services')
        </section>
        <!-- Services End -->

        <!-- Features Start -->
        <section id="features">
            @include('features.features')
        </section>
        <!-- Features End -->

        <!-- Offer Start -->
        <section id="offer">
            @include('offer.offer')
        </section>
        <!-- Offer End -->

        <!-- Blog Start -->
        <section id="blog">
            @include('blog.blog')
        </section>
        <!-- Blog End -->

        <!-- FAQs Start -->
        <section id="faqs">
            @include('faqs.faqs')
        </section>
        <!-- FAQs End -->

        <!-- Team Start -->
        <section id="team">
             @include('team.team')
        </section>
        <!-- Team End -->

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
