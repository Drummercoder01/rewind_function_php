<?php
$_output="";

$_pointer =fopen('test3.txt', 'w+b')
	or die('file kan niet geopend worden');

//weg-schrijven 
fwrite($_pointer, '<h1>deze tekst schrijven we naar test3.txt<br>en lezen we na een "rewind"</h1>');
//terug-spoelen
rewind($_pointer);
//uit-lezen
$_output= fread($_pointer, 255);
fclose($_pointer);

echo $_output;
?>