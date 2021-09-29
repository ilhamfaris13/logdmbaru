<?php
$dalTablenew_test_users = array();
$dalTablenew_test_users["ID"] = array("type"=>3,"varname"=>"ID", "name" => "ID");
$dalTablenew_test_users["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTablenew_test_users["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTablenew_test_users["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTablenew_test_users["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname");
$dalTablenew_test_users["groupid"] = array("type"=>200,"varname"=>"groupid", "name" => "groupid");
$dalTablenew_test_users["active"] = array("type"=>3,"varname"=>"active", "name" => "active");
$dalTablenew_test_users["ext_security_id"] = array("type"=>200,"varname"=>"ext_security_id", "name" => "ext_security_id");
	$dalTablenew_test_users["ID"]["key"]=true;

$dal_info["newrm_at_localhost__new_test_users"] = &$dalTablenew_test_users;
?>