<?php
require_once('../db/Koneksi.php');

class User
{
    public function __construct()
    {
        $db = new Koneksi();
        $this->conn = $db->connect();
    }

    public function authenticate($uname, $pass)
    {
        $auth = $this->conn->query("SELECT * from user WHERE username='{$uname}' AND pass='{$pass}' LIMIT 1");


        if ($auth->num_rows !== 0) {
            //Authentikasi user diterima
            $user = $auth->fetch_assoc();
            session_start();
            $_SESSION['userID'] = $user['id'];
            $_SESSION['userID'] = $user['nama'];
            // $user = $auth->fetch_assoc();
            header("Location: ../../view/home.php");
        } else {
            header("Location: ../../view/index.php");
        }
    }
}
