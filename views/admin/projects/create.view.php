<div class="container-fluid">
    
<div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5 mb-10">
        <div>
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a class="content-loader" href="/admin/dashboard">Work</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a class="content-loader" href="/admin/projects">Projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Projects</li>
                  </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Create Projects</h1>
            <p class="lead">Create new projects on the system.</p>
    
        </div>
        <div class="btn-list">
            <a href="javascript:void(0);" class="btn btn-primary" ><i class="fa-solid fa-floppy-disk"></i> Save</a>
        </div>
    </div>


    <div class="row">
        <div class="col-xxl-12">
            <div class="card__wrapper">
                <div class="col-12"></div>
                    <form id="create" method="post" action="/admin/projects/create" enctype="multipart/form-data">
                        <!-- ...existing code... -->
                        <div class="setting-card">
                            <div class="form-wrap">
                                <label class="col-form-label">Project Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="projects_name" required>
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Project Description</label>
                                <textarea class="form-control" name="projects_details"></textarea>
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Project Status</label>
                                <select class="form-control" name="projects_status">
                                    <option value="complete">Complete</option>
                                    <option value="in-progress">In Progress</option>
                                    <option value="on-hold">On Hold</option>
                                    <option value="cancelled">Cancelled</option>
                                </select>
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Project Due Date</label>
                                <input type="date" class="form-control" name="projects_due_date">
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Manager</label>
                                
                                <input type="text" class="form-control" id="projects_manager" name="projects_manager">
                                
                                <input type="hidden" class="form-control" id="projects_managers_users_id" name="projects_managers_users_id">
                                <div id="users_suggestions" class="dropdown-menu"></div>
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Progress Percent</label>
                                <input type="number" class="form-control" name="projects_progress_percent">
                            </div>
                            <div class="form-wrap">
                                <label class="col-form-label">Project Priority</label>
                                <select class="form-control" name="projects_priority">
                                    <option value="severe">Severe</option>
                                    <option value="high">High</option>
                                    <option value="medium">Medium</option>
                                    <option value="low">Low</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-btn text-end">
                            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#projects_manager').on('keyup', function() {
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

    function setManager(managerName, managerId) {
        $('#projects_managers_users_id').val(managerId);
        $('#projects_manager').val(managerName);
        $('#users_suggestions').html('').hide();
    }

    $('#create').submit(function(event) { // catch the form's submit event

        event.preventDefault(); 

        var formdata = new FormData(this);

        //if($("#fileToUpload")[0].files.length) {
        //    var fileToUpload = $("#fileToUpload")[0].files[0];
        //    formdata.append("fileToUpload", fileToUpload);
        //}

        
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
                   
                   
   
});
</script>
