<?php include "adminpanel_header.html" ?>
    <!-- <div class="adminpage-title">
        <h1>Menu Products</h1>
    </div> -->
    <div class="admin-productlist-container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 pad-right-0">
                <div class="product-category-aside">
                    <div class="product-category-header">
                        <h5>Categories</h5>
                        <a data-toggle="collapse" href="#categoryAdd" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <div class="add-category common-tooltipbox add-cat"><i class="fa fa-plus"></i>
                                <div class="admin-common-tooltip">
                                    <span class="tool-text">Add Category</span>
                                </div>
                            </div>
                            <div class="add-category common-tooltipbox cancel-cat"><i class="fa fa-times"></i>
                                <div class="admin-common-tooltip">
                                    <span class="tool-text">Cancel Category</span>
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
                                                <label class="adminpanel-formlabel">Add a Category</label>
                                            </div>
                                            <div class="form-group common_custom_radio">
                                                <label class="label-block">Status</label>
                                                <input type="radio" id="active" name="setStatus">
                                                <label for="active">Active</label>
                                                <input type="radio" id="inactive" name="setStatus">
                                                <label for="inactive">In Active</label>
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
                    <ul class="adminpanel-addproduct-tab nav" id="product-category-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="breakfast-tab" data-toggle="tab" href="#breakfast-content" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            <span class="font-weight-bold">Breakfast</span>
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
                            <span class="font-weight-bold">Lunch</span>
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
                            <span class="font-weight-bold">Dinner</span>
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
                 <div class="product-category-aside right-category-menu">
                    <div class="rightheader-relative">
                        <div class="product-rightcat-header">
                            <h5>Breakfast</h5>
                        </div>
                        <div class="product-rightcat-header-icons">
                            <ul class="right-caticons">
                                <li class="select-sortby">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle common-tooltipbox" data-toggle="dropdown"><i class="fas fa-sort-alpha-down"></i>
                                            <div class="admin-common-tooltip">
                                                <span class="tool-text">Sort by</span>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">Priority</a>
                                            <a href="#" class="dropdown-item">Price: Low to High</a>
                                            <a href="#" class="dropdown-item">Price: High to Low</a>
                                            <a href="#" class="dropdown-item">Date</a>
                                        </div>
                                    </div>
                                </li>
                                <li><a class="search-category common-tooltipbox">
                                    <div class="search-box-open"><i class="fa fa-search"></i>
                                        <input type="search" class="form-control">
                                    </div>
                                    <div class="admin-common-tooltip">
                                        <span class="tool-text">Search</span>
                                    </div>
                                    </a>
                                </li>
                                <!-- <li><a class="common-tooltipbox" href="#">
                                    <i class="fa fa-filter"></i>
                                    <div class="admin-common-tooltip">
                                        <span class="tool-text">Filter</span>
                                    </div>
                                    </a>
                                </li> -->
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
                            <div class="category-info-box">
                                <!-- <div class="image-box">
                                    <img src="assets/images/pizza.jpg" alt="Pizza Image">
                                </div> -->
                                <div class="image-box">
                                    <img src="assets/images/not-found.png" alt="Rice Image">
                                </div>
                                <div class="cat-content-box">
                                    <h3>Pizza</h3>
                                    <ul class="sidebar-menu category-action-btns">
                                        <li><a class="nav-link" href="#"><i class="fas fa-edit"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Edit</span>
                                            </div></a>
                                        </li>
                                        <li><a class="nav-link" href="#"><i class="fas fa-copy"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Duplicate</span>
                                            </div></a>
                                        </li>
                                        <li><a class="nav-link" href="#"><i class="fas fa-trash"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Delete</span>
                                            </div></a>
                                        </li>
                                    </ul>
                                    <div class="cat-actions">
                                        <ul class="action-icons">
                                            <li><span class="enable-cat">Status</span>
                                                <label class="menu-enable-disable">
                                                    <input class="menu-enable-disable-switch" type="checkbox">
                                                    <span class="menu-enable-disable-slider"></span>
                                                </label>
                                                <div class="category-i-info">
                                                    <span><i class="fas fa-info"></i>
                                                        <div class="category-i-tooltip">View status
                                                            <div class="arrow"></div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><span class="enable-cat">Set as Featured Product</span>
                                                <label class="menu-enable-disable">
                                                    <input class="menu-enable-disable-switch" type="checkbox" checked>
                                                    <span class="menu-enable-disable-slider"></span>
                                                </label>
                                                <div class="category-i-info">
                                                    <span><i class="fas fa-info"></i>
                                                        <div class="category-i-tooltip">View on Home page Banner
                                                            <div class="arrow"></div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-category">
                                        <p class="price-text">Price <span class="split-price"></span> <span class="price-num">$30.00</span></p>
                                    </div>
                                    <div class="description-category">
                                        <h6>Description:</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="category-info-box">
                                <div class="image-box">
                                    <img src="assets/images/chicken.jpg" alt="Chicken Image">
                                </div>
                                <div class="cat-content-box">
                                    <h3>Chicken</h3>
                                    <ul class="sidebar-menu category-action-btns">
                                        <li><a class="nav-link" href="#"><i class="fas fa-edit"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Edit</span>
                                            </div></a>
                                        </li>
                                        <li><a class="nav-link" href="#"><i class="fas fa-copy"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Duplicate</span>
                                            </div></a>
                                        </li>
                                        <li><a class="nav-link" href="#"><i class="fas fa-trash"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Delete</span>
                                            </div></a>
                                        </li>
                                    </ul>
                                    <div class="cat-actions">
                                        <ul class="action-icons">
                                            <li><span class="enable-cat">Status</span>
                                                <label class="menu-enable-disable">
                                                    <input class="menu-enable-disable-switch" type="checkbox">
                                                    <span class="menu-enable-disable-slider"></span>
                                                </label>
                                                <div class="category-i-info">
                                                    <span><i class="fas fa-info"></i>
                                                        <div class="category-i-tooltip">View status
                                                            <div class="arrow"></div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><span class="enable-cat">Set as Featured Product</span>
                                                <label class="menu-enable-disable">
                                                    <input class="menu-enable-disable-switch" type="checkbox" checked>
                                                    <span class="menu-enable-disable-slider"></span>
                                                </label>
                                                <div class="category-i-info">
                                                    <span><i class="fas fa-info"></i>
                                                        <div class="category-i-tooltip">View on Home page Banner
                                                            <div class="arrow"></div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-category">
                                        <p class="price-text">Price <span class="split-price"></span> <span class="price-num">$30.00</span></p>
                                    </div>
                                    <div class="description-category">
                                        <h6>Description:</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="category-info-box">
                                <div class="image-box">
                                    <img src="assets/images/rice.jpg" alt="Rice Image">
                                </div>                                
                                <div class="cat-content-box">
                                    <h3>Rice</h3>
                                    <ul class="sidebar-menu category-action-btns">
                                        <li><a class="nav-link" href="#"><i class="fas fa-edit"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Edit</span>
                                            </div></a>
                                        </li>
                                        <li><a class="nav-link" href="#"><i class="fas fa-copy"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Duplicate</span>
                                            </div></a>
                                        </li>
                                        <li><a class="nav-link" href="#"><i class="fas fa-trash"></i>
                                            <div class="admin-tooltip">
                                                <span class="tool-text">Delete</span>
                                            </div></a>
                                        </li>
                                    </ul>
                                    <div class="cat-actions">
                                        <ul class="action-icons">
                                            <li><span class="enable-cat">Status</span>
                                                <label class="menu-enable-disable">
                                                    <input class="menu-enable-disable-switch" type="checkbox">
                                                    <span class="menu-enable-disable-slider"></span>
                                                </label>
                                                <div class="category-i-info">
                                                    <span><i class="fas fa-info"></i>
                                                        <div class="category-i-tooltip">View status
                                                            <div class="arrow"></div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><span class="enable-cat">Set as Featured Product</span>
                                                <label class="menu-enable-disable">
                                                    <input class="menu-enable-disable-switch" type="checkbox" checked>
                                                    <span class="menu-enable-disable-slider"></span>
                                                </label>
                                                <div class="category-i-info">
                                                    <span><i class="fas fa-info"></i>
                                                        <div class="category-i-tooltip">View on Home page Banner
                                                            <div class="arrow"></div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-category">
                                        <p class="price-text">Price <span class="split-price"></span> <span class="price-num">$30.00</span></p>
                                    </div>
                                    <div class="description-category">
                                        <h6>Description:</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane fade" id="lunch-content" role="tabpanel" aria-labelledby="lunch-tab">
                            <div class="item-notfound">
                                <img src="assets/images/data-not-found.png" alt="Data not found">
                            </div>
                            <h3 class="item-notfout-txt">Items Not Found!</h3>
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
<?php include "adminpanel_footer.html" ?>        