DROP DATABASE IF EXISTS bb;

CREATE DATABASE bb;

USE bb;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    password VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    picture_path VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL

);

INSERT INTO
    users (name, email, password, picture_path)
VALUES
    ('jin', 'jin_email', 'jin', 'jin_pic');


DROP TABLE IF EXISTS users;

CREATE TABLE posts (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    message VARCHAR(140) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    created_at DATETIME DEFAULT,
    updated_at DATETIME

);

INSERT INTO
    users (message, created_at, updated_at)
VALUES
    ('jin', 'jin_email', 'jin', 'jin_pic');
