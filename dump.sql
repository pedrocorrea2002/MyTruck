CREATE DATABASE MyTruck;
USE MyTruck;

CREATE TABLE `MyTruck`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `data_cadastro` datetime NOT NULL
);

CREATE TABLE `MyTruck`.`pedidos` (
  `pedido_id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `empresa` VARCHAR(100) NOT NULL,
  `usuario` VARCHAR (200) NOT NULL,
  `telefone` VARCHAR(100) NOT NULL,
  `tipo` VARCHAR(30) NOT NULL,
  `frota` INT NOT NULL,
  `data_pedido` DATETIME NOT NULL
);