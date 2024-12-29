CREATE TABLE payments (
    payments_id INT AUTO_INCREMENT PRIMARY KEY,
    payments_invoices_id INT NOT NULL,
    payments_amount DECIMAL(10, 2) NOT NULL,
    payments_payment_date DATE NOT NULL,
    payments_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    payments_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);