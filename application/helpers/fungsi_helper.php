<?php

function check_already_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id_akun');
	if($user_session){
		redirect ('');
	}
}

function check_not_login(){
	$ci =& get_instance();
	$user_session = $ci->session->userdata('id_akun');
	if(!$user_session){
		redirect ('login');
	}
}

?>