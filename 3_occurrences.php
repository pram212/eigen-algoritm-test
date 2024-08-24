<?php 
/**
 * Soal No. 3:
 * Terdapat dua buah array yaitu array INPUT dan array QUERY, 
 * silahkan tentukan berapa kali kata dalam QUERY terdapat pada array INPUT
 * Contoh:
 * INPUT = ['xc', 'dz', 'bbb', 'dz']  
 * QUERY = ['bbb', 'ac', 'dz']
 * OUTPUT = [1, 0, 2] karena kata 'bbb' terdapat 1 pada INPUT, kata 'ac' tidak ada pada INPUT, dan kata 'dz' terdapat 2 pada INPUT
 */

function countOccurrences($input, $query) {
    $output = [];

    foreach ($query as $q) {
        $count = 0;
        foreach ($input as $i) {
            if ($i === $q) {
                $count++;
            }
        }
        $output[] = $count;
    }

    return $output;
}

$input = ['xc', 'dz', 'bbb', 'dz'];
$query = ['bbb', 'ac', 'dz'];

$output = countOccurrences($input, $query);
print_r($output);  // Output: Array ( [0] => 1 [1] => 0 [2] => 2 )
