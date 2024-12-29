<div class="container-fluid">

    <?php switch ($action): case 'create': ?>
        <!-- Create Subscription Form -->
        <form id="createSubscriptionForm">
            <h4 class="mb-0">Create Subscriptions</h4>
            <p class="lead">Create your subscriptions here.</p>
            <input type="text" id="subscriptionName" placeholder="Subscription Name" required>
            <input type="number" id="subscriptionPrice" placeholder="Subscription Price" required>
            <button type="submit">Create Subscription</button>
        </form>
        <?php break; case 'update': ?>
        <!-- Update Subscription Form -->
        <form id="updateSubscriptionForm">
            <h4 class="mb-0">Update Subscriptions</h4>
            <p class="lead">Update your subscriptions here.</p>
            <input type="text" id="updateSubscriptionId" placeholder="Subscription ID" required>
            <input type="text" id="updateSubscriptionName" placeholder="Subscription Name" required>
            <input type="number" id="updateSubscriptionPrice" placeholder="Subscription Price" required>
            <button type="submit">Update Subscription</button>
        </form>
        <?php break; default: ?>
        <!-- Subscriptions List -->
        <h4 class="mb-0">Subscriptions</h4>
            <p class="lead">Manage your subscriptions here.</p>
        <div id="subscriptionsList">
        <div class="app__slide-wrapper">
                <div class="breadcrumb__area">
                    <div class="breadcrumb__wrapper mb-15">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Subscriptions</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewSubscriber">Add New Subscriber</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-light fa-book"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Subscriptions</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">25+</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-light fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Subscriber</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">313</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-light fa-badge-check"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Complete Subscriptions</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">15</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-light fa-rectangle-terminal"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Upcoming Subscriptions</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">5</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="table__wrapper table-responsive">
                                <div id="dataTableDefualt_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="dataTableDefualt_length"><label>Show <select name="dataTableDefualt_length" aria-controls="dataTableDefualt" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="dataTableDefualt_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dataTableDefualt"></label></div><table class="table mb-20 dataTable no-footer" id="dataTableDefualt" aria-describedby="dataTableDefualt_info">
                                    <thead>
                                        <tr class="table__title table__sort"><th class="no-sort sorting sorting_asc" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                                
                                            : activate to sort column descending" style="width: 13px;">
                                                <input type="checkbox" id="selectall">
                                            </th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 15.7344px;">#</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Subscriptions Title: activate to sort column ascending" style="width: 265.25px;">Subscriptions Title</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Service: activate to sort column ascending" style="width: 145px;">Service</th><th style="width: 90px;" class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Employee: activate to sort column ascending">Employee</th><th style="width: 169.984px;" class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Subscriptions Duration: activate to sort column ascending">Subscriptions Duration</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Time: activate to sort column ascending" style="width: 122.891px;">Time</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Cost: activate to sort column ascending" style="width: 50.8594px;">Cost</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 75px;">Status</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 110px;">Action</th></tr>
                                    </thead>
                                    <tbody class="table__body">
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                    <tr class="odd">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>1</td>
                                            <td>Creating RESTful APIs with PHP</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar16.png" alt="img"><span>Naira
                                                        Muskan</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar1.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar15.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar3.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">15+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Jul 02 2024 - Sep 30 2024</td>
                                            <td>9:00AM - 12:00PM</td>
                                            <td>$299.00</td>
                                            <td><span class="bd-badge bg-warning">Upcoming</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>2</td>
                                            <td>PHP for WordPress Development</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar2.png" alt="img"><span>Rimi
                                                        Islam</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar12.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar15.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar13.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">12+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Oct 25 2024 - Nov 15 2024</td>
                                            <td>2:00PM - 4:00PM</td>
                                            <td>$199.00</td>
                                            <td><span class="bd-badge bg-theme">Open</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>3</td>
                                            <td>Full-Stack Web Development Bootcam</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar4.png" alt="img"><span>Mason
                                                        Rodriguez</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar12.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar13.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar7.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">15+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Jan 05 2024 - Mar 30 2024</td>
                                            <td>11:00AM - 01:00PM</td>
                                            <td>$199.00</td>
                                            <td><span class="bd-badge bg-success">Complete</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>4</td>
                                            <td>Introduction to Cloud Computing with AWS</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar10.png" alt="img"><span>Lily
                                                        Campbell</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar12.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar6.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar2.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">19+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>May 25 2024 - Aug 15 2024</td>
                                            <td>9:00PM - 11:00PM</td>
                                            <td>$199.00</td>
                                            <td><span class="bd-badge bg-theme">Open</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>5</td>
                                            <td>Version Control with Git and GitHub</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar9.png" alt="img"><span>Sophia
                                                        Miller</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><img class="img-36 border-circle" src="assets/images/avatar/avatar9.png" alt="image"></li>
                                                        <li><img class="img-36 border-circle" src="assets/images/avatar/avatar10.png" alt="image">
                                                        </li>
                                                        <li><img class="img-36 border-circle" src="assets/images/avatar/avatar4.png" alt="image"></li>
                                                        <li><span class="avatar-bg">11+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Feb 14 2024 - Dec 15, 2024</td>
                                            <td>7:00PM - 11:00PM</td>
                                            <td>$199.00</td>
                                            <td><span class="bd-badge bg-theme">Open</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>6</td>
                                            <td>Integrating Third-Party APIs with PHP</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar12.png" alt="img"><span>Benjamin
                                                        Hayes</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar9.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar13.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar14.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">9+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Jun 25 2022 - Sep 15 2024</td>
                                            <td>11:00AM - 02:00PM</td>
                                            <td>$99.00</td>
                                            <td><span class="bd-badge bg-theme">Open</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>7</td>
                                            <td>PHP and Laravel Security Best Practices</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar11.png" alt="img"><span>Harper
                                                        Martinez</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar10.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar6.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar9.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">15+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Jan 01 2024 - Dec 31 2024</td>
                                            <td>09:00AM - 01:00PM</td>
                                            <td>$299.00</td>
                                            <td><span class="bd-badge bg-danger">Cancel</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>8</td>
                                            <td>HTML and CSS: The Complete Guide</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar7.png" alt="img"><span>Samuel
                                                        Brown</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar2.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar3.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar7.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">15+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>May 25 2024 - Aug 15 2024</td>
                                            <td>3:30PM - 6:30PM</td>
                                            <td>$59.00</td>
                                            <td><span class="bd-badge bg-success">Complete</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>9</td>
                                            <td>SEO Best Practices with HTML5</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar11.png" alt="img"><span>Gabriel
                                                        Sanders</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar8.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar16.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar6.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">15+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Dec 05 2024 - Jul 31 2024</td>
                                            <td>10:00AM - 12:00PM</td>
                                            <td>$199.00</td>
                                            <td><span class="bd-badge bg-success">Complete</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1"><input type="checkbox" class="selectedId" name="selectedId"></td>
                                            <td>10</td>
                                            <td>Custom Theme Development in WordPres</td>
                                            <td><a href="employee-profile.html" class="flex-center" style="width: 145px;"><img class="img-36 border-circle" src="assets/images/avatar/avatar5.png" alt="img"><span>Addison
                                                        Nelson</span></a>
                                            </td>
                                            <td>
                                                <div class="avatar" style="width: 90px;">
                                                    <ul>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar5.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar2.png" alt="image"></a>
                                                        </li>
                                                        <li><a href="team-details.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar1.png" alt="image"></a>
                                                        </li>
                                                        <li><span class="avatar-bg">15+</span></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>Aug 05 2024 - Oct 15 2024</td>
                                            <td>10:00AM - 12:00PM</td>
                                            <td>$199.00</td>
                                            <td><span class="bd-badge bg-danger">Cancel</span></td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#SubscriptionsDetails"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#SubscriptionsEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr></tbody>
                                </table><div class="dataTables_info" id="dataTableDefualt_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div><div class="dataTables_paginate paging_simple_numbers" id="dataTableDefualt_paginate"><a class="paginate_button previous disabled" aria-controls="dataTableDefualt" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="dataTableDefualt_previous">Previous</a><span><a class="paginate_button current" aria-controls="dataTableDefualt" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="dataTableDefualt" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" id="dataTableDefualt_next">Next</a></div><div style="width: 125px;"></div><div style="width: 150px;"></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       
    <?php endswitch; ?>
</div>

<script>
$(document).ready(function() {

    $('#createSubscriptionForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/create/subscription',
            data: {
                name: $('#subscriptionName').val(),
                price: $('#subscriptionPrice').val()
            },
            success: function(response) {
                $('#main-content').html(response);
               
            }
        });
    });

    $('#updateSubscriptionForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/update/subscription',
            data: {
                id: $('#updateSubscriptionId').val(),
                name: $('#updateSubscriptionName').val(),
                price: $('#updateSubscriptionPrice').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#deleteSubscriptionForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/delete/subscription',
            data: {
                id: $('#deleteSubscriptionId').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });
});
</script>