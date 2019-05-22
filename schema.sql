CREATE DATABASE doingsdone
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE doingsdone;

CREATE TABLE projects (
                          id INT AUTO_INCREMENT PRIMARY KEY,
                          name VARCHAR(128) NOT NUll,
                          user_id INT NOT NULL
);

CREATE TABLE tasks (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(128) NOT NULL,
                       create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       date_deadline TIMESTAMP NULL,
                       date_complete TIMESTAMP NULL,
                       status BOOLEAN,
                       file VARCHAR(256),
                       user_id INT NOT NULL,
                       project_id INT NOT NULL
);

CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       create_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       name VARCHAR(128) NOT NULL,
                       email VARCHAR(64) NOT NULL UNIQUE,
                       password VARCHAR(64) NOT NULL
);

CREATE UNIQUE INDEX user_email ON users(email);