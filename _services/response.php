<?php

require __DIR__.'/../config.php';
require 'functions.php';

$request = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if($request) {
	$action = $request['action'];
	unset($request['action']);
	switch ($action) {
		case 'insert_course':
			$id = createCourse($request);
			echo $id;
			break;

		case 'update_course':
			updateCourse($request);
			break;

		case 'create_user':
			$user = createUser($request);
			echo $user;
			break;

		case 'create_enrollment':
			createEnrollment($request);
			break;
		
		default:
			return null;
		break;
	}
} else {
	die;
}