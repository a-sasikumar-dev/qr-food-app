<?php include "adminpanel_header.html" ?>
    <!-- <div class="adminpage-title">
        <h1>Menu Products</h1>
    </div> -->
    <div class="admin-qrgenerator-container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 pad-right-0">
                <div class="admin-qrgenerator-aside">
                    <div class="product-category-header">
                        <h5>Groups</h5>
                        <a data-toggle="collapse" href="#categoryAdd" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="add-category common-tooltipbox add-cat"><i class="fa fa-plus"></i>
                                <div class="admin-common-tooltip">
                                    <span class="tool-text">Add Group</span>
                                </div>
                            </div>
                            <div class="add-category common-tooltipbox cancel-cat"><i class="fa fa-times"></i>
                                <div class="admin-common-tooltip">
                                    <span class="tool-text">Cancel Group</span>
                                </div>
                            </div>
                        </a>
                        <div class="popover-category">
                            <div class="collapse" id="categoryAdd">
                                <div class="card">
                                    <div class="admin-panel-form">
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder=" ">
                                                <label class="adminpanel-formlabel">Group name</label>
                                            </div>
                                            <div class="buttons-adminform">
                                                <button class="common-button-admin" type="button" data-toggle="collapse" href="#categoryAdd" role="button" aria-expanded="false" aria-controls="collapseExample">Cancel</button>
                                                <button class="common-button-admin" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="admin-qrgenerator-tab nav" id="admin-qrgenerator-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast-content" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span class="font-weight-bold">Basic</span>
                            </a>
                            <div class="status-view category-edit-icons">
                                <a href="#"><i class="fas fa-edit"></i> 
                                    <div class="header-tooltip">
                                        <span class="tool-text">Edit</span>
                                    </div>
                                </a>
                                <a href="#"><i class="fas fa-trash"></i> 
                                    <div class="header-tooltip">
                                        <span class="tool-text">Delete</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="lunch-tab" data-toggle="tab" href="#lunch-content" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                            <span class="font-weight-bold">Standard</span>
                            </a>
                            <div class="status-view category-edit-icons">
                                <a href="#"><i class="fas fa-edit"></i> 
                                    <div class="header-tooltip">
                                        <span class="tool-text">Edit</span>
                                    </div>
                                </a>
                                <a href="#"><i class="fas fa-trash"></i> 
                                    <div class="header-tooltip">
                                        <span class="tool-text">Delete</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="dinner-tab" data-toggle="tab" href="#dinner-content" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                            <span class="font-weight-bold">Ultra</span>
                            </a>
                            <div class="status-view category-edit-icons">
                                <a href="#"><i class="fas fa-edit"></i> 
                                    <div class="header-tooltip">
                                        <span class="tool-text">Edit</span>
                                    </div>
                                </a>
                                <a href="#"><i class="fas fa-trash"></i> 
                                    <div class="header-tooltip">
                                        <span class="tool-text">Delete</span>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-9 pad-left-0">
                 <div class="admin-qrgenerator-right-side">
                    <div class="rightheader-relative">
                        <div class="product-rightcat-header">
                            <h5>Basic</h5>
                        </div>
                        <div class="product-rightcat-header-icons">
                            <ul class="right-caticons">
                                <li><a class="search-category common-tooltipbox">
                                    <div class="search-box-open"><i class="fa fa-search"></i>
                                        <input type="search" class="form-control">
                                    </div>
                                    <div class="admin-common-tooltip">
                                        <span class="tool-text">Search</span>
                                    </div>
                                    </a>
                                </li>
                                <li class="qr-table-header"><a data-toggle="collapse" href="#qrtableAdd" role="button" aria-expanded="false" aria-controls="qrtableAddExample">
                                    <div class="common-tooltipbox add-cat"><i class="fas fa-qrcode"></i>
                                        <div class="admin-common-tooltip">
                                            <span class="tool-text">Generate QR Code</span>
                                        </div>
                                    </div>
                                    <div class="common-tooltipbox cancel-cat"><i class="fa fa-times"></i>
                                        <div class="admin-common-tooltip">
                                            <span class="tool-text">Cancel Generate QR Code</span>
                                        </div>
                                    </div></a>
                                    <div class="popover-category">
                                        <div class="collapse" id="qrtableAdd">
                                            <div class="card">
                                                <div class="admin-panel-form">
                                                    <form>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder=" ">
                                                            <label class="adminpanel-formlabel">Name</label>
                                                        </div>
                                                        <div class="form-group qr-quantity-inc-dec">
                                                            <label class="label-block">Quantity</label>
                                                            <input type="number" value="0" min="0" max="20">
                                                        </div>
                                                        <div class="buttons-adminform">
                                                            <button class="common-button-admin" type="button" data-toggle="collapse" href="#qrtableAdd" role="button" aria-expanded="false" aria-controls="qrtableAddExample">Cancel</button>
                                                            <button class="common-button-admin" type="submit">Add</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="common-tooltipbox" href="#">
                                    <i class="fa fa-plus"></i>
                                    <div class="admin-common-tooltip">
                                        <span class="tool-text">Add Product</span>
                                    </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Tabs content -->
                    <div class="tab-content" id="product-category-tabContent">
                        <div class="tab-pane fade show active" id="breakfast-content" role="tabpanel" aria-labelledby="breakfast-tab">
                            <div class="qr-scan-box-container">
                                <div class="qr-scan-box" data-toggle="modal" data-target="#QRFramesetModal">
                                    <div class="qr-image-box">
                                        <h6>View Code</h6>
                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                        <div class="view-scanner-icon">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="qr-info-box">
                                    <div class="qr-title-name">
                                        <h3>Table 1</h3>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <p class="info-text">25/09/2020</p>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <p class="info-text"><a href="#">https://qrapp-twin/url/b09cfb6bd2ce48e2b71a7ba0</a></p>
                                    </div>
                                    <!-- <div class="scanned-items">
                                        <span class="scanned-text">Scanned</span>
                                            <span class="scanned-number">2</span>
                                        </span>
                                    </div> -->
                                    <div class="qr-scan-icon-side">
                                        <div class="icons-qr-scan">
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-edit"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Edit</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-trash"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Delete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qr-scan-box-container">
                                <div class="qr-scan-box" data-toggle="modal" data-target="#QRFramesetModal">
                                    <div class="qr-image-box">
                                        <h6>View Code</h6>
                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                        <div class="view-scanner-icon">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="qr-info-box">
                                    <div class="qr-title-name">
                                        <h3>Table 1</h3>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <p class="info-text">25/09/2020</p>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <p class="info-text"><a href="#">https://qrapp-twin/url/b09cfb6bd2ce48e2b71a7ba0</a></p>
                                    </div>
                                    <!-- <div class="scanned-items">
                                        <span class="scanned-text">Scanned</span>
                                            <span class="scanned-number">2</span>
                                        </span>
                                    </div> -->
                                    <div class="qr-scan-icon-side">
                                        <div class="icons-qr-scan">
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-edit"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Edit</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-trash"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Delete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qr-scan-box-container">
                                <div class="qr-scan-box" data-toggle="modal" data-target="#QRFramesetModal">
                                    <div class="qr-image-box">
                                        <h6>View Code</h6>
                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                        <div class="view-scanner-icon">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="qr-info-box">
                                    <div class="qr-title-name">
                                        <h3>Table 1</h3>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <p class="info-text">25/09/2020</p>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <p class="info-text"><a href="#">https://qrapp-twin/url/b09cfb6bd2ce48e2b71a7ba0</a></p>
                                    </div>
                                    <!-- <div class="scanned-items">
                                        <span class="scanned-text">Scanned</span>
                                            <span class="scanned-number">2</span>
                                        </span>
                                    </div> -->
                                    <div class="qr-scan-icon-side">
                                        <div class="icons-qr-scan">
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-edit"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Edit</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-trash"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Delete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qr-scan-box-container">
                                <div class="qr-scan-box" data-toggle="modal" data-target="#QRFramesetModal">
                                    <div class="qr-image-box">
                                        <h6>View Code</h6>
                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                        <div class="view-scanner-icon">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="qr-info-box">
                                    <div class="qr-title-name">
                                        <h3>Table 1</h3>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <p class="info-text">25/09/2020</p>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <p class="info-text"><a href="#">https://qrapp-twin/url/b09cfb6bd2ce48e2b71a7ba0</a></p>
                                    </div>
                                    <!-- <div class="scanned-items">
                                        <span class="scanned-text">Scanned</span>
                                            <span class="scanned-number">2</span>
                                        </span>
                                    </div> -->
                                    <div class="qr-scan-icon-side">
                                        <div class="icons-qr-scan">
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-edit"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Edit</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-trash"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Delete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qr-scan-box-container">
                                <div class="qr-scan-box" data-toggle="modal" data-target="#QRFramesetModal">
                                    <div class="qr-image-box">
                                        <h6>View Code</h6>
                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                        <div class="view-scanner-icon">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="qr-info-box">
                                    <div class="qr-title-name">
                                        <h3>Table 1</h3>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <p class="info-text">25/09/2020</p>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <p class="info-text"><a href="#">https://qrapp-twin/url/b09cfb6bd2ce48e2b71a7ba0</a></p>
                                    </div>
                                    <!-- <div class="scanned-items">
                                        <span class="scanned-text">Scanned</span>
                                            <span class="scanned-number">2</span>
                                        </span>
                                    </div> -->
                                    <div class="qr-scan-icon-side">
                                        <div class="icons-qr-scan">
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-edit"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Edit</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-trash"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Delete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="qr-scan-box-container">
                                <div class="qr-scan-box" data-toggle="modal" data-target="#QRFramesetModal">
                                    <div class="qr-image-box">
                                        <h6>View Code</h6>
                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                        <div class="view-scanner-icon">
                                            <i class="fa fa-eye"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="qr-info-box">
                                    <div class="qr-title-name">
                                        <h3>Table 1</h3>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <p class="info-text">25/09/2020</p>
                                    </div>
                                    <div class="infor-icon-text">
                                        <div class="icon-info">
                                            <span class="icon-bg-info">
                                                <i class="fa fa-globe"></i>
                                            </span>
                                        </div>
                                        <p class="info-text"><a href="#">https://qrapp-twin/url/b09cfb6bd2ce48e2b71a7ba0</a></p>
                                    </div>
                                    <!-- <div class="scanned-items">
                                        <span class="scanned-text">Scanned</span>
                                            <span class="scanned-number">2</span>
                                        </span>
                                    </div> -->
                                    <div class="qr-scan-icon-side">
                                        <div class="icons-qr-scan">
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-edit"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Edit</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="action-icons-scan">
                                                <div class="common-tooltipbox"><i class="fa fa-trash"></i>
                                                    <div class="admin-common-tooltip">
                                                        <span class="tool-text">Delete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="lunch-content" role="tabpanel" aria-labelledby="lunch-tab">
                            
                        </div>
                        
                        <div class="tab-pane fade" id="dinner-content" role="tabpanel" aria-labelledby="dinner-tab">
                            <h4 class="font-italic mb-4">Reviews</h4>
                            <p class="font-italic text-muted mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Modal popup for QR Frame setup -->
