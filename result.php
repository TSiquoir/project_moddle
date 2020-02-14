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

//Réponse de l'oral
$response_1 = $data['questions'][0];
$response_2 = $data['questions'][1];
$response_3 = $data['questions'][2];
$response_4 = $data['questions'][3];
//réponse du test écrit
$mark_1 = $response_1['mark'];
$mark_2 = $response_2['mark'];
$mark_3 = $response_3['mark'];
$mark_4 = $response_4['mark'];
//Résultat
$result1 = $mark_1 * 0.23 + $response_1 * 0.77;
$result2 = $mark_2 * 0.89 + $response_2 * 0.11;
$result3 = $mark_3 * 0.52 + $response_3 * 0.48;
$result4 = $mark_4 * 0.34 + $response_4 * 0.66;


const BASE_URL_API = "http://e-learning.alaji.fr/webservice/rest/server.php?moodlewsrestformat=json&wstoken=92e270ed7da760d3d6df191e5582337b&wsfunction=";

// Récuperer l'identifiant de l'utilisateur depuis l'URL
// Exemple: index.php?id=242
// Et on stock l'ID dans la constante USER_ID
define ('USER_ID', $_GET["id"]);

$isPost = count($_POST) > 1;


var_dump($_POST);
if ($isPost) {
    //Récupère les données du formulaire
    $response1 = (int) $_POST['question1'];
    $response2 = (int) $_POST['question2'];
    $response3 = (int) $_POST['question3'];
    $response4 = (int) $_POST['question4'];
    //Vérification pour être sur d'avoir un 1 ou 0 en réponse
    $response1 = $response1 > 0 ? 1 : 0; 
    $response2 = $response2 > 0 ? 1 : 0;  
    $response3 = $response3 > 0 ? 1 : 0; 
    $response4 = $response4 > 0 ? 1 : 0;  
    //calcule

}

?>