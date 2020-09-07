<?php 

require_once 'model.php';

function fetchAllUser(){
	return showAllUser();

}
function fetchAllUser2(){
	return showAllUser2();

}
function fetchUser($id){
	return showUser($id);

}
function fetchUser2($id){
	return showUser2($id);

}
function fetchShow_file_admin(){
	return show_file_admin();

}
function fetchShow_file($id){
	return show_file($id);

}

function fetchShow_print_file($id){
	return show_print_file($id);

}