SELECT c.id, c.nombre AS 'CLIENTE', c.vendedor_id, v.nombre AS 'VENDEDOR' FROM clientes c, vendedores v
    WHERE c.vendedor_id IN
        (SELECT id FROM vendedores) GROUP BY id;


# Solucion del curso #
SELECT c.id, c.nombre, v.id, CONCAT(v.nombre, ' ', v.apellidos) AS 'VENDEDOR'
FROM clientes c, vendedores v
WHERE c.vendedor_id = v.id;