<?php include "adminpanel_header.html" ?>
    <div class="adminpage-title">
        <h1>Profile</h1>
    </div>
    <div class="profile-page-container">
        <form>
            <div class="profile-information-container">
                <div class="profile-form-box">
                    <div class="inner-box inner-box-left">
                        <div class="info-box">
                            <span class="profile-arrow right"></span>
                            <div class="icon-box">
                                <i class="fas fa-user profile-info-icon"></i>
                            </div>
                            <div class="profile-pic-info">
                                <h4 class="profile-title">Sasikumar</h4>
                                <div class="avatar-with-name">
                                    <div class="avatar-wrapper">
                                        <img class="profile-pic" src="assets/images/profile-default-icon.png" />
                                        <div class="upload-button">
                                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                        </div>
                                        <input class="file-upload" type="file" accept="image/*"/>
                                    </div>
                                </div>
                                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="profile-ill-img">
                        <img src="assets/images/personal_profile.png" />
                    </div>
                </div>
                <div class="profile-form-box">
                    <div class="inner-box inner-box-right">
                        <div class="info-box">
                            <span class="profile-arrow left"></span>
                            <div class="icon-box">
                                <i class="fas fa-user-edit profile-info-icon"></i>
                            </div>
                            <div class="admin-panel-form">
                                <h4 class="profile-title">General Information</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Name</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Email</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Website</label>
                                </div>
                               
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-currencies" data-currency="INR" data-hide-disabled="true"></select>
                                    <label class="adminpanel-formlabel">Currency code</label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-timezones" data-country="IN"></select>
                                    <label class="adminpanel-formlabel">Time Zone</label>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="profile-ill-img left">
                        <img src="assets/images/profile-edit.png" />
                    </div>
                </div>
                <div class="profile-form-box">
                    <div class="inner-box inner-box-left">
                        <div class="info-box">
                            <span class="profile-arrow right"></span>
                            <div class="icon-box">
                                <i class="fas fa-id-card profile-info-icon"></i>
                            </div>
                            <div class="admin-panel-form">
                                <h4 class="profile-title">Contacts</h4>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Phone</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Email</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-form-box">
                    <div class="inner-box inner-box-right">
                        <div class="info-box">
                            <span class="profile-arrow left"></span>
                            <div class="icon-box">
                                <i class="fas fa-street-view profile-info-icon"></i>
                            </div>
                            <div class="admin-panel-form">
                                <h4 class="profile-title">Address</h4>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder=" "></textarea>
                                    <label class="adminpanel-formlabel">Street Address</label>
                                </div>
                                <div class="row adress-botom-margin">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile-form-box">
                    <div class="inner-box inner-box-left">
                        <div class="info-box">
                            <span class="profile-arrow right"></span>
                            <div class="icon-box">
                                <i class="fas fa-id-card profile-info-icon"></i>
                            </div>
                            <div class="admin-panel-form">
                                <h4 class="profile-title">Social Information</h4>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.instagram.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.linkedin.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.twitter.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.youtube.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-pinterest"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.pinterest.com/profile/">
                                </div>
                            </div>
                            <ul class="social-get-links">
                                <li><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-6 profile-box-left">
                        <div class="profile-box">
                            <div class="bg-img-profile">
                                <img src="assets/images/pizza.jpg">
                            </div>
                            <div class="profile-pic-info">
                                <h4 class="profile-title">Sasikumar</h4>
                                <div class="avatar-with-name">
                                    <div class="avatar-wrapper">
                                        <img class="profile-pic" src="assets/images/profile-default-icon.png" />
                                        <div class="upload-button">
                                            <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                        </div>
                                        <input class="file-upload" type="file" accept="image/*"/>
                                    </div>
                                </div>
                                <p class="profile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            </div>
                            <div class="profile-tab">
                                <ul class="nav nav-tabs justify-content-center" id="profileTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="GeneralInformation-tab" data-toggle="tab" href="#GeneralInformation" role="tab" aria-controls="GeneralInformation" aria-selected="true">General Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Contacts-tab" data-toggle="tab" href="#Contacts" role="tab" aria-controls="Contacts" aria-selected="false">Contacts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Address-tab" data-toggle="tab" href="#Address" role="tab" aria-controls="Address" aria-selected="false">Address</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="SocialInfromation-tab" data-toggle="tab" href="#SocialInfromation" role="tab" aria-controls="SocialInfromation" aria-selected="false">Social Infromation</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 profile-box-right">
                        <div class="profile-information-box">
                            <div class="tab-content" id="profileTabContent">
                                <div class="tab-pane fade show active" id="GeneralInformation" role="tabpanel" aria-labelledby="GeneralInformation-tab">
                                    <div class="admin-panel-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" ">
                                            <label class="adminpanel-formlabel">Name</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder=" ">
                                            <label class="adminpanel-formlabel">Email</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" ">
                                            <label class="adminpanel-formlabel">Website</label>
                                        </div>
                                       
                                        <div class="form-group">
                                            <select class="form-control selectpicker bfh-currencies" data-currency="INR" data-hide-disabled="true"></select>
                                            <label class="adminpanel-formlabel">Currency code</label>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control selectpicker bfh-timezones" data-country="IN"></select>
                                            <label class="adminpanel-formlabel">Time Zone</label>
                                        </div>
                                    </div>       
                                </div>
                                <div class="tab-pane fade" id="Contacts" role="tabpanel" aria-labelledby="Contacts-tab">
                                    <div class="admin-panel-form">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" ">
                                            <label class="adminpanel-formlabel">Phone</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder=" ">
                                            <label class="adminpanel-formlabel">Email</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="Address" role="tabpanel" aria-labelledby="Address-tab">
                                    <div class="admin-panel-form">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder=" "></textarea>
                                            <label class="adminpanel-formlabel">Street Address</label>
                                        </div>
                                        <div class="row adress-botom-margin">
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
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="SocialInfromation" role="tabpanel" aria-labelledby="SocialInfromation-tab">
                                    <div class="admin-panel-form">
                                        <div class="form-group input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="https://www.facebook.com/profile/">
                                        </div>
                                        <div class="form-group input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="https://www.instagram.com/profile/">
                                        </div>
                                        <div class="form-group input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="https://www.linkedin.com/profile/">
                                        </div>
                                        <div class="form-group input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="https://www.twitter.com/profile/">
                                        </div>
                                        <div class="form-group input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="https://www.youtube.com/profile/">
                                        </div>
                                        <div class="form-group input-group">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fab fa-pinterest"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="https://www.pinterest.com/profile/">
                                        </div>
                                        <ul class="social-get-links">
                                            <li><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                            <li><a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="custom-profile-col left">
                    <div class="profile-common-box">
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
                        </div>
                        <div class="common-infor-box">
                            <h4 class="profile-title">Sasikumar</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
                <div class="custom-profile-col right">
                    <div class="profile-common-box">
                        <div class="profile-pic-info">
                            <div class="avatar-with-name">
                                <div class="avatar-wrapper">
                                    <i class="fas fa-id-card profile-info-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="common-infor-box">
                            <h4 class="profile-title">Contacts</h4>
                            <div class="admin-panel-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Phone</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Email</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-profile-col left">
                    <div class="profile-common-box">
                        <div class="profile-pic-info">
                            <div class="avatar-with-name">
                                <div class="avatar-wrapper">
                                    <i class="fas fa-user-edit profile-info-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="common-infor-box">
                            <h4 class="profile-title">General Information</h4>
                            <div class="admin-panel-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Name</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Email</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Website</label>
                                </div>
                               
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-currencies" data-currency="INR" data-hide-disabled="true"></select>
                                    <label class="adminpanel-formlabel">Currency code</label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-timezones" data-country="IN"></select>
                                    <label class="adminpanel-formlabel">Time Zone</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-profile-col right">
                    <div class="profile-common-box">
                        <div class="profile-pic-info">
                            <div class="avatar-with-name">
                                <div class="avatar-wrapper">
                                    <i class="fas fa-street-view profile-info-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="common-infor-box">
                            <h4 class="profile-title">Address</h4>
                            <div class="admin-panel-form">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder=" "></textarea>
                                    <label class="adminpanel-formlabel">Street Address</label>
                                </div>
                                <div class="row adress-botom-margin">
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-profile-col left">
                    <div class="profile-common-box">
                        <div class="profile-pic-info">
                            <div class="avatar-with-name">
                                <div class="avatar-wrapper">
                                    <i class="fas fa-people-arrows profile-info-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="common-infor-box">
                            <h4 class="profile-title">Social Information</h4>
                            <div class="admin-panel-form">
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.facebook.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.instagram.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.linkedin.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.twitter.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.youtube.com/profile/">
                                </div>
                                <div class="form-group input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fab fa-pinterest"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="https://www.pinterest.com/profile/">
                                </div>
                            </div>
                            <ul class="social-get-links">
                                <li><a href="#" title="Facebook" target="_blank"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" title="Linkedin" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#" title="Pinterest" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="profile-information-cont">
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
                        </div>
                        <div class="general-information-cont">
                            <h5 class="profile-title">General Information</h5>
                            <div class="admin-panel-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Name</label>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Email</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Website</label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" placeholder=" ">
                                        <option>one</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                        <option>Four</option>
                                    </select>
                                    <label class="adminpanel-formlabel">Currency code</label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" placeholder=" ">
                                        <option>Time Zone</option>
                                        <option>one</option>
                                        <option>Two</option>
                                        <option>Three</option>
                                        <option>Four</option>
                                    </select>
                                    <label class="adminpanel-formlabel">Time Zone</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <div class="profile-details-information">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#ProfileContacts" role="tab" data-toggle="tab">Contacts</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ProfileAddress" role="tab" data-toggle="tab">Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#ProfileMoreInformation" role="tab" data-toggle="tab">More Information</a>
                            </li>
                        </ul>                           
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="ProfileContacts">
                                aaa
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ProfileAddress">
                                bbb
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ProfileMoreInformation">
                            cccc
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <button class="save-button-profile" type="submit">
                <i class="fa fa-save"></i> <span>Save</span>
            </button>
        </form>
    </div>
<?php include "adminpanel_footer.html" ?>        