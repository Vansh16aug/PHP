CREATE DATABASE event_system;

USE event_system;

-- Events table
CREATE TABLE events (
    event_id INT AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    event_date DATE NOT NULL
);

-- Registrations table
CREATE TABLE registrations (
    registration_id INT AUTO_INCREMENT PRIMARY KEY,
    event_id INT NOT NULL,
    user_id VARCHAR(50) NOT NULL,
    FOREIGN KEY (event_id) REFERENCES events(event_id)
);


INSERT INTO events (event_name, event_date) VALUES 
('Tech Conference', '2024-12-15'),
('Music Fest', '2024-12-20'),
('Art Workshop', '2024-12-22');
