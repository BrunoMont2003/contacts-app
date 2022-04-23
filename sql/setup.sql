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
INSERT INTO
  contacts (name, phone_number)
VALUES
  ('Bruno', '455445');
INSERT INTO
  contacts (name, phone_number)
VALUES
  ('Jose', '34534');
INSERT INTO
  contacts (name, phone_number)
VALUES
  ('Eduardo', '3244532');