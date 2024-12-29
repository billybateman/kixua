<div class="container-fluid">
    <h4 class="mb-0">Migrations</h1>
    <a href="/admin/system/migrations/?action=create" class="btn btn-primary mb-3 content-loader">Create New Migration</a>
    <a href="/admin/system/migrations/?action=createModels" class="btn btn-primary mb-3 content-loader">Create Models</a>
    <a href="javascript:void(0);" onclick="return runMigrations();" class="btn btn-primary mb-3">Run Migrations</a>
    <script>

        <?php if(isset($toaster)){ ?>
            toastr.success('<?php echo $toaster['message']; ?>', '<?php echo $toaster['title']; ?>');
        <?php } ?>
        function runMigrations() {
            swal({
                title: "Run Migrations?",
                text: "This will run the migrations on the mysql database. Are you sure?",
                type: "warning",
                userCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Run Migrations",
                cancelButtonText: "Cancel"
            }).then((value) => {
                console.log(value);
                console.log(value.value);
                if (value .value) {
                    $('#main-content').delay( 800 ).load('/admin/system/migrations/?action=run');
                }
            });

            return false;
        }
    </script>
    <ul>
        <?php foreach ($migrations as $migration): ?>
            <li><?php echo $migration; ?></li>
        <?php endforeach; ?>
     </ul>
     <?php if(count($migrations) == 0){ ?><p>No migrations found.</p> <?php } ?>
   
</div>
