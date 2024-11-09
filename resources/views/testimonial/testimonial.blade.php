<div class="container-fluid testimonial pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Testimonial</h4>
            @foreach($testimonials as $testimonial)
            <h1 class="display-5 mb-4">{{ $testimonial->slogan}}</h1>
            <p class="mb-0">{{ $testimonial->description}}
            </p>
            @endforeach
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/person-vector-1.jpg" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">"Refined Automations transformed our business processes seamlessly. Their expertise in automation saved us countless hours and resources!"
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Johnson Makuam</h4>
                        <p class="mb-0">Operations Manager</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/person-vector-2.jpg" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">"Their web-based solutions brought our systems to life. The team delivered a custom platform that perfectly met our needs!"
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Alice Wahama</h4>
                        <p class="mb-0">Project Coordinator</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/person-vector-1.jpg" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">"Refined Automations truly understood our vision and built an API integration that streamlined our entire workflow. Fantastic work!"
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">Peter Herman</h4>
                        <p class="mb-0">IT Director</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-quote-left">
                    <i class="fas fa-quote-left fa-2x"></i>
                </div>
                <div class="testimonial-img">
                    <img src="img/person-vector-1.jpg" class="img-fluid" alt="Image">
                </div>
                <div class="testimonial-text">
                    <p class="mb-0">"Their consulting services helped us identify bottlenecks and create a clear digital strategy that boosted our productivity. Highly recommend!"
                    </p>
                </div>
                <div class="testimonial-title">
                    <div>
                        <h4 class="mb-0">David Thompson</h4>
                        <p class="mb-0">Business Consultant</p>
                    </div>
                    <div class="d-flex text-primary">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="testimonial-quote-right">
                    <i class="fas fa-quote-right fa-2x"></i>
                </div>
            </div>
        </div>
    </div>
</div>
