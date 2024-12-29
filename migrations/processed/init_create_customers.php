CREATE TABLE customers (
    customers_id INT AUTO_INCREMENT PRIMARY KEY,
    customers_name VARCHAR(255) NOT NULL,
    customers_email VARCHAR(255) NOT NULL,
    customers_phone VARCHAR(20),
    customers_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    customers_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);