CREATE TABLE services (
    services_id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    services_name VARCHAR(255) NOT NULL,
    services_description TEXT NOT NULL,
    services_price DECIMAL(8, 2) NOT NULL,
    services_created_at TIMESTAMP NULL,
    services_updated_at TIMESTAMP NULL
)
