CREATE DATABASE IF NOT EXISTS comments;

USE comments;

CREATE TABLE comments.commentform (
       id int primary key auto_increment,
       name text,
       email text,
       comment text
);
