CREATE DATABASE demo;
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    user_type set('end_user', 'admin') DEFAULT 'end_user'
);
CREATE TABLE response_sheet_layout (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    main_column VARCHAR(65535),
    saved_on DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE response_sheet_div1 (
    res_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    input_field_1 VARCHAR(255),
    input_field_2 VARCHAR(255),
    input_field_3 VARCHAR(255)
);
CREATE TABLE response_sheet_div2 (
    res_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    input_field_1 VARCHAR(255),
    input_field_2 VARCHAR(255),
    input_field_3 VARCHAR(255)
);
CREATE TABLE response_sheet_div3 (
    res_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    input_field_1 VARCHAR(255),
    input_field_2 VARCHAR(255),
    input_field_3 VARCHAR(255)
);
