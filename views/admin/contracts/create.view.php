
<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5 mb-10">
        <div>
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a class="content-loader" href="/admin/contracts">contracts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create contracts</li>
                  </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Create contracts</h1>
            <p class="lead">Create new contracts on the system.</p>
    
        </div>
        <div class="btn-list">
            <a href="javascript:void(0);" class="btn btn-primary" ><i class="fa-solid fa-floppy-disk"></i> Save</a>
            <a href="signature.html" class="content-loader btn btn-primary" ><i class="fa-solid fa-floppy-disk"></i> Sign</a>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-3">
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
                    <form id="create" method="post" action="/admin/contracts/create" enctype="multipart/form-data">
                    <input type="hidden" name="contracts_id" value="<?php echo $data['contracts_id']; ?>">
                        
                    <div class="setting-title">
                        <h5>Upload Contract</h5>
                    </div>
                   
                    <div class="setting-card">
                        <div class="col-xl-12">
                            <div class="mb-4 dropzone">
                            <!-- <form action="#" id="myDropzone" class="dropzone"> -->
                                <div class="fallback">
                                    <input id="fileToUpload" style="visibility:hidden;" name="fileToUpload" type="file" multiple="multiple">
                                </div>
                                <div class="dz-message needsclick">
                                    <h5 class="font-size-17 text-secondary mb-0"><i class="font-size-126 fa-solid fa-upload"></i><br><span class="font-size-13 text-muted">Drag & Drop files here to upload</span></h5>
                                </div>
                            <!--  </form> end form -->
                            </div>
                        </div>
                        <input type="file" class="upload" style="visibility:hidden;" id="fileToUpload" name="fileToUpload" onchange="loadFile(event)">
                            
                    </div>
                   
                    <div class="setting-card">
                        <div class="row">
                            <div class="col-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control"  name="contracts_name" value="" required>
                            </div>
                            </div>
                            
                            <div class="col-126">
                            <div class="form-wrap">
                                <label class="col-form-label">Notes <span class="text-danger">*</span></label>
                                <textarea class="form-control" style="min-height: 120px;" name="contracts_notes"></textarea>

                            </div>
                            </div>
                        
                        </div>
                    </div>
                   
                   
                    <div class="setting-card mt-5">
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="form-wrap">
                                <label class="col-form-label">Public <span class="text-danger">*</span></label>
                                <div class="toggle mb-0 float-sm-end  toggle-success on"><span></span></div>
                                     
                            </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="modal-btn text-end d-none">
                        <button type="submit" class="btn btn-primary prime-btn"><i class="fa-solid fa-floppy-disk"></i> Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
        <iframe
            id="frame"
            title="Inline Frame Example"
            width="100%"
            height="100%"
            src="/assets/admin/signature.html"
            >
            </iframe>
        </div>
    </div>
</div>