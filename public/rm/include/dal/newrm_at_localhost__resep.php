<?php
$dalTableresep = array();
$dalTableresep["Id"] = array("type"=>20,"varname"=>"Id", "name" => "Id");
$dalTableresep["dokter"] = array("type"=>20,"varname"=>"dokter", "name" => "dokter");
$dalTableresep["tanggal"] = array("type"=>135,"varname"=>"tanggal", "name" => "tanggal");
$dalTableresep["isi_resep"] = array("type"=>201,"varname"=>"isi_resep", "name" => "isi_resep");
$dalTableresep["id_pasien"] = array("type"=>20,"varname"=>"id_pasien", "name" => "id_pasien");
	$dalTableresep["Id"]["key"]=true;

$dal_info["newrm_at_localhost__resep"] = &$dalTableresep;
?>