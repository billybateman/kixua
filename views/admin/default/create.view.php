<div    c   lass="content-body">
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
            <h1 class="page-title fw-medium fs-18 mb-0">Create Default</h1>
            <p class="lead">Create new default's here..</p>
    
        </div>
        <div class="btn-list">

            <a href="javascript:voic(0);" class="btn btn-primary"> <i class="fa-solid fa-floppy-disk"></i> Save</a>
           
        </div>
    </div>

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
            <form id="create" method="post" action="/admin/default/create" enctype="multipart/form-data">
                <div class="setting-card">
                    <div class="change-avatar img-upload">
                        <div class="profile-img">
                            <img src="/assets/admin/images/upload-image.png" id="output">
                        </div>
                        <div class="upload-img">
                        <h5>Image</h5>
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
                            searchPic.src = "/assets/admin/images/no-img-avatar.png";
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
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control"  name="column_name" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="column_name" required>
                        </div>
                        </div>
                        
                       
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Column Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="405-599-1234" name="column_name" required>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="you@address.com" name="column_name" required>
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
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="column_name" >
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="column_name" >
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="CA" name="column_name">
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="column_name">
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
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="column_name" >
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-wrap">
                            <label class="col-form-label">Column Name <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" name="column_name">
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
    