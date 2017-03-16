<?php

mysql_connect('localhost', 'root' , '');

mysql_select_db("kudlaty");

$query = mysql_query("select * from newsy where id='$id'");

$rekord = mysql_fetch_array($query);

$tekst = '<b><h3>'.$rekord[1].'</h3></b>'.$rekord[2].'<br/><br/>'.$rekord[3];

echo $tekst;

?>