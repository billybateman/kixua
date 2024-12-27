CREATE TABLE invoices (
    invoices_id INT AUTO_INCREMENT PRIMARY KEY,
    invoices_customer_id INT NOT NULL,
    invoices_amount DECIMAL(10, 2) NOT NULL,
    invoices_due_date DATE NOT NULL,
    invoices_status VARCHAR(50) NOT NULL,
    invoices_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    invoices_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);