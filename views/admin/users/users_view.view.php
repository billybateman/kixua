<div class="content-body">
    <div class="container-fluid">
        <div class="dashboard-header">
            <h3>View User</h3>
            <ul class="header-list-btns">
                <li>
                    <a href="/admin/users" class="content-loader btn btn-secondary"><i class="fa fa-arrow-left me-1"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="tab-content appointment-tab-content grid-user">
            <div class="tab-pane fade show active" id="pills-view" role="tabpanel" aria-labelledby="pills-view-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="user-details">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <p><?php echo $user->users_first_name; ?></p>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <p><?php echo $user->users_last_name; ?></p>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <p><?php echo $user->users_email; ?></p>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <p><?php echo $user->users_types_name; ?></p>
                            </div>
                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <img src="<?php echo $user->images_file; ?>" alt="Profile Image" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
