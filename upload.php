<?php
	include('conn.php');
	
	foreach ($_FILES['delete']['name'] as $key => $name){
		
		
		move_uploaded_file($_FILES['upload']['tmp_name'][$key], 'upload/' . $newFilename);
		
		$location = 'upload/' . $name;
		$title = $name;
		mysqli_query($conn,"insert into photo (location) values ('$location')");
	
		
	}
	header('location:left-sidebar.php');
?>

