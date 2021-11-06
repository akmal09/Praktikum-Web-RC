<?php 
    function sum($a, $b){
        $hasil = $a + $b;
        echo "pertambahan <br>";
        echo "Operator : + <;br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function substarcted($a, $b){
        $hasil = $a - $b;
        echo "Pengurangan <br>";
        echo "Operator : - <;br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function multiple($a, $b){
        $hasil = $a * $b;
        echo "Perkalian <br>";
        echo "Operator : * <;br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function division($a, $b){
        $hasil = $a / $b;
        echo "Pembagian <br>";
        echo "Operator : / <;br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }
    function mod($a,$b){
        $hasil = $a % $b;
        echo "Modulus <br>";
        echo "Operator : % <;br>";
        echo "Hasil : $hasil";
        echo "<br>";
    }

    $hasil = 0;
    $a = 10;
    $b = 15;

    sum($hasil,$a,$b);
    substarcted($hasil,$a,$b);
    multiple($hasil,$a,$b);
    division($hasil,$a,$b);
?>