<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5">
        <div>
            <nav aria-label="breadcrumb" class="mb-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Admin</a></li>
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Parent Section</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Project</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Update Project</h1>
            <p class="lead">Update the project details here.</p>
    
        </div>
        <div class="btn-list">

            <a href="javascript:voic(0);" class="btn btn-primary"> <i class="fa-solid fa-floppy-disk"></i> Save</a>
           
        </div>
    </div>

        <div class="col-12">
            <script type="text/javascript">
               $('#update').submit(function() { // catch the form's submit event

                    var formdata = new FormData(this);

                    if($("#fileToUpload")[0].files.length) {
                        var fileToUpload = $("#fileToUpload")[0].files[0];
                        formdata.append("fileToUpload", fileToUpload);
                    }

                    $.ajax({ // create an AJAX call...
                        type: 'POST',
                        url: $(this).attr('action'),
                        enctype: 'multipart/form-data',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        success: function(response) { // on success..
                            $('#main-content').html(response); // update the DIV
                        }
                    });
                    return false; // cancel original event to prevent form submitting
                });
            </script>
            <form id="update" method="post" action="/admin/projects/update/<?php echo $data['projects_id']; ?>" enctype="multipart/form-data">
                <input type="hidden" name="projects_id" value="<?php echo $data['projects_id']; ?>">
                 <div class="setting-card">
                    <div class="change-avatar img-upload">
                    <?php
                        $image = "/assets/admin/images/upload-image.png";
                        

                        if(isset($data['images_file'])){
                            $image = $data['images_file'];
                        }
                        ?>
                        <div class="profile-img">
                            <img src="<?php echo $image; ?>" id="output">
                        </div>
                        <div class="upload-img">
                        <h5>Profile Image</h5>
                        
                        <script>
                        
                        $("#profile_image").attr("src","<?php echo $image; ?>");

                        var loadFile = function(event) {
                            var output = document.getElementById('output');
                            output.src = URL.createObjectURL(event.target.files[0]);
                            output.onload = function() {
                            URL.revokeObjectURL(output.src) // free memory
                            }
                        };

                        var removeFile = function(){
                            var input = document.getElementById('fileToUpload');
                            input.value = null;
                            searchPic = new Image(100,100);
                            searchPic.src = "<?php echo $image; ?>";
                            var output = document.getElementById('output');
                            output.src = searchPic.src;

                        }
                        </script>
                        <div class="imgs-load d-flex align-items-center">
                            <div class="change-photo">
                                Upload New
                                <input type="file" class="upload" id="fileToUpload" name="fileToUpload" onchange="loadFile(event)">
                            </div>
                            <a href="javascript:void(0);" onclick="removeFile();" class="upload-remove">Remove</a>
                        </div>
                        <p class="form-text">Your Image should Below 4 MB, Accepted format jpg,png,svg</p>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h5>Information</h5>
                </div>
                <div class="setting-card">
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Project Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control"  name="projects_name" value="<?php echo $data['projects_name']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Project Description</label>
                            <textarea class="form-control" name="projects_details"><?php echo $data['projects_details']; ?></textarea>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="405-599-1234" name="projects_phone" value="<?php echo $data['projects_phone']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="you@address.com" name="projects_email" value="<?php echo $data['projects_email']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Project Status</label>
                            <select class="form-control" name="projects_status">
                                <option value="complete" <?php if ($data['projects_status'] == 'complete') echo 'selected'; ?>>Complete</option>
                                <option value="in-progress" <?php if ($data['projects_status'] == 'in-progress') echo 'selected'; ?>>In Progress</option>
                                <option value="on-hold" <?php if ($data['projects_status'] == 'on-hold') echo 'selected'; ?>>On Hold</option>
                                <option value="cancelled" <?php if ($data['projects_status'] == 'cancelled') echo 'selected'; ?>>Cancelled</option>
                            </select>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Project Due Date</label>
                            <input type="date" class="form-control" name="projects_due_date" value="<?php echo $data['projects_due_date']; ?>">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Manager User ID</label>
                            <input type="text" class="form-control" id="projects_managers_users_id" name="projects_managers_users_id" value="<?php echo $data['manager_users_name']; ?>">
                            <div id="users_suggestions" class="dropdown-menu"></div>
                            <img src="<?php echo $data['manager_users_image']; ?>" alt="<?php echo $data['manager_users_name']; ?>" class="img-thumbnail" width="50">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Progress Percent</label>
                            <input type="number" class="form-control" name="projects_progress_percent" value="<?php echo $data['projects_progress_percent']; ?>">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Project Priority</label>
                            <select class="form-control" name="projects_priority">
                                <option value="severe" <?php if ($data['projects_priority'] == 'severe') echo 'selected'; ?>>Severe</option>
                                <option value="high" <?php if ($data['projects_priority'] == 'high') echo 'selected'; ?>>High</option>
                                <option value="medium" <?php if ($data['projects_priority'] == 'medium') echo 'selected'; ?>>Medium</option>
                                <option value="low" <?php if ($data['projects_priority'] == 'low') echo 'selected'; ?>>Low</option>
                            </select>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="setting-title">
                    <h5>Account</h5>
                </div>
                <div class="setting-card">
                    <div class="row">
                        
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Password</label>
                            <input type="text" class="form-control" name="projects_password" id="projects_password">
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Confirm Password</label>
                            <input type="text" class="form-control" name="projects_password_confirm" id="projects_password_confirm">
                        </div>
                        </div>
                        <?php  if($project['projects_types_id'] == 1 || $project['projects_types_id'] == 5){?>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Role <span class="text-danger">*</span></label>
                            <select class="form-control" name="projects_types_id" required>
                                <?php foreach($projects_types as $role){ ?>
                                <option value="<?php echo $role->projects_types_id; ?>"><?php echo $role->projects_types_name; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="setting-title">
                    <h5>Address</h5>
                </div>
                <div class="setting-card">
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="form-wrap">
                            <label class="col-form-label">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="projects_address" value="<?php echo $data['projects_address']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="projects_city" value="<?php echo $data['projects_city']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">State <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="CA" name="projects_state" value="<?php echo $data['projects_state']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Zip Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="projects_zip" value="<?php echo $data['projects_zip']; ?>" required>
                        </div>
                        </div>
                    </div>
                </div>
                
                <div class="modal-btn text-end">
                    <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#projects_managers_users_id').on('keyup', function() {
        var query = $(this).val();
        if (query.length > 2) {
            $.ajax({
                url: '/admin/users/search',
                method: 'GET',
                data: { query: query },
                success: function(data) {
                    $('#users_suggestions').html(data).show();
                }
            });
        } else {
            $('#users_suggestions').hide();
        }
    });

    $(document).on('click', '.users_suggestion', function() {
        var users_id = $(this).data('users_id');
        var users_name = $(this).data('users_name');
        var users_image = $(this).data('users_image');
        $('#projects_managers_users_id').val(users_name);
        $('#users_suggestions').hide();
        $('#projects_managers_users_id').data('users_id', users_id);
        $('#projects_managers_users_id').after('<img src="' + users_image + '" alt="' + users_name + '" class="img-thumbnail" width="50">');
    });

    $('#update').submit(function() {
        var users_id = $('#projects_managers_users_id').data('users_id');
        $('<input>').attr({
            type: 'hidden',
            name: 'projects_managers_users_id',
            value: users_id
        }).appendTo(this);
    });
});
</script>