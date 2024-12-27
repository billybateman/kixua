CREATE TABLE projects (
    projects_id INT AUTO_INCREMENT PRIMARY KEY,
    projects_name VARCHAR(255) NOT NULL,
    projects_details TEXT,
    projects_status VARCHAR(50) NOT NULL,
    projects_clients_id INT NOT NULL,
    projects_timeline_date DATE NOT NULL,
    projects_create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);