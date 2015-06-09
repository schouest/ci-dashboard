<?php
class dashboard extends CI_Model {
    
function get_all_users(){

}

function get_user($id){

}


function add_user($user_info){
if(isset($user_info['passcode'])){
	$salt = bin2hex(openssl_random_pseudo_bytes(22));
	$encrypt_pass = md5($user_info['passcode'] . '' . $salt);
}

$query = "INSERT INTO users (email, password, first_name, last_name, user_level, date_created, date_updated, salt) VALUES (?,?,?,?,?,?,?,?)";
         $values = array($user_info['mail'], $encrypt_pass, $user_info['f_name'], $user_info['l_name'], 1, date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $salt); 
         return $this->db->query($query, $values);
}

function validate_login(){//TODO: START HERE FOR LOGIN MODEL. don't forget to check password against it's salted equivalent

}

function delete_user(){

}

function update_user(){

}
}
?>