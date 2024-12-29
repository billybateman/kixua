<div class="container-fluid">

    <?php switch ($action): case 'create': ?>
        <!-- Create Report Form -->
        <form id="createReportForm">
            <h4 class="mb-0">Create Reports</h4>
            <p class="lead">Create your billing reports here.</p>
            <input type="text" id="reportTitle" placeholder="Report Title" required>
            <textarea id="reportContent" placeholder="Report Content" required></textarea>
            <button type="submit">Create Report</button>
        </form>
        <?php break; case 'update': ?>
        <!-- Update Report Form -->
        <form id="updateReportForm">
            <h4 class="mb-0">Update Reports</h4>
            <p class="lead">Update your billing reports here.</p>
            <input type="text" id="updateReportId" placeholder="Report ID" required>
            <input type="text" id="updateReportTitle" placeholder="Report Title" required>
            <textarea id="updateReportContent" placeholder="Report Content" required></textarea>
            <button type="submit">Update Report</button>
        </form>
        <?php break; default: ?>
        <!-- Reports List -->
        <h4 class="mb-0">Reports</h4>
            <p class="lead">View your billing reports here.</p>
        <div id="reportsList">
        <div class="app__slide-wrapper">
                <div class="breadcrumb__area">
                    <div class="breadcrumb__wrapper mb-15">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Document</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewDocument">Add Document</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="table__wrapper table-responsive">
                                <div id="dataTableDefualt_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="dataTableDefualt_length"><label>Show <select name="dataTableDefualt_length" aria-controls="dataTableDefualt" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div><div id="dataTableDefualt_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="dataTableDefualt"></label></div><table class="table mb-20 dataTable no-footer" id="dataTableDefualt" aria-describedby="dataTableDefualt_info">
                                    <thead>
                                        <tr class="table__title"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-sort="ascending" aria-label="File Name: activate to sort column descending" style="width: 166.453px;">File Name</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Document: activate to sort column ascending" style="width: 69.7656px;">Document</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 136.188px;">Role</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 493.797px;">Description</th><th class="sorting" tabindex="0" aria-controls="dataTableDefualt" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 75.7969px;">Action</th></tr>
                                    </thead>
                                    <tbody>
                                        
                                        
                                        
                                        
                                        
                                    <tr class="odd">
                                            <td class="sorting_1">Annual_Report_2024.pdf</td>
                                            <td>
                                                <a class="table__icon download" href="assets/documents/payroll-payslip.pdf" target="_blank"><i class="fa-sharp fa-regular fa-folder-arrow-down"></i></a>
                                            </td>
                                            <td>Finance</td>
                                            <td>Financial performance and key milestones achieved in 2024.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#documentEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">Client_Contract.xlsx</td>
                                            <td>
                                                <a class="table__icon download" href="assets/documents/client_contract.xlsx" target="_blank"><i class="fa-sharp fa-regular fa-folder-arrow-down"></i></a>
                                            </td>
                                            <td>Legal</td>
                                            <td>Agreement detailing terms and conditions for client services.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#documentEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Employee_Handbook.pdf</td>
                                            <td>
                                                <a class="table__icon download" href="assets/documents/payroll-payslip.pdf" target="_blank"><i class="fa-sharp fa-regular fa-folder-arrow-down"></i></a>
                                            </td>
                                            <td>HR</td>
                                            <td>Guidelines and policies for employees to follow in the workplace.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#documentEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr><tr class="even">
                                            <td class="sorting_1">projects_Plan.pdf</td>
                                            <td>
                                                <a class="table__icon download" href="assets/documents/payroll-payslip.pdf" target="_blank"><i class="fa-sharp fa-regular fa-folder-arrow-down"></i></a>
                                            </td>
                                            <td>Project Manager</td>
                                            <td>Comprehensive plan outlining project objectives, timeline, and
                                                deliverables.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#documentEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr><tr class="odd">
                                            <td class="sorting_1">Training_Schedule.pdf</td>
                                            <td>
                                                <a class="table__icon download" href="assets/documents/payroll-payslip.pdf" target="_blank"><i class="fa-sharp fa-regular fa-folder-arrow-down"></i></a>
                                            </td>
                                            <td>Training Coordinator</td>
                                            <td>Timetable for employee training sessions and workshops.</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#documentEdit">
                                                        <i class="fa-sharp fa-light fa-pen"></i>
                                                    </button>
                                                    <button class="removeBtn table__icon delete">
                                                        <i class="fa-regular fa-trash"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr></tbody>
                                </table><div class="dataTables_info" id="dataTableDefualt_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div><div class="dataTables_paginate paging_simple_numbers" id="dataTableDefualt_paginate"><a class="paginate_button previous disabled" aria-controls="dataTableDefualt" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" id="dataTableDefualt_previous">Previous</a><span><a class="paginate_button current" aria-controls="dataTableDefualt" role="link" aria-current="page" data-dt-idx="0" tabindex="0">1</a></span><a class="paginate_button next disabled" aria-controls="dataTableDefualt" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" id="dataTableDefualt_next">Next</a></div></div>
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
 

    $('#createReportForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/create/report',
            data: {
                title: $('#reportTitle').val(),
                content: $('#reportContent').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#updateReportForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/update/report',
            data: {
                id: $('#updateReportId').val(),
                title: $('#updateReportTitle').val(),
                content: $('#updateReportContent').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#deleteReportForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/delete/report',
            data: {
                id: $('#deleteReportId').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });
});
</script>
