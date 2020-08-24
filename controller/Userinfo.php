<?php 

require_once 'model.php';

function fetchAllUser(){
	return showAllUser();

}
function fetchUser($id){
	return showUser($id);

}
function fetchShow_file($id){
	return show_file($id);

}
