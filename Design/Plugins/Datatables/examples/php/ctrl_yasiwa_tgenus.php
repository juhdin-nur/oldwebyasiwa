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
Editor::inst( $db, 'tgenus' )
	->fields(
		Field::inst( 'tgenus.genusName' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'tgenus.idFamilyF' )
			->options('tfamily','id','familyName'),
		Field::inst( 'tfamily.familyName' ),
		Field::inst( 'torder.orderName' ),
		Field::inst( 'tclass.className' )
	)
	->leftJoin('tfamily','tfamily.id','=','tgenus.idFamilyF')
	->leftJoin('torder','torder.id','=','tfamily.idOrderF')
	->leftJoin('tclass','tclass.id','=','torder.idClassF')
	->process( $_POST )
	->json();
