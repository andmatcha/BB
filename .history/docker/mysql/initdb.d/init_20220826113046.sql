DROP DATABASE IF EXISTS bb;

CREATE DATABASE bb;

USE bb;

DROP TABLE IF EXISTS test;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

INSERT INTO
    test (name)
VALUES
    ('テストデータ1'),
    ('テストデータ2');