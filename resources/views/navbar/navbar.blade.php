<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="" class="navbar-brand p-0">
        <h1 class="text-primary"><i class="fas fa-search-dollar me-3"></i>Refined Automation </h1>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{ route('home.index') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about.index') }}" class="nav-item nav-link">About</a>
            <a href="{{ route('service.index') }}" class="nav-item nav-link">Services</a>
            <a href="{{ route('features.index') }}" class="nav-item nav-link">Features</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link" data-bs-toggle="dropdown">
                    <span class="dropdown-toggle">Pages</span>
                </a>
                <div class="dropdown-menu m-0">
                    {{-- <a href="{{ route('blog.index') }}" class="dropdown-item">Blogs</a> --}}
                    {{-- <a href="{{ route('team.index') }}" class="dropdown-item">Our team</a> --}}
                    {{-- <a href="{{ route('testimonial.index') }}" class="dropdown-item">Testimonial</a> --}}
                    {{-- <a href="{{ route('offer.index') }}" class="dropdown-item">Our offer</a> --}}
                    <a href="{{ route('faqs.index') }}" class="dropdown-item">FAQs</a>
                    {{-- <a href="404.html" class="dropdown-item">404 Page</a> --}}
                </div>
            </div>
            <a href="{{ route('contact.index') }}" class="nav-item nav-link">Contact Us</a>
        </div>
        {{-- <a href="{{ route('started.index') }}" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Get Started</a> --}}
    </div>
</nav>
