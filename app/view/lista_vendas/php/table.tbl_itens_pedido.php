<?php

/*
 * Editor server script for DB table tbl_itens_pedido
 * Created by http://editor.datatables.net/generator
 */

// DataTables PHP library and database connection
include( "lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// The following statement can be removed after the first run (i.e. the database
// table has been created). It is a good idea to do this to help improve
// performance.
$db->sql( "CREATE TABLE IF NOT EXISTS `tbl_itens_pedido` (
	`id` int(10) NOT NULL auto_increment,
	`id_pedido` char(50),
	`id_produto` numeric(9,2),
	`quantidade` numeric(20,3),
	`desconto` numeric(20,2),
	PRIMARY KEY( `id` )
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'tbl_itens_pedido', 'id' )
	->fields(
		Field::inst( 'id_pedido' ),
		Field::inst( 'id_produto' )
		->options( Options::inst()
		->table( 'tbl_produtos' )
		->value( 'id' )
		->label( 'descricao' )	),
		Field::inst( 'quantidade' ),
		Field::inst( 'desconto' )
	)
	->process( $_POST )
	->json();
