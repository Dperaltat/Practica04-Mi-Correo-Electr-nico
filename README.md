# Practica04-Mi-Correo-Electr-nico

![1](https://user-images.githubusercontent.com/34029227/58285264-0f6c2480-7d72-11e9-90b5-b7598c4ea5d8.PNG)
![2](https://user-images.githubusercontent.com/34029227/58285265-0f6c2480-7d72-11e9-8af7-7e07792c6e49.PNG)
![3](https://user-images.githubusercontent.com/34029227/58285266-0f6c2480-7d72-11e9-9c2b-461a8b678a97.PNG)
![4](https://user-images.githubusercontent.com/34029227/58285267-0f6c2480-7d72-11e9-89c9-8cebb9e98267.PNG)
![5](https://user-images.githubusercontent.com/34029227/58285268-1004bb00-7d72-11e9-9e0e-c6987235209f.PNG)
![6](https://user-images.githubusercontent.com/34029227/58285269-1004bb00-7d72-11e9-9819-ca1cd6bae78d.PNG)
![7](https://user-images.githubusercontent.com/34029227/58285270-1004bb00-7d72-11e9-9445-8338f8fbed70.PNG)
![8](https://user-images.githubusercontent.com/34029227/58285272-1004bb00-7d72-11e9-8653-f239513bbd8b.PNG)
![9](https://user-images.githubusercontent.com/34029227/58285274-1004bb00-7d72-11e9-909b-021f70e13ec0.PNG)
![10](https://user-images.githubusercontent.com/34029227/58285275-109d5180-7d72-11e9-8364-10afa5997e48.PNG)
![11](https://user-images.githubusercontent.com/34029227/58285276-109d5180-7d72-11e9-80ea-431fab06a10b.PNG)
![12](https://user-images.githubusercontent.com/34029227/58285278-109d5180-7d72-11e9-95c3-f78ffc2aeffd.PNG)
![13](https://user-images.githubusercontent.com/34029227/58285280-1135e800-7d72-11e9-802a-b19fc573e17d.PNG)
![14](https://user-images.githubusercontent.com/34029227/58285283-1135e800-7d72-11e9-8245-6713cee5a100.PNG)
![15](https://user-images.githubusercontent.com/34029227/58285284-1135e800-7d72-11e9-8903-20bc383fe2af.PNG)
![16](https://user-images.githubusercontent.com/34029227/58285285-1135e800-7d72-11e9-97ab-fc68a491e2fc.PNG)


BASE

CREATE TABLE `usuario` (
 `usu_id` INT(11) NOT NULL AUTO_INCREMENT,
 `usu_nombres` VARCHAR(50) NOT NULL,
 `usu_apellidos` VARCHAR(50) NOT NULL,
 `usu_correo` VARCHAR(35) NOT NULL,
 `usu_password` VARCHAR(255) NOT NULL,
 `usu_rol` VARCHAR(5) NOT NULL,
 `usu_eliminado` TINYINT NOT NULL DEFAULT 0,
 `usu_fecha_creacion` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
 `usu_fecha_modificacion` TIMESTAMP NULL DEFAULT NULL,
 `usu_foto_perfil` VARCHAR(100) NULL DEFAULT NULL,
 PRIMARY KEY (`usu_id`),
 UNIQUE KEY `usu_foto_perfil_UNIQUE` (`usu_foto_perfil` ASC)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE `mensaje` (
 `men_id` INT(11) NOT NULL AUTO_INCREMENT,
 `usuario_usu_id_de` INT(11) NOT NULL,
 `usuario_usu_id_para` INT(11) NOT NULL,
 `men_titulo` VARCHAR(245) NOT NULL,
 `men_contenido` TEXT NULL,
 `men_fecha` TIMESTAMP NULL,
 `men_eliminado` TINYINT NOT NULL DEFAULT 0,
 PRIMARY KEY (`men_id`),
 INDEX `fk_mensaje_usuario_idx` (`usuario_usu_id_de` ASC),
 INDEX `fk_mensaje_usuario1_idx` (`usuario_usu_id_para` ASC),
 CONSTRAINT `fk_mensaje_usuario`
 FOREIGN KEY (`usuario_usu_id_de`)
 REFERENCES `correo`.`usuario` (`usu_id`)
 ON DELETE NO ACTION
 ON UPDATE NO ACTION,
 CONSTRAINT `fk_mensaje_usuario1`
 FOREIGN KEY (`usuario_usu_id_para`)
 REFERENCES `correo`.`usuario` (`usu_id`)
 ON DELETE NO ACTION
 ON UPDATE NO ACTION)
ENGINE = InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
