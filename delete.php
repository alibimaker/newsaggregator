<?php
include('conn.php');

foreach ($_FILES['delete']['name'] as $key => $name){
    
    $title = $name;
   
      
//파일 삭제 sql문실행
mysqli_query($conn, "delete from photo where photoid=21");
}


/* if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
} */


header('location:left-sidebar.php');
?>