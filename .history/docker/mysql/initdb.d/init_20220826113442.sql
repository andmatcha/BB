DROP DATABASE IF EXISTS bb;

CREATE DATABASE bb;

USE bb;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    password VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    picture

);

INSERT INTO
    test (name)
VALUES
    ('テストデータ1'),
    ('テストデータ2');
