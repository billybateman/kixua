
    <div class="container-fluid">
        <h4 class="mb-0">Default</h4>
        <p class="lead">A clever description for the page you're on.</p>

        <div class="breadcrumb__area">
            <div class="breadcrumb__wrapper mb-25">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Default</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-7">
                <div class="card__wrapper height-equal" style="min-height: 396px;">
                    <div class="employee__profile-single-box p-relative">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                            <h5 class="card__heading-title">Personal Information</h5>
                            <a data-bs-target="#profile__info" data-bs-toggle="modal" class="edit-icon" href="#">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div class="profile-view d-flex flex-wrap justify-content-between align-items-start">
                            <div class="d-flex flex-wrap align-items-start gap-20">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img src="assets/images/avatar/avatar1.png" alt="User Image"></a>
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <h3 class="users_name mb-15"><?php echo $data['column_name']; ?></h3>
                                    <h6 class="text-muted mb-5"><?php echo $data['column_name']; ?></h6>
                                    <span class="d-block text-muted mb-5"><?php echo $data['column_name']; ?></span>
                                    <h6 class="small employee-id text-black mb-5">Employee ID : <?php echo $data['column_name']; ?></h6>
                                    <span class="d-block text-muted mb-20">Date of Join : <?php echo $data['column_name']; ?></span>
                                    <div class="employee-msg"><a class="btn btn-primary" href="#">Send Message</a></div>
                                </div>
                            </div>
                            <div class="personal-info-wrapper pr-20">
                                <ul class="personal-info">
                                    <li>
                                        <div class="title">Phone:</div>
                                        <div class="text text-link-hover"><a href="tel:+18006427676"> <?php echo $data['column_name']; ?></a></div>
                                    </li>
                                    <li>
                                        <div class="title">Email:</div>
                                        <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></span></a></div>
                                    </li>
                                    <li>
                                        <div class="title">Birthday:</div>
                                        <div class="text"><?php echo $data['column_name']; ?></div>
                                    </li>
                                    <li>
                                        <div class="title">Address:</div>
                                        <div class="text"><?php echo $data['column_name']; ?></div>
                                    </li>
                                    <li>
                                        <div class="title">Gender:</div>
                                        <div class="text"><?php echo $data['column_name']; ?></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-5">
                <div class="card__wrapper height-equal" style="min-height: 396px;">
                    <div class="employee__profile-single-box p-relative">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                            <h5 class="card__heading-title">Emergency Contact</h5>
                            <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#emergency_contact_modal">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="emergency-contact">
                                    <h6 class="card__sub-title mb-10">Primary Contact</h6>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Name:</div>
                                            <div class="text"><?php echo $data['column_name']; ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Relationship:</div>
                                            <div class="text"><?php echo $data['column_name']; ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text text-link-hover"><a href="tel:9876543210">9876543210</a>, <a href="tel:9876543210">9876543210</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></a></div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text"><?php echo $data['column_name']; ?></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="emergency-contact">
                                    <h6 class="card__sub-title mb-10">Secondary Contact</h6>
                                    <ul class="personal-info">
                                        <li>
                                            <div class="title">Name:</div>
                                            <div class="text"><?php echo $data['column_name']; ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Relationship:</div>
                                            <div class="text"><?php echo $data['column_name']; ?></div>
                                        </li>
                                        <li>
                                            <div class="title">Phone:</div>
                                            <div class="text text-link-hover"><a href="tel:<?php echo $data['column_name']; ?>"><?php echo $data['column_name']; ?></a>, <a href="tel:9876543211">9876543211</a></div>
                                        </li>
                                        <li>
                                            <div class="title">Email:</div>
                                            <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></span></a></div>
                                        </li>
                                        <li>
                                            <div class="title">Address:</div>
                                            <div class="text"><?php echo $data['column_name']; ?></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card__wrapper">
                    <div class="employee__profile-single-box p-relative">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                            <h5 class="card__heading-title">Education Qualification</h5>
                            <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#education__info">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div class="education__box">
                            <ul class="education__list">
                                <li>
                                    <div class="education__user">
                                        <div class="before__circle"></div>
                                    </div>
                                    <div class="education__content">
                                        <div class="timeline-content">
                                            <a href="#" class="name"><?php echo $data['column_name']; ?></a>
                                            <span class="degree"><?php echo $data['column_name']; ?></span>
                                            <span class="year"><?php echo $data['column_name']; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="education__user">
                                        <div class="before__circle"></div>
                                    </div>
                                    <div class="education__content">
                                        <div class="timeline-content">
                                            <a href="#" class="name"><?php echo $data['column_name']; ?></a>
                                            <span class="degree"><?php echo $data['column_name']; ?></span>
                                            <span class="year"><?php echo $data['column_name']; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="education__user">
                                        <div class="before__circle"></div>
                                    </div>
                                    <div class="education__content">
                                        <div class="timeline-content">
                                            <a href="#" class="name"><?php echo $data['column_name']; ?></a>
                                            <span class="degree"><?php echo $data['column_name']; ?></span>
                                            <span class="year"><?php echo $data['column_name']; ?></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card__wrapper">
                    <div class="employee__profile-single-box p-relative">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                            <h5 class="card__heading-title">Experience Details</h5>
                            <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#experience__info">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div class="education__box">
                            <ul class="education__list">
                                <li>
                                    <div class="education__user">
                                        <div class="before__circle"></div>
                                    </div>
                                    <div class="education__content">
                                        <div class="timeline-content">
                                            <a href="#" class="name"><?php echo $data['column_name']; ?></a>
                                            <span class="degree"><?php echo $data['column_name']; ?></span>
                                            <span class="year"><?php echo $data['column_name']; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="education__user">
                                        <div class="before__circle"></div>
                                    </div>
                                    <div class="education__content">
                                        <div class="timeline-content">
                                            <a href="#" class="name"><?php echo $data['column_name']; ?></a>
                                            <span class="degree"><?php echo $data['column_name']; ?></span>
                                            <span class="year"><?php echo $data['column_name']; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="education__user">
                                        <div class="before__circle"></div>
                                    </div>
                                    <div class="education__content">
                                        <div class="timeline-content">
                                            <a href="#" class="name"><?php echo $data['column_name']; ?></a>
                                            <span class="degree"><?php echo $data['column_name']; ?></span>
                                            <span class="year"><?php echo $data['column_name']; ?></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card__wrapper">
                    <div class="employee__profile-single-box p-relative">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                            <h5 class="card__heading-title">Bank Account</h5>
                            <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#bank__account__info">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div class="personal-info-wrapper bank__account">
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Account Holder Name:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">Account Number:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">Bank Name:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">Branch Name:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">SWIFT Code:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card__wrapper">
                    <div class="employee__profile-single-box p-relative">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                            <h5 class="card__heading-title">Passport Information</h5>
                            <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#passport__info">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div class="personal-info-wrapper bank__account">
                            <ul class="personal-info">
                                <li>
                                    <div class="title">Passport Number:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">Nationality:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">Issue Date:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">Expiry Date:</div>
                                    <div class="text"><?php echo $data['column_name']; ?></div>
                                </li>
                                <li>
                                    <div class="title">Scan Copy:</div>
                                    <div class="text"><a href="#"><?php echo $data['column_name']; ?></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4">
                <div class="card__wrapper">
                    <div class="employee__profile-single-box p-relative">
                        <div class="card__title-wrap d-flex align-items-center justify-content-between mb-15">
                            <h5 class="card__heading-title">Social Profile</h5>
                            <a href="#" class="edit-icon" data-bs-toggle="modal" data-bs-target="#social__info">
                                <i class="fa-solid fa-pencil"></i>
                            </a>
                        </div>
                        <div class="personal-info-wrapper bank__account">
                            <ul class="personal-info">
                                <li>
                                    <div class="title">LinkedIn:</div>
                                    <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></a></div>
                                </li>
                                <li>
                                    <div class="title">Twitter:</div>
                                    <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></a></div>
                                </li>
                                <li>
                                    <div class="title">Facebook:</div>
                                    <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></a></div>
                                </li>
                                <li>
                                    <div class="title">Instagram:</div>
                                    <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></a></div>
                                </li>
                                <li>
                                    <div class="title">WhatsApp:</div>
                                    <div class="text text-link-hover"><a href="#"><?php echo $data['column_name']; ?></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
