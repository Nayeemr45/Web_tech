
<?php 

require_once '../model.php';

if (deleteUser2($_GET['id'])) {
    header('Location: ../showAllUsers2.php');
}
?>