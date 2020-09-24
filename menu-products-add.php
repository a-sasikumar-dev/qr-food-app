<?php include "adminpanel_header.html" ?>
    <div class="adminpage-title">
        <h1>Chicken</h1>
    </div>
    <div class="admin-productadd-container">
        <a href="#">
            <div class="product-back common-button-admin">
                <p><i class="fa fa-angle-left"></i> Back</p>
            </div>
        </a>
        <div class="row">
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
                <div class="product-add-section">
                    <div class="admin-panel-form">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder=" ">
                                <label class="adminpanel-formlabel">Name</label>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" placeholder=" ">
                                        <label class="adminpanel-formlabel">Regular Price</label>
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" placeholder=" ">
                                        <label class="adminpanel-formlabel">Selling Price</label>
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control" placeholder=" ">
                                        <label class="adminpanel-formlabel">Discount</label>
                                        <div class="input-group-append">
                                            <span class="input-group-text">%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="form-group common_custom_radio">
                                        <label class="label-block">Status</label>
                                        <input type="radio" id="active" name="setStatus">
                                        <label for="active">Active</label>
                                        <input type="radio" id="inactive" name="setStatus">
                                        <label for="inactive">In Active</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder=" "></textarea>
                                <label class="adminpanel-formlabel">Description</label>
                            </div>
                            
                            <div class="buttons-adminform">
                                <button class="common-button-admin" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                <div class="image-upload-content" data-toggle="modal" data-target="#product-add-popup">
                    <div class="add-upload-img">
                        <img src="assets/images/not-found.png" alt="Not Found Image">
                        <h6>Click Here to File Upload</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal -->
<div class="product-add-popup modal right fade" id="product-add-popup" tabindex="-1" role="dialog" aria-labelledby="myproduct-add-popup">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header-close">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </p>
            </div>
        </div>
    </div>
</div>
<?php include "adminpanel_footer.html" ?>        