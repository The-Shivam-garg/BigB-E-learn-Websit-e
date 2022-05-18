<?php
session_start();

require_once 'vendor/autoload.php';
require_once 'class-db.php';

// ==================================================
// you have to write your client_id
client_id:
"GOOGLE_CLIENT_ID";
$id_token = $_POST['response'];
$client = new Google_Client(['client_id' => $client_id]);
$payload = $client->verifyIdToken($id_token); // verify JWT token received

if ($payload) {
    $db = new DB();


    // send user data to the database
    $db->upsert_user($payload);

    // set user id in session aka log in the user
    if (!isset($_SESSION['uid'])) {
        $_SESSION['uid'] = $payload['sub'];
    }

    echo 'success';
} else {
    echo 'Invalid Token';
}