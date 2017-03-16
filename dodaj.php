<?php

mysql_connect('localhost', 'root' , '');

mysql_select_db("kudlaty");
$tytul =$_POST["tytul"];
$tresc=$_POST["tresc"];
$query = mysql_query("insert into newsy values('', '$tytul', '$tresc', now() )");

echo 'Dziekujemy za dodanie newsa </br></br>';
echo'<a href="index.php"; align="right">Powrót na stronę główną</a>';
?>