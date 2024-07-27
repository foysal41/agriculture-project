<div class="container my-5">
    <div class="contact-section text-center">
        <h2>STAY IN TOUCH</h2>
        <p>Let Us Treat Your Loved Ones Like Family</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-6">
            <div class="contact-info">
                <p><i class="bi bi-geo-alt"></i> My Address:<br> Khulna Bangladesh</p>
                <p><i class="bi bi-telephone"></i> Phone Line:<br> (+880) 01701035894</p>
                <p><i class="bi bi-envelope"></i> Email Address:<br> rhniloy07@gmail.com</p>
                <div class="social-icons mt-3">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-twitter"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="contact-form p-4 bg-white border rounded">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                             
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success"></div>
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('contact.submit')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>