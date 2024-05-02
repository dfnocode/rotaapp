-- 
-- Editor SQL for DB table tbl_itens_pedido
-- Created by http://editor.datatables.net/generator
-- 

CREATE TABLE IF NOT EXISTS `tbl_itens_pedido` (
	`id` int(10) NOT NULL auto_increment,
	`id_pedido` varchar(255),
	`id_produto` numeric(9,2),
	`quantidade` numeric(9,2),
	`desconto` numeric(9,2),
	PRIMARY KEY( `id` )
);