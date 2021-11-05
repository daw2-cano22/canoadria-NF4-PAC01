<html>
    <head>
    <title>Popular</title>
    </head>
	<?php
		$dada1 = $_POST['dada1']; 
		$dada2 = $_POST['dada2'];
		$dada3 = $_POST['dada3'];
		$dada4 = $_POST['dada4'];
		$dada5 = $_POST['dada5'];
	?>
    <body>
		<form action="Llistes" method="post">
		<table>
			<tr>
			<td>opciones</td>
			<td>
			<select name="opciones">
			<?php 
			echo '<option value="' . $dada1 . '">' . $dada1 . '</option>';
			echo '<option value="' . $dada1 . '">' . $dada2 . '</option>';
			echo '<option value="' . $dada1 . '">' . $dada3 . '</option>';
			echo '<option value="' . $dada1 . '">' . $dada4 . '</option>';
			echo '<option value="' . $dada1 . '">' . $dada5 . '</option>';
			?>
			 </select>
			</td>
		   </tr>
		</table>
		</form>
    </body>
    </html>