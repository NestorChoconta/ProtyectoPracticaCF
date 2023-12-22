create database cf;
use cf;

create table usuarios(
documento int primary key not null,
nombre varchar (50) not null,
apellidos varchar(50) not null,
fechaNac date not null,
ciudad varchar (50) not null,
correo varchar (50) not null,
telefono varchar(50) not null,
ocupacion varchar(50) not null
);
drop table usuarios;
insert into usuarios (documento, nombre, apellidos, fechaNac, ciudad, correo, telefono, ocupacion) values
(123456, 'nestor', 'choconta', '2023-08-19', 'Bogota', 'nestor@gmail.com', 3138654879,'independiente');

select * from usuarios;