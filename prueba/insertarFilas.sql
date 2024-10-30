use prueba;

INSERT INTO Cursos (idCurso, nombre, descripcion)
VALUES
(1, 'DAW', 'Desarrollo Aplicaciones Web'),
(2, 'MI', 'Mecatronica Industrial'),
(3, 'SMR', 'Sistemas Microinformaticos y Redes'),
(4, 'GA', 'Gestion Administrativa'),
(5, 'DAM', 'Desarrollo Aplicaciones Multiplataforma');


insert into Alumnos values(1, 'Juan', 'Perez', 20, 'DAW');
insert into Alumnos values(2, 'Maria', 'Lopez', 22, 'DAW');
insert into Alumnos values(3, 'Pedro', 'Garcia', 21, 'DAW');
insert into Alumnos values(4, 'Ana', 'Martinez', 23, 'DAW');
insert into Alumnos values(5, 'Luis', 'Sanchez', 24, 'DAW');
insert into Alumnos values(6, 'Pablo', 'Caldito', 20, 'GA');
insert into Alumnos values(7, 'Mauricio', 'Peña', 27, 'GA');
INSERT INTO Alumnos VALUES (8, 'Sofia', 'Fernandez', 22, 'GA');
INSERT INTO Alumnos VALUES (9, 'Laura', 'Diaz', 21, 'GA');
INSERT INTO Alumnos VALUES (10, 'Jorge', 'Ruiz', 23, 'DAM');
INSERT INTO Alumnos VALUES (11, 'Elena', 'Morales', 20, 'DAM');
INSERT INTO Alumnos VALUES (12, 'Pablo', 'Ortiz', 24, 'DAM');
INSERT INTO Alumnos VALUES (13, 'Claudia', 'Mendoza', 22, 'SMR');
INSERT INTO Alumnos VALUES (14, 'Miguel', 'Romero', 26, 'SMR');
INSERT INTO Alumnos VALUES (15, 'Raul', 'Cortes', 27, 'SMR');
INSERT INTO Alumnos VALUES (16, 'Isabel', 'Vega', 23, 'MI');
INSERT INTO Alumnos VALUES (17, 'Roberto', 'Soto', 28, 'MI');
INSERT INTO Alumnos VALUES (18, 'Paula', 'Castillo', 21, 'MI');
INSERT INTO Alumnos VALUES (19, 'Fernando', 'Navarro', 22, 'MI');
INSERT INTO Alumnos VALUES (20, 'Monica', 'Reyes', 25, 'MI');

insert into alumnos_cursos VALUES (1,1);
insert into alumnos_cursos VALUES (2,1);
insert into alumnos_cursos VALUES (3,1);
insert into alumnos_cursos VALUES (4,1);
insert into alumnos_cursos VALUES (5,1);
insert into alumnos_cursos VALUES (6,3);
insert into alumnos_cursos VALUES (7,3);
insert into alumnos_cursos VALUES (8,3);
insert into alumnos_cursos VALUES (9,2);
insert into alumnos_cursos VALUES (10,2);
insert into alumnos_cursos VALUES (11,2);
insert into alumnos_cursos VALUES (12,2);
insert into alumnos_cursos VALUES (13,5);
insert into alumnos_cursos VALUES (14,5);
insert into alumnos_cursos VALUES (15,5);
insert into alumnos_cursos VALUES (16,5);
insert into alumnos_cursos VALUES (17,5);
insert into alumnos_cursos VALUES (18,4);
insert into alumnos_cursos VALUES (19,4);
insert into alumnos_cursos VALUES (20,4);

