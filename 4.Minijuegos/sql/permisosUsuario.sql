/*Se crea el usuario*/
CREATE USER 'test'@'localhost' IDENTIFIED VIA mysql_native_password USING '***';GRANT USAGE ON *.* TO 'test'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 

/*Se le quita todos los permisos globales que tenga, y se le da premisos para manejo de datos(selecciona, insertar, actualizar y borrar)*/
REVOKE ALL PRIVILEGES ON *.* FROM 'test'@'localhost'; REVOKE GRANT OPTION ON *.* FROM 'test'@'localhost'; GRANT SELECT, INSERT, UPDATE, DELETE, FILE ON *.* TO 'test'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0; 

/*Se le da permisos al usuario test sobre la base de datos Minijuegos_Repaso, para que solo pueda hacer manejo de datos(seleccionar, insertar, acutalizar y borrar) */
GRANT SELECT, INSERT, UPDATE, DELETE ON `Minijuegos\_Repaso`.* TO 'test'@'localhost';