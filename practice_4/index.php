<?php
	//include('Students/Personalinfo.php');
	//include('Students/Academicinfo.php');
	//include('Students/Resultinfo.php');

	include_once('vendor/autoload.php');

	use Students\Personalinfo;
	use Students\Academicinfo;
	use Students\Resultinfo;

	$name = new Personalinfo();
	echo '<b>Name:</b> '.$name->name();

	echo '<br/>';

	$academicinfo = new Academicinfo();
	echo '<b>Subject:</b> '.$academicinfo->educationinfo();

	echo '<br/>';

	$result = new Resultinfo();
	echo '<b>Result:</b> '.$result->result();

?>