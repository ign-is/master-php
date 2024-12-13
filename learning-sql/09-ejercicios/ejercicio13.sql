SELECT CEIL(AVG(v.sueldo)) AS 'Media Salarial', g.nombre, g.ciudad FROM vendedores v 
INNER JOIN grupos g ON g.id = v.grupo_id
GROUP BY grupo_id;