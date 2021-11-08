<?php 
    // Function passing by reference
    function susun(&$listNama){
        sort($listNama);
    }


    $listNama = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");
    echo "Sebelum di sort : <br>";
    $i = 0;
    foreach($listNama as $nama){
        if($i < count($listNama)-1){
            echo $nama." | ";
        }else{
            echo $nama;
        }
        $i++;
    }

    echo "<br><br>";
    echo "Setelah di sort : <br>";
    susun($listNama);

    $i = 0;
    foreach($listNama as $nama){
        if($i < count($listNama)-1){
            echo $nama." | ";
        }else{
            echo $nama;
        }
        $i++;
    }
?>