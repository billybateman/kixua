CREATE TABLE clients (
    clients_id INT AUTO_INCREMENT PRIMARY KEY,
    clients_name VARCHAR(255) NOT NULL,
    clients_email VARCHAR(255) NOT NULL UNIQUE,
    clients_phone VARCHAR(20),
    clients_address TEXT,
    clients_company VARCHAR(255),
    clients_tax_number VARCHAR(50),
    clients_status ENUM('active', 'inactive') DEFAULT 'active',
    clients_notes TEXT,
    clients_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    clients_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);