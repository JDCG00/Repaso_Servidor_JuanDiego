/*Creación base de datos Juan Diego Cartetero Granado*/

CREATE DATABASE minijuegos_Repaso;

USE minijuegos_Repaso;

CREATE TABLE minijuegos(
    idMinijuego tinyint unsigned AUTO_INCREMENT PRIMARY KEY NOT NULL,
    nombre varchar(50) NOT NULL UNIQUE,
    icono varchar(40) NULL,
    ruta varchar(255) NOT NUll
);