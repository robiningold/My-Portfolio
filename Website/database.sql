CREATE DATABASE if not exists myportfolio;
USE myportfolio;
CREATE TABLE users (
    users_id int NOT NULL AUTO_INCREMENT,
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    PRIMARY KEY (users_id)
);
CREATE TABLE projects (
    project_id int NOT NULL AUTO_INCREMENT,
    projectname varchar(255) NOT NULL,
    description varchar(255) NOT NULL,
    link varchar(255) NOT NULL,
    PRIMARY KEY (project_id)
);