<?php
if($argc!=4)
	die ("Errore numero parametri");
list(,$file, $num, $word)=$argv;
$fp=fopen($file, "r");
if($fp){
	while($data=fgetcsv($fp, 1000, ",")){
	if($data[$num]==$word)
		echo implode(",",$data).";";
	}
}
else
	die("Errore apertura file");
?>