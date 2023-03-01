<?php

$kode = 'C';
$harga = 0;

switch ($kode) {
    case 'A':
        $harga = 25000;
        break;
    case 'B':
        $harga = 35000;
        break;
    case 'C':
        $harga = 45000;
        break;
    case 'D':
        $harga = 55000;
        break;
    case 'E':
        $harga = 150000;
        break;
    default:
        echo "Kode barang yang dimasukkan salah!";
        exit;
}

echo "Harga barang tersebut adalah Rp " . $harga;