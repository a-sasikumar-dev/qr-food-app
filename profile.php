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
                            <div class="accordion billing-accordion" id="accordionBilling" role="tablist">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="bill-title">
                                            <h5 data-toggle="" data-parent="#accordionBilling" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1" role="tab" id="headingOne1">Billing Information</h5>
                                        </div>
                                        <div class="edit-icon-acc">
                                            <span class="edit-icon" data-toggle="collapse" data-parent="#accordionBilling" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2" role="tab" id="headingTwo2"><a class="common-tooltipbox"><i class="fa fa-edit"></i>
                                            <div class="admin-common-tooltip">
                                                <span class="tool-text">Edit Billing Informations</span>
                                            </div></a></span>
                                        </div>
                                    </div>
                                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1" data-parent="#accordionBilling">
                                        <div class="card-body billinginformation-box">
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">Name</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">Sasikumar</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">Email</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">dsaf@gmail.com</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">Phone</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">1234567890</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">Address</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">1, clock tower, Peak.</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">City</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">Madurai</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">State</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">Tamilnadu</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">Country</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">India</p>
                                                </div>
                                            </div>
                                            <div class="row align-items-center table-border">
                                                <div class="col-md-4">
                                                    <p class="billing-title-name">Pin code</p>
                                                </div>
                                                <div class="text-center">
                                                    <span class="split-billing">:</span>
                                                </div>
                                                <div class="col-md-7">
                                                    <p class="billing-title-information">625012</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2" data-parent="#accordionBilling">
                                        <div class="card-body">
                                            <form>
                                                <div class="admin-panel-form">
                                                    <div class="row">
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder=" ">
                                                                <label class="adminpanel-formlabel">Name</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control" placeholder=" ">
                                                                <label class="adminpanel-formlabel">Email</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder=" ">
                                                                <label class="adminpanel-formlabel">Phone</label>
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
                                                        <button class="common-button-admin" type="button" data-toggle="collapse" data-parent="#accordionBilling" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1" role="tab" id="headingOne1">Cancel</button>
                                                    </div>
                                                </div>
                                            </form> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Plan" role="tabpanel" aria-labelledby="Plan-tab">
                            <div class="pricing-plan-container">
                                <div class="pricing-plan-row">
                                    <div class="pricing-plan-col">
                                        <div class="pricing-header">
                                            <h4>Starter Menu</h4>
                                        </div>
                                        <div class="pricing-body">
                                            <div class="pricing-image-body">
                                                <div class="pricing-image">
                                                    <img src="assets/images/coffee.png">
                                                </div>
                                            </div>
                                            <div class="pricing-price">
                                                <h3><span class="pricing-currency-symbol">₹</span> 2,000</h3>
                                                <p class="pricing-period">billed monthly</p>
                                            </div>
                                            <ul class="services-list">
                                                <li>Unlimited Menus</li>
                                                <li>Free Onboarding Session</li>
                                                <li>Free Onboarding Session</li>
                                                <li>Unlimited Menus</li>
                                            </ul>
                                        </div>
                                        <div class="pricing-footer">
                                            <button type="button" class="subscribe-btn">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-col">
                                        <div class="pricing-header">
                                            <h4>Silver Menu</h4>
                                        </div>
                                        <div class="pricing-body">
                                            <div class="pricing-image-body">
                                                <div class="pricing-image">
                                                    <img src="assets/images/coffee+hamburger.png">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-footer">
                                            <button type="button" class="subscribe-btn">Subscribe</button>
                                        </div>
                                    </div>
                                    <div class="pricing-plan-col">
                                        kjsdkljfsdfj
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "adminpanel_footer.html" ?>        