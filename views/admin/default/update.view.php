<div class="content-body">
    <!-- row -->
	<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5">
        <div>
            <nav aria-label="breadcrumb" class="mb-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Admin</a></li>
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Parent Section</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Default</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Update Default</h1>
            <p class="lead">Update default's here..</p>
    
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
            <form id="update" method="post" action="/admin/defaults/update/" enctype="multipart/form-data">
                <input type="hidden" name="defaults_id" value="<?php echo $data['defaults_id']; ?>">
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
                            <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control"  name="defaults_first_name" value="<?php echo $data['defaults_first_name']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Last Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="defaults_last_name" value="<?php echo $data['defaults_last_name']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Phone Number <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="405-599-1234" name="defaults_phone" value="<?php echo $data['defaults_phone']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Email Address <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="you@address.com" name="defaults_email" value="<?php echo $data['defaults_email']; ?>" required>
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
                            <input type="text" class="form-control" name="defaults_password" id="defaults_password">
                        </div>
                        </div>
                        
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Confirm Password</label>
                            <input type="text" class="form-control" name="defaults_password_confirm" id="defaults_password_confirm">
                        </div>
                        </div>
                        <?php  if($default['defaults_types_id'] == 1 || $default['defaults_types_id'] == 5){?>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Role <span class="text-danger">*</span></label>
                            <select class="form-control" name="defaults_types_id" required>
                                <?php foreach($defaults_types as $role){ ?>
                                <option value="<?php echo $role->defaults_types_id; ?>"><?php echo $role->defaults_types_name; ?></option>
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
                            <input type="text" class="form-control" name="defaults_address" value="<?php echo $data['defaults_address']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">City <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="defaults_city" value="<?php echo $data['defaults_city']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">State <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="CA" name="defaults_state" value="<?php echo $data['defaults_state']; ?>" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Zip Code <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="defaults_zip" value="<?php echo $data['defaults_zip']; ?>" required>
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
    