<div class="container-fluid">
    
    <?php if ($action == 'create'): ?>
    <!-- Create Payment Form -->
    <form id="createPaymentForm">
        <h4 class="mb-0">Create Payment</h2>
            <p class="lead">Create payments here.</p>
        <input type="text" id="paymentDescription" placeholder="Payment Description" required>
        <input type="number" id="paymentAmount" placeholder="Payment Amount" required>
        <button type="submit">Create Payment</button>
    </form>
    <?php elseif ($action == 'update'): ?>
    <!-- Update Payment Form -->
    <form id="updatePaymentForm">
        <h4 class="mb-0">Update Payment</h2>
            <p class="lead">Update payments here.</p>
        <input type="text" id="updatePaymentId" placeholder="Payment ID" required>
        <input type="text" id="updatePaymentDescription" placeholder="Payment Description" required>
        <input type="number" id="updatePaymentAmount" placeholder="Payment Amount" required>
        <button type="submit">Update Payment</button>
    </form>
    <?php else: ?>
    <!-- Paginated Payments -->
    <div id="paymentsList">
        <h4 class="mb-0">Payments List</h2>
            <p class="lead">Manage your payments here.</p>
        <div id="paymentsData">

            <div class="app__slide-wrapper">
                <div class="breadcrumb__area">
                    <div class="breadcrumb__wrapper mb-15">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Expense</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewExpense">Add Expense</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-gear"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Expense</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">8450</h3>
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
                                    <h6 class="card__sub-title mb-10">Total Paid</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">150</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-user"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Unpaid</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">3130</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="card__wrapper">
                            <div class="d-flex align-items-center gap-sm">
                                <div class="card__icon">
                                    <span><i class="fa-sharp fa-regular fa-house-person-leave"></i></span>
                                </div>
                                <div class="card__title-wrap">
                                    <h6 class="card__sub-title mb-10">Total Returned</h6>
                                    <div class="d-flex flex-wrap align-items-end gap-10">
                                        <h3 class="card__title">550</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="table__wrapper table-responsive">
                                <div id="dataTableDefualt_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="dataTableDefualt_length"><label>Show <select name="dataTableDefualt_length" aria-controls="dataTableDefualt" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="dataTableDefualt_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dataTableDefualt"></label></div><table class="table mb-20 table-border dataTable no-footer" id="dataTableDefualt" aria-describedby="dataTableDefualt_info">
                                    <thead>
                                        <tr class="table__title"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Invoice Number: activate to sort column descending" style="width: 111.172px;">Invoice Number</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Item Name: activate to sort column ascending" style="width: 297.125px;">Item Name</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Purchase By: activate to sort column ascending" style="width: 161.047px;">Purchase By</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Purchase Date: activate to sort column ascending" style="width: 103.078px;">Purchase Date</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 56.8594px;">Amount</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 85.0938px;">Status</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 79.625px;">Action</th></tr>
                                    </thead>
                                    <tbody class="table__body">
                                        
                                        
                                        
                                        
                                    <tr class="odd">
                                            <td class="table__invoice-number sorting_1">MZ-114</td>
                                            <td class="table__item-name">Gree Inverter AC 1.5 Ton Wifi - GS-18XFV32</td>
                                            <td>
                                                <span class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar1.png" alt="User Image"></a>
                                                    <a href="profile.html">Sophia Williams</a>
                                                </span>
                                            </td>
                                            <td class="table__purchase-date">April 29 2024</td>
                                            <td class="table__price">$1500</td>
                                            <td class="table__delivery"><span class="bd-badge bg-success">Paid</span>
                                            </td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#expenseEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="table__invoice-number sorting_1">MZ-115</td>
                                            <td class="table__item-name">AMD Ryzen 9 7950X3D Gaming Processor</td>
                                            <td>
                                                <span class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar2.png" alt="User Image"></a>
                                                    <a href="profile.html">Sophia Williams</a>
                                                </span>
                                            </td>
                                            <td class="table__purchase-date">April 20 2024</td>
                                            <td class="table__price">$5480</td>
                                            <td class="table__delivery"><span class="bd-badge bg-warning">Returned</span></td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#expenseEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="table__invoice-number sorting_1">MZ-116</td>
                                            <td class="table__item-name">LG 32 Inch UltraFine OLED Pro 4K Monitor</td>
                                            <td>
                                                <span class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar3.png" alt="User Image"></a>
                                                    <a href="profile.html">Sophia Williams</a>
                                                </span>
                                            </td>
                                            <td class="table__purchase-date">Dec 28 2024</td>
                                            <td class="table__price">$7500</td>
                                            <td class="table__delivery"><span class="bd-badge bg-success">Paid</span>
                                            </td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#expenseEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="table__invoice-number sorting_1">MZ-117</td>
                                            <td class="table__item-name">Asus TUF Gaming Laptop A15 Ryzen 5 RTX</td>
                                            <td>
                                                <span class="table-avatar">
                                                    <a class="employee__avatar mr-5" href="profile.html"><img class="img-36 border-circle" src="assets/images/avatar/avatar4.png" alt="User Image"></a>
                                                    <a href="profile.html">Sophia Williams</a>
                                                </span>
                                            </td>
                                            <td class="table__purchase-date">Nov 28 2024</td>
                                            <td class="table__price">$4500</td>
                                            <td class="table__delivery"><span class="bd-badge bg-secondary">Unpaid</span>
                                            </td>
                                            <td class="table__icon-box">
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#expenseEdit"><i class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr></tbody>
                                </table><div class="dataTables_info" id="dataTableDefualt_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div><div class="dataTables_paginate paging_simple_numbers" id="dataTableDefualt_paginate"><a class="paginate_button previous disabled" aria-controls="dataTableDefualt" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="dataTableDefualt_previous">Previous</a><span><a class="paginate_button current" aria-controls="dataTableDefualt" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="dataTableDefualt" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" id="dataTableDefualt_next">Next</a></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <?php endif; ?>
</div>

<script>
$(document).ready(function() {

    $('#createPaymentForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/create/payment',
            data: {
                description: $('#paymentDescription').val(),
                amount: $('#paymentAmount').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#updatePaymentForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/update/payment',
            data: {
                id: $('#updatePaymentId').val(),
                description: $('#updatePaymentDescription').val(),
                amount: $('#updatePaymentAmount').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#deletePaymentForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/delete/payment',
            data: {
                id: $('#deletePaymentId').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

});
</script>