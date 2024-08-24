<?php
/**
 * Soal No. 1:
 * Terdapat string "NEGIE1", silahkan reverse alphabet nya dengan angka tetap diakhir kata Hasil = "EIGEN1"
 */
function reverseAlphabet($string) {
    // Pisahkan huruf dan angka
    $letters = preg_replace('/[0-9]/', '', $string);
    $numbers = preg_replace('/[^0-9]/', '', $string);
    
    // Balikkan huruf
    $reversed = strrev($letters);
    
    // Gabungkan kembali huruf yang dibalik dan angka
    return $reversed . $numbers;
}

echo reverseAlphabet("NEGIE1");  // Output: EIGEN1
