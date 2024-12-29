<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between page-header-breadcrumb flex-wrap gap-2 mt-5">
        <div>
            <nav aria-label="breadcrumb" class="mb-1">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/dashboard">Admin</a></li>
                    <li class="breadcrumb-item"><a class="content-loader" href="/admin/users">User Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                </ol>
            </nav>
            <h1 class="page-title fw-medium fs-18 mb-0">Profile Settings</h1>
            <p class="lead">Manage the users profile fields, style, and features.</p>
    
        </div>
        <div class="btn-list">
            <button class="btn-wave undefined btn btn-white mr-5">
            <i class="fa-duotone fa-solid fa-filter"></i> Filter
            </button>
            <button class="btn-wave me-0 btn btn-primary">
            <i class="fa-duotone fa-solid fa-share"></i> Share
            </button>
        </div>
    </div>


    
    <div class="col-12">
        <div class="custom-card card">
            <div class="nav-tabs tab-style-8 scaleX rounded m-3 profile-settings-tab gap-2 nav" id="myTab4" role="tablist">
                <div class=" me-1 nav-item" role="presentation"><a id="tab-account" data-bs-toggle="tab" data-bs-target="#account-pane" type="button" role="tab" aria-controls="react-aria-:R3nrrmttfb:-tabpane-account" aria-selected="true" data-rr-ui-event-key="account" class="px-4 bg-primary-transparent nav-link active" tabindex="0" href="#">Account</a></div>
                <div class=" me-1 nav-item" role="presentation"><a id="tab-notification" data-bs-toggle="tab" data-bs-target="#notification-pane" type="button" role="tab" aria-controls="react-aria-:R3nrrmttfb:-tabpane-notification" aria-selected="false" data-rr-ui-event-key="notification" tabindex="-1" class="px-4 bg-primary-transparent nav-link" href="#">Notification</a></div>
                <div class="nav-item" role="presentation"><a id="tab-security" data-bs-toggle="tab" data-bs-target="#security-pane" type="button" role="tab" aria-controls="react-aria-:R3nrrmttfb:-tabpane-security" aria-selected="false" tabindex="-1" data-rr-ui-event-key="security" class="px-4 bg-primary-transparent nav-link" href="#">Security</a></div>
            </div>

            <script type="text/javascript">
                $('#create').submit(function() { // catch the form's submit event
                    $.ajax({ // create an AJAX call...
                        type: 'POST',
                        url: '/admin/profile/updateAction/',
                        enctype: 'multipart/form-data',
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function(response) { // on success..
                            $('#main-content').html(response); // update the DIV
                        }
                    });
                    return false; // cancel original event to prevent form submitting
                });
            </script>

            <form id="create" method="post" action="/admin/profile/updateAction/" enctype="multipart/form-data">
                <div class="p-3 border-bottom border-top border-block-end-dashed tab-content">
                    <div id="account-pane" tabindex="0" role="tabpanel" class="fade overflow-hidden p-0 border-0 tab-pane active show">
                        
                        <div class="row gy-3">
                            <div class="col-xl-12">
                                <div class="d-flex align-items-start flex-wrap gap-3">
                                    <div><span class="avatar avatar-xxl"><img src="/assets/admin/assets/images/users/profile.png" alt=""></span></div>
                                    <div><span class="fw-medium d-block mb-2">Profile Picture</span>
                                        <div class="btn-list mb-1"><button class="btn-wave undefined btn btn-primary btn-sm"><i class="ri-upload-2-line me-1"></i>Change Image</button><button class="btn-wave undefined btn btn-primary1-light btn-sm"><i class="ri-delete-bin-line me-1"></i>Remove</button></div><span class="d-block fs-12 text-muted">Use JPEG, PNG, or GIF. Best size: 200x200 pixels. Keep it under 5MB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6"><label class="form-label" for="profile-users_name">User Name :</label><input placeholder="Enter Name" type="text" id="profile-users_name" class="form-control" value=""></div>
                            <div class="col-xl-6"><label class="form-label" for="profile-email">Email :</label><input placeholder="Enter Email" type="email" id="profile-email" class="form-control" value=""></div>
                            <div class="col-xl-6"><label class="form-label" for="profile-designation">Designation :</label><input placeholder="Enter Designation" type="text" id="profile-designation" class="form-control" value=""></div>
                            <div class="col-xl-6"><label class="form-label" for="profile-language">Language :</label><!--$!--><template data-dgst="BAILOUT_TO_CLIENT_SIDE_RENDERING"></template><!--/$--></div>
                            <div class="col-xl-6"><label class="form-label" for="profile-phn-no">Phone No :</label><input placeholder="Enter Number" type="text" id="profile-phn-no" class="form-control" value=""></div>
                            <div class="col-xl-6"><label class="form-label" for="website">Website :</label><input placeholder="https://" type="text" id="website" class=" bg-light form-control" value="https://www.website.com"></div>
                            <div class="col-xl-12"><label class="form-label" for="profile-address">Address :</label><textarea rows="3" placeholder="Address" id="profile-address" class="form-control"></textarea></div>
                        </div>
                    </div>
                    <div id="notification-pane" tabindex="0" role="tabpanel" class="fade overflow-hidden p-0 border-0 tab-pane">
                        
                        <div class="row gx-5 gy-3">
                            <div class="col-xl-12">
                                <p class="fs-14 mb-1 fw-medium">Configure Notifications</p>
                                <p class="fs-12 mb-0 text-muted">Users can tailor their experience to receive alerts for the types of events that matter to them.</p>
                            </div>
                            <div class="col-xl-12">
                                <div class="d-flex align-items-top justify-content-between mt-3">
                                    <div class="mail-notification-settings">
                                        <p class="fs-14 mb-1 fw-medium">Push Notifications</p>
                                        <p class="fs-12 mb-0 text-muted">Alerts sent to the user's mobile device or desktop.</p>
                                    </div>
                                    <div class="toggle mb-0 float-sm-end  toggle-success on"><span></span></div>
                                    
                                </div>
                                <div class="d-flex align-items-top justify-content-between mt-3">
                                    <div class="mail-notification-settings">
                                        <p class="fs-14 mb-1 fw-medium">Email Notifications</p>
                                        <p class="fs-12 mb-0 text-muted">Messages sent to the user's email address.</p>
                                    </div>
                                    <div class="toggle mb-0 float-sm-end  toggle-success off"><span></span></div>
                                </div>
                                <div class="d-flex align-items-top justify-content-between mt-3">
                                    <div class="mail-notification-settings">
                                        <p class="fs-14 mb-1 fw-medium">In-App Notifications</p>
                                        <p class="fs-12 mb-0 text-muted">Alerts that appear within the application interface.</p>
                                    </div>
                                    <div class="toggle mb-0 float-sm-end  toggle-success off"><span></span></div>
                                </div>
                                <div class="d-flex align-items-top justify-content-between mt-3">
                                    <div class="mail-notification-settings">
                                        <p class="fs-14 mb-1 fw-medium">SMS Notifications</p>
                                        <p class="fs-12 mb-0 text-muted">Text messages sent to the user's mobile phone.</p>
                                    </div>
                                    <div class="toggle mb-0 float-sm-end  toggle-success on"><span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="security-pane" tabindex="0" role="tabpanel" class="fade overflow-hidden p-0 border-0 tab-pane">
                        
                        <div class="d-sm-flex d-block align-items-top justify-content-between">
                            <div class="w-50">
                                <p class="fs-14 mb-1 fw-medium">Verification</p>
                                <p class="fs-12 mb-0 text-muted">Control how your profile information is verified for security purposes.</p>
                                <div class="d-flex gap-4 mt-10">
                                    <div class="form-check "><input class="form-check-input" type="checkbox" id="email-notifications01" checked="" value=""><label class="form-check-label" for="email-notifications01">Email</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="sms-notifications01" value=""><label class="form-check-label" for="sms-notifications01">SMS</label></div>
                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="phone-notifications" value=""><label class="form-check-label" for="phone-notifications">Phone</label></div>
                                </div>
                            </div>
                            <div class="toggle mb-0 float-sm-end  toggle-success off"><span></span></div>
                            
                        </div>
                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                            <div class="w-50">
                                <p class="fs-14 mb-1 fw-medium">Login Verification</p>
                                <p class="fs-12 mb-0 text-muted">This helps protect accounts from unauthorized access, even if a password is compromised.</p>
                            </div>
                            <a class="link-primary text-decoration-underline" href="#!">Set Up Verification</a>
                        </div>
                        <div class="d-sm-flex d-block align-items-top justify-content-between mt-3">
                            <div class="w-50">
                                <p class="fs-14 mb-1 fw-medium">Password Verification</p>
                                <p class="fs-12 mb-0 text-muted">This additional step helps ensure that the person attempting to modify account details is the legitimate account owner.</p>
                            </div>
                            
                            <div class="toggle mb-0 float-sm-end  toggle-success off"><span></span></div>
                                
                        </div>
                    </div>
                </div>
                <div class="card-footer border-top-0">
                    <div class="btn-list float-end"><button class="btn-wave undefined btn btn-primary2">Deactivate Account</button><button class="btn-wave undefined btn btn-primary">Save Changes</button></div>
                </div>
            </form>
        </div>
    </div>
    <
</div>
<script>
    $(function() {
        $('.toggle').click(function() {
            $(this).toggleClass('on');
        });
    });
</script>
      