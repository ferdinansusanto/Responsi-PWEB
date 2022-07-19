<?php  
include("hdr.html");

include("form.html");
$nim=@$_POST['nim'];
$nama = @$_POST["nama"];
$kota = @$_POST["kota"];

//simpan ke dalam file
	$fileku=fopen("data.txt", "a"); //buka file dengan mode archive
	$data=$nim."\n".$nama."\n".$kota."\n"; //gabungkan kata
	fwrite($fileku,$data); //simpan data ke dalam file
	fclose($fileku);	//close agar terjadi write data secara fisik
echo"<pre>";
include("data.txt"); //panggil dam tampilkan
echo"</pre>";
?>