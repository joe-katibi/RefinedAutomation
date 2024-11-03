<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-0 gx-5">
                    <div class="col-lg-0 col-xl-5"></div>
                    <div class="col-xl-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-end">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Refined Automation </h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">Precision in Every Process</h1>
                            <p class="mb-5 fs-5">
                                At Refined Automations, we specialize in transforming ideas into streamlined, powerful digital solutions. Our commitment to precision ensures that every project, from website development to automation and consulting, is crafted with attention to detail and optimized for efficiency. Leveraging advanced technologies, we help businesses evolve, improve productivity, and achieve sustainable growth.
                            </p>

                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                {{-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> --}}
                                {{-- <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a> --}}
                            </div>
                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    @foreach($contacts as $contact)
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="{{ $contact->facebook }}"><i class="fab fa-facebook-f text-white"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="{{ $contact->twitter }}"><i class="fab fa-twitter text-white"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="{{ $contact->instagram }}"><i class="fab fa-instagram text-white"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="{{ $contact->linkedin }}"><i class="fab fa-linkedin-in text-white"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-5">
                    <div class="col-12 animated fadeInUp">
                        <div class="text-center">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To Refined Automation </h4>
                            <h1 class="display-4 text-uppercase text-white mb-4">Precision in Every Process</h1>
                            <p class="mb-5 fs-5">
                                At Refined Automations, we specialize in transforming ideas into streamlined, powerful digital solutions. Our commitment to precision ensures that every project, from website development to automation and consulting, is crafted with attention to detail and optimized for efficiency. Leveraging advanced technologies, we help businesses evolve, improve productivity, and achieve sustainable growth.
                            </p>

                            <div class="d-flex justify-content-center flex-shrink-0 mb-4">
                                {{-- <a class="btn btn-light rounded-pill py-3 px-4 px-md-5 me-2" href="#"><i class="fas fa-play-circle me-2"></i> Watch Video</a> --}}
                                {{-- <a class="btn btn-primary rounded-pill py-3 px-4 px-md-5 ms-2" href="#">Learn More</a> --}}
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="text-white me-2">Follow Us:</h2>
                                <div class="d-flex justify-content-end ms-2">
                                    <a class="btn btn-md-square btn-light rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-md-square btn-light rounded-circle ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
