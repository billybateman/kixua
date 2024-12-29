
<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5 mb-10">
        <div>
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Admin</a></li>
                    <li class="breadcrumb-item active"><a class="content-loader" href="/admin/users">User Management</a></li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Manage Users</h1>
            <p class="lead">Manage the users on the system.</p>
    
        </div>
        <div class="btn-list">
            <button class="btn-wave undefined btn btn-white mr-5"><i class="ri-filter-3-line align-middle me-1 lh-1"></i> Filter</button>
            <a href="/admin/users/create" class="content-loader btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewExpense"><i class="fa-solid fa-plus" aria-hidden="true"></i> Create</a>
        </div>
    </div>
    
    <div class="row">
    <div class="col-xxl-12">
        <div class="card__wrapper">
            <div class="row g-20 gy-20 mb-20 justify-content-between align-items-end">
                <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="contactsName">Contacts Name</label>
                        </div>
                        <div class="form__input">
                            <input type="text" class="form-control" id="contactsName" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="phoneNumber">Search by Number</label>
                        </div>
                        <div class="form__input">
                            <input type="text" class="form-control" id="phoneNumber" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
                    <div class="from__input-box">
                        <div class="form__input-title">
                            <label for="contactsEmail">Search by Email</label>
                        </div>
                        <div class="form__input">
                            <input type="email" class="form-control" id="contactsEmail" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4">
                    <div class="d-flex align-items-center justify-content-between gap-15">
                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addNewContacts">Add Contacts</button>
                    </div>
                </div>
            </div>
            <div class="table__wrapper table-responsive">

                <table class="table mb-20" id="dataTableDefualt">
                    <thead>
                        <tr class="table__title table__sort">
                            
                            <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Movie: activate to sort column ascending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Publish Date: activate to sort column ascending">Signup Date</th>

                            <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Views: activate to sort column ascending">Role</th>

                            <th class="sorting text-right" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Views: activate to sort column ascending">Blocked</th>
                            <th class="sorting text-right" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Subscriber</th>
                    
                            <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
                             </tr>
                    </thead>
                    <tbody class="table__body">
                        <?php
                            
                        
                            foreach($data as $row){ 
                                $row = (object)$row;
                                $thumbnail = "/assets/admin/images/upload-image.png";
                                if($row->images_file){
                                    $thumbnail = $row->images_file;
                                }
                                
                                ?> 
                            <tr class="odd">
                            
                            <td class="text-left">
                                <div class="d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-rounded p-1 bg-medium-transparent">
                                            <img alt="" src="<?php echo $thumbnail; ?>">
                                        </span>
                                    </div>
                                    <div class="flex-fill">
                                        <a class="fw-medium fs-14 d-block text-truncate project-list-title" href="#!"> <a href="/admin/users/view/<?php echo $row->users_email; ?>"><?php echo $row->users_first_name; ?> <?php echo $row->users_last_name; ?></a></a>
                                        <span class="text-muted d-block fs-12"><?php echo $row->users_email; ?></span>
                                    </div>
                                </div>
                               
                            </td>
                            
                            
                            <td>
                                <small><?php echo date( "m/d/Y", strtotime($row->users_date)); ?></small>
                            </td>
                            
                             <td><?php echo $row->users_types_name; ?></td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div class="form-check form-switch ms-2">
                                        <input id="block_<?php echo $row->users_id; ?>" onclick="toggleBlock('<?php echo $row->users_id; ?>', 'block_<?php echo $row->users_id; ?>');" class="form-check-input" type="checkbox" <?php if($row->users_blocked){ ?>checked=""<?php } ?>>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex justify-content-between">
                                    <div class="form-check form-switch ms-2">
                                        <input id="subscriber_<?php echo $row->users_id; ?>" onclick="toggleSubscriber('<?php echo $row->users_id; ?>', 'subscriber_<?php echo $row->users_id; ?>');" class="form-check-input" type="checkbox" <?php if($row->users_subscriber){ ?>checked=""<?php } ?>>
                                    </div>
                                </div>
                            </td>
                            <td>
                            <div class="action-item">
                                    <a href="/admin/users/update/<?php echo $row->users_id; ?>" class="content-loader" title="Update"><i class="fa-solid fa-pencil"></i>
                                    </a>
                                    <a href="javascript:void(0);" onclick="deleteusers('<?php echo $row->users_id; ?>');" title="Delete"><i class="fa-solid fa-trash-can"></i>
                                    </a>

                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        
                        <?php
                        $totalPages = $total_rows / $per_page;
                        $totalLinkPages = $totalPages;

                        $current = $start / $per_page;
                        
                        if($totalPages > 10){
                            
                            $totalLinkPages = $current + 10;
                            if($totalLinkPages > $totalPages){
                                $totalLinkPages = $totalPages;

                            }
                            
                        }
                        ?>
                        <li class="page-item"><a class="content-loader page-link" href="<?php echo $url; ?>&start=0">First</a></li>
                        <?php if($current > 1){ ?>
                        <li class="page-item"><a class="content-loader page-link" href="<?php echo $url; ?>&start=<?php echo ($current - 1) * $per_page; ?>">Previous</a></li>
                        <?php } ?>
                        <?php
                        for($i = $current; $i < $totalLinkPages; $i++){
                            ?>
                            <li class="page-item"><a class="content-loader page-link" href="<?php echo $url; ?>&start=<?php echo $i * $per_page; ?>"><?php echo $i + 1; ?></a></li>
                            <?php
                        }
                        ?>
                            <?php if($current < $totalLinkPages){ ?>
                        <li class="page-item"><a class="content-loader page-link" href="<?php echo $url; ?>&start=<?php echo ($current + 1) * $per_page; ?>">Next</a></li>
                        <?php } ?>
                        <li class="page-item"><a class="content-loader page-link" href="<?php echo $url; ?>&start=<?php echo $total_rows - $per_page; ?>">Last</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    </div>

</div>

<script type="text/javascript">
   var toggleSubscriber = function(id, status){
    status =  $('#' + status).is(':checked');
        console.log(status);
        if(status == true){
            status = 1;
        } else {
            status = 0;
        }


        if (status == 1) {
        swal({
            title: "Subscribe users?",
            text: "This will add permissions to access subscriber features and content.!",
            type: "warning",
            usersCancelButton: !0,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Subscribe",
            cancelButtonText: "Cancel"
        }).then((value) => {
            
            if (value .value) {
            // Add Your Custom Code for CRUD
                    $.ajax({ // create an AJAX call...
                        type: 'GET',
                        url: '/admin/users/subscribe/' + id + '/1/',
                        processData: false,
                        contentType: false,
                        success: function(response) { // on success..
                            //$('#main-content').html(response); // update the DIV
                            
                        }
                    });
            }
            return false;
        });
    } else {
            $.ajax({ // create an AJAX call...
                type: 'GET',
                url: '/admin/users/subscribe/' + id + '/0/',
                processData: false,
                contentType: false,
                success: function(response) { // on success..
                    //$('#main-content').html(response); // update the DIV
                    
                }
            });

        }
    }


    var toggleBlock = function(id, status){
        status =  $('#' + status).is(':checked');
        console.log(status);
        if(status == true){
            status = 1;
        } else {
            status = 0;
        }


        if (status == 1) {
            swal({
                title: "Block users?",
                text: "This will log them out and not allow them to log back in!",
                type: "warning",
                usersCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Block",
                cancelButtonText: "Cancel"
            }).then((value) => {
                
                if (value.value) {

                // Add Your Custom Code for CRUD
                        $.ajax({ // create an AJAX call...
                            type: 'GET',
                            url: '/admin/users/block/' + id + '/1/',
                            processData: false,
                            contentType: false,
                            success: function(response) { // on success..
                               // $('#main-content').html(response); // update the DIV
                                
                            }
                        });
                }
                return false;
            });
        } else {
            $.ajax({ // create an AJAX call...
                type: 'GET',
                url: '/admin/users/block/' + id + '/0/',
                processData: false,
                contentType: false,
                success: function(response) { // on success..
                    //$('#main-content').html(response); // update the DIV
                    
                }
            });

        }
    }

    var deleteusers = function(id){
        swal({
            title: "Are you sure you want to delete this users ?",
            text: "You will not be able to recover this users !!",
            type: "warning",
            usersCancelButton: !0,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it !!",
            cancelButtonText: "No"
        }).then((value) => {
            
            if (value .value) {
            // Add Your Custom Code for CRUD
                    $.ajax({ // create an AJAX call...
                        type: 'GET',
                        url: '/admin/users/delete/' + id,
                        processData: false,
                        contentType: false,
                        success: function(response) { // on success..
                            $('#main-content').html(response); // update the DIV
                            swal({
                                title: 'users Deleted !',
                                text: 'The users has been deleted!',
                                type: 'success'
                            });
                        }
                    });
            }
            return false;
        });
    }

</script>