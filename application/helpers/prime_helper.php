<?php 

function isPrimeNumber($number)
{
    // Bilangan kurang dari 2 bukan bilangan prima
    if ($number < 2) {
        return false;
    }

    // Cek apakah bilangan dapat dibagi oleh angka lain selain 1 dan dirinya sendiri
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

?>