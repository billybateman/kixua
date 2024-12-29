
<div class="container-fluid">

    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5">
        <div>
            <nav aria-label="breadcrumb" class="mb-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Admin</a></li>
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Parent Section</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Default</h1>
            <p class="lead">A clever and witty saying goes here.</p>
    
        </div>
        <div class="btn-list">
            <button class="btn-wave undefined btn btn-white mr-5">
            <i class="fa-duotone fa-solid fa-filter"></i> Filter
            </button>
            <button class="btn-wave me-0 btn btn-primary d-none">
            <i class="fa-duotone fa-solid fa-share"></i> Share
            </button>

            <a href="/admin/default/create" class="content-loader btn btn-primary"> <i class="fa-duotone fa-solid fa-plus"></i> Create</a>
           
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
                                
                                <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Movie: activate to sort column ascending">Column Name</th>
                                <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Publish Date: activate to sort column ascending">Column Name</th>
                                <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Slug: activate to sort column ascending">Column Name</th>

                                <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Views: activate to sort column ascending">Column Name</th>

                                <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Views: activate to sort column ascending">Column Name</th>
                                <th class="sorting" tabindex="0" aria-controls="seasonTable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Column Name</th>
                        
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
                                
                                <td>
                                    <div class="d-flex">
                                        
                                            <img src="<?php echo $thumbnail; ?>" alt="image" class="rounded-2 avatar avatar-55 img-fluid">
                                            <div class="d-flex flex-column ms-3 justify-content-center">
                                                <h6 class="text-capitalize"> <a href="/admin/default/view/<?php echo $row->default_email; ?>"><?php echo $row->default_first_name; ?> <?php echo $row->default_last_name; ?></a></h6>
                                            <!--<small>2h 21m</small>
                                                <small class="text-capitalize">(english, hindi)</small>-->
                                            </div>
                                        
                                    </div>
                                </td>
                                
                                
                                <td>
                                    <small><?php echo date( "m/d/Y", strtotime($row->default_date)); ?></small>
                                </td>
                                
                                <td><?php echo $row->default_email; ?></td>
                                <td><?php echo $row->default_types_name; ?></td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check form-switch ms-2">
                                            <input id="block_<?php echo $row->default_id; ?>" onclick="toggleBlock('<?php echo $row->default_id; ?>', 'block_<?php echo $row->default_id; ?>');" class="form-check-input" type="checkbox" <?php if($row->default_blocked){ ?>checked=""<?php } ?>>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex justify-content-between">
                                        <div class="form-check form-switch ms-2">
                                            <input id="subscriber_<?php echo $row->default_id; ?>" onclick="toggleSubscriber('<?php echo $row->default_id; ?>', 'subscriber_<?php echo $row->default_id; ?>');" class="form-check-input" type="checkbox" <?php if($row->default_subscriber){ ?>checked=""<?php } ?>>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                <div class="action-item">
                                        <a href="/admin/default/update/<?php echo $row->default_id; ?>" class="content-loader" title="Update"><i class="fa-solid fa-pencil"></i>
                                        </a>
                                        <a href="javascript:void(0);" onclick="deleteDefault('<?php echo $row->default_id; ?>');" title="Delete"><i class="fa-solid fa-trash-can"></i>
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
            title: "Subscribe default?",
            text: "This will add permissions to access subscriber features and content.!",
            type: "warning",
            defaultCancelButton: !0,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Subscribe",
            cancelButtonText: "Cancel"
        }).then((value) => {
            
            if (value .value) {
            // Add Your Custom Code for CRUD
                    $.ajax({ // create an AJAX call...
                        type: 'GET',
                        url: '/admin/default/subscribe/' + id + '/1/',
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
                url: '/admin/default/subscribe/' + id + '/0/',
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
                title: "Block default?",
                text: "This will log them out and not allow them to log back in!",
                type: "warning",
                defaultCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Block",
                cancelButtonText: "Cancel"
            }).then((value) => {
                
                if (value.value) {

                // Add Your Custom Code for CRUD
                        $.ajax({ // create an AJAX call...
                            type: 'GET',
                            url: '/admin/default/block/' + id + '/1/',
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
                url: '/admin/default/block/' + id + '/0/',
                processData: false,
                contentType: false,
                success: function(response) { // on success..
                    //$('#main-content').html(response); // update the DIV
                    
                }
            });

        }
    }

    var deleteDefault = function(id){
        swal({
            title: "Are you sure you want to delete this default ?",
            text: "You will not be able to recover this default !!",
            type: "warning",
            defaultCancelButton: !0,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it !!",
            cancelButtonText: "No"
        }).then((value) => {
            
            if (value .value) {
            // Add Your Custom Code for CRUD
                    $.ajax({ // create an AJAX call...
                        type: 'GET',
                        url: '/admin/default/delete/' + id,
                        processData: false,
                        contentType: false,
                        success: function(response) { // on success..
                            $('#main-content').html(response); // update the DIV
                            swal({
                                title: 'default Deleted !',
                                text: 'The default has been deleted!',
                                type: 'success'
                            });
                        }
                    });
            }
            return false;
        });
    }

</script>