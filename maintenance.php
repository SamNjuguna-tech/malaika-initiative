<?php 
include 'header.php';
session_start();

$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;

?>

<div class="error page">
	Sorry this Page is Under Maintenace at the momment
</div>