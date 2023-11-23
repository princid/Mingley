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
                    <h5 class="card-title">Followers <span class="badge bg-danger bg-opacity-10 text-danger">230</span></h5>
                    <a class="btn btn-primary-soft btn-sm" href="#!"> See all friends</a>
                </div>
                <!-- Card header END -->
                <!-- Card body START -->
                <div class="card-body position-relative">
                    <div class="row g-3">

                        <div class="col-6">
                            <!-- Friends item START -->
                            <div class="card text-center h-100 myFriend">
                                <!-- Card body -->
                                <div class="card-body p-2 pb-0">
                                    <div class="avatar avatar-story avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                    </div>
                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Prince Rajpoot </a></h6>
                                    <p class="mb-0 small lh-sm">16 mutual connections</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer p-2 border-0 profile_friend">

                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                        <i class="bi bi-chat-left-text"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                    </button>

                                </div>
                            </div>
                            <!-- Friends item END -->
                        </div>

                        <div class="col-6">
                            <!-- Friends item START -->
                            <div class="card text-center h-100">
                                <!-- Card body -->
                                <div class="card-body p-2 pb-0">
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                    </div>
                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Prince Rajpoot </a></h6>
                                    <p class="mb-0 small lh-sm">22 mutual connections</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer p-2 border-0 profile_friend">

                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                        <i class="bi bi-chat-left-text"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                    </button>

                                </div>
                            </div>
                            <!-- Friends item END -->
                        </div>

                        <div class="col-6">
                            <!-- Friends item START -->
                            <div class="card text-center h-100">
                                <!-- Card body -->
                                <div class="card-body p-2 pb-0">
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                    </div>
                                    <h6 class="card-title mb-1 mt-3"> <a href="#"> Prince Rajpoot </a></h6>
                                    <p class="mb-0 small lh-sm">1 mutual connection</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer p-2 border-0 profile_friend">

                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                        <i class="bi bi-chat-left-text"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                    </button>

                                </div>
                            </div>
                            <!-- Friends item END -->
                        </div>

                        <div class="col-6">
                            <!-- Friends item START -->
                            <div class="card text-center h-100">
                                <!-- Card body -->
                                <div class="card-body p-2 pb-0">
                                    <div class="avatar avatar-xl">
                                        <a href="#!"><img class="avatar-img rounded-circle" src="../../assets/img/profile6.jpg" alt=""></a>
                                    </div>
                                    <h6 class="card-title mb-1 mt-3"> <a href="#!"> Prince Rajpoot </a></h6>
                                    <p class="mb-0 small lh-sm">15 mutual connections</p>
                                </div>
                                <!-- Card footer -->
                                <div class="card-footer p-2 border-0 profile_friend">
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Send message" data-bs-original-title="Send message">
                                        <i class="bi bi-chat-left-text"></i>
                                    </button>

                                    <button class="btn btn-sm btn-danger remove_friend" data-bs-toggle=" tooltip" data-bs-placement="top" aria-label="Remove friend" data-bs-original-title="Remove friend">
                                        <i class="fa-solid fa-user-xmark" style="color: #ffffff;"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Friends item END -->
                        </div>

                    </div>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Card END -->
    </div>

</div>
<!-- Right sidebar END -->