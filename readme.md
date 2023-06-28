# pruebamysql

CREATE DATABASE campusland;

SHOW DATABASES;

USE campusland;

CREATE TABLE  paises(
  id_pais INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre_pais varchar(100)
);

CREATE TABLE  departamento(
  id_dep INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre_dep varchar(100),
  id_pais FOREIGN KEY(id_pais) REFERENCES pais (id_pais)
);

CREATE TABLE campers(
​	idcamper VARCHAR(20),
​	nombrecamper VARCHAR(50),
​	apellidocamper VARCHAR(50)
);



ALTER TABLE departamento ADD CONSTRAINT id_pais FOREIGN KEY (id_pais) REFERENCES pais (id_pais);


