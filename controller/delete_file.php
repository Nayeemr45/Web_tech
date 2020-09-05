<?php 

require_once '../model.php';

if (deletefile($_GET['id'])) {
    echo '<button><a href="javascript:history.go(-1)" title="Return to previous page">&laquo; Go back</a></button>';

}
?>