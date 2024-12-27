CREATE TABLE databaseChanges  (
    databaseChanges_id INT AUTO_INCREMENT PRIMARY KEY,
    databaseChanges_created_date DATETIME NOT NULL,
    databaseChanges_query TEXT NOT NULL
);