CREATE TABLE users_activities (
    users_activities_id INT AUTO_INCREMENT PRIMARY KEY,
    users_activities_users_id INT NOT NULL,
    users_activities_url VARCHAR(255) NOT NULL,
    users_activities_action VARCHAR(100) NOT NULL,
    users_activities_created_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);