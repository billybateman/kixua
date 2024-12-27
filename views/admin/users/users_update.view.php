<div class="content-body">
    <div class="container-fluid">
        <div class="dashboard-header">
            <h3>Update User</h3>
            <ul class="header-list-btns">
                <li>
                    <a href="/admin/users" class="content-loader btn btn-secondary"><i class="fa fa-arrow-left me-1"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="tab-content appointment-tab-content grid-user">
            <div class="tab-pane fade show active" id="pills-update" role="tabpanel" aria-labelledby="pills-update-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/admin/users/update/<?php echo $user->users_id; ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo $user->users_first_name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="<?php echo $user->users_last_name; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $user->users_email; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" class="form-control" required>
                                    <option value="admin" <?php if($user->users_types_name == 'admin') echo 'selected'; ?>>Admin</option>
                                    <option value="user" <?php if($user->users_types_name == 'user') echo 'selected'; ?>>User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
