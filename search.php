<!DOCTYPE html>
<html>
<head>
	<title>Replace</title>
</head>
<body>
<?php

$text= "kami siswa siswi smkn24 jakarta ingin mengadakan sebuah festival budaya yg di adakan oleh siswa di hari sabtu dan minggu ";
	
$index=$_POST['word'];


$Scanner=explode(" ", $text);	
$cont = count($Scanner);


		for ($i=0; $i<$cont -1  ; $i++)
			{

				if($index == $Scanner[$i])
				{
					echo "<font color=red> $Scanner[$i]</font>";	
				}
				else{
					echo " $Scanner[$i]";
					}
			}
?>
<p>
<form action="Replace.php" method="post">
	<table>
		<tr>
			<td><b>replace red word</b></td>	
			<td>
				<input type ='text' name='Replace'> 
				<input type ='hidden' name='word' value="<?php echo $index; ?>">
				<input type='submit' value ='Replace'>	
			</td>
		</tr>
		
	</table>
	</form>
</body>
</html>


