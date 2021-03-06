<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../../php/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Join,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'torder' )
	->fields(
		Field::inst( 'torder.orderName' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'torder.idClassF' )
			->options('tclass','id','className'),
		Field::inst( 'tclass.className' )
	)
	->leftJoin('tclass','tclass.id','=','torder.idClassF')
	->process( $_POST )
	->json();
