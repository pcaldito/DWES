create table alumnos(
    idAumno int primary key,
    nombre varchar(50),
    apellidos varchar(50),
    edad int,
    curso char(3)
);

create table cursos(
    idCurso int primary key,
    nombre char(3) NOT NULL,
    descripcion varchar(50) NOT NULL
);

