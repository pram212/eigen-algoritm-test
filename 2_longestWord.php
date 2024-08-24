<?php
/**
 * Soal No. 2:
 * Diberikan contoh sebuah kalimat, silahkan cari kata terpanjang dari kalimat tersebut, 
 * jika ada kata dengan panjang yang sama silahkan ambil salah satu
 * Contoh: 
 * const sentence = "Saya sangat senang mengerjakan soal algoritma" 
 * longest(sentence) 
 * // mengerjakan: 11 character
 */

function longestWord($sentence) {
    $words = explode(" ", $sentence);
    $longestWord = "";

    foreach ($words as $word) {
        if (strlen($word) > strlen($longestWord)) {
            $longestWord = $word;
        }
    }

    return $longestWord . ": " . strlen($longestWord) . " character";
}

$sentence = "Saya sangat senang mengerjakan soal algoritma";
echo longestWord($sentence);  // Output: mengerjakan: 11 character