<div class="QR-frameset-popup modal fade" id="QRFramesetModal">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header popup-title">
                <h5 class="modal-title">Customize Your Frame</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
                        <!--Carousel Wrapper-->
                        <div id="qr-bg-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="qr-code-scanner-frame">
                                        <img class="d-block bg-frame" src="assets/images/pizza.jpg" alt="First slide">
                                        <div class="qr-frame-body">
                                            <div class="qr-frame-sub-body">
                                                <div class="frame-title">
                                                    <h4>Table</h4>
                                                </div>
                                                <div class="qr-scan-code-with-text">
                                                    <h3 class="qr-menu-edittxt">Scan for Menu</h3>
                                                    <div class="qr-generate-code">
                                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                                    </div>
                                                    <div class="qr-code-text">
                                                        <p>Scan Code</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="qr-code-scanner-frame">
                                        <img class="d-block bg-frame" src="assets/images/chicken.jpg" alt="Second slide">
                                        <div class="qr-frame-body">
                                            <div class="qr-frame-sub-body">
                                                <div class="frame-title">
                                                    <h4>Table</h4>
                                                </div>
                                                <div class="qr-scan-code-with-text">
                                                    <h3 class="qr-menu-edittxt">Scan for Menu</h3>
                                                    <div class="qr-generate-code">
                                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                                    </div>
                                                    <div class="qr-code-text">
                                                        <p>Scan Code</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="qr-code-scanner-frame">
                                        <img class="d-block bg-frame" src="assets/images/rice.jpg" alt="Third slide">
                                        <div class="qr-frame-body">
                                            <div class="qr-frame-sub-body">
                                                <div class="frame-title">
                                                    <h4>Table</h4>
                                                </div>
                                                <div class="qr-scan-code-with-text">
                                                    <h3 class="qr-menu-edittxt">Scan for Menu</h3>
                                                    <div class="qr-generate-code">
                                                        <img src="assets/images/qr-code.png" alt="QR Image">
                                                    </div>
                                                    <div class="qr-code-text">
                                                        <p>Scan Code</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <!-- <a class="carousel-control-prev" href="#qr-bg-thumb" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#qr-bg-thumb" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a> -->
                            <!--/.Controls-->
                            <ol class="carousel-indicators">
                                <li data-target="#qr-bg-thumb" data-slide-to="0">
                                    <img class="d-block" src="assets/images/pizza.jpg" class="img-fluid">
                                </li>
                                <li data-target="#qr-bg-thumb" data-slide-to="1" class="active">
                                    <img class="d-block" src="assets/images/chicken.jpg" class="img-fluid">
                                </li>
                                <li data-target="#qr-bg-thumb" data-slide-to="2">
                                    <img class="d-block" src="assets/images/rice.jpg" class="img-fluid">
                                </li>
                            </ol>
                        </div> 
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7">
                    </div>
                </div>
                <!-- <div class="admin-panel-form">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder=" ">
                            <label class="adminpanel-formlabel">Add a menu title</label>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder=" "></textarea>
                            <label class="adminpanel-formlabel">Add a menu description</label>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                    <h6 class="upload-img">Upload Image</h6>        
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                    <input type="file" id="createmenu-file" class="inputfile createmenu-file"/>
                                    <label for="createmenu-file">
                                        <figure><i class="fa fa-upload"></i></figure>
                                    </label>
                                    <p class="drop-file-txt">Drop file here</p>
                                    <p class="drop-file-txt">Only *.jpeg and *.png images will be accepted</p>
                                </div>
                            </div>
                        </div>
                        <div class="buttons-adminform">
                            <button class="common-button-admin" type="button" data-dismiss="modal">Cancel</button>
                            <button class="common-button-admin" type="submit">Save</button>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</div>
<?php include "adminpanel_footer.html" ?>        