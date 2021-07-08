<?php
    ob_start();
    session_start();
    $username        = $_POST['user_name'];
    $password    = $_POST['pass_word'];
    $_SESSION['user_name'] = $username;
        $Open = mysql_connect("localhost","root","");
            if (!$Open){
            die ("Koneksi ke Engine MySQL Gagal !");
                }
        $Koneksi = mysql_select_db("wava_asa");
            if (!$Koneksi){
            die ("Koneksi ke Database Gagal !");
            }
    $sql = "SELECT * FROM login where user_name='$user_name'";
    $qry = mysql_query($sql);
    $num = mysql_num_rows($qry);
    $row = mysql_fetch_array($qry);

    if ($num==0 OR $password!=$row['pass_word']) {
    ?>
        <script language="JavaScript">
            alert('Username atau Password salah !');
            document.location='index.php';
        </script>
    <?php
    }
    else {
        $_SESSION['login']=1;
        header("Location: home.html");
    }
    mysql_close($Open); //Tutup koneksi engine MySQL
?>