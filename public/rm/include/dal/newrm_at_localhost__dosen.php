<?php
$dalTabledosen = array();
$dalTabledosen["id_dosen"] = array("type"=>3,"varname"=>"id_dosen", "name" => "id_dosen");
$dalTabledosen["NAMA"] = array("type"=>200,"varname"=>"NAMA", "name" => "NAMA");
$dalTabledosen["NIP"] = array("type"=>200,"varname"=>"NIP", "name" => "NIP");
$dalTabledosen["NIDN"] = array("type"=>200,"varname"=>"NIDN", "name" => "NIDN");
$dalTabledosen["NIDK"] = array("type"=>13,"varname"=>"NIDK", "name" => "NIDK");
$dalTabledosen["KETERANGAN"] = array("type"=>200,"varname"=>"KETERANGAN", "name" => "KETERANGAN");
$dalTabledosen["Status"] = array("type"=>200,"varname"=>"Status", "name" => "Status");
$dalTabledosen["RS"] = array("type"=>200,"varname"=>"RS", "name" => "RS");
	$dalTabledosen["id_dosen"]["key"]=true;

$dal_info["newrm_at_localhost__dosen"] = &$dalTabledosen;
?>