<div class="container-fluid">

    <?php switch ($action): case 'create': ?>
        <!-- Create Invoice Form -->
        <form id="createInvoiceForm">
        <h4 class="mb-0">Create Invoice</h1>
            <input type="text" id="invoiceNumber" placeholder="Invoice Number" required>
            <input type="number" id="invoiceAmount" placeholder="Invoice Amount" required>
            <button type="submit">Create Invoice</button>
        </form>
        <?php break; case 'update': ?>
        <!-- Update Invoice Form -->
        <form id="updateInvoiceForm">
        <h4 class="mb-0">Update Invoice</h1>
            <input type="text" id="updateInvoiceId" placeholder="Invoice ID" required>
            <input type="text" id="updateInvoiceNumber" placeholder="Invoice Number" required>
            <input type="number" id="updateInvoiceAmount" placeholder="Invoice Amount" required>
            <button type="submit">Update Invoice</button>
        </form>
        <?php break; default: ?>
        <!-- Invoices List -->
        <h4 class="mb-0">Invoices</h4>
            <p class="lead">Manage your invoices here.</p>
        <div id="invoicesList">
        <div class="app__slide-wrapper">
                <div class="breadcrumb__area">
                    <div class="breadcrumb__wrapper mb-15">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice List</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <a href="/admin/billing/createInvoice" class="content-loader btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewExpense">Add Invoice</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-light fa-file-chart-column"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Invoice</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">91</h3>
                                        <span class="card__desc style_two"><span class="price-increase"><i class="fa-light fa-arrow-up"></i> +11.54%</span> Than Last Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-light fa-badge-check"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Paid Invoice</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">75</h3>
                                        <span class="card__desc style_two"><span class="price-increase"><i class="fa-light fa-arrow-up"></i> +03.15%</span> Than Last Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-light fa-circle-xmark"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Unpaid Invoice</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">10</h3>
                                        <span class="card__desc style_two"><span class="price-increase"><i class="fa-light fa-arrow-up"></i> +05.15%</span> Than Last Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-light fa-ban"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Cancelled Invoice</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">6</h3>
                                        <span class="card__desc style_two"><span class="price-decrease"><i class="fa-light fa-arrow-down"></i> +11.95%</span> Than Last Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="row">
                                <div class="col-xxl-12">
                                    <div class="table__wrapper table-responsive">
                                        <div id="dataTableDefualt_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="dataTableDefualt_length"><label>Show <select name="dataTableDefualt_length" aria-controls="dataTableDefualt" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="dataTableDefualt_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dataTableDefualt"></label></div><table class="table mb-20 dataTable no-footer" id="dataTableDefualt" aria-describedby="dataTableDefualt_info">
                                            <thead>
                                                <tr class="table__title"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#ID: activate to sort column descending" style="width: 72.4062px;">#ID</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 154.797px;">Name</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 120.844px;">Email</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Number: activate to sort column ascending" style="width: 134.594px;">Number</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 76.9688px;">Location</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 80.4688px;">Date</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 58.7188px;">Amount</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 75px;">Status</th><th class="text-center sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 110px;">Action</th></tr>
                                            </thead>
                                            <tbody class="table__body">
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            <tr class="odd">
                                                    <td class="sorting_1">#MZ-00114</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar1.png" alt="image"></div>
                                                            <span class="table__meta-name">Emma Phillips</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Washington</td>
                                                    <td class="table__date">Jan 14 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-success">Paid</span></td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="even">
                                                    <td class="sorting_1">#MZ-00115</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar2.png" alt="image"></div>
                                                            <span class="table__meta-name">Emma Stone</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Washington</td>
                                                    <td class="table__date">Dec 30 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-danger">Unpaid</span>
                                                    </td><td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="odd">
                                                    <td class="sorting_1">#MZ-00116</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar3.png" alt="image"></div>
                                                            <span class="table__meta-name">Jackson Perry</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">New York</td>
                                                    <td class="table__date">Dec 28 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-success">Paid</span>
                                                    </td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="even">
                                                    <td class="sorting_1">#MZ-00117</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar4.png" alt="image"></div>
                                                            <span class="table__meta-name">Chloe King</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Florida</td>
                                                    <td class="table__date">Nov 28 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-secondary">Cancel</span>
                                                    </td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="odd">
                                                    <td class="sorting_1">#MZ-00118</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar5.png" alt="image"></div>
                                                            <span class="table__meta-name">Logan Foster</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Virginia</td>
                                                    <td class="table__date">Oct 11 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-danger">Unpaid</span>
                                                    </td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="even">
                                                    <td class="sorting_1">#MZ-00119</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar6.png" alt="image"></div>
                                                            <span class="table__meta-name">Ava Brooks</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Washington</td>
                                                    <td class="table__date">Sep 14 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-success">Paid</span></td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="odd">
                                                    <td class="sorting_1">#MZ-00120</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar7.png" alt="image"></div>
                                                            <span class="table__meta-name">Lucas Anderson</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Alaska</td>
                                                    <td class="table__date">Aug 11 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-link">Refund</span></td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="even">
                                                    <td class="sorting_1">#MZ-00121</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar8.png" alt="image"></div>
                                                            <span class="table__meta-name">Sophia Miller</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Alabama</td>
                                                    <td class="table__date">Jul 14 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-success">Paid</span></td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="odd">
                                                    <td class="sorting_1">#MZ-00122</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar9.png" alt="image"></div>
                                                            <span class="table__meta-name">Olivia Bennett</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">New Mexico</td>
                                                    <td class="table__date">Jun 29 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-secondary">Cancel</span>
                                                    </td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr><tr class="even">
                                                    <td class="sorting_1">#MZ-00123</td>
                                                    <td class="tabel__meta">
                                                        <div class="d-flex align-items-center gap-10">
                                                            <div class="table-thumb"><img src="assets/images/avatar/avatar10.png" alt="image"></div>
                                                            <span class="table__meta-name">Carter White</span>
                                                        </div>
                                                    </td>
                                                    <td class="table__email">name@manez.com</td>
                                                    <td class="table__number">+1(800) 642 7676</td>
                                                    <td class="table__location">Virginia</td>
                                                    <td class="table__date">May 16 2024</td>
                                                    <td class="table__spent">$1999.00</td>
                                                    <td class="table__delivery"><span class="bd-badge bg-success">Paid</span>
                                                    </td>
                                                    <td class="table__icon-box">
                                                        <div class="d-flex align-items-center justify-content-center gap-10">
                                                            <a href="app-invoice-preview.html" class="table__icon download">
                                                                <i class="fa-regular fa-eye"></i>
                                                            </a>
                                                            <a href="app-invoice-edit.html" class="table__icon edit">
                                                                <i class="fa-sharp fa-light fa-pen"></i>
                                                            </a>
                                                            <a href="#" class="table__icon delete">
                                                                <i class="fa-regular fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr></tbody>
                                        </table><div class="dataTables_info" id="dataTableDefualt_info" role="status" aria-live="polite">Showing 1 to 10 of 13 entries</div><div class="dataTables_paginate paging_simple_numbers" id="dataTableDefualt_paginate"><a class="paginate_button previous disabled" aria-controls="dataTableDefualt" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="dataTableDefualt_previous">Previous</a><span><a class="paginate_button current" aria-controls="dataTableDefualt" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a><a class="paginate_button " aria-controls="dataTableDefualt" role="link" data-dt-idx="1" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="dataTableDefualt" role="link" data-dt-idx="next" tabindex="0" id="dataTableDefualt_next">Next</a></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    <?php endswitch; ?>
</div>

<script>
$(document).ready(function() {
    

    $('#createInvoiceForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/create/invoice',
            data: {
                number: $('#invoiceNumber').val(),
                amount: $('#invoiceAmount').val()
            },
            success: function(response) {
                $('#main-content').html(response);
               
            }
        });
    });

    $('#updateInvoiceForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/update/invoice',
            data: {
                id: $('#updateInvoiceId').val(),
                number: $('#updateInvoiceNumber').val(),
                amount: $('#updateInvoiceAmount').val()
            },
            success: function(response) {
                $('#main-content').html(response);
               
            }
        });
    });

    $('#deleteInvoiceForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/delete/invoice',
            data: {
                id: $('#deleteInvoiceId').val()
            },
            success: function(response) {
                $('#main-content').html(response);
               
            }
        });
    });
});
</script>