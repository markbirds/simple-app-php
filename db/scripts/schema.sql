CREATE DATABASE SIMPLE_APP_PHP;

USE SIMPLE_APP_PHP;

CREATE TABLE IF NOT EXISTS `User` (
  `id` INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(50) NOT NULL,
  `lastname` VARCHAR(50) NOT NULL,
  `age` INTEGER NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);