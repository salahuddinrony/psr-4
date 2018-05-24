<?php
	//namespace Mobiles;
	/*
	include_once('Mobile/J7.php');
	include_once('Mobile/S8.php');
	include_once('Mobile/S9.php');
	include_once('Mobile/Poweredby.php');
	*/

	include_once('vendor/autoload.php');

	use Mobiles\J7;
	use Mobiles\S8;
	use Mobiles\S9;
	use Mobiles\Poweredby;

	// J7
	$j7 = new J7();
	echo $j7->modelName().'<br/>';
	echo $j7->price();
	echo '<hr/>';

	// S8
	$s8 = new S8();
	echo $s8->modelName().'<br/>';
	echo $s8->price();
	echo '<hr/>';


	// S9
	$s9 = new S9();
	echo $s9->modelName().'<br/>';
	echo $s9->price();
	echo '<hr/>';


	// Powered By
	$poweredby = new Poweredby();
	echo $poweredby->powerby().'<br/>';
	echo $poweredby->web().'<br/>';
	echo $poweredby->contact();
	echo '<hr/>';



?>