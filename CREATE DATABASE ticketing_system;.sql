CREATE DATABASE ticketing_system;
USE ticketing_system;

CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    issue TEXT,
    status VARCHAR(20)
);