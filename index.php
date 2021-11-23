<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            tampilData()

            function tampilData(){
                $("#margin").load('read.php');
            }

            $(document).on('click','#tambahData',function(){
                event.preventDefault();
                var dataAlumni = $('#form_mahasiswa').serialize();
                $.ajax({
                   type : 'POST',
                   url : "add.php",
                   data : dataAlumni,
                   success : function(data){
                        tampilData()
                        return alert("data berhasil dimasukkan");
                   }
               });
            });


            $(document).on('click','#editdata',function(){
                // return alert('tes')
                event.preventDefault();
                var id = $(this).attr("value");
                // return alert(id);
                $.ajax({
                    type :'GET',
                    url : 'formEdit.php',
                    data :{id:id},
                    success : function(data){
                        $('#margin').html(data);
                    }
                });
            });

            $('#margin').on('submit','#form_mahasiswa_edit',function(){
                var dataForm = $(this).serialize();
                $.ajax({
                    type :'POST',
                    url : 'store.php',
                    data :dataForm,
                    // cache : false,
                    success : function(data){
                        tampilData()
                        return alert("data berhasil diubah");
                    }
                });
            });

            $(document).on('click','#batalFile',function(){
                $.ajax({
                    type : 'GET',
                    url : 'read.php',
                    success : function(data){
                        $('#margin').html(data);
                    }
                });
            });

            $(document).on('click','#deletedata',function(){
                // return alert();
                var hapusId = $(this).attr("value");
                $.ajax({
                    type : 'POST',
                    url : 'delete.php',
                    data : {hapusId:hapusId},
                    success : function(data){
                        tampilData()
                        return alert("data berhasil dihapus");
                    }
                });
            });

            $('#input').click(function(){
                $.ajax({
                    success :function(data){
                        $("#margin").load('form_input.html');
                    }
                })
            });

            $('#tabelal').click(function(){
                $.ajax({
                    success :function(data){
                        $("#margin").load('read.php');
                    }
                })
            });
        });          
    </script>
    <title>Sistem Informasi Alumni</title>
</head>
<body>

    <ul>
        <li><a href="#" id="input">Input Data</a> </li>
        <li><a href="#" id="tabelal">Tabel Alumni</a></li>
    </ul>
<div id="margin">

</div>


</body>
</html>