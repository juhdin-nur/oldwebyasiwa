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
Editor::inst( $db, 'tsite')
	->fields(
		Field::inst( 'tsite.id' ),
		Field::inst( 'tsite.noSite' ),
		Field::inst( 'tsite.kX' ),
		Field::inst( 'tsite.kY' ),
	   Field::inst( 'tsite.idTksnF' )
	   				->options('tksn','id','KsnName'),
	   Field::inst('tksn.KsnName')
	)
	->leftJoin('tksn','tksn.id','=','tsite.idTksnF')
	->process( $_POST )
	->json();
