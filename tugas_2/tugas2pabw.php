<?php

function hitungDiskon($totalBelanja) {
 
    if ($totalBelanja >= 100000) {
        $nominalDiskon = $totalBelanja * 0.10;
    } 

    elseif ($totalBelanja >= 50000) {
        $nominalDiskon = $totalBelanja * 0.05;
    } 

    else {
        $nominalDiskon = 0;
    }


    return $nominalDiskon;
}


$totalBelanja = 120000; 
$diskon = hitungDiskon($totalBelanja); 
 
echo "Total belanja: Rp. " . $totalBelanja . "<br>";
echo "Diskon: Rp. " . $diskon . "<br>";
echo "Total yang harus dibayar: Rp. " . ($totalBelanja - $diskon) . "<br>";
?>