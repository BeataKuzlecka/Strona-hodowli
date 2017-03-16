<?php include 'gora.html';?>
<?php
mysql_connect('localhost', 'root' , '');

mysql_select_db("kudlaty");

$query = mysql_query("select * from newsy order by data desc");

while($rekord = mysql_fetch_array($query))

{

$tekst .= '<h1>'.$rekord[3].'</h1><h2>'.$rekord[1].'</h2><p>'.$rekord[2].'</p></br><hr><br/>';

}

echo $tekst;
?>
<?php include 'dol.html';?>