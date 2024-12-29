<div class="container-fluid">
    <h4 class="mb-0">Databases</h4>
    <p class="lead">Manage your databases here.</p>
    <div id="database-content">
        <?php
        // Database connection parameters
        $servername = DB_HOST;
        $username = DB_USERNAME;
        $password = DB_PASSWORD;
        $dbname = DB_NAME;

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("<div class='alert alert-danger'>Connection failed: " . $conn->connect_error . "</div>");
        }

        // Function to display all tables
        function showTables($conn) {
            $sql = "SHOW TABLES";
            if ($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    echo "<h4 class='mb-0'>Tables in database:</h4><ul class='list-group'>";
                    while($row = $result->fetch_array()) {
                        echo "<li class='list-group-item'><a class='content-loader' href='/admin/developer/database/?table=" . htmlspecialchars($row[0]) . "'>" . htmlspecialchars($row[0]) . "</a></li>";
                    }
                    echo "</ul>";
                } else {
                    echo "<div class='alert alert-warning'>No tables found.</div>";
                }
                $result->free();
            } else {
                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
        }

        // Function to display table fields
        function showTableFields($conn, $table) {
            $sql = "DESCRIBE " . $conn->real_escape_string($table);
            if ($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    echo "<h4 class='mb-0'>Fields in table " . htmlspecialchars($table) . ":</h4><table class='table table-striped'><thead class='thead-dark'><tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th><th>Extra</th></tr></thead><tbody>";
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . htmlspecialchars($row["Field"]) . "</td><td>" . htmlspecialchars($row["Type"]) . "</td><td>" . htmlspecialchars($row["Null"]) . "</td><td>" . htmlspecialchars($row["Key"]) . "</td><td>" . htmlspecialchars($row["Default"]) . "</td><td>" . htmlspecialchars($row["Extra"]) . "</td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<div class='alert alert-warning'>No fields found.</div>";
                }
                $result->free();
            } else {
                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
        }

        // Function to display table rows
        function showTableRows($conn, $table) {
            $sql = "SELECT * FROM " . $conn->real_escape_string($table);
            if ($result = $conn->query($sql)) {
                if ($result->num_rows > 0) {
                    echo "<h4 class='mb-0'>Rows in table " . htmlspecialchars($table) . ":</h4><table class='table table-striped'><thead class='thead-dark'><tr>";
                    // Print table headers
                    while ($field = $result->fetch_field()) {
                        echo "<th>" . htmlspecialchars($field->name) . "</th>";
                    }
                    echo "<th>Actions</th></tr></thead><tbody>";
                    // Print table rows
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($row as $data) {
                            echo "<td>" . htmlspecialchars($data) . "</td>";
                        }
                        echo "<td><a href='?table=" . htmlspecialchars($table) . "&edit=" . htmlspecialchars($row['id']) . "' class='btn btn-sm btn-primary'><i data-feather='edit'></i> Edit</a> <a href='?table=" . htmlspecialchars($table) . "&delete=" . htmlspecialchars($row['id']) . "' class='btn btn-sm btn-danger'><i data-feather='trash-2'></i> Delete</a></td></tr>";
                    }
                    echo "</tbody></table>";
                } else {
                    echo "<div class='alert alert-warning'>No rows found.</div>";
                }
                $result->free();
            } else {
                echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
        }

        // Main logic
        if (isset($_GET['table'])) {
            $table = $_GET['table'];
            showTableFields($conn, $table);
            showTableRows($conn, $table);
        } else {
            showTables($conn);
        }

        // Close connection
        $conn->close();
        ?>
    </div>
</div>
<script>
    // Initialize Feather icons
    feather.replace();
</script>
