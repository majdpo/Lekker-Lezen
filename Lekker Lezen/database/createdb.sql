DROP DATABASE IF EXISTS lekkerlezen;
CREATE DATABASE lekkerlezen;
USE lekkerlezen;
CREATE TABLE book (
                         id INT NOT NULL AUTO_INCREMENT,
                         title VARCHAR(50),
                         author VARCHAR(50),
                         description VARCHAR(512),
                         price decimal(4,2),
                         releasedate DATE,
                         booknumber numeric(9),
                         PRIMARY KEY (id)
);
USE lekkerlezen;
ALTER TABLE book
    ADD tags VARCHAR(256),
    ADD publisher VARCHAR(256),
    ADD language VARCHAR(12);
