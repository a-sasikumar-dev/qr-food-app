<?php include "adminpanel_header.html" ?>
    <div class="row">
        <div class="col-xl-6">
            <div class="venue-form-box">
                <h4 class="venue-head">Your Venue Information</h4>
                <div class="admin-panel-form">
                    <form>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Venue Name</label>
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
                            <label class="adminpanel-formlabel">Address</label>
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
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-currencies" data-currency="INR" data-hide-disabled="true"></select>
                                    <label class="adminpanel-formlabel">Currency code</label>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-timezones" data-country="IN"></select>
                                    <label class="adminpanel-formlabel">Time Zone</label>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="common-button-admin save" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="venue-form-box">
                <h4 class="venue-head">Social Information</h4>
                <div class="admin-panel-form">
                    <form>
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
                        <div class="text-center">
                            <button class="common-button-admin save" type="submit">Save</button>
                        </div>
                    </form>
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
        <div class="col-xl-6">
            <div class="venue-form-box app-config">
                <h4 class="venue-head">App Config</h4>
                <div class="admin-panel-form ">
                    <form>
                        <div class="config-title">
                            <h5>Order</h5>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-10">
                                            <div class="config-item-txt">Order Enabled</div>
                                        </div>
                                        <div class="col-xl-2 text-right">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="row">
                                        <div class="col-xl-10">
                                            <div class="config-item-txt">Menu Enabled</div>
                                        </div>
                                        <div class="col-xl-2 text-right">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-control selectpicker bfh-timezones" data-country="IN"></select>
                            <label class="adminpanel-formlabel">Time Zone</label>
                        </div>
                        <div class="text-center">
                            <button class="common-button-admin save" type="submit">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php include "adminpanel_footer.html" ?>