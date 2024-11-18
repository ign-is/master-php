#INSERTAR NUEVOS REGISTROS#
INSERT INTO usuarios VALUES(null, 'Jhon', 'Doe', 'jhon@doe.com', '1234', '2024-11-18');
INSERT INTO usuarios VALUES(null, 'Juan', 'Donaldo', 'juann@donaldo.com', '1234', '2024-11-05');
INSERT INTO usuarios VALUES(null, 'Mark', 'Flip', 'mark@flip.com', '1234', '2024-05-01');

#INSERTAR FILAS SOLO CON CIERTAS COLUMNAS#
INSERT INTO usuarios(email, password) VALUES('admin@admin', 'admin');
