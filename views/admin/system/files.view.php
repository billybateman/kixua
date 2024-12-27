<?php

function listFilesAndFolders($dir) {
    $items = scandir($dir);
    $files = [];
    $folders = [];
    foreach ($items as $item) {
        if ($item === '.' || $item === '..') continue;
        if (is_dir($dir . '/' . $item)) {
            $folders[] = $item;
        } else {
            $files[] = $item;
        }
    }
    return ['files' => $files, 'folders' => $folders];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['file'])) {
        $uploadDir = __APP_PATH . '/uploads/';
        $uploadFile = $uploadDir . basename($_FILES['file']['name']);

        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            if (pathinfo($uploadFile, PATHINFO_EXTENSION) === 'zip') {
                $zip = new ZipArchive;
                if ($zip->open($uploadFile) === TRUE) {
                    $zip->extractTo($uploadDir);
                    $zip->close();
                    unlink($uploadFile); // Remove the zip file after extraction
                }
            }
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Possible file upload attack!\n";
        }
    }
}

if (isset($_GET['download'])) {
    $file = __APP_PATH . '/uploads/' . basename($_GET['download']);
    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($file) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file);
        exit;
    }
}

if (isset($_GET['edit'])) {
    $file = __APP_PATH . '/uploads/' . basename($_GET['edit']);
    if (file_exists($file)) {
        $content = file_get_contents($file);
        // Display file content in a textarea for editing
        echo '<form method="post" action="save-file.php">';
        echo '<textarea name="content" rows="20" cols="80">' . htmlspecialchars($content) . '</textarea>';
        echo '<input type="hidden" name="file" value="' . htmlspecialchars($file) . '">';
        echo '<button type="submit">Save</button>';
        echo '</form>';
        exit;
    }
}

