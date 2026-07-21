CREATE DATABASE IF NOT EXISTS maharshi_airline
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE maharshi_airline;

CREATE TABLE IF NOT EXISTS bookings (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    booking_id VARCHAR(20) NOT NULL UNIQUE,
    passenger_name VARCHAR(100) NOT NULL,
    departure_city VARCHAR(100) NOT NULL,
    destination_city VARCHAR(100) NOT NULL,
    departure_date DATE NOT NULL,
    booking_status ENUM('Confirmed', 'Cancelled') NOT NULL DEFAULT 'Confirmed',
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_departure_date (departure_date),
    INDEX idx_route (departure_city, destination_city)
) ENGINE=InnoDB;
