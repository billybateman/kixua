CREATE TABLE tasks (
    tasks_id INT AUTO_INCREMENT PRIMARY KEY,
    tasks_name VARCHAR(255) NOT NULL,
    tasks_details TEXT,
    tasks_status VARCHAR(50) NOT NULL,
    tasks_projects_id INT NOT NULL,
    tasks_timeline_date DATE NOT NULL,
    tasks_create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (tasks_projects_id) REFERENCES projects(projects_id) ON DELETE CASCADE
);