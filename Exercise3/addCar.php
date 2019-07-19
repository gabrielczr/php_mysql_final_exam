<?php

require_once 'database.php';

//$post = array();
$errors = array();

if (!empty($_POST)) {

	// Basics validations
	if (empty($_POST['brand'])) {
		$errors[] = 'Brand name is mandatory';
	}

	if (empty($_POST['year'])) {
		$errors[] = 'Year of release is mandatory';
	}

	if (count($errors) > 0) {
		echo implode('<br>', $errors);
	} else {


		$pdo = new PDO(
			'mysql:host=localhost;dbname=exo1_userslist',
			'root',
			''
		);
		$query = 'Insert into cars(brand, model, year, color)
    VALUES(?, ?, ?, ?)';
		$insert = $pdo->prepare($query);




		$insert->bindValue(1, $_POST['brand']);
		$insert->bindValue(2, $_POST['model']);
		$insert->bindValue(3, $_POST['year']);
		$insert->bindValue(4, $_POST['color']);

		if ($insert->execute()) {
			echo 'New car was successfully addded !';
		} else {
			echo 'Error inserting a new car into the DB';
		}
	}
}
