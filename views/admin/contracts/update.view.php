<div class="container-fluid">
   
    

    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5 mb-10">
        <div>
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" aria-current="page"><a class="content-loader" href="#">Applications</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update contracts</li>
                   </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Update contracts</h1>
            <p class="lead">Update contracts on the system.</p>
    
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
                <form id="update" method="post" action="/admin/contracts/update/<?php echo $data['contracts_id']; ?>" enctype="multipart/form-data">
                    <input type="hidden" name="contracts_id" value="<?php echo $data['contracts_id']; ?>">
                         <?php
                        $image = "/assets/admin/assets/images/contracts/profile.png";
                        

                        if(isset($data['images_file'])){
                            $image = $data['images_file'];
                        }
                        ?>
                         <script>
                            
                            $("#output").attr("src","<?php echo $image; ?>");

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
                        <div class="setting-card">
                        <div class="col-xl-12">
                        <span class="fw-medium d-block mb-2">Contract Document</span>
                                    <div class="d-flex align-items-start flex-wrap gap-3">
                                        <div><span class="avatar avatar-xxl"><img src="<?php echo $image; ?>" alt="" id="output"></span></div>
                                        <div>
                                            <div class="btn-list mb-1 mt-10">
                                                <a href="javascript:void(0);" onclick="$('#fileToUpload').click();" class="btn-wave undefined btn btn-primary btn-sm"><i class="ri-upload-2-line me-1"></i>Change Image</a>
                                                <a href="javascript:void(0);" onclick="removeFile();"class="btn-wave undefined btn btn-primary1-light btn-sm"><i class="ri-delete-bin-line me-1"></i>Remove</a>
                                            </div>
                                            <span class="d-block fs-12 text-muted">Use JPEG, PNG, or GIF. Best size: 200x200 pixels. Keep it under 5MB</span>
                                        </div>
                                    </div>
                                </div>
                                <input type="file" class="upload" style="visibility:hidden;" id="fileToUpload" name="fileToUpload" onchange="loadFile(event)">
                               
                    </div>
                    <div class="setting-title">
                        <h5>Information</h5>
                    </div>
                    <div class="setting-card">
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  name="contracts_name" value="<?php echo $data['contracts_name']; ?>" required>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-wrap">
                                <label class="col-form-label">Notes <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="contracts_notes"><?php echo $data['contracts_notes']; ?></textarea>

                            </div>
                            </div>
                            
                        
                        </div>
                    </div>
                   
                    <div class="setting-title">
                        <h5>Permissions</h5>
                    </div>
                    <div class="setting-card">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Public <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="contracts_address" value="<?php echo $data['contracts_address']; ?>" required>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="modal-btn text-end">
                        <button type="submit" class="btn btn-primary prime-btn"><i class="fa-solid fa-floppy-disk"></i> Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>