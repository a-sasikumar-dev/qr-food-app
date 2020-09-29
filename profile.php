<?php include "adminpanel_header.html" ?>
    <div class="adminpage-title">
        <h1>Profile</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
            <div class="profile-page-container">
                <form>
                    <div class="profile-information-cont">
                        <div class="profile-pic-info">
                            <div class="avatar-with-name">
                                <div class="avatar-wrapper">
                                    <img class="profile-pic" src="" />
                                    <div class="upload-button">
                                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                    </div>
                                    <input class="file-upload" type="file" accept="image/*"/>
                                </div>
                                <h6 class="profile-user-name">Sasikumar</h6>
                            </div>
                        </div>
                        <div class="profile-details-information">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#ProfileGeneralInformation" role="tab" data-toggle="tab">General Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#ProfileContacts" role="tab" data-toggle="tab">Contacts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#ProfileAddress" role="tab" data-toggle="tab">Address</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="ProfileGeneralInformation">
                                assdfsdf
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ProfileContacts">
                                    bbb
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="ProfileAddress">
                                    ccc
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php include "adminpanel_footer.html" ?>        