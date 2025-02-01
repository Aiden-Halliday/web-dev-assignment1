CREATE DATABASE assignment-1;

CREATE TABLE subscribers (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(50) NOT NULL,
  lname VARCHAR(50) NOT NULL,
  email VARCHAR(255) NOT NULL,
  address VARCHAR(255) NOT NULL,
  deliveryMethod VARCHAR(10),
  reminder INT NOT NULL
);