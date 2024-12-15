
SELECT * FROM clientes WHERE vendedor_id IN (
SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos = 'Lopez');