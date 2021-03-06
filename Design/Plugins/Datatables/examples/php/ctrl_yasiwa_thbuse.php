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
Editor::inst( $db, 'thbuse' )
	->fields(
		Field::inst( 'hbuseCode' )->validator( 'Validate::notEmpty' ),
		Field::inst( 'Keterangan' )->validator( 'Validate::notEmpty' )
		
	)
	->process( $_POST )
	->json();
