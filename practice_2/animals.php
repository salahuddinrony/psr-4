<?php
	//namespace Animals;
	//namespace Testing;

	include('cat.php');
	include('dog.php');
	include('test.php');

	use Animals\Cat;
	use Animals\Dog;
	use Testing\Test;

	$cat = new Cat();
	echo $cat->greet();

	echo "<br/>";

	$dog = new Dog();
	echo $dog->greet();

	echo "<br/>";

	$test = new Test();
	echo $test->greet();
?>