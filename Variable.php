<?php

/*
  -Nama Variabel diawali dengan $ atau dollar sign
  -Tidak boleh mengandung spasi
  -Boleh menggunakan Underscore (_)
*/

$nama_belakang = "Ulayya";
$kota = "Semarang";

// Bisa diubah nilai vaariabelnya (kalau di PHP):

$kota = "Jakarta";

echo "Nama Belakang: ";
echo $nama_belakang;
echo "\n";
echo "Asal: ";
echo $kota;
echo "\n";


// Variable Variables
// Membuat nama variabel dari nilai dari variabel lain

$nama = "Fateh";
// bikin variabel dengan nama Fateh
$$nama = "Keren";

echo "Nama: ";
echo $nama;
echo "\n";

echo "Fateh: ";
echo $Fateh;
echo "\n";
