<!DOCTYPE html>
<html>
<head>
	<title>TEKOTEK</title>
</head>
<body>
	<?php
		echo "<font face ='Helvetica'>Tekotek-kotek
			anak ayam turun 100</font> <br>";
		for ($i=99;$i>=1;$i--) {
			if($i % 2 == 0){
				$color= "brown";
	}else
		{
				$color= "orange";

		}
			echo "<span style='color:$color;
			font-family: Helvetica'>Mati satu tinggal $i</span><br>";
		}
		?>
</body>
</html>