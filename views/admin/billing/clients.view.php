<div class="container-fluid">
    <h4 class="mb-0">Clients</h1>
    <p class="lead">Manage your clients here.</p>

    <?php switch ($action): case 'create': ?>
        <!-- Create Client Form -->
        <form id="createClientForm">
            <h4 class="mb-0">Create Client</h2>
            <input type="text" id="clientName" placeholder="Client Name" required>
            <input type="email" id="clientEmail" placeholder="Client Email" required>
            <button type="submit">Create Client</button>
        </form>
        <?php break; case 'update': ?>
        <!-- Update Client Form -->
        <form id="updateClientForm">
            <h4 class="mb-0">Update Client</h2>
            <input type="text" id="updateClientId" placeholder="Client ID" required>
            <input type="text" id="updateClientName" placeholder="Client Name" required>
            <input type="email" id="updateClientEmail" placeholder="Client Email" required>
            <button type="submit">Update Client</button>
        </form>
        <?php break; default: ?>
        <!-- Clients List -->
        <div id="clientsList">
            <!-- Clients data will be loaded here -->
            <div class="app__slide-wrapper">
            <div class="breadcrumb__area">
                    <div class="breadcrumb__wrapper mb-15">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Clients</li>
                            </ol>
                        </nav>
                        <div class="breadcrumb__btn">
                            <a href="/admin/billing/createClient" class="content-loader btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewExpense">Add Client</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card__wrapper">
                            <div class="row g-20 gy-20 mb-20 justify-content-between align-items-end">
                                <div class="col-xxl-4 col-xl-5 col-lg-4 col-md-4">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="contactsName">Contacts Name</label>
                                        </div>
                                        <div class="form__input">
                                            <input type="text" class="form-control" id="contactsName" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="phoneNumber">Search by Number</label>
                                        </div>
                                        <div class="form__input">
                                            <input type="text" class="form-control" id="phoneNumber" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-5 col-lg-4 col-md-4">
                                    <div class="from__input-box">
                                        <div class="form__input-title">
                                            <label for="contactsEmail">Search by Email</label>
                                        </div>
                                        <div class="form__input">
                                            <input type="email" class="form-control" id="contactsEmail" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-2 col-xl-2 col-lg-4 col-md-4">
                                    <div class="d-flex align-items-center justify-content-between gap-15">
                                        <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal" data-bs-target="#addNewContacts">Add Contacts</button>
                                    </div>
                                </div>
                            </div>
                            <div class="table__wrapper table-responsive">
                                <table class="table mb-20" id="dataTableDefualt">
                                    <thead>
                                        <tr class="table__title table__sort">
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table__body">
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar16.png" alt="image">
                                                    <span>Naira Muskan</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 123-4567</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b6d7cfc5ded7c5dfd2d2dfddd7f6dbd7d8d3cc98d5d9db">[email&#160;protected]</a></td>
                                            <td>Gaza, Palestine</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar1.png" alt="image">
                                                    <span>John Doe</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 987-6543</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c7ada8afa9a3a8a287a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</a></td>
                                            <td>New York, USA</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar2.png" alt="image">
                                                    <span>Maria Rodriguez</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 876-5432</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb969a89929ad589949f89929c8e9e81bb9e839a968b979ed5989496">[email&#160;protected]</a></td>
                                            <td>Madrid, Spain</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar3.png" alt="image">
                                                    <span>Wang Alexander </span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 234-5678</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f0919c9588919e949582de87919e97b09588919d809c95de939f9d">[email&#160;protected]</a></td>
                                            <td>Beijing, China</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar4.png" alt="image">
                                                    <span>Lisa Smith</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 987-6543</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ed81849e8cc39e80849985ad88958c809d8188c38e8280">[email&#160;protected]</a></td>
                                            <td>London, UK</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar5.png" alt="image">
                                                    <span>Mohammed Ali</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 765-4321</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="620f0d0a030f0f07064c030e0b22071a030f120e074c010d0f">[email&#160;protected]</a></td>
                                            <td>Cairo, Egypt</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar6.png" alt="image">
                                                    <span>Emma Johnson</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 876-5432</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4d2820202c63272225233e22230d28352c203d2128632e2220">[email&#160;protected]</a></td>
                                            <td>Sydney, Australia</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar7.png" alt="image">
                                                    <span>Chen Wei</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 234-5678</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="ccafa4a9a2e2bba9a58ca9b4ada1bca0a9e2afa3a1">[email&#160;protected]</a></td>
                                            <td>Shanghai, China</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar8.png" alt="image">
                                                    <span>Sophia Lee</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 987-6543</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="70031f001819115e1c1515301508111d001c155e131f1d">[email&#160;protected]</a></td>
                                            <td>Tokyo, Japan</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar8.png" alt="image">
                                                    <span>Martinez Andrea</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 765-4321</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="98f9f6fceafdf9b6f5f9eaecf1f6fde2d8fde0f9f5e8f4fdb6fbf7f5">[email&#160;protected]</a></td>
                                            <td>Buenos Aires, Argentina</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar9.png" alt="image">
                                                    <span>Michael Nguyen</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 876-5432</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0865616b60696d6426666f7d716d66486d70696578646d266b6765">[email&#160;protected]</a></td>
                                            <td>Los Angeles, USA</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar10.png" alt="image">
                                                    <span>Isabella Lopez</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 234-5678</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d1b8a2b0b3b4bdbdb0ffbdbea1b4ab91b4a9b0bca1bdb4ffb2bebc">[email&#160;protected]</a></td>
                                            <td>Mexico City, Mexico</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar11.png" alt="image">
                                                    <span>David Kim</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 987-6543</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="096d687f606d27626064496c71686479656c276a6664">[email&#160;protected]</a></td>
                                            <td>Seoul, South Korea</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="table-avatar d-flex gap-10 align-items-center">
                                                    <img class="img-36 border-circle" src="assets/images/avatar/avatar12.png" alt="image">
                                                    <span>Sara Ali</span>
                                                </div>
                                            </td>
                                            <td>+1 (555) 765-4321</td>
                                            <td><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="89fae8fbe8a7e8e5e0c9ecf1e8e4f9e5eca7eae6e4">[email&#160;protected]</a></td>
                                            <td>Tehran, Iran</td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-start gap-10">
                                                    <button type="button" class="table__icon download" data-bs-toggle="modal" data-bs-target="#contactsView"><i class="fa-regular fa-eye"></i></button>
                                                    <button type="button" class="table__icon edit" data-bs-toggle="modal" data-bs-target="#contactsEdit"><i
                                             class="fa-sharp fa-light fa-pen"></i></button>
                                                    <button class="removeBtn table__icon delete"><i
                                             class="fa-regular fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pagination Links -->
        <div id="paginationLinks">
            <!-- Pagination links will be loaded here -->
        </div>
    <?php endswitch; ?>
</div>

<script>
$(document).ready(function() {

    $('#createClientForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/create/client',
            data: {
                name: $('#clientName').val(),
                email: $('#clientEmail').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#updateClientForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/update/client',
            data: {
                id: $('#updateClientId').val(),
                name: $('#updateClientName').val(),
                email: $('#updateClientEmail').val()
            },
            success: function(response) {
                $('#main-content').html(response);
               
            }
        });
    });

    $('#deleteClientForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/delete/client',
            data: {
                id: $('#deleteClientId').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });
});
</script>