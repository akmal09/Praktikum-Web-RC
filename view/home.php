<?php require_once('../app/db/Koneksi.php');
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
    <link rel="stylesheet" href="../assets/css/home.css">
    <link rel="stylesheet" href="../assets/css/iklan.css">
    <script src="../assets/js/history.js"></script>
</head>

<body>
    <form action="../app/controller/logout.php">
        <input type="submit" value="logout">
    </form>
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
            echo '<script src="../assets/js/iklan.js"></script>';
        }
    ?>

</body>

</html>