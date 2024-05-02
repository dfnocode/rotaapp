// VENNDAS POR VENDEDOR , CONTAGEM DE VENDAS , SOMAS DO VALOR FATURADO
// POR PERIODO acima do valor, de Data Inserido

SELECT V.nome as vendedor, count(*) as total_de_vendas, sum(vendas.Total) as total_faturamento
FROM vendas
INNER JOIN tbl_users as V
ON vendas.vendedor = V.id
WHERE vendas.Data >= '2021-04-01'
GROUP BY vendas.vendedor



select `i`.`id` AS `id`,`f`.`numero_pedido` AS `NF`,`p`.`id` AS `id_produto`,`p`.`descricao` AS `Produto`,`p`.`unidade` AS `Unidade`,`p`.`preco` AS `Preço`,`i`.`quantidade` AS `Quantidade`,`i`.`desconto` AS `Desconto`,((`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`) AS `Subtotal` from ((`tbl_pedidos_venda` `f` join `tbl_itens_pedido` `i` on((`f`.`numero_pedido` = `i`.`id_pedido`))) join `tbl_produtos` `p` on((`i`.`id_produto` = `p`.`id`))) where (`i`.`id_pedido` = `f`.`numero_pedido`)



//LOGIN

SELECT * FROM tbl_admins as usuarios
            inner join tbl_users as pessoa
            ON (usuarios.id_pessoa = pessoa.id) 
            WHERE login = 'rafael-rota' AND senha = sha1('123')

            

//TOTAL DE VENDAS DE CADA CLIENTE E SOMA DO FATURAMENTO

select C.nome as Cliente, count(*) as VendasPorCliente,
sum(F.valor_total) as TotalFaturamento
from tbl_pedidos_venda as F
inner join tbl_users as C
on F.id_cliente = C.id
group by (F.id_cliente)

select C.nome as Cliente, count(*) as VendasPorCliente,
sum(F.valor_total) as TotalFaturamento
from tbl_pedidos_venda as F
inner join tbl_users as C
on F.id_cliente = C.id
group by (F.id_cliente)




// DADOS DO CLIENTE E SOMA DE TODOS ITENS

select c.nome as Cliente, c.situacao as Situação, c.email as Email, c.telefone as Telefone, c.registro as 'Cliente Desde', sum(`i`.`quantidade`) AS `Total de Quantidades Compradas`,
sum((`p`.`preco` * `i`.`quantidade`)) AS `Soma Valor de Todos Produtos`,
sum(`i`.`desconto`) AS `Total de Descontos por Produto`,
sum(((`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`)) AS `Total de Faturamento` 
from ((((`tbl_pedidos_venda` `f` left join `tbl_users` `c` 
on((`f`.`id_cliente` = `c`.`id`))) left join `tbl_situacao_pedido` `s` 
on((`f`.`situacao` = `s`.`id`))) join `tbl_itens_pedido` `i` 
on((`f`.`numero_pedido` = `i`.`id_pedido`))) join `tbl_produtos` `p` 
on((`i`.`id_produto` = `p`.`id`)))
where f.id_cliente = '1320'





select `c`.`nome` AS `Cliente`,`c`.`email` AS `Email`,
`s`.`tipo` AS `Situação`,`f`.`numero_pedido` AS `NF`,
`f`.`data_registro` AS `Data`,`p`.`descricao` AS `Produto`,
`p`.`unidade` AS `Unidade`,`p`.`preco` AS `Preço`,
`i`.`quantidade` AS `Quantidade`,
(`p`.`preco` * `i`.`quantidade`) AS `Subtotal`,
`i`.`desconto` AS `Descontos por Produto`,
((`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`) AS `Total` 
from ((((`tbl_pedidos_venda` `f` left join `tbl_users` `c` 
on((`f`.`id_cliente` = `c`.`id`))) left join `tbl_situacao_pedido` `s` 
on((`f`.`situacao` = `s`.`id`))) join `tbl_itens_pedido` `i` 
on((`f`.`numero_pedido` = `i`.`id_pedido`))) join `tbl_produtos` `p` 
on((`i`.`id_produto` = `p`.`id`)))
where c.id = '1320'
//

select `c`.`nome` AS `Cliente`,`c`.`email` AS `Email`,
`s`.`tipo` AS `Situação`,`f`.`numero_pedido` AS `NF`,
`f`.`data_registro` AS `Data`,`p`.`descricao` AS `Produto`,
`p`.`unidade` AS `Unidade`,`p`.`preco` AS `Preço`,
`i`.`quantidade` AS `Quantidade`,
(`p`.`preco` * `i`.`quantidade`) AS `Subtotal`,
`i`.`desconto` AS `Descontos por Produto`,
((`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`) AS `Total` 
from ((((`tbl_pedidos_venda` `f` left join `tbl_users` `c` 
on((`f`.`id_cliente` = `c`.`id`))) left join `tbl_situacao_pedido` `s` 
on((`f`.`situacao` = `s`.`id`))) join `tbl_itens_pedido` `i` 
on((`f`.`numero_pedido` = `i`.`id_pedido`))) join `tbl_produtos` `p` 
on((`i`.`id_produto` = `p`.`id`)))




SELECT F.numero_pedido as NF,
count(I.id) as Itens,
Sum(P.preco * I.quantidade) as Total,
Sum(I.desconto) As SomaDescontos
FROM tbl_pedidos_venda as F
RIGHT JOIN tbl_itens_pedido as I
ON F.numero_pedido = I.id_pedido
RIGHT JOIN tbl_produtos as P
ON I.id_produto = P.id
WHERE I.id_pedido = F.numero_pedido
group by F.numero_pedido
order by F.numero_pedido


SELECT * FROM tbl_users, tbl_pedidos_venda
WHERE tbl_users.id = tbl_pedidos_venda.id_cliente
AND tbl_pedidos_venda.numero_pedido = '8005'


SELECT F.desconto+F.taxas_adicionais+F.frete as TDesc
FROM tbl_pedidos_venda as F
WHERE F.numero_pedido = '8005'



select distinct F.numero_pedido as Pedido,
F.id_cliente as idCliente,
F.data_registro  as DataVenda,
F.id_vendedor as idVendedor,
F.situacao as Situação,
(sum(I.desconto)+F.desconto+F.taxas_adicionais+F.frete) as TotalDescontos,
F.faturamento as Total
FROM tbl_pedidos_venda as F
INNER JOIN tbl_itens_pedido as I
ON F.numero_pedido = I.id_pedido




SELECT F.numero_pedido as NF,
count(I.id) as Itens,
Sum(P.preco * I.quantidade) as Total,
Sum(I.desconto) As SomaDescontos
FROM tbl_pedidos_venda as F
RIGHT JOIN tbl_itens_pedido as I
ON F.numero_pedido = I.id_pedido
RIGHT JOIN tbl_produtos as P
ON I.id_produto = P.id
WHERE I.id_pedido = F.numero_pedido
group by F.numero_pedido
order by F.numero_pedido


select 
(F.desconto+F.taxas_adicionais+F.frete) as TotalDescontos,
F.faturamento as Total
FROM tbl_pedidos_venda as F
where F.numero_pedido = '8001'




//SELECIONA O CLIENTE POR NUMERO DE PEDIDO

SELECT clientes.id, clientes.nome FROM clientes, tbl_pedidos_venda
WHERE clientes.id = tbl_pedidos_venda.id_cliente
AND tbl_pedidos_venda.numero_pedido = '8003'



SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID
GROUP BY ShipperName;


SELECT tbl_users.nome, tbl_pedidos_venda.numero_pedido,
FROM tbl_pedidos_venda
INNER JOIN tbl_users ON tbl_pedidos_venda.id_cliente = tbl_users.id


SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID
GROUP BY ShipperName;


SELECT tbl_users.nome, count(tbl_pedidos_venda.id) as NumPedidos
FROM tbl_pedidos_venda
LEFT JOIN tbl_users ON tbl_pedidos_venda.id_cliente = tbl_users.id
GROUP BY tbl_users.nome;

// PEDIDOS POR CLIENTE
// QUANTIDADE
// TOTAL DO VALOR DE COMPRAs 


SELECT tbl_users.nome, count(tbl_pedidos_venda.id) as NumPedidos,
sum(tbl_pedidos_venda.faturamento) as TotalFaturamento
FROM tbl_pedidos_venda
LEFT JOIN tbl_users ON tbl_pedidos_venda.id_cliente = tbl_users.id
GROUP BY tbl_users.nome;

itens pedidos por data

select `c`.`nome` AS `Cliente`,`c`.`email` AS `Email`,`s`.`tipo` AS `Situação`,`f`.`numero_pedido` AS `NF`,
`f`.`data_registro` AS `Data`,`p`.`descricao` AS `Produto`,`p`.`unidade` AS `Unidade`,`p`.`preco` AS `Preço`,
`i`.`quantidade` AS `Quantidade`,(`p`.`preco` * `i`.`quantidade`) AS `Subtotal`,`i`.`desconto` AS `Descontos por Produto`,((`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`) 
AS `Total` from ((((`tbl_pedidos_venda` `f` left join `tbl_users` `c` on((`f`.`id_cliente` = `c`.`id`))) left join `tbl_situacao_pedido` `s` on((`f`.`situacao` = `s`.`id`)))
 join `tbl_itens_pedido` `i` on((`f`.`numero_pedido` = `i`.`id_pedido`))) join `tbl_produtos` `p` on((`i`.`id_produto` = `p`.`id`))) WHERE F.data_registro <= '2021-04-01'



 FUNCTION


 select `c`.`nome` AS `Cliente`,`c`.`email` AS `Email`,`s`.`tipo` AS `Situação`,`f`.`numero_pedido` AS `NF`,
`f`.`data_registro` AS `Data`,`p`.`descricao` AS `Produto`,`p`.`unidade` AS `Unidade`,`p`.`preco` AS `Preço`,
`i`.`quantidade` AS `Quantidade`,(`p`.`preco` * `i`.`quantidade`) AS `Subtotal`,`i`.`desconto` AS `Descontos por Produto`,((`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`) 
AS `Total` from ((((`tbl_pedidos_venda` `f` left join `tbl_users` `c` on((`f`.`id_cliente` = `c`.`id`))) left join `tbl_situacao_pedido` `s` on((`f`.`situacao` = `s`.`id`)))
 join `tbl_itens_pedido` `i` on((`f`.`numero_pedido` = `i`.`id_pedido`))) join `tbl_produtos` `p` on((`i`.`id_produto` = `p`.`id`))) WHERE F.data_registro <= '2021-04-01'



 -- tables
-- Table: call
CREATE TABLE call (
    id int  NOT NULL IDENTITY(1, 1),
    employee_id int  NOT NULL,
    customer_id int  NOT NULL,
    start_time datetime  NOT NULL,
    end_time datetime  NULL,
    call_outcome_id int  NULL,
    CONSTRAINT call_ak_1 UNIQUE (employee_id, start_time),
    CONSTRAINT call_pk PRIMARY KEY  (id)
);
    
-- Table: call_outcome
CREATE TABLE call_outcome (
    id int  NOT NULL IDENTITY(1, 1),
    outcome_text char(128)  NOT NULL,
    CONSTRAINT call_outcome_ak_1 UNIQUE (outcome_text),
    CONSTRAINT call_outcome_pk PRIMARY KEY  (id)
);
    
-- Table: customer
CREATE TABLE customer (
    id int  NOT NULL IDENTITY(1, 1),
    customer_name varchar(255)  NOT NULL,
    city_id int  NOT NULL,
    customer_address varchar(255)  NOT NULL,
    next_call_date date  NULL,
    ts_inserted datetime  NOT NULL,
    CONSTRAINT customer_pk PRIMARY KEY  (id)
);
    
-- Table: employee
CREATE TABLE employee (
    id int  NOT NULL IDENTITY(1, 1),
    first_name varchar(255)  NOT NULL,
    last_name varchar(255)  NOT NULL,
    CONSTRAINT employee_pk PRIMARY KEY  (id)
);
    
-- foreign keys
-- Reference: call_call_outcome (table: call)
ALTER TABLE call ADD CONSTRAINT call_call_outcome
    FOREIGN KEY (call_outcome_id)
    REFERENCES call_outcome (id);
    
-- Reference: call_customer (table: call)
ALTER TABLE call ADD CONSTRAINT call_customer
    FOREIGN KEY (customer_id)
    REFERENCES customer (id);
 
-- Reference: call_employee (table: call)
ALTER TABLE call ADD CONSTRAINT call_employee
    FOREIGN KEY (employee_id)
    REFERENCES employee (id);
 
-- Reference: customer_city (table: customer)
ALTER TABLE customer ADD CONSTRAINT customer_city
    FOREIGN KEY (city_id)
    REFERENCES city (id);
    
-- insert values
INSERT INTO call_outcome (outcome_text) VALUES ('call started');
INSERT INTO call_outcome (outcome_text) VALUES ('finished - successfully');
INSERT INTO call_outcome (outcome_text) VALUES ('finished - unsuccessfully');
    
INSERT INTO employee (first_name, last_name) VALUES ('Thomas (Neo)', 'Anderson');
INSERT INTO employee (first_name, last_name) VALUES ('Agent', 'Smith');
    
INSERT INTO customer (customer_name, city_id, customer_address, next_call_date, ts_inserted) VALUES ('Jewelry Store', 4, 'Long Street 120', '2020/1/21', '2020/1/9 14:1:20');
INSERT INTO customer (customer_name, city_id, customer_address, next_call_date, ts_inserted) VALUES ('Bakery', 1, 'Kurfürstendamm 25', '2020/2/21', '2020/1/9 17:52:15');
INSERT INTO customer (customer_name, city_id, customer_address, next_call_date, ts_inserted) VALUES ('Café', 1, 'Tauentzienstraße 44', '2020/1/21', '2020/1/10 8:2:49');
INSERT INTO customer (customer_name, city_id, customer_address, next_call_date, ts_inserted) VALUES ('Restaurant', 3, 'Ulica lipa 15', '2020/1/21', '2020/1/10 9:20:21');
    
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (1, 4, '2020/1/11 9:0:15', '2020/1/11 9:12:22', 2);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (1, 2, '2020/1/11 9:14:50', '2020/1/11 9:20:1', 2);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (2, 3, '2020/1/11 9:2:20', '2020/1/11 9:18:5', 3);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (1, 1, '2020/1/11 9:24:15', '2020/1/11 9:25:5', 3);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (1, 3, '2020/1/11 9:26:23', '2020/1/11 9:33:45', 2);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (1, 2, '2020/1/11 9:40:31', '2020/1/11 9:42:32', 2);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (2, 4, '2020/1/11 9:41:17', '2020/1/11 9:45:21', 2);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (1, 1, '2020/1/11 9:42:32', '2020/1/11 9:46:53', 3);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (2, 1, '2020/1/11 9:46:0', '2020/1/11 9:48:2', 2);
INSERT INTO call (employee_id, customer_id, start_time, end_time, call_outcome_id) VALUES (2, 2, '2020/1/11 9:50:12', '2020/1/11 9:55:35', 2);