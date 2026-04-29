# CRUD de Videojocs amb PHP/MySQLi

Projecte per a l'assignatura AEA5.2. Implementa un CRUD complet sobre una taula de videojocs.

## Estructura de la base de dades

```sql
CREATE TABLE videojuegos (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    descripcion VARCHAR(255)
);
