<!--UNTUK REFRESH HALAMAN, RE-ENTER PADA URL DAN JANGAN MENGGUNAKNA TOMBOL REFRESH -->
<?php 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function primaChecker($input){
        if($input == 1){
            return "bukan bilangan prima";
        }
        else if($input == 2 || $input==3){
            return "bilangan prima";
        }
        else if($input>2){
            $param = 2;
            while($param < sqrt($input)){
                $param = 2;
                if($input % $param == 0 ){
                    return "bukan bilangan prima";
                    break;
                }else if($input % $param != 0){
                    return "bilangan prima";
                    break;
                }
                
                $param++;
            }
        }
        else if($input <=0 ){
            return "Harus bilangan positif";
        }
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p><b>CEK BILANGAN PRIMA <br></b></p>
    <label for="input">Input</label>
    <input type="number" name="input" value="<?php echo $input; ?>">

    <input type="submit" value="lihat Hasil !">
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = test_input($_POST["input"]); 
        $cek = primaChecker($input);
        echo "Hasil Pengecekkan : $cek";
        
    }
?>


