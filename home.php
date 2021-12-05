<?php require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();

$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>

<?php
    session_start();
    if(!isset($_SESSION['userID'])){
        header("Location: index.php");
        die();
        // echo "tes";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .base {
            display: flex;

        }

        main {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            /* gap: 10px 10px; */

            width: 75%;

        }

        aside {
            width: 25%;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin: 10px;
            min-height: 235px;
            /* width: 25%; */
            /* height: 200px; */
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 2px 16px;
        }

        .card-head,
        .card-body {
            overflow: hidden;
            line-height: 2rem;
            max-height: 8rem;
            -webkit-box-orient: vertical;
            display: block;
            display: -webkit-box;
            overflow: hidden !important;
            text-overflow: ellipsis;
            -webkit-line-clamp: 4;
        }

        .card-head {
            margin: 0;
            /* height: 75px; */
        }

        aside {
            min-height: 100%;
            border: solid 1px #a18f8f29;
            padding: 10px;
        }
    </style>
    <script>

        function histRender(){
            const history_buck = document.getElementById('history_buck');
            let template = ''
            if(localStorage.arrOfHyst !== null){
                let histories = JSON.parse(localStorage.arrOfHyst);
            
                histories = [...new Set(histories)];
            
                histories.forEach(item => {
                    const hist = JSON.parse(localStorage.getItem(item));
                
                    template += `
                    <div class="history-box" >
                        <h4 style="margin:0;">${hist.judul}</h4>
                        <p style="margin:0">${hist.isi}</p>
                    </div>`;
                });
            
                history_buck.innerHTML = template;
            }

        }
        // histRender();
        function addHist(el){
            const id = el.getAttribute('data-id');
            const judul = el.getElementsByClassName('card-head')[0].innerText;
            const isi = el.getElementsByClassName('card-body')[0].innerText;
        
            const histItem = {
                id: id,
                judul: judul,
                isi: isi
            };
        
            if(localStorage.getItem('arrOfHyst') !== null){
                let histories = JSON.parse(localStorage.arrOfHyst);
                histories.push('hyst'+id);
                histories = [...new Set(histories)];
            
                localStorage.setItem('arrOfHyst',JSON.stringify(histories));
            }
            else {
                localStorage.setItem('arrOfHyst',JSON.stringify(['hyst'+id]));
            }
            localStorage.setItem('hyst'+ id, JSON.stringify(histItem));
        
            histRender();
        }
    </script>
    
</head>

<body>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?php $item['id']?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck"></div>
        </aside>
    </section>

    <?php
        if(!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes') {
            echo '<script src="./assets/iklan/iklan.js"></script>';
        }
    ?>

</body>

</html>