<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>20,"varname"=>"id", "name" => "id");
$dalTableusers["name"] = array("type"=>200,"varname"=>"name", "name" => "name");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTableusers["email"] = array("type"=>200,"varname"=>"email", "name" => "email");
$dalTableusers["email_verified_at"] = array("type"=>135,"varname"=>"email_verified_at", "name" => "email_verified_at");
$dalTableusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusers["two_factor_secret"] = array("type"=>201,"varname"=>"two_factor_secret", "name" => "two_factor_secret");
$dalTableusers["two_factor_recovery_codes"] = array("type"=>201,"varname"=>"two_factor_recovery_codes", "name" => "two_factor_recovery_codes");
$dalTableusers["level"] = array("type"=>200,"varname"=>"level", "name" => "level");
$dalTableusers["remember_token"] = array("type"=>200,"varname"=>"remember_token", "name" => "remember_token");
$dalTableusers["profile_photo_path"] = array("type"=>201,"varname"=>"profile_photo_path", "name" => "profile_photo_path");
$dalTableusers["created_at"] = array("type"=>135,"varname"=>"created_at", "name" => "created_at");
$dalTableusers["updated_at"] = array("type"=>135,"varname"=>"updated_at", "name" => "updated_at");
	$dalTableusers["id"]["key"]=true;

$dal_info["newrm_at_localhost__users"] = &$dalTableusers;
?>