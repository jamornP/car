CREATE USER 'usersci'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'sciencepwd';

GRANT ALL PRIVILEGES ON db_car.* TO 'usersci'@'localhost';