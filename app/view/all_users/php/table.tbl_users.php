<?php

/*
 * Editor server script for DB table tbl_users
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
$db->sql( "CREATE TABLE IF NOT EXISTS `tbl_users` (
	`id` int(10) NOT NULL auto_increment,
	`registro` datetime,
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
);" );

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'tbl_users', 'id' )
	->fields(
		Field::inst( 'registro' )
			->validator( Validate::dateFormat( 'd/m/Y' ) )
			->getFormatter( Format::dateSqlToFormat( 'd/m/Y' ) )
			->setFormatter( Format::dateFormatToSql( 'd/m/Y' ) ),
		Field::inst( 'tipopessoa' ),
		Field::inst( 'nome' ),
		Field::inst( 'fantasia' ),
		Field::inst( 'email' )
			->validator( Validate::email() ),
		Field::inst( 'telefone' ),
		Field::inst( 'situacao' ),
		Field::inst( 'endereco' ),
		Field::inst( 'numero' ),
		Field::inst( 'complemento' ),
		Field::inst( 'bairro' ),
		Field::inst( 'cep' ),
		Field::inst( 'cidade' ),
		Field::inst( 'estado' ),
		Field::inst( 'contatos' ),
		Field::inst( 'celular' ),
		Field::inst( 'fax' ),
		Field::inst( 'website' ),
		Field::inst( 'cnpjcpf' ),
		Field::inst( 'idrg' ),
		Field::inst( 'obs' ),
		Field::inst( 'emailnfe' )
			->validator( Validate::email() ),
		Field::inst( 'vendedor' )
	)
	->process( $_POST )
	->json();
