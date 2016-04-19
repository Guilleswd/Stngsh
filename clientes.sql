create database stngh;
use stngh;
create table cliente(
cedula BIGINT,
nombre VARCHAR(30),
apellidos VARCHAR(30),
direccion VARCHAR(40),
telefono int, 
correo VARCHAR(30),
PRIMARY KEY (cedula));