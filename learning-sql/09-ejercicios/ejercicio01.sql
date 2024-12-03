/* 
1. Diseñar y crear la base de datos de un concesionario.
 */

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
id       int(10) auto_increment not null,
modelo   varchar(100) not null,
marca    varchar(50),
precio   int(20) not null,
stock    int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
id       int(10) auto_increment not null,
nombre   varchar(100) not null,
ciudad   varchar(100),
CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;