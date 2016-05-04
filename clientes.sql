create database stngh;
use stngh;
create table cliente(
nombre VARCHAR(30),
apellido VARCHAR(30),
correo VARCHAR(30),
usuario VARCHAR(30),
contraseña INT,
repitacontraseña INT,
PRIMARY KEY (nombre));