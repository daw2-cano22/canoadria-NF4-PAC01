<html>
	<head>
		<title>Exercice</title>
   </head>
   <body>
	 <?php
		if ($_GET['movie_id'] == null)
		{			
			header('Location: N4P110form.php?movie_id=1');
		}
		 $mysqli = new mysqli('localhost', 'root', 'Alumno_2021', 'moviesite') or die($mysqli -> error);
		 $query = "select movie_name from movie where movie_id = ".$_GET['movie_id'].';';
		 $result = $mysqli -> query($query) or die($mysqli -> error);						 
		 $row = $result -> fetch_assoc() or die($mysqli -> error);
		 echo '<h1>Add a comment to '.$row['movie_name'].'<h1>';
	?>
		<form action="N4P111formprocess.php" method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"/></td>
				</tr>
				<tr>
					<td>rating</td>
					<td><input type="range" min="0" max="5" name="rating"/></td>
				</tr>
				<tr>
					<td>Comment</td>
					<td><input type="textarea" name="comment"/></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<input type="submit" name="submit" value="Add" />
					</td>
				</tr>
			<?php echo '<input type="hidden" name="movie_id" value="'.$_GET['movie_id'].'"/>'; ?>
			</table>
		</form>
	</body>
</html>
																																	   