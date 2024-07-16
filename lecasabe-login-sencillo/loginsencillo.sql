CREATE DATABASE loginsencillo;
USE loginsencillo;

CREATE TABLE usuarios(
	usunombre VARCHAR(20) PRIMARY KEY,
	usuclave VARCHAR(32) NOT NULL
);

INSERT INTO usuarios VALUES
("admin", "81dc9bdb52d04dc20036dbd8313ed055"),
("pepe", "81dc9bdb52d04dc20036dbd8313ed055");