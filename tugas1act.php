<?php
include "tugas1inc.php";
if (empty($_POST['nama'])||empty($_POST['email'])) {
    header("Location:tugas2error.php");
} else {
echo "<center>Nama : " . $_POST['nama'] . "</center><br>";
echo "<center>Email : " . $_POST['email'] . "</center><br>";
echo "<center>Jam : " . $time . "</center><br>";
echo "<center>Hari : " . $day. "</center><br>";
echo "<center>Tanggal :" . $date . "</center><br>";
}
?>