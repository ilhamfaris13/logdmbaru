<?php
$dalTablerujukan = array();
$dalTablerujukan["id_rujukan"] = array("type"=>20,"varname"=>"id_rujukan", "name" => "id_rujukan");
$dalTablerujukan["dokter"] = array("type"=>20,"varname"=>"dokter", "name" => "dokter");
$dalTablerujukan["diagnosa_1"] = array("type"=>201,"varname"=>"diagnosa_1", "name" => "diagnosa_1");
$dalTablerujukan["hasil_pemeriksaan"] = array("type"=>201,"varname"=>"hasil_pemeriksaan", "name" => "hasil_pemeriksaan");
$dalTablerujukan["permohonan"] = array("type"=>201,"varname"=>"permohonan", "name" => "permohonan");
$dalTablerujukan["tanggal"] = array("type"=>201,"varname"=>"tanggal", "name" => "tanggal");
$dalTablerujukan["id_pasien"] = array("type"=>20,"varname"=>"id_pasien", "name" => "id_pasien");
	$dalTablerujukan["id_rujukan"]["key"]=true;

$dal_info["newrm_at_localhost__rujukan"] = &$dalTablerujukan;
?>