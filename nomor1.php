<?php 
    function sum($hasil,$a, $b){
        $hasil = $a + $b;
        echo "PENJUMLAHAN <br>";
        echo "Operator : + <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function substarcted($hasil,$a, $b){
        $hasil = $a - $b;
        echo "PENGURANGAN <br>";
        echo "Operator : - <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function multiple($hasil,$a, $b){
        $hasil = $a * $b;
        echo "PERKALIAN <br>";
        echo "Operator : * <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function division($hasil,$a, $b){
        $hasil = $a / $b;
        echo "PEMBAGIAN <br>";
        echo "Operator : / <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function mod($hasil,$a,$b){
        $hasil = $a % $b;
        echo "MODULUS <br>";
        echo "Operator : % <br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }

    $hasil = 0;
    $a = 10;
    $b = 5;

    sum($hasil,$a,$b);
    echo "<br>";
    substarcted($hasil,$a,$b);
    echo "<br>";
    multiple($hasil,$a,$b);
    echo "<br>";
    division($hasil,$a,$b);
    echo "<br>";
    mod($hasil,$a,$b);
?>