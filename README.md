# CRUD de Videojocs amb PHP/MySQLi

Projecte per a l'assignatura AEA5.2. Implementa un CRUD complet sobre una taula de videojocs.

## Estructura de la base de dades

```sql
CREATE TABLE videojocs (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    descripcio TEXT,
    desenvolupadora VARCHAR(255),
    any_llancament YEAR,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
