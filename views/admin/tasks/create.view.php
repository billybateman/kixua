<div class="container-fluid">
    

    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5 mb-10">
        <div>
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a class="content-loader" href="/admin/dashboard">Work</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a class="content-loader" href="/admin/projects">Projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create Tasks</li>
                  </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Create Tasks</h1>
            <p class="lead">Create new tasks on the system.</p>
    
        </div>
        <div class="btn-list">
            <a href="javascript:void(0);" class="btn btn-primary" ><i class="fa-solid fa-floppy-disk"></i> Save</a>
        </div>
    </div>


    <form id="create" method="post" action="/admin/tasks/create" enctype="multipart/form-data">
        <!-- ...existing code... -->
        <div class="setting-card">
            <div class="form-wrap">
                <label class="col-form-label">Task Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="tasks_name" required>
            </div>
            <div class="form-wrap">
                <label class="col-form-label">Task Description</label>
                <textarea class="form-control" name="tasks_description"></textarea>
            </div>
            <div class="form-wrap">
                <label class="col-form-label">Project <span class="text-danger">*</span></label>
                <select class="form-control" name="tasks_projects_id" required>
                    <?php foreach ($projects as $project) { ?>
                        <option value="<?php echo $project['projects_id']; ?>"><?php echo $project['projects_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-wrap">
                <label class="col-form-label">User ID</label>
                <input type="number" class="form-control" name="tasks_users_id">
            </div>
            <div class="form-wrap">
                <label class="col-form-label">Due Date</label>
                <input type="date" class="form-control" name="tasks_due_date">
            </div>
            <div class="form-wrap">
                <label class="col-form-label">Status</label>
                <input type="text" class="form-control" name="tasks_status">
            </div>
            <div class="form-wrap">
                <label class="col-form-label">Progress</label>
                <input type="number" class="form-control" name="tasks_progress">
            </div>
            <div class="form-wrap">
                <label class="col-form-label">Is Child Task</label>
                <input type="checkbox" class="form-control" name="tasks_is_child">
            </div>
            <div class="form-wrap">
                <label class="col-form-label">Parent Task</label>
                <select class="form-control" name="tasks_parent_tasks_id">
                    <option value="">None</option>
                    <?php foreach ($tasks as $task) { ?>
                        <option value="<?php echo $task['tasks_id']; ?>"><?php echo $task['tasks_name']; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="modal-btn text-end">
            <button type="submit" class="btn btn-primary prime-btn">Save Changes</button>
        </div>
    </form>
</div>
