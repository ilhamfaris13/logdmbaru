<?php
$dalTableidentitas_pasien = array();
$dalTableidentitas_pasien["Id_Pasien"] = array("type"=>20,"varname"=>"Id_Pasien", "name" => "Id_Pasien");
$dalTableidentitas_pasien["Nama"] = array("type"=>200,"varname"=>"Nama", "name" => "Nama");
$dalTableidentitas_pasien["Alamat"] = array("type"=>201,"varname"=>"Alamat", "name" => "Alamat");
$dalTableidentitas_pasien["Umur"] = array("type"=>3,"varname"=>"Umur", "name" => "Umur");
$dalTableidentitas_pasien["Status_Perkawinan"] = array("type"=>200,"varname"=>"Status_Perkawinan", "name" => "Status_Perkawinan");
$dalTableidentitas_pasien["Jenis Kelamin"] = array("type"=>200,"varname"=>"Jenis_Kelamin", "name" => "Jenis Kelamin");
$dalTableidentitas_pasien["Suku_Ras"] = array("type"=>200,"varname"=>"Suku_Ras", "name" => "Suku_Ras");
$dalTableidentitas_pasien["Agama"] = array("type"=>200,"varname"=>"Agama", "name" => "Agama");
$dalTableidentitas_pasien["Pekerjaan"] = array("type"=>200,"varname"=>"Pekerjaan", "name" => "Pekerjaan");
$dalTableidentitas_pasien["Tanggal_MRS"] = array("type"=>135,"varname"=>"Tanggal_MRS", "name" => "Tanggal_MRS");
	$dalTableidentitas_pasien["Id_Pasien"]["key"]=true;

$dal_info["newrm_at_localhost__identitas_pasien"] = &$dalTableidentitas_pasien;
?>