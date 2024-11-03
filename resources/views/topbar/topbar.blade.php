<div class="container-fluid topbar bg-light px-5 d-none d-lg-block">
    <div class="row gx-0 align-items-center">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-flex flex-wrap">
                @foreach($contacts as $contact)
                <a href="#" class="text-muted small me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>{{ $contact->location}}</a>
                <a href="tel:+01234567890" class="text-muted small me-4"><i class="fas fa-phone-alt text-primary me-2"></i>{{ $contact->phone}}</a>
                <a href="mailto:example@gmail.com" class="text-muted small me-0"><i class="fas fa-envelope text-primary me-2"></i>{{ $contact->email}}</a>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="{{ route('register') }}"><small class="me-3 text-dark"><i class="fa fa-user text-primary me-2"></i>Register</small></a>
                <a href="{{ route('login') }}"><small class="me-3 text-dark"><i class="fa fa-sign-in-alt text-primary me-2"></i>Login</small></a>
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fa fa-home text-primary me-2"></i> My Dashboard</small></a>
                    <div class="dropdown-menu rounded">
                        <a href="{{ route('profile.edit') }}" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> My Profile</a>
                        {{-- <a href="#" class="dropdown-item"><i class="fas fa-comment-alt me-2"></i> Inbox</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Account Settings</a> --}}

                    <form method="POST" action="{{ route('logout') }}">
                    @csrf
                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Log Out</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
