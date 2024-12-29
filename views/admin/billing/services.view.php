<div class="container-fluid">
    <h4 class="mb-0">Services</h1>
    <p class="lead">Manage your services here.</p>

    <?php switch ($action): case 'create': ?>
        <!-- Create Service Form -->
        <form id="createServiceForm">
            <h4 class="mb-0">Create Service</h2>
            <input type="text" id="serviceName" placeholder="Service Name" required>
            <input type="number" id="servicePrice" placeholder="Service Price" required>
            <button type="submit">Create Service</button>
        </form>
        <?php break; case 'update': ?>
        <!-- Update Service Form -->
        <form id="updateServiceForm">
            <h4 class="mb-0">Update Service</h2>
            <input type="text" id="updateServiceId" placeholder="Service ID" required>
            <input type="text" id="updateServiceName" placeholder="Service Name" required>
            <input type="number" id="updateServicePrice" placeholder="Service Price" required>
            <button type="submit">Update Service</button>
        </form>
        <?php break; case 'delete': ?>
        <!-- Delete Service Form -->
        <form id="deleteServiceForm">
            <h4 class="mb-0">Delete Service</h2>
            <input type="text" id="deleteServiceId" placeholder="Service ID" required>
            <button type="submit">Delete Service</button>
        </form>
        <?php break; default: ?>
        <!-- Services List -->
        <div id="servicesList">
            <!-- Services data will be loaded here -->
        </div>

        <!-- Pagination Links -->
        <div id="paginationLinks">
            <!-- Pagination links will be loaded here -->
        </div>
    <?php endswitch; ?>
</div>

<script>
$(document).ready(function() {
    

    $('#createServiceForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/create/service',
            data: {
                name: $('#serviceName').val(),
                price: $('#servicePrice').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#updateServiceForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/update/service',
            data: {
                id: $('#updateServiceId').val(),
                name: $('#updateServiceName').val(),
                price: $('#updateServicePrice').val()
            },
            success: function(response) {
                $('#main-content').html(response);
                
            }
        });
    });

    $('#deleteServiceForm').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/path/to/delete/service',
            data: {
                id: $('#deleteServiceId').val()
            },
            success: function(response) {
                $('#main-content').html(response);
               
            }
        });
    });
});
</script>