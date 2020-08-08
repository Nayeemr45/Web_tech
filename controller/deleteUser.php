<?php 

require_once '../model.php';

if (deleteUser($_GET['id'])) {
    header('Location: ../showAllUsers.php');
}
?>