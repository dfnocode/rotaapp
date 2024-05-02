select `i`.`id` AS `id`,
    `f`.`numero_pedido` AS `NF`,
    p.id as id_produto,
    `p`.`descricao` AS `Produto`,
    `p`.`unidade` AS `Unidade`,
    `p`.`preco` AS `Preço`,
    `i`.`quantidade` AS `Quantidade`,
    `i`.`desconto` AS `Desconto`,
(
        (`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`
    ) AS `Subtotal`
from (
        (
            `tbl_pedidos_venda` `f`
            join `tbl_itens_pedido` `i` on((`f`.`numero_pedido` = `i`.`id_pedido`))
        )
        join `tbl_produtos` `p` on((`i`.`id_produto` = `p`.`id`))
    )
where (`i`.`id_pedido` = `f`.`numero_pedido`)

select `i`.`id` AS `id`,`f`.`numero_pedido` AS `NF`,`p`.`id` AS `id_produto`,`p`.`descricao` AS `Produto`,`p`.`unidade` AS `Unidade`,`p`.`preco` AS `Preço`,`i`.`quantidade` AS `Quantidade`,`i`.`desconto` AS `Desconto`,((`p`.`preco` * `i`.`quantidade`) - `i`.`desconto`) AS `Subtotal` from ((`tbl_pedidos_venda` `f` join `tbl_itens_pedido` `i` on((`f`.`numero_pedido` = `i`.`id_pedido`))) join `tbl_produtos` `p` on((`i`.`id_produto` = `p`.`id`))) where (`i`.`id_pedido` = `f`.`numero_pedido`)