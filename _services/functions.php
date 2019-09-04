<?php

function createCourse(array $data)
{
	global $DB;
	$timestamp = time();
	$course = new stdClass();

	$course->category = 1;
	$course->fullname = $data['name'];
	$course->shortname = $data['name'];
	$course->summary = "<p>{$data['objective']}</p>";
	$course->summaryformat = 1;
	$course->format = 'topics';
	$course->timecreated = $timestamp;
	$course->timemodified = $timestamp;

	$id = $DB->insert_record('course', $course, true);

	$context = new stdClass();
	$context->contextlevel = 50;
	$context->instanceid = $id;
	$contextId = $DB->insert_record('context', $context, true);
	$contextUpdate = new stdClass();
	$contextUpdate->id = $contextId;
	$contextUpdate->path = "/1/7/{$contextId}";
	$contextUpdate->depth = 3;
	$DB->update_record('context', $contextUpdate);

	$courseSection = new stdClass();
	$courseSection->course = $id;
	$courseSection->section = 0;
	$courseSection->summaryformat = 1;
	$DB->insert_record('course_sections', $courseSection);

	$enrol = new stdClass();
	$enrol->enrol = 'manual';
	$enrol->status = 0;
	$enrol->courseid = $id;
	$enrol->sortorder = 0;
	$enrol->expirythreshold = 86400;
	$enrol->roleid = 5;
	$enrol->timecreated = $timestamp;
	$enrol->timemodified = $timestamp;
	$DB->insert_record('enrol', $enrol);

	return $id;
}

function updateCourse(array $data)
{
	global $DB;

	$course = new stdClass();
	$course->id = $data['moodle_id'];
	$course->fullname = $data['name'];
	$course->shortname = $data['name'];
	$course->summary = "<p>{$data['objective']}</p>";
	$DB->update_record('course', $course);
}

function createUser(array $data)
{
	global $DB;
	$passwordDefault = 'Reeduca@' . date('Y');
	$password = isset($data['password']) ? $data['password'] : $passwordDefault;
	$newuser = new stdClass();
	$newuser->auth = 'manual';
	$newuser->confirmed = 1;
	$newuser->policyagreed = 0;
	$newuser->deleted = 0;
	$newuser->mnethostid = 1;
	$newuser->username = $data['username'];
	$newuser->password = hash_internal_user_password($password);
	$newuser->firstname = $data['first_name'];
	$newuser->lastname = $data['last_name'];
	$newuser->email = $data['email'];
	$newuser->city = $data['city'];
	$newuser->country = 'BR';
	$newuser->lang = 'pt_br';

	$userId = $DB->insert_record('user', $newuser, true);

	$preferences = new stdClass();
	$preferences->userid = $userId;
	$preferences->name = 'auth_forcepasswordchange';
	$preferences->value = 1;
	$DB->insert_record('user_preferences', $preferences);

	return $userId;
}

function createEnrollment(array $data)
{
	global $DB;
	$timestamp = time();
	$courseId = explode(',', $data['moodle_course_id']);
	$userId = $data['moodle_user_id'];

	foreach ($courseId as $id) {
		//1- Recupere a chave da modalidade da matrícula do curso usando o seguinte comando:
		$enrol = $DB->get_record('enrol', ['courseid' => $id, 'enrol' => 'manual']);
		if ($enrol) {
		//2- Inscreve o aluno na tabela mdl_user_enrolments usando o seguinte comando:      
			$course = $DB->get_record('course', ['id' => $id], 'startdate');
			$startDate = $course->startdate;
		//(P1) - Descobre se o colaborador já foi inscrito no curso
			$userEnrolments = $DB->count_records('user_enrolments', ['enrolid' => $enrol->id, 'userid' => $userId]);
			if ($userEnrolments == 0) {
				$objEnrolment = new stdClass();
				$objEnrolment->status = 0;
				$objEnrolment->enrolid = $enrol->id;
				$objEnrolment->userid = $userId;
				$objEnrolment->timestart = $startDate;
				$objEnrolment->timeend = 0;
				$objEnrolment->timecreated = $timestamp;
				$objEnrolment->timemodified = $timestamp;
				$DB->insert_record('user_enrolments', $objEnrolment);
			}

		//3) Recupere o contexto do curso usando o seguinte comando:
			$context = $DB->get_record('context', ['instanceid' => $id, 'contextlevel' => 50], 'id');
			$roleAssignments = $DB->count_records('role_assignments', ['contextid' => $context->id, 'userid' => $userId]);
			if ($roleAssignments == 0) {
				$objRoleAssignments = new stdClass();
				$objRoleAssignments->roleid = 5;
				$objRoleAssignments->contextid = $context->id;
				$objRoleAssignments->userid = $userId;
				$objRoleAssignments->timemodified = $timestamp;
				$DB->insert_record('role_assignments', $objRoleAssignments);
			}
		}
	}
}
