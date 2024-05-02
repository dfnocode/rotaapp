-- 
-- Editor SQL for DB table tbl_users
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `tbl_users` (
	`id` int(10) NOT NULL auto_increment,
	`registro` date,
	`tipopessoa` varchar(255),
	`nome` varchar(255),
	`fantasia` varchar(255),
	`email` varchar(255),
	`telefone` varchar(255),
	`situacao` varchar(255),
	`endereco` varchar(255),
	`numero` varchar(255),
	`complemento` varchar(255),
	`bairro` varchar(255),
	`cep` varchar(255),
	`cidade` varchar(255),
	`estado` varchar(255),
	`contatos` varchar(255),
	`celular` varchar(255),
	`fax` varchar(255),
	`website` varchar(255),
	`cnpjcpf` varchar(255),
	`idrg` varchar(255),
	`obs` varchar(255),
	`emailnfe` varchar(255),
	`vendedor` varchar(255),
	PRIMARY KEY( `id` )
);