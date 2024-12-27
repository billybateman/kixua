<div class="content-body">
    <div class="container-fluid">
        <div class="dashboard-header">
            <h3>Create User</h3>
            <ul class="header-list-btns">
                <li>
                    <a href="/admin/users" class="content-loader btn btn-secondary"><i class="fa fa-arrow-left me-1"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="tab-content appointment-tab-content grid-user">
            <div class="tab-pane fade show active" id="pills-create" role="tabpanel" aria-labelledby="pills-create-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="/admin/users/store" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select name="role" class="form-control" required>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="image">Profile Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
