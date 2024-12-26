SELECT v.nombre, COUNT(c.vendedor_id) FROM vendedores v 
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.nombre;

/* Solucion curso */
SELECT v.nombre, v.apellidos, COUNT(c.id) FROM vendedores v 
LEFT JOIN clientes c ON c.vendedor_id = v.id
GROUP BY v.id;