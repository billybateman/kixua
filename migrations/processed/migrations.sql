
CREATE TABLE migrations (
    migrations_id INT AUTO_INCREMENT PRIMARY KEY,
    migrations_created_date DATETIME NOT NULL,
    migrations_query TEXT NOT NULL
);