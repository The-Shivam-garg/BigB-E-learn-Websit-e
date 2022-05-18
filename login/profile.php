<?php
session_start();

// non-logged in user shouldn't access this page
if (!isset($_SESSION['uid'])) {
    header('Location: login.php');
}

// log out the user and redirect to login page
if (isset($_GET['action']) && ('logout' == $_GET['action'])) {
    unset($_SESSION['uid']);
    header('Location: login.php');
}

require_once 'class-db.php';
$db = new DB();
$user = $db->get_user($_SESSION['uid']);

echo "Welcome " . $user['name'];
echo "<p><a href='profile.php?action=logout'>Log out</a></p>";
