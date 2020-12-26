<?php include "adminpanel_header.html" ?>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-7 col-sm-12 col-12">
            <div class="venue-form-box">
                <h4 class="venue-head">Your Venue Information</h4>
                <div class="admin-panel-form">
                    <form>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Venue Name</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Phone</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
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
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">City</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">State</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-countries" data-country="US" data-flags="true"></select>
                                    <label class="adminpanel-formlabel">Country</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Pincode</label>
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
        <div class="col-xl-6 col-lg-6 col-md-5 col-sm-12 col-12">
            <div class="venue-form-box app-config">
                <h4 class="venue-head">App Config</h4>
                <div class="admin-panel-form ">
                    <form>
                        <div class="form-group">
                            <div class="row app-config-row">
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-6 col-12 app-config-col">
                                    <div class="config-title">
                                        <h5>Information</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Info Button</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="config-title">
                                        <h5>Feedback</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Feedback Button</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="config-title">
                                        <h5>Icon Labels</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Icon Labels</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="config-title">
                                        <h5>Video</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">AutoPlay Video</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="config-title">
                                        <h5>Logo</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Logo</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-6 col-12 app-config-col">
                                    <div class="config-title">
                                        <h5>Languages</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display language button</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox" checked>
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="config-title">
                                        <h5>Order</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Order Enabled</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox" checked>
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Add Button on Grid Item</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Order Submit Enabled</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="config-title">
                                        <h5>Currency</h5>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Prices</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Currency Sign</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                            <div class="config-item-txt">Display Currency Fraction</div>
                                        </div>
                                        <div class="col-xl-4 col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 text-right toggle-spacing">
                                            <label class="menu-enable-disable">
                                                <input class="menu-enable-disable-switch" type="checkbox">
                                                <span class="menu-enable-disable-slider"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="config-title title-spacing">
                            <h5>Menu Button</h5>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder=" ">
                                    <label class="adminpanel-formlabel">Text of the Menu Button</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-languages" data-language="en"></select>
                                    <label class="adminpanel-formlabel">Languages</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
                                <div class="form-group">
                                    <select class="form-control selectpicker bfh-currencies" data-currency="INR" data-hide-disabled="true"></select>
                                    <label class="adminpanel-formlabel">Currency code</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-6 col-12">
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
        </div>
    </div>
<?php include "adminpanel_footer.html" ?>