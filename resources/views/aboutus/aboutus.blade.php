<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-7 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Us</h4>
                    @foreach($entries as $entry)
                    <h1 class="display-5 mb-4">{{ $entry->slogan }}</h1>
                    <p class="mb-4">{{ $entry->description }}</p>
                    @endforeach
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="fas fa-lightbulb fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Business Consulting</h4>
                                    <p>Digital Transformation Strategy: We analyze your business processes and design a roadmap for digital transformation to drive growth.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="d-flex">
                                <div><i class="bi bi-bookmark-heart-fill fa-3x text-primary"></i></div>
                                <div class="ms-4">
                                    <h4>Year Of Expertise</h4>
                                    <p>With a solid foundation built on years of industry expertise, Refined Automations stands as a reliable partner in transforming businesses through innovative technology.</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-sm-6">
                            <a href="#" class="btn btn-primary rounded-pill py-3 px-5 flex-shrink-0">Discover Now</a>
                        </div> --}}
                        <div class="col-sm-6">
                            <div class="d-flex">
                                <i class="fas fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Call Us</h4>
                                    @foreach($contacts as $contact)
                                    <p class="mb-0 fs-5" style="letter-spacing: 1px;">{{ $contact->phone}}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 wow fadeInRight" data-wow-delay="0.2s">
                <div class="bg-primary rounded position-relative overflow-hidden">
                    <img src="img/Cortical.jpg" class="img-fluid rounded w-100" alt="">

                    <div class="" style="position: absolute; top: -15px; right: -15px;">
                        <img src="img/Cortical.jpg" class="img-fluid" style="width: 150px; height: 150px; opacity: 0.7;" alt="">
                    </div>
                    <div class="" style="position: absolute; top: -20px; left: 10px; transform: rotate(90deg);">
                        <img src="img/Cortical.jpg" class="img-fluid" style="width: 100px; height: 150px; opacity: 0.9;" alt="">
                    </div>
                    <div class="rounded-bottom">
                        <img src="img/th.jpeg" class="img-fluid rounded-bottom w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
