use heroku_b1ff7657d8edef0;

CREATE TABLE trabalho (
                id_trabalho int(11) NOT NULL primary key auto_increment,
                titulo varchar(100) NOT NULL,
                pc1 varchar(100) NOT NULL,
                pc2 varchar(100) NOT NULL,
                pc3 varchar(100) NOT NULL,
                resumo text NOT NULL,
                referencias text NOT NULL,
                upload varchar(256) NOT NULL
              );
              
drop table trabalho;

create table maquina (
	id_maquina int(11) NOT NULL primary key auto_increment,
    pa varchar(100) NOT NULL,
    tipo varchar(100) NOT NULL,
    processador varchar(100) NOT NULL,
    hd varchar(100) NOT NULL,
    memoria varchar(100) NOT NULL,
    monitor varchar(100) NOT NULL
);

create table monitor (
	id_monitor int(11) NOT NULL primary key auto_increment,
    marca varchar(100) NOT NULL,
    modelo varchar(100) NOT NULL,
    polegada int(11) NOT NULL
);

create table processador (
	id_cpu int(11) NOT NULL primary key auto_increment,
    tipo varchar(100) NOT NULL,
    ghz int(11) NOT NULL
);

ALTER TABLE `monitor` ADD `pa` INT NOT NULL AFTER `id_monitor`, ADD `andar` INT NOT NULL AFTER `pa`;

ALTER TABLE maquina ADD andar INT NOT NULL AFTER id_maquina;
ALTER TABLE `maquina`
  DROP `monitor`;

select * from maquina;

select count(id_maquina) from maquina where memoria = "8 GB";