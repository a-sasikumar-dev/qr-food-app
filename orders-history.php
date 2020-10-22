<?php include "adminpanel_header.html" ?>
<div class="adminpage-title">
    <h1>Orders History</h1>
</div>
<div class="orders-history-container">
    <div class="orders-history-header">
        <div class="admin-panel-form">
            <form>
                <div class="row align-items-end">
                    <div class="col-xl-3">  
                        <label>Status</label>
                        <select class="form-control selectpicker">
                            <option>All</option>
                            <option>Submitted</option>
                            <option>Awaiting Validation</option>
                            <option>Confirmed</option>
                            <option>Paid</option>
                            <option>Shipped</option>
                            <option>Cancelled</option>
                        </select>
                    </div>
                    <div class="col-xl-3">
                        <div class="daterange-order">
                            <label>Choose Date</label>
                            <input class="form-control daterange" type="text" name="daterange">
                            <i class="far fa-calendar"></i>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="input-group search-orders">
                            <input type="search" class="form-control" placeholder=" ">
                            <label class="adminpanel-formlabel">Search</label>
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="export-reload-btns">
                            <button class="export-reload" type="button"><i class="fa fa-download"></i> Export</button>
                            <button class="export-reload" type="button"><i class="fas fa-sync-alt"></i> Reload</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="orders-history-body">
        <table class="table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order Number</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Paid sum</th>
                    <th>Debt</th>
                    <th>Payment Method</th>
                    <th>Tracking Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="order-details.php">7345</a></td>
                    <td>Table 1</td>
                    <td>840053672</td>
                    <td>abc@gmail.com</td>
                    <td class="order-comp">Completed</td>
                    <td>19/10/2020</td>
                    <td>3.7 USD</td>
                    <td>3.7 USD</td>
                    <td>0 USD</td>
                    <td>Cash</td>
                    <td>Av78347832748923748</td>
                    <td>
                        <div class="dropdown action-orders">
                            <a data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-print"></i> Print</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-sms"></i> Send SMS</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-envelope-open-text"></i> Send Email</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="#">73765</a></td>
                    <td>Table 2</td>
                    <td>84005367211</td>
                    <td>abc@gmail.com</td>
                    <td class="order-waiting">Awaiting Validation</td>
                    <td>19/10/2020</td>
                    <td>3.7000 USD</td>
                    <td>3.7 USD</td>
                    <td>0 USD</td>
                    <td>Cash</td>
                    <td>Av78347832748923748343434</td>
                    <td>
                        <div class="dropdown action-orders">
                            <a data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-print"></i> Print</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-sms"></i> Send SMS</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-envelope-open-text"></i> Send Email</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="#">76509</a></td>
                    <td>Table 3</td>
                    <td>84005367211</td>
                    <td>abc@gmail.com</td>
                    <td class="order-comp">Completed</td>
                    <td>19/10/2020</td>
                    <td>3.722 USD</td>
                    <td>3.71 USD</td>
                    <td>0 USD</td>
                    <td>Cash</td>
                    <td>Av78347832748923748343434</td>
                    <td>
                        <div class="dropdown action-orders">
                            <a data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-print"></i> Print</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-sms"></i> Send SMS</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-envelope-open-text"></i> Send Email</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><a href="#">76509</a></td>
                    <td>Table 4</td>
                    <td>8400536</td>
                    <td>abc@gmail.com</td>
                    <td class="order-comp">Completed</td>
                    <td>19/10/2020</td>
                    <td>3.7 USD</td>
                    <td>3.237 USD</td>
                    <td>12 USD</td>
                    <td>Cash</td>
                    <td>Av78347832748923748343434fsdfsdfsdf</td>
                    <td>
                        <div class="dropdown action-orders">
                            <a data-toggle="dropdown"><i class="fas fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-print"></i> Print</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-sms"></i> Send SMS</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-envelope-open-text"></i> Send Email</a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
<?php include "adminpanel_footer.html" ?>