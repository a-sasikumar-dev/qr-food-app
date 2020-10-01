<?php include "adminpanel_header.html" ?>
    <div class="adminpage-title">
        <h1>Profile</h1>
    </div>
    <div class="profile-page-container">
        <form>
            <div class="profile-information-container row">
                <div class="custom-profile-col left">
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
                </div>
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