DROP DATABASE IF EXISTS;
CREATE DATABASE contacts_app;
USE contacts_app;
CREATE TABLE contacts (
  id INT PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(255) NOT NULL,
  phone_number VARCHAR(255) NOT NULL
);
INSERT INTO
  contacts (name, phone_number)
VALUES
  ('John', '125358');