<!--UNTUK REFRESH HALAMAN, RE-ENTER PADA URL DAN JANGAN MENGGUNAKNA TOMBOL REFRESH -->
<?php 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function tampilPrima1_50(){
        $param = 2;
        while($param < 50){
            $param1 = 2;
            if($param == 2 || $param == 3){
                echo $param." | ";
            }
            else if($param == 47){
                echo $param;
            }
            else{
                while($param1<=$param){
                    if($param1==$param){
                        echo $param." | ";
                    }
                    else if($param1<$param && $param%$param1 == 0){
                        break;
                    }  
                    $param1++;
                }
            }
            $param++;
        }    
    }
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <p><b>Tampil bilangan prima 1-50<br></b></p>
    <!-- <label for="input">Input</label> -->
    <!-- <input type="number" name="input" value="<?php echo $input; ?>"> -->

    <input type="submit" value="Tampil">
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // $input = test_input($_POST["input"]); 
        echo "Hasil Pengecekkan : ";
        tampilPrima1_50();
        
    }
?>


