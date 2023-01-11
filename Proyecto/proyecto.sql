create database techlab;
use techlab;

create table usuario(
    id int(3) primary key auto_increment,
    usuario varchar(10), 
    correo varchar(100) not null,
    contraseña varchar(10) not null
);

---------------------------------------------------------------------------------

create database 2asir;
use 2asir;

create table alumnos(
    nombre varchar(20) primary_key,
    apellidos varchar(20),
    edad int(3),
    correo varchar(20)
);

INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Sergio", "Acosta Guijarro", 19, "acostaguijarrosergio@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Hugo", "Márquez Fernandez", 18, "hugomarquez@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Ana", "Enana", 28, "analaenana@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Gonzalo", "Arribas Narváez", 25, "gonzaloarribas@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Paula", "Pepi", 22, "pepilapepa@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Ramon", "Lagoz", 21, "ramonlagoz@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Daniel", "Comas", 18, "comasdaniel@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Carolina", "La fina", 20, "finolas123456@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Sergio", "Aguilera", 23, "aguilerasergio@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Veronica", "Ghsdf", 24, "veronikas99@gmail.com");
INSERT INTO alumnos (nombre, apellidos, edad, correo)
VALUES ("Mateo", "Mendiondo", 18, "mendiondomateo@gmail.com");

create table materia(
    codigo int(3) primary_key,
    nombre varchar(20)
);

INSERT INTO materia (codigo, nombre)
VALUES (164, "ABBDD");
INSERT INTO materia (codigo, nombre)
VALUES (987, "ASO");
INSERT INTO materia (codigo, nombre)
VALUES (298, "Empresa");
INSERT INTO materia (codigo, nombre)
VALUES (321, "IAW");
INSERT INTO materia (codigo, nombre)
VALUES (884, "Inglés");
INSERT INTO materia (codigo, nombre)
VALUES (635, "Seguridad");
INSERT INTO materia (codigo, nombre)
VALUES (727, "Servicios");
INSERT INTO materia (codigo, nombre)
VALUES (452, "Ética");

create table notas(
    codigo_notas int(3) primary_key,
    exparcial int(2),
    exglobal int(2),
    faltas int(2),
    tra_clase varchar(8),
    actitud varchar(8)
);

drop database 2asir;


---------------------------------------------------------------------------------

create database iberia;
use iberia;

create table pilotos(
    codigo varchar(5),
    nombre varchar(20),
    nacionalidad varchar(20),
    edad int(2),
    rango varchar(20)
);

create table aviones(
    modelo varchar(20),
    longitud dec(3,2),
    envergadura dec(3,2),
    alcance int(5),
    butacas int(4),
    unidades int(5),
    fabricante varchar(20)
);

insert into aviones (modelo, motores, longitud, envergadura, alcance, butacas, unidades, fabricante)

