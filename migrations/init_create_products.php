CREATE TABLE products (
    products_id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    products_name VARCHAR(255) NOT NULL,
    products_description TEXT NOT NULL,
    products_price DECIMAL(8, 2) NOT NULL,
    products_created_at TIMESTAMP NULL,
    products_updated_at TIMESTAMP NULL
)