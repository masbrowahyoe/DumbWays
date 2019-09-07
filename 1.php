<?php
class datasekolah{
	public $sekolah = "SMK Al-Irsyad Cirebon";
	public $univ = "STMIK IKMI Cirebon";
}
$dat = new datasekolah();
$hasil = $dat->sekolah .",".$dat->univ;

$array = Array (
        "name" 			=> "Try Wahyu Putra Sapana",
        "address" 		=> "Jl. Sultan Ageng Tirtayasa Cirebon",
        "hobbies" 		=> array("Membaca","Mancing"),
        "is_merried" 	=> is_bool(" "),
        "school" 		=> $hasil
);
$json = json_encode(array('Biodata' => $array));
echo $json;
?>