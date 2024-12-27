<div class="content-body">
    <div class="container-fluid">
        <div class="dashboard-header">
            <h3>Delete User</h3>
            <ul class="header-list-btns">
                <li>
                    <a href="/admin/users" class="content-loader btn btn-secondary"><i class="fa fa-arrow-left me-1"></i> Back</a>
                </li>
            </ul>
        </div>
        <div class="tab-content appointment-tab-content grid-user">
            <div class="tab-pane fade show active" id="pills-delete" role="tabpanel" aria-labelledby="pills-delete-tab">
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
                            <button type="button" class="btn btn-danger" onclick="deleteuser('<?php echo $user->users_id; ?>');">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var deleteuser = function(id){
        swal({
            title: "Are you sure you want to delete this user?",
            text: "You will not be able to recover this user!",
            type: "warning",
            userCancelButton: !0,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No"
        }).then((value) => {
            if (value.value) {
                $.ajax({
                    type: 'GET',
                    url: '/admin/users/delete/' + id,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        $('#main-content').html(response);
                        swal({
                            title: 'User Deleted!',
                            text: 'The user has been deleted!',
                            type: 'success'
                        });
                    }
                });
            }
            return false;
        });
    }
</script>
