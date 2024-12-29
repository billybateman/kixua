CREATE TABLE tasks (
    tasks_id INT AUTO_INCREMENT PRIMARY KEY,
    tasks_name VARCHAR(255) NOT NULL,
    tasks_description TEXT,
    tasks_projects_id INT,
    tasks_users_id INT,
    tasks_due_date DATE,
    tasks_status VARCHAR(50),
    tasks_progress INT,
    tasks_is_child BOOLEAN DEFAULT FALSE,
    tasks_parent_tasks_id INT DEFAULT NULL,
    tasks_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    tasks_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (tasks_projects_id) REFERENCES projects(projects_id) ON DELETE CASCADE,
    FOREIGN KEY (tasks_parent_tasks_id) REFERENCES tasks(tasks_id) ON DELETE SET NULL
);
