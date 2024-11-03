<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            @foreach($contacts as $contact)
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>{{ $contact->name }}</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-body">
                Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">{{ $contact->name }}</a> Distributed By <a class="border-bottom text-white" href="https://refinedautomation.tz">{{ $contact->name }}</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
