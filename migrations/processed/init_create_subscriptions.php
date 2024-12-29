CREATE TABLE subscriptions (
    subscriptions_id INT AUTO_INCREMENT PRIMARY KEY,
    subscriptions_customers_id INT NOT NULL,
    subscriptions_plan VARCHAR(255) NOT NULL,
    subscriptions_start_date DATE NOT NULL,
    subscriptions_end_date DATE,
    subscriptions_status VARCHAR(50) NOT NULL,
    subscriptions_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    subscriptions_updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);