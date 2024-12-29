
<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5 mb-10">
        <div>
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a class="content-loader" href="/admin/users">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Users</li>
                  </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Create Users</h1>
            <p class="lead">Create new users on the system.</p>
    
        </div>
        <div class="btn-list">
            <a href="javascript:void(0);" class="btn btn-primary" ><i class="fa-solid fa-floppy-disk"></i> Save</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="col-12">
                    <script type="text/javascript">
                        $('#create').submit(function() { // catch the form's submit event

                            var formdata = new FormData(this);

                            if($("#fileToUpload")[0].files.length) {
                                var fileToUpload = $("#fileToUpload")[0].files[0];
                            formdata.append("fileToUpload", fileToUpload);
                            }

                            $.ajax({ // create an AJAX call...
                                type: 'POST',
                                url: $(this).attr('action'),
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
                    
                    <form id="create" method="post" action="/admin/users/create" enctype="multipart/form-data">
                        <div class="setting-card">

                                <div class="col-xl-12">
                                    <span class="fw-medium d-block mb-2">Profile Picture</span>
                                    <div class="d-flex align-items-start flex-wrap gap-3">
                                        <div><span class="avatar avatar-xxl"><img src="/assets/admin/assets/images/users/profile.png" alt="" id="output"></span></div>
                                        <div>
                                            <div class="btn-list mb-1 mt-10">
                                                <a href="javascript:void(0);" onclick="$('#fileToUpload').click();" class="btn-wave undefined btn btn-primary btn-sm"><i class="ri-upload-2-line me-1"></i>Change Image</a>
                                                <a href="javascript:void(0);" onclick="removeFile();" class="btn-wave undefined btn btn-primary1-light btn-sm"><i class="ri-delete-bin-line me-1"></i>Remove</a>
                                            </div>
                                            <span class="d-block fs-12 text-muted">Use JPEG, PNG, or GIF. Best size: 200x200 pixels. Keep it under 5MB</span>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" class="upload" style="visibility:hidden;" id="fileToUpload" name="fileToUpload" onchange="loadFile(event)">
                                <script>
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
                                        searchPic.src = "/assets/admin/assets/images/users/profile.png";
                                        var output = document.getElementById('output');
                                        output.src = searchPic.src;

                                    }
                                </script>


                            
                        </div>
                        <div class="setting-title">
                            <h5>Information</h5>
                        </div>
                        <div class="setting-card">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"  name="users_first_name" required>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="users_last_name" required>
                                </div>
                                </div>
                                
                            
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="405-599-1234" name="users_phone" required>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="you@address.com" name="users_email" required>
                                </div>
                                </div>
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
                                    <input type="text" class="form-control" name="users_address" >
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="users_city" >
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">State <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="CA" name="users_state">
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Zip Code <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="users_zip">
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="setting-title">
                            <h5>Security</h5>
                        </div>
                        <div class="setting-card">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="users_password" >
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Retype Password <span class="text-danger">*</span></label>
                                    <input type="password" class="form-control" name="users_password_confirm" r                        </div>
                                </div>
                                <?php  if($user['users_types_id'] == 1 || $user['users_types_id'] == 5){?>
                                    
                                    <div class="col-md-6">
                                <div class="form-wrap">
                                    <label class="col-form-label">Role <span class="text-danger">*</span></label>
                                    <select class="form-control" name="users_types_id" required>
                                        <?php foreach($users_types as $role){ ?>
                                        <option value="<?php echo $role->users_types_id; ?>"><?php echo $role->users_types_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="modal-btn text-end">
                            <button type="submit" class="btn btn-primary prime-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>