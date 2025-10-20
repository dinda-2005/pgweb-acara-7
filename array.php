<?php 
//Array numerik
$nama[0] = "Joko"; 
$nama[1] = "Parto"; 
$nama[2] = "Jono"; 
echo $nama[1]." dan ".$nama[2]." adalah tetangga Pak ".$nama[0]; 

//Array asosiatif 
$umur['Joko'] = "33"; 
$umur['Parto'] = "35"; 
$umur['Jono'] = "29";
echo $umur['Joko']." adalah umur Pak ".$nama[0];

$keluarga = array 
( 
"Joko"=>array 
( 
"Jojon", 
"Joni", 
"Joana" 
), 
"Parto"=>array 
( 
"Parmi" 
), 
"Warto"=>array 
( 
"Warman", 
"Warno", 
"Warmin" 
) 
);
echo $keluarga["Joko"][2] ." adalah anggota keluarga Joko";
?>