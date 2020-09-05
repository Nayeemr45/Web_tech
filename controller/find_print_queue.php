<?php

require_once '../model.php';

if (isset($_POST['find_print_queue'])) {

    try {
        
    	$all_data = finding_print_queue($_POST['user_id']);
		require_once '../show_searched_file.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}
