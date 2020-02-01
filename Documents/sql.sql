CREATE DATABASE opentray;
USE opentray;

CREATE TABLE opentray.residents (
  id INT NOT NULL AUTO_INCREMENT,
  facility INT NULL,
  fname TEXT NOT NULL,
  lname TEXT NOT NULL,
  room INT NULL,
  dine TEXT NULL,
  likes TEXT NULL,
  dislikes TEXT NULL,
  allergies TEXT NULL,
  comment TEXT NULL,
  active BIT NOT NULL DEFAULT 1,
  PRIMARY KEY (id));

CREATE TABLE opentray.staff (
  id INT NOT NULL AUTO_INCREMENT,
  facility INT NULL,
  fname TEXT NOT NULL,
  lname TEXT NOT NULL,
  permission INT NOT NULL,
  active BIT NULL DEFAULT 1,
PRIMARY KEY (id));

CREATE TABLE opentray.facilities (
  id INT NOT NULL AUTO_INCREMENT,
  facility TEXT NOT NULL,
PRIMARY KEY (id));