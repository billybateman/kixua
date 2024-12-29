CREATE TABLE projects (
    projects_id INT AUTO_INCREMENT PRIMARY KEY,
    projects_name VARCHAR(255) NOT NULL,
    projects_details TEXT,
    projects_status VARCHAR(50),
    projects_due_date DATE,
    projects_managers_users_id INT,
    projects_progress_percent INT,
    projects_priority VARCHAR(50),
    projects_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    projects_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
