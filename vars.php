<?php
if (isset($_GET['nama']) && isset($_GET['alamat'])) {
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    echo "Nama gunung adalah Gunung $nama beralamat di $alamat";
} else {
    echo "Data tidak ditemukan.";
}
?>