<?php

$text= "kami siswa siswi smkn24 jakarta ingin mengadakan sebuah festival budaya yg di adakan oleh siswa di hari sabtu dan minggu ";
$r=$_POST['Replace'];
$index=$_POST['word'];
$Scanner=explode(" ", $text);	
$cont = count($Scanner);


		for ($i=0; $i<$cont -1  ; $i++)
			{

				if($index == $Scanner[$i])
				{
					echo "<font color=red> $r</font>";;	
				}
				else{
					echo " $Scanner[$i]";
					}
			}
?>