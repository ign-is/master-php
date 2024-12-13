SELECT c.nombre, e.cantidad FROM clientes c 
JOIN encargos e ON c.id = e.cliente_id ORDER BY e.cantidad DESC;


# RESULTADO DEL CURSO INTERPRETANDO MAL EL ENUNCIADO COMO SIEMPRE#
SELECT * c.nombre, COUNT(e.id) FROM encargos e 
INNER JOIN clientes c ON c.id = e.cliente_id
GROUP BY cliente_id ORDER BY 2 DESC LIMIT 2;