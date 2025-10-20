<?php

//file test.php
echo "Sebuah $buah $warna"; //Sebuah
include 'vars.php';
echo "Sebuah $buah $warna"; //Sebuah apel hijau

//file var.php
$buah = "apel";
$warna = "hijau";

//contoh penerapan
function tulisNama()
{ 
echo "Merapi";
} 
tulisNama();
?>