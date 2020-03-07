CREATE USER 'alvaro'@'localhost' IDENTIFIED BY 'alvaro';
GRANT ALL PRIVILEGES ON * . * TO 'alvaro'@'localhost';
FLUSH PRIVILEGES;
CREATE DATABASE wordpress;