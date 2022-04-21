/*Se le da permisos al usuario test sobre la base de datos Minijuegos_Repaso, para que solo pueda hacer manejo de datos(seleccionar, insertar, acutalizar y borrar) */

GRANT SELECT, INSERT, UPDATE, DELETE ON `Minijuegos\_Repaso`.* TO 'test'@'localhost';