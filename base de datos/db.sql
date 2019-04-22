CREATE TABLE usuario(
usuario_id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(45) NOT NULL,
apellido VARCHAR(45) NOT NULL,
dinero VARCHAR(45) NOT NULL,
estado INT(2) NOT NULL,
create_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

#base de datos sin registro usa la otra para probar el ejemplo
