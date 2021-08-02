create database iw;

use iw;

create table evento(
    idevento int PRIMARY KEY AUTO_INCREMENT,
    nombreevento varchar(255) not null DEFAULT '',
    contrasena varchar(255) not null DEFAULT '',
    activo int not null DEFAULT  1,
    fechainicio datetime not null DEFAULT  '2000-01-01',
    fechafin datetime not null DEFAULT  '2000-01-01'

);

create table pregunta(
    idpregunta int  PRIMARY KEY,
    idevento int not null DEFAULT 0,
    pregunta varchar(5000) not null DEFAULT  ''
);

create table proyecto(
    idproyecto int PRIMARY KEY AUTO_INCREMENT,
    idevento int not null DEFAULT 0,
    nombreproyecto varchar(5000) not null DEFAULT '',
    puntuacion int not null DEFAULT 0
);

create table respuesta(
    pkrespuesta int PRIMARY KEY AUTO_INCREMENT,
    idevento int not null default 0,
    idproyecto int not null default 0,
    idpregunta int not null default 0,
    idrespuesta int not null default 0,
    valor int not null default 0,
    nombreevaluador varchar(1024) not null default '',
    correoevaluador varchar(1024) not null default ''
);

