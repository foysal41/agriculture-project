    <!--------------  product Section---------------->
    <section class="container product py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-primary text-center fs1 fw-bold mb-3">Key Porducts</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <ul class="nav nav-tabs justify-content-center mt-3 g-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active fs-5 me-2 me-md-4" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">All</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link fs-5 me-2 me-md-4" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Vr Sets</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link fs-5 me-2 me-md-4" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row mt-4 g-4">
                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('assets/headphones-1.webp')}}" class="img-fluid mx-auto d-block" alt="">
                            </div>

                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('assets/vr-1.webp')}}" class="img-fluid mx-auto d-block" alt="">
                            </div>

                            <div class="col-12 col-lg-4">
                                <img src="{{ asset('assets/vr-2.webp')}} " class="img-fluid mx-auto d-block" alt="">
                            </div>
                        </div>
                   </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="row mt-4 g-4">
                            <div class="col-12 col-lg-4">
                                <img src="assets/headphones-1.webp" class="img-fluid mx-auto d-block" alt="">
                            </div>

                            <div class="col-12 col-lg-4">
                                <img src="assets/vr-1.webp" class="img-fluid mx-auto d-block" alt="">
                            </div>

                            <div class="col-12 col-lg-4">
                                <img src="assets/img-1.webp" class="img-fluid mx-auto d-block" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="row mt-4 g-4">
                            <div class="col-12 col-lg-4">
                                <img src="assets/headphones-1.webp" class="img-fluid mx-auto d-block" alt="">
                            </div>

                        
                        </div>
                    </div>
                  </div>
            </div>
        </div>
     </section>