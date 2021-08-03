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
    nombreasesor varchar(5000) not null DEFAULT '',
    division varchar(100) not null DEFAULT '',
    puntuacion int not null DEFAULT 0
);

Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Laufen Team', 'Clara Cardona Martínez', 'Tecnología Ambiental y Energías Renovables');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Gaztron', 'Clara Cardona Martínez', 'Tecnología Ambiental y Energías Renovables');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Reparación de electrodomésticos e instalaciones eléctricas', 'José Carlos Salinas Cruz', 'División Industrial');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Agencia de mantenimiento por medio de servicio web', 'José Carlos Salinas Cruz', 'División Industrial');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Mantenimiento preventivo y correctivo a infraestructura de protección civil', 'José Carlos Salinas Cruz', 'División Industrial');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Servicio de mantenimiento o de electrodomésticos a domicilio', 'José Carlos Salinas Cruz', 'División Industrial');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Automatización de iluminación', 'José Carlos Salinas Cruz', 'División Industrial');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Simulación de Cluster Digital para autos con soporte de protocolo CAN/OBD-II', 'Hugo Enrique Calderón López', 'División Industrial');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'NAHUS SAS', '', 'División Económico Administrativa');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Belle Peau SAS', '', 'División Económico Administrativa');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Ecology Trash', '', 'División Económico Administrativa');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Take Care S de RL', '', 'División Económico Administrativa');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Contact Canin SAS (Sociedad de Acciones Simplificadas)', '', 'División Económico Administrativa');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Empresa Ecosust SA', '', 'División Económico Administrativa');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'grayCloud', 'Mario Eduardo Donjuán Carreño', 'Tecnologías de la Información');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'VIAVENTUS', 'Mario Eduardo Donjuán Carreño', 'Tecnologías de la Información');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Dynabyte', 'Víctor Manuel Aguilar Sánchez', 'Tecnologías de la Información');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'JVM Solutions', 'Víctor Manuel Aguilar Sánchez', 'Tecnologías de la Información');
Insert into proyecto (idevento, nombreproyecto, nombreasesor, division) values('1', 'Star Industries', 'Víctor Manuel Aguilar Sánchez', 'Tecnologías de la Información');

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

