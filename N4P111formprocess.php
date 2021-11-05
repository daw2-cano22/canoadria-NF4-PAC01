<html>
	<head>
		<title>Exercice</title>
	</head>
	 <body>
	 <?php
	 
	 $mysqli = new mysqli('localhost', 'root', 'Alumno_2021', 'moviesite') or die($mysqli -> error);			 
	 $query = "select movie_name from movie where movie_id = ".$_POST['movie_id'].';';			 
	 $result = $mysqli -> query($query) or die($mysqli -> error);			 
	 $row = $result -> fetch_assoc() or die($mysqli -> error);			 
	 $reviewDate = date("Y-m-d");
	 
	 $query = "INSERT INTO reviews (review_movie_id, review_date, reviewer_name, review_comment, review_rating) VALUES (".$_POST['movie_id'].",\"".$reviewDate."\",\"".$_POST['username']."\",\"".$_POST['comment']."\",".$_POST['rating'].");";			
	 $result = $mysqli -> query($query) or die($mysqli -> error);
	 
	 echo '<h1>Dada inserida a '.$row['movie_name'].'</h1>';			 
	 echo '<p>Rating' . $_POST['rating'] . '</p>';			 	 	 
	 echo '<h1>Comment' . nl2br($_POST['comment']) . '</h1>';	 
	 $starcount = $_POST['rating'];
	 print_r($_POST);
	 
	 
	 for ($i = 0; $i <$starcount; $i++)
	 {		
		echo '<img width="64px" height="64px" src="star.png">';
	 }
	 
	 ?>
	 </body>
</html>