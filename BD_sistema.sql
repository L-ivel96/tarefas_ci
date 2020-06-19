CREATE DATABASE  IF NOT EXISTS `tarefas_ci` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tarefas_ci`;

-- SET foreign_key_checks = 1;
-- DROP TABLE `tarefas_ci`.`responsavel`;

CREATE TABLE `tarefas_ci`.`responsavel` (
  `id_responsavel` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NULL,
  `criado_em` DATETIME NULL,
  PRIMARY KEY (`id_responsavel`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



CREATE TABLE `tarefas_ci`.`categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NULL,
  `descricao` VARCHAR(300) NULL,
  PRIMARY KEY (`id_categoria`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



CREATE TABLE `tarefas_ci`.`tarefas` (
  `id_tarefa` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(250) NULL,
  `responsavel` INT NULL,
  `finalizacao` DATE NULL,
  `categoria` INT NULL,
  `criado_em` VARCHAR(45) NULL,
  `atualizado_em` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tarefa`),
  INDEX `fk_responsavel_idx` (`responsavel` ASC),
  INDEX `fk_categoria_idx` (`categoria` ASC),
  CONSTRAINT `fk_responsavel`
    FOREIGN KEY (`responsavel`)
    REFERENCES `tarefas_ci`.`responsavel` (`id_responsavel`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_categoria`
    FOREIGN KEY (`categoria`)
    REFERENCES `tarefas_ci`.`categoria` (`id_categoria`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 01', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 02', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 03', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 04', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 05', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 06', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 07', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 08', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 09', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 10', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 11', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 12', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 13', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 14', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 15', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 16', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 17', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 18', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 19', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 20', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 21', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 22', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 23', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 24', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 25', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 26', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 27', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 28', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 29', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`responsavel` (`nome`, `criado_em`) VALUES ('Pessoa 30', '2020-06-19 18:30:00');


INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 01');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 02');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 03');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 04');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 05');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 06');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 07');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 08');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 09');
INSERT INTO `tarefas_ci`.`categoria` (`categoria`) VALUES ('Categoria 10');


INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 1','1','2020-05-01','1','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 2','2','2020-05-02','2','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 3','3','2020-05-03','1','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 4','4','2020-05-04','4','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 5','5','2020-05-05','5','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 6','6','2020-05-06','1','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 7','7','2020-05-07','7','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 8','8','2020-05-08','8','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 9','9','2020-05-09','9','2020-06-19 18:30:00', '2020-06-19 18:30:00');
INSERT INTO `tarefas_ci`.`tarefas` (`descricao`, `responsavel`, `finalizacao`, `categoria`, `criado_em`, `atualizado_em`) VALUES ('Tarefa 10','10','2019-05-10','10','2020-06-19 18:30:00', '2020-06-19 18:30:00');
