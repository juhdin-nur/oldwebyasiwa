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
Editor::inst( $db, 'tldp')
	->fields(
		Field::inst( 'tldp.idPerF' )
				->options('tper','id','perCode'),
		Field::inst( 'tper.perCode' ),
		Field::inst('tldp.idKsnF')
				->options('tksn','id','KsnName'),
		Field::inst('tksn.KsnName'),
		Field::inst('tldp.idSiteF')
				->options('tsite','id','id'),
		Field::inst('tsite.noSite'),
		Field::inst('tsite.kX'),
		Field::inst('tsite.kY'),
		Field::inst('tldp.idSpeF')
				->options('tspe','id','speName'),
		Field::inst('tspe.speName'),
		Field::inst('tldp.idHbuse')
				->options('thbuse','id','hbuseCode'),
		Field::inst('thbuse.hbuseCode'),
		Field::inst('tldp.idTjtemuanF')
				->options('tjtemuan','id','jtemCode'),
		Field::inst('tjtemuan.jtemCode'),
		Field::inst('tldp.aktifitas'),
		Field::inst('tldp.komentar'),
		Field::inst('tldp.tglTem')
				->validator('Validate::dateFormat',array(
					"format"=>Format::DATE_ISO_850,
					"message"=>"Please enter a datein the format yyyy-mm-dd"				
				))
				//->getFormatter('Format::date_sql_to_format',Format::DATE_ISO_850)
				//->setFormatter('Format::date_format_to_sql',Format::DATE_ISO_850),
				->getFormatter('Format::date_sql_to_format',Format::DATE_ISO_850)
				->setFormatter('Format::date_format_to_sql',Format::DATE_ISO_850),
				
		Field::inst('tldp.wktTem')
				->validator( 'Validate::dateFormat', array(
                'empty' => false,
                'format' => 'g:i A'
            ) )
            ->getFormatter( 'Format::datetime', array( 'from' => 'H:i:s', 'to' => 'g:i A' ) )
            ->setFormatter( 'Format::datetime', array( 'from' => 'g:i A', 'to' => 'H:i:s' ) ),
		Field::inst('tldp.jkel')
	)
	->leftJoin('tper','tper.id','=','tldp.idPerF')
	->leftJoin('tksn','tksn.id','=','tldp.idKsnF')
	->leftJoin('tsite','tsite.id','=','tldp.idSiteF')
	->leftJoin('tspe','tspe.id','=','tldp.idSpeF')
	->leftJoin('thbuse','thbuse.id','=','tldp.idHbuse')
	->leftJoin('tjtemuan','tjtemuan.id','=','tldp.idTjtemuanF')
	->process( $_POST )
	->json();
