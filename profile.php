<?php include "adminpanel_header.html" ?>
    <!-- <div class="adminpage-title">
        <h1>Profile</h1>
    </div> -->
<div class="profile-page-tab">
    <div class="row justify-content-center">
        <div class="col-xl-12">
            <div class="profile-information-tab">
                <div class="profile-tab">
                    <ul class="nav nav-tabs" id="profileTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="Profile-tab" data-toggle="tab" href="#Profile" role="tab" aria-controls="Profile" aria-selected="true">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Billing-tab" data-toggle="tab" href="#Billing" role="tab" aria-controls="Billing" aria-selected="false">Billing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Plan-tab" data-toggle="tab" href="#Plan" role="tab" aria-controls="Plan" aria-selected="false">Plan</a>
                        </li>
                    </ul>
                </div>
                <div class="profile-information-box">
                    <div class="tab-content" id="profileTabContent">
                        <div class="tab-pane fade show active" id="Profile" role="tabpanel" aria-labelledby="Profile-tab">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="profile-box-left">
                                        <div class="profile-bg-img">
                                            <img src="assets/images/persona-profile-vector.png" />
                                        </div>
                                        <div class="profile-pic-info">
                                            <div class="avatar-with-name">
                                                <div class="avatar-wrapper">
                                                    <img class="profile-pic" src="assets/images/profile-default-icon.png" />
                                                    <div class="upload-button">
                                                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                                    </div>
                                                    <input class="file-upload" type="file" accept="image/*"/>
                                                </div>
                                            </div>
                                            <h4 class="profile-name-pro">Sasikumar</h4>
                                            <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <form>
                                        <div class="admin-panel-form">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label class="adminpanel-formlabel">Name</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder=" ">
                                                        <label class="adminpanel-formlabel">Email</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label class="adminpanel-formlabel">Phone</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label class="adminpanel-formlabel">Website</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder=" "></textarea>
                                                <label class="adminpanel-formlabel">Street Address</label>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label class="adminpanel-formlabel">City</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label class="adminpanel-formlabel">State</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <select class="form-control selectpicker bfh-countries" data-country="US" data-flags="true" data-hide-disabled="true"></select>
                                                        <label class="adminpanel-formlabel">Country</label>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label class="adminpanel-formlabel">Pincode</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <button class="common-button-admin save" type="submit">Save</button>
                                            </div>
                                        </div>
                                    </form>     
                                </div> 
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Billing" role="tabpanel" aria-labelledby="Billing-tab">
                            <div class="admin-panel-form">
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Plan" role="tabpanel" aria-labelledby="Plan-tab">
                            <div class="admin-panel-form">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "adminpanel_footer.html" ?>        