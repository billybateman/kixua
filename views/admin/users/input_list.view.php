<table>
    <?php                        
                        
    foreach($data as $row){ 
        $row = (object)$row;
        $thumbnail = "/assets/admin/assets/images/users/profile.png";
        if($row->images_file){
            $thumbnail = $row->images_file;
        }
        
        ?> 
        <tr>
            <td class="text-left">
                <?php
                $managerName = $row->users_first_name . " " .$row->users_last_name;
                $managerId = $row->users_id;
                ?>
                <a href="javascript:void(0);" onclick="$('#projects_managers_users_id').val('<?php echo $managerId; ; ?>'); $('#projects_manager').val('<?php echo $managerName; ?>'); $('#users_suggestions').html('').hide();">
                <div class="d-flex align-items-center">
                        <div class="me-2">
                            <span class="avatar avatar-rounded p-1 bg-medium-transparent">
                                <img alt="" src="<?php echo $thumbnail; ?>">
                            </span>
                        </div>
                        <div class="flex-fill">
                            <?php echo $row->users_first_name; ?> <?php echo $row->users_last_name; ?>
                            <span class="text-muted d-block fs-12"><?php echo $row->users_email; ?></span>
                        </div>
                    </div>
                </a>
            </td>
        </tr>
    <?php 
    } 
    ?>
</table>

<script>
$(document).ready(function() {

    function setManager(managerName, managerId) {
        $('#projects_managers_users_id').val(managerId);
        $('#projects_manager').val(managerName);
        $('#users_suggestions').html('').hide();
    }
});
</script>