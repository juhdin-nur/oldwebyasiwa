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
Editor::inst( $db, 'tfamily' )
	->fields(
		Field::inst( 'tfamily.familyName' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'tfamily.idOrderF' )
			->options('torder','id','orderName'),
		Field::inst( 'torder.orderName' ),
		Field::inst( 'tclass.className' )
	)
	->leftJoin('torder','torder.id','=','tfamily.idOrderF')
	->leftJoin('tclass','tclass.id','=','torder.idClassF')
	->process( $_POST )
	->json();
