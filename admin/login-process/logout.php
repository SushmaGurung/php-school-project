<?php
require ("../connection/config.php");

session_start();

session_destroy();

// unset($_SESSION['id']);
// unset($_SESSION['email']);
// unset($_SESSION['name']);

echo header("Location: ../index.php");

?>