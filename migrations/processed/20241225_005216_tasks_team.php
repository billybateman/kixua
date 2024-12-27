CREATE TABLE tasks_team (
    tasks_team_id INT AUTO_INCREMENT PRIMARY KEY,
    tasks_team_tasks_id INT NOT NULL,
    tasks_team_users_id INT NOT NULL,
    FOREIGN KEY (tasks_team_tasks_id) REFERENCES tasks(tasks_id) ON DELETE CASCADE
);