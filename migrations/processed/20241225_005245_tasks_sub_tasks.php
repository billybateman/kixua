CREATE TABLE tasks_sub_tasks (
    tasks_sub_tasks_id INT AUTO_INCREMENT PRIMARY KEY,
    tasks_sub_tasks_tasks_id INT NOT NULL,
    tasks_sub_tasks_name VARCHAR(255) NOT NULL,
    tasks_sub_tasks_details TEXT,
    tasks_sub_tasks_status VARCHAR(50) NOT NULL,
    tasks_sub_tasks_timeline_date DATE NOT NULL,
    tasks_sub_tasks_create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (tasks_sub_tasks_tasks_id) REFERENCES tasks(tasks_id) ON DELETE CASCADE
);