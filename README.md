# 00buboba

Debe crearse una base de datos en el PHPMyAdmin

nombre "buboba" UFT8 general_cli

CREATE TABLE productos(
id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
producto VARCHAR(255),
precio DECIMAL(5, 2),
en_stock INT(3),
INDEX(precio, en_stock)
);


INSERT INTO `productos` VALUES (1,'Camiseta Trebol amarillo',6,50),(2,'Camiseta Trebol rojo',6,50),(3,'Camiseta Trebol oliva',6,50),(4,'Camiseta Triangulo amarillo',5,50),(5,'Camiseta Triangulo rojo',5,50),(6,'Camiseta Triangulo oliva',5,50),(7,'Calcetines Trebol amarillo',2,50),(8,'Calcetines Trebol rojo',2,50),(9,'Calcetines Trebol oliva',2,50),(10,'Calcetines Triangulo amarillo',1,50),(11,'Calcetines Triangulo rojo',1,50),(12,'Calcetines Triangulo oliva',1,50);
