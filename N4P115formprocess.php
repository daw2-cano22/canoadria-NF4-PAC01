<html>
    <head>
    <title>Popular</title>
    </head>	
    <body>	
	<?php
		$dada1 = $_POST['dada1']; 
		$dada2 = $_POST['dada2'];
		$dada3 = $_POST['dada3'];
		$dada4 = $_POST['dada4'];
		$dada5 = $_POST['dada5'];
		$result = $dada1 + $dada2 + $dada3 + $dada4 + $dada5;		
		echo $result;
	?>	
    </body>
    </html>