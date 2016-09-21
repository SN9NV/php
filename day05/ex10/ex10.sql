SELECT f.title as Title, f.summary as Summary, f.prod_year
FROM film as f
INNER JOIN genre as g
ON f.id_genre = g.id_genre AND g.name = 'erotic'
ORDER BY f.prod_year DESC;
