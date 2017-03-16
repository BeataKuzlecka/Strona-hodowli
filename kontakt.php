<?php include 'gora.html';?>
<h2>Kontakt z hodowcą</h2>
<table style="width:100%">
<td style="width:50%">

<p>Imię Nazwisko</br>
ulica 34</br>
Bydgoszcz</p>
</td>
<td>
<form action="mailto:twój_adres_poczty@domena" method="post" enctype="text/plain" autocomplete="on">
<p>Podaj swoje imię:<br/>
<input name="Imię" /><br /><br/>
Podaj swoje nazwisko:<br/>
<input name="Nazwisko" /><br/><br/>
Podaj swój adres e-mail:<br/>
<input type="email" name="mail" autocomplete="off" /><br/>
<p>Podaj swój komentarz:</p>
<textarea name="Wiadomość" cols="50" rows="10">Wpisz swoją wiadomość</textarea></p>
<input type="submit" value="Wyślij formularz" />
<input type="reset" value="Wyczyść dane" />
</td>
</table>
<?php include 'dol.html';?>