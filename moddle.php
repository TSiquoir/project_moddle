<?php

define ('USER_ID', $_GET["id"]);
const BASE_URL_API = "http://e-learning.alaji.fr/webservice/rest/server.php?moodlewsrestformat=json&wstoken=92e270ed7da760d3d6df191e5582337b&wsfunction=";
//User
$content = file_get_contents(BASE_URL_API . "core_user_get_users&criteria[0][key]=id&criteria[0][value]=" . USER_ID);
$data = json_decode($content, true);

$user = $data['users'][0];

//quizid = 202
// userid = 242
$content = file_get_contents(BASE_URL_API . "mod_quiz_get_user_attempts&quizid=202&userid=" . USER_ID);
$data = json_decode($content, true);

$attempts = end($data['attempts']);
//Infos Questions
$content = file_get_contents(BASE_URL_API . "mod_quiz_get_attempt_review&attemptid=" . $attempts['id']);
$data = json_decode($content, true);


$response_1 = $data['questions'][0];
$response_2 = $data['questions'][1];
$response_3 = $data['questions'][2];
$response_4 = $data['questions'][3];

$mark_1 = $response_1['mark'];
$mark_2 = $response_2['mark'];
$mark_3 = $response_3['mark'];
$mark_4 = $response_4['mark'];


var_dump($mark_1);
?>