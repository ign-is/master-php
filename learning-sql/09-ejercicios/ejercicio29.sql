CREATE VIEW vendedoresA AS
SELECT v.nombre, v.apellidos FROM vendedores v
INNER JOIN grupos g ON g.id = v.grupo_id
WHERE g.nombre = 'Vendedores A';


/* Solucion del curso lo hizo bien y yo mal*/
CREATE VIEW vendedoresA AS
SELECT * FROM vendedores WHERE grupo_id IN
    (SELECT id FROM grupos WHERE nombre = "Vendedores A");