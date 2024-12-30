SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

SELECT co.marca, co.modelo, e.cantidad from coches co, encargos e
WHERE co.id = e.coche_id ORDER BY e.cantidad DESC;

/*
Resultado del curso, lo planteo mal
*/

SELECT * FROM vendedores ORDER BY fecha ASC LIMIT 1;

SELECT * FROM coches WHERE id IN
    (SELECT coche_id FROM encargos WHERE cantidad IN
        (SELECT MAX(cantidad) FROM encargos));