if(isset($_REQUEST['folder'])) {
    $folderSet = $_REQUEST['folder']."/";
} else {
    $folderSet = "/";
   
} 
$filePath = __APP_PATH . '/'.$folderSet;
$rootItems = listFilesAndFolders($filePath);
?>

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">File Manager</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">File Manager</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="d-xl-flex">
        <div class="w-100">
            <div class="d-md-flex">
                <div class="card filemanager-sidebar me-md-2 w-25">
                    <div class="card-body">

                        <div class="d-flex flex-column h-100">
                            <div class="mb-3">
                                <button class="btn btn-soft-primary w-100 shadow-none fw-medium"><i
                                        class="mdi mdi-plus me-1"></i>Add New File</button>
                            </div>
                            
                            <div class="mt-0">
                                <h6 class="text-uppercase mt-1 font-size-13">My Drive</h6>
                                <?php 
                                    $tree = new foldertree( $filePath );
                                    echo $tree->create_tree();
                                 ?>
                                 <div id="foldertree"> </div>
                                <div class="tasks-list mt-1">
                                    <div>
                                        <a class="custom-accordion fw-medium d-flex align-items-center"
                                            data-bs-toggle="collapse" href="project-file-manager.html#categories-collapse"
                                            role="button" aria-expanded="false"
                                            aria-controls="categories-collapse">
                                            <i class="mdi mdi-folder-open-outline font-size-16 me-2"></i>All
                                            Files <i
                                                class="mdi mdi-chevron-up font-size-16 accor-down-icon ms-auto"></i>
                                        </a>
                                        <div class="collapse" id="categories-collapse">
                                            <div class="card border-0 shadow-none ps-4 mb-0">
                                                <ul class="list-unstyled font-size-13 mb-0">
                                                    <li><a href="project-file-manager.html#"
                                                            class="d-flex align-items-center text-body"><span
                                                                class="me-auto">Courses Video</span></a>
                                                    </li>
                                                    <li><a href="project-file-manager.html#"
                                                            class="d-flex align-items-center text-body"><span
                                                                class="me-auto">Google Doc</span> <i
                                                                class="fas fa-map-pin text-muted font-size-10 ms-auto"></i></a>
                                                    </li>
                                                    <li><a href="project-file-manager.html#"
                                                            class="d-flex align-items-center text-body"><span
                                                                class="me-auto">Download Files</span></a>
                                                    </li>
                                                    <li><a href="project-file-manager.html#"
                                                            class="d-flex align-items-center text-body"><span
                                                                class="me-auto">Images</span> <i
                                                                class="fas fa-map-pin text-muted font-size-10 ms-auto"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="project-file-manager.html#"><span class="mdi mdi-history me-2"></span>Recent</a>
                                    <a href="project-file-manager.html#" class="d-flex align-items-center"><span
                                            class="mdi mdi-text-box-outline me-2"></span>Doc<span
                                            class="mdi mdi-circle-medium font-size-19 text-warning ms-auto"></span></a>
                                    <a href="project-file-manager.html#"><span class="mdi mdi-star-outline me-2"></span>Important</a>
                                    <a href="project-file-manager.html#"><span
                                            class="mdi mdi-trash-can-outline me-2"></span>Trash</a>
                                    <a href="project-file-manager.html#" class="d-flex align-items-center"><span
                                            class="mdi mdi-cog-outline me-2"></span>Setting<span
                                            class="badge badge-soft-danger ms-auto">01</span></a>
                                </div>
                            </div>

                           
                            <!-- Storage Status -->
                            <div class="mt-auto d-none">
                                <div class="card shadow-none border mb-0">
                                    <div class="card-header border-0 pb-0">
                                        <h4 class="card-title text-muted mb-0">Storage Status</h4>
                                    </div>
                                    <div class="card-body ">
                                        <div class="d-flex">
                                            <div class="flex-grow-1">
                                                <h5 class="text-primary font-size-16 mb-1">42.9 GB</h5>
                                                <p class="mb-0 font-size-12 fw-medium text-muted">Used</p>
                                            </div>
                                            <div>
                                                <h5 class="text-muted font-size-16 mb-1">50 GB</h5>
                                                <p class="mb-0 font-size-12 fw-medium text-primary">Upgrade
                                                </p>
                                            </div>
                                        </div><!-- end -->
                                        <div class="progress animated-progess mt-3" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 15%"
                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                            </div>
                                            <div class="progress-bar bg-warning" role="progressbar"
                                                style="width: 30%" aria-valuenow="30" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger" role="progressbar"
                                                style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div><!-- end -->
                                        <div class="d-flex mt-4 align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-light text-primary rounded fs-6">
                                                    <i class="fas fa-file-image"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Images</h6>
                                                <p class="font-size-12 text-muted mb-0">181,64 files</p>
                                            </div>
                                            <div>
                                                <h6 class="font-size-12 text-primary mb-0">17.77 GB</h6>
                                            </div>
                                        </div><!-- end -->
                                        <div class="d-flex mt-4 align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-light text-warning rounded fs-6">
                                                    <i class="fas fa-file"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Documents</h6>
                                                <p class="font-size-12 text-muted mb-0">1,954 files</p>
                                            </div>
                                            <div>
                                                <h6 class="font-size-12 mb-0 text-primary">275 MB</h6>
                                            </div>
                                        </div><!-- end -->
                                        <div class="d-flex mt-4 align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span
                                                    class="avatar-title bg-light text-danger rounded fs-6">
                                                    <i class="fas fa-video"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Media Files</h6>
                                                <p class="font-size-12 text-muted mb-0">22 files</p>
                                            </div>
                                            <div>
                                                <h6 class="font-size-12 mb-0 text-primary">3.8 GB</h6>
                                            </div>
                                        </div><!-- end -->
                                        <div class="d-flex mt-4 align-items-center">
                                            <div class="avatar-sm flex-shrink-0">
                                                <span class="avatar-title bg-light text-info rounded fs-6">
                                                    <i class="fas fa-folder-open"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h6 class="font-size-14 mb-0">Other Files</h6>
                                                <p class="font-size-12 text-muted mb-0">147 files</p>
                                            </div>
                                            <div>
                                                <h6 class="font-size-12 mb-0 text-primary">47.5 GB</h6>
                                            </div>
                                        </div><!-- end -->
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div>
                        </div>
                    </div><!-- end cardbody-->
                </div><!-- end card -->
                <!-- filemanager-leftsidebar -->

                <div class="w-75">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <form action="#" id="myDropzone" class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <h5 class="font-size-17 text-secondary mb-0"><i class="uil uil-cloud-upload fs-2 me-2 align-middle"></i>Drag & Drop files here to upload</h5>
                                    </div>
                                </form><!-- end form -->
                            </div>

                            <!-- Preview -->
                            <div class="dropzone-previews mt-3" id="file-previews"></div>

                            <!-- file preview template -->
                            <div class="d-none" id="uploadPreviewTemplate">
                                <div class="card mt-1 mb-2 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <img data-dz-thumbnail src="project-file-manager.html#"
                                                    class="avatar-lg img-thumbnail rounded bg-light" alt="">
                                            </div>
                                            <div class="col ps-0">
                                                <a href="javascript:void(0);" class="text-muted fw-bold"
                                                    data-dz-name></a>
                                                <p class="mb-0" data-dz-size></p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="project-file-manager.html" class="btn btn-link text-muted" data-dz-remove>
                                                    <i class="dripicons-cross"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-none">
                                <div class="row">
                                    <div class="col-xl-3 col-sm-6" id="file-google-drive">
                                        <div class="card shadow-none border bg-light">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-end">
                                                    <div class="me-1">
                                                        <a href="project-file-manager.html#" data-bs-toggle="offcanvas"
                                                            data-bs-target=".file-info"><i
                                                                class="fas fa-info-circle text-muted align-middle"></i></a>
                                                    </div>
                                                    <div class="dropdown mb-2">
                                                        <a class="font-size-16 text-muted dropdown-toggle"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-haspopup="true">
                                                            <i class="mdi mdi-dots-vertical"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item text-muted fw-medium"
                                                                href="project-file-manager.html#"><i
                                                                    class="mdi mdi-download me-2"></i>Download</a>
                                                            <a class="dropdown-item text-muted fw-medium"
                                                                href="project-file-manager.html#"><i
                                                                    class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                            <a class="dropdown-item text-muted fw-medium"
                                                                href="project-file-manager.html#"><i
                                                                    class="mdi mdi-clipboard-edit-outline me-2"></i>Rename</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger fw-medium delete-item"
                                                                href="project-file-manager.html#" data-id="file-google-drive"><i
                                                                    class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="avatar-sm mx-auto mb-3">
                                                    <div class="avatar-title bg-transparent rounded">
                                                        <i
                                                            class="fab fa-google-drive display-6 text-secondary"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                            <div class="card-footer">
                                                <div>
                                                    <h6 class="font-size-14 mb-1"><a
                                                            href="javascript: void(0);"
                                                            class="text-body">Google drive</a></h6>
                                                    <p class="font-size-12 fw-medium text-muted mb-2">121.75
                                                        MB</p>
                                                    <p class="font-size-12 text-muted mb-0">Last accessed :
                                                        3 hours ago</p>
                                                </div>
                                            </div><!-- end card footer -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-sm-6" id="file-iCoude">
                                        <div class="card shadow-none border bg-light">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="me-1">
                                                            <a href="project-file-manager.html#" data-bs-toggle="offcanvas"
                                                                data-bs-target=".file-info"><i
                                                                    class="fas fa-info-circle text-muted align-middle"></i></a>
                                                        </div>
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted dropdown-toggle"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-download me-2"></i>Download</a>
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-clipboard-edit-outline me-2"></i>Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger fw-medium delete-item"
                                                                    href="project-file-manager.html#" data-id="file-iCoude"><i
                                                                        class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- end -->
                                                </div>
                                                <div class="avatar-sm mx-auto mb-3">
                                                    <div class="avatar-title bg-transparent rounded">
                                                        <i class="fas fa-cloud display-6 text-primary"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                            <div class="card-footer">
                                                <div>
                                                    <h6 class="font-size-14 mb-1"><a
                                                            href="javascript: void(0);"
                                                            class="text-body">iCloude</a></h6>
                                                    <p class="font-size-12 fw-medium text-muted mb-2">12.97
                                                        KB</p>
                                                    <p class="font-size-12 text-muted mb-0">Last accessed :
                                                        18 hours ago</p>
                                                </div>
                                            </div>
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-sm-6" id="file-Drive">
                                        <div class="card shadow-none border bg-light">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="me-1">
                                                            <a href="project-file-manager.html#" data-bs-toggle="offcanvas"
                                                                data-bs-target=".file-info"><i
                                                                    class="fas fa-info-circle text-muted align-middle"></i></a>
                                                        </div>
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted dropdown-toggle"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-download me-2"></i>Download</a>
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-clipboard-edit-outline me-2"></i>Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger fw-medium delete-item"
                                                                    href="project-file-manager.html#" data-id="file-Drive"><i
                                                                        class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- end -->
                                                </div>
                                                <div class="avatar-sm mx-auto mb-3">
                                                    <div class="avatar-title bg-transparent rounded">
                                                        <i
                                                            class="fas fa-folder-open display-6 text-warning"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                            <div class="card-footer">
                                                <div>
                                                    <h6 class="font-size-14 mb-1"><a
                                                            href="javascript: void(0);"
                                                            class="text-body">Drive</a></h6>
                                                    <p class="font-size-12 fw-medium text-muted mb-2">657.9
                                                        KB</p>
                                                    <p class="font-size-12 text-muted mb-0">Last accessed :
                                                        1 days ago</p>
                                                </div>
                                            </div><!-- end card footer -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-sm-6" id="file-Dropbox">
                                        <div class="card shadow-none border bg-light">
                                            <div class="card-body">
                                                <div>
                                                    <div class="d-flex justify-content-end">
                                                        <div class="me-1">
                                                            <a href="project-file-manager.html#" data-bs-toggle="offcanvas"
                                                                data-bs-target=".file-info"><i
                                                                    class="fas fa-info-circle text-muted align-middle"></i></a>
                                                        </div>
                                                        <div class="dropdown mb-2">
                                                            <a class="font-size-16 text-muted dropdown-toggle"
                                                                role="button" data-bs-toggle="dropdown"
                                                                aria-haspopup="true">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-download me-2"></i>Download</a>
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-content-copy me-2"></i>Copy</a>
                                                                <a class="dropdown-item text-muted fw-medium"
                                                                    href="project-file-manager.html#"><i
                                                                        class="mdi mdi-clipboard-edit-outline me-2"></i>Rename</a>
                                                                <div class="dropdown-divider"></div>
                                                                <a class="dropdown-item text-danger fw-medium delete-item"
                                                                    href="project-file-manager.html#" data-id="file-Dropbox"><i
                                                                        class="mdi mdi-trash-can-outline me-2"></i>Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="avatar-sm mx-auto mb-3">
                                                    <div class="avatar-title bg-transparent rounded">
                                                        <i class="fab fa-dropbox display-6 text-info"></i>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                            <div class="card-footer">
                                                <div>
                                                    <h6 class="font-size-14 mb-1"><a
                                                            href="javascript: void(0);"
                                                            class="text-body">Dropbox</a></h6>
                                                    <p class="font-size-12 fw-medium text-muted mb-2">49 MB
                                                    </p>
                                                    <p class="font-size-12 text-muted mb-0">Last accessed :
                                                        7 hours ago</p>
                                                </div>
                                            </div><!-- end card footer -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div>

                            <div class="mt-4">
                                <div class="d-flex flex-wrap">
                                    <h5 class="font-size-16 me-3">Folder</h5>

                                    <div class="ms-auto d-none">
                                        <a href="javascript: void(0);" class="fw-medium text-reset">View All</a>
                                    </div>
                                </div>
                                <div class="row mt-3">

                                    <?php foreach ($rootItems['folders'] as $folder): ?>
                                    <div class="col-xl-3 col-sm-4">
                                        <div class="card shadow-none border">
                                            <div class="card-body p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0">
                                                        <div class="avatar-sm">
                                                            <div class="avatar-title bg-transparent rounded">
                                                                <i class="fas fa-folder fs-2 text-warning"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1 overflow-hidden ms-3">
                                                        <h5 class="font-size-14 text-truncate mb-1"><a href="/admin/system/files/?folder=<?php echo urlencode($folderSet.$folder); ?>" class="text-body content-loader"><?php echo htmlspecialchars($folder); ?></a></h5>
                                                    </div>
                                                </div>
                                            </div><!-- end cardbody -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                    <?php endforeach; ?>
                                   
                                </div><!-- end row -->
                            </div>

                            <div class="mt-4">
                                <div class="d-flex flex-wrap">
                                    <h5 class="font-size-16">Files</h5>

                                    <div class="ms-auto d-none">
                                        <a href="javascript: void(0);" class="fw-medium text-reset">View All</a>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-middle mb-0">
                                        <thead>
                                            <tr>
                                                <th colspan="2" scope="col">Name</th>
                                                <th scope="col">Date Modified</th>
                                                <th scope="col" colspan="2">Size</th>
                                            </tr><!-- end tr -->
                                        </thead><!-- end thead -->
                                        <tbody>
                                        <?php foreach ($rootItems['files'] as $file): ?>
                                            <tr>
                                               <td>
                                                    <div class="avatar-sm">
                                                        <span
                                                            class="avatar-title bg-soft-primary text-primary rounded-circle">
                                                            <i class="fas fa-file-alt"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="javascript: void(0);"
                                                        class="text-dark fw-medium"><?php echo htmlspecialchars($file); ?></a>
                                                </td>
                                                <td><?php echo date ("F d Y h:i a", filemtime($filePath."/".$file)); ?></td>
                                                <td><?php echo formatSizeUnits(filesize($filePath."/".$file)); ?></td>
                                                <td>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="?download=<?php echo urlencode($file); ?>">Download</a>
                                                            <a class="dropdown-item" href="?edit=<?php echo urlencode($file); ?>">Edit</a>
                                                            <a class="dropdown-item" href="share-file.php?file=<?php echo urlencode($file); ?>">Share</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item delete-item" href="?delete=<?php echo urlencode($file); ?>">Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr><!-- end tr -->


                                           
                                            <?php endforeach; ?>
                                            
                                        </tbody><!-- end tbody -->
                                    </table><!-- end table -->
                                </div><!-- end table responsive -->
                            </div>
                        </div><!-- end cardbody-->
                    </div><!-- end card -->
                </div><!-- end w-100 -->
            </div>
        </div>
    </div><!-- end row -->

    <!-- Right Side Offcanvas -->
    <div>
        <div class="offcanvas file-info offcanvas-end" tabindex="-1" id="offcanvasRight"
            aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header border-bottom border-light">
                <h6 class="text-muted mb-0" id="offcanvasRightLabel"><i
                        class="far fa-file-alt me-2"></i>File Information</h6>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="bg-light py-5 rounded-3 border text-center">
                    <i class="mdi mdi-file-pdf-outline display-1 text-primary"></i>
                </div>
                <div class="mt-4">
                    <span class="badge bg-success px-2">PDF</span>
                    <h5 class="fw-medium font-size-16 mt-2 pb-2">Update Projects and File list</h5>
                </div>
                <hr>
                <div class="py-2">
                    <h5 class="font-size-15">Description</h5>
                    <p class="text-muted mb-0">I will give you complete account of the system, expound the
                        actual teachings of the great explorer of the truth, the master-builder of human
                        happiness.</p>
                </div>
                <hr>
                <div class="pt-2">
                    <h6 class="font-size-15 mb-2">Information</h6>
                    <div class="table-responsive">
                        <table class="table table-borderless table-sm mb-0">
                            <tbody>
                                <tr>
                                    <th class="text-muted font-size-14"><i
                                            class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Created
                                        By</th>
                                    <th class="text-end font-size-13">Denny Silvan</th>
                                </tr>
                                <tr>
                                    <th class="text-muted font-size-14"><i
                                            class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Modified
                                        At</th>
                                    <th class="text-end font-size-13">22 Jun , 2021</th>
                                </tr>
                                <tr>
                                    <th class="text-muted font-size-14"><i
                                            class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Size
                                    </th>
                                    <th class="text-end font-size-13">486.67 KB</th>
                                </tr>
                                <tr>
                                    <th class="text-muted font-size-14"><i
                                            class="mdi mdi-circle-medium fs-5 align-middle text-info me-1"></i>Type
                                    </th>
                                    <th class="text-end font-size-13">PDF</th>
                                </tr>
                            </tbody><!-- end tbody -->
                        </table><!-- end table -->
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-around pt-2">
                    <div>
                        <div class="avatar">
                            <span class="avatar-title bg-soft-primary text-primary rounded-3">
                                <i class="mdi mdi-export-variant mdi-24px"></i>
                            </span>
                        </div>
                        <div class="text-center mt-2">
                            <p class="text-muted font-size-12 fw-medium mb-0">Share</p>
                        </div>
                    </div>
                    <!-- end -->
                    <div>
                        <div class="avatar">
                            <span class="avatar-title bg-soft-success text-success rounded-3">
                                <i class="mdi mdi-file-edit-outline mdi-24px"></i>
                            </span>
                        </div>
                        <div class="text-center mt-2">
                            <p class="text-muted font-size-12 fw-medium mb-0">Edit</p>
                        </div>
                    </div>
                    <!-- end -->
                    <div>
                        <div class="avatar">
                            <span class="avatar-title bg-soft-danger text-danger rounded-3">
                                <i class="mdi mdi-trash-can-outline mdi-24px"></i>
                            </span>
                        </div>
                        <div class="text-center mt-2">
                            <p class="text-muted font-size-12 fw-medium mb-0">Delete</p>
                        </div>
                    </div>
                    <!-- end -->
                </div>
            </div><!-- end offcanvas body-->
        </div><!-- end offcanvas-->
    </div>

</div> <!-- container-fluid -->

<!-- dropzone js -->
	
<link rel="stylesheet" href="/assets/vendor/foldertree/foldertree.css" type="text/css" >
<script src="/assets/vendor/foldertree/foldertree.js"></script>


<script src="/assets/admin/assets/js/pages/remove.init.js"></script>

<script src="/assets/admin/assets/js/pages/file-manager.init.js"></script>