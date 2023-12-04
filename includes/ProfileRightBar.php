<!-- Right sidebar START -->
<div class="col-lg-4">

    <div class="row g-4">

        <!-- Card START -->
        <div class="col-md-6 col-lg-12">
            <div class="card rounded">
                <div class="card-header border-0 pb-0">
                    <h5 class="card-title">About</h5>
                    <!-- Button modal -->
                </div>
                <!-- Card body START -->
                <div class="card-body position-relative pt-0">
                    <p><?= $user_bio; ?></p>
                    <!-- Date time -->
                    <ul class="list-unstyled mt-3 mb-0">
                        <li class="mb-2"> <i class="bi bi-calendar-date fa-fw pe-1"></i> Born: <strong> October 20, 1990 </strong> </li>
                        <!-- <li class="mb-2"> <i class="bi bi-heart fa-fw pe-1"></i> Status: <strong> Single </strong> </li> -->
                        <li> <i class="bi bi-envelope fa-fw pe-1"></i> Email: <strong> <?= $user_email; ?> </strong> </li>
                    </ul>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Card END -->


        <!-- Card START -->
        <div class="col-md-6 col-lg-12">
            <div class="card rounded">
                <!-- Card header START -->
                <div class="card-header d-sm-flex justify-content-between align-items-end border-0">
                    <h5 class="card-title">Saved Posts <span class="badge bg-primary bg-opacity-10 text-primary">02</span></h5>
                    <!-- <a class="btn btn-primary-soft btn-sm" href="#!"> See all friends</a> -->
                </div>
                <!-- Card header END -->
                <!-- Card body START -->
                <div class="card-body position-relative">

                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">

                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../../assets/img/chatbg.jpg" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                            </div>

                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../../assets/img/chatbg2.jpg" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="../../assets/img/chatbg7.jpg" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <br>
                    
                    <div id="carouselExampleDark2" class="carousel carousel-dark slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">

                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="../../assets/img/chatbg.jpg" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                            </div>

                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="../../assets/img/chatbg2.jpg" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                            </div>

                            <div class="carousel-item">
                                <img src="../../assets/img/chatbg7.jpg" style="width: 100%; height: 150px; object-fit: cover;" alt="">
                            </div>
                            
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Card END -->
    </div>

</div>
<!-- Right sidebar END -->