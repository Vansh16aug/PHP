CREATE DATABASE gardening_community;

USE gardening_community;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    gardening_style VARCHAR(50) NOT NULL,
    failed_attempts INT DEFAULT 0,
    lock_time DATETIME DEFAULT NULL
);