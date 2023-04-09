<?php

// Single Quote atau Kutip satu:

echo 'Nama : ';
echo 'Muhammad Mirza Ulayya';
echo "\n";

// Double Quote atau Kutip Dua:
// Kelebihan menggunakan Double Quote bisa menggunakan Escape Sequence

echo "Nama : ";
echo "Muhammad\t Mirza\t Ulayya\n ";

// Membuat Multiline String:
// Heredoc:

echo <<<MIRZA
Ini adalah contoh string dengan multiple line atau 
baris lebih dari satu, gak perlu nambahin ENTER secara manual
cukup pakai "<" sebanyak tiga kali lalu nama tag nya, dan bisa quote juga
MIRZA;

echo "\n";

// Nowdoc:

echo <<<'FATEH'
Ini adalah contoh string dengan multiple line atau 
baris lebih dari satu, gak perlu nambahin ENTER secara manual
cukup pakai "<" sebanyak tiga kali lalu nama tag nya, dan bisa quote juga.
Bedanya, menggunakan Single Quote
FATEH;
