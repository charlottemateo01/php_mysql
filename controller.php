<?php
include_once 'connection.php';
if(isset($_POST['save']))
{	 
	 $title = $_POST['title'];
	 $artist = $_POST['artist'];
	 $composer = $_POST['composer'];
	 $rdate = $_POST['rdate'];
     $album = $_POST['album'];
	 $sql = "INSERT INTO songs (title,artist,composer,released_date,album)
	 VALUES ('$title','$artist','$composer','$rdate','$album')";
	 if (mysqli_query($conn, $sql)) {
		header('Location: index.php');
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

$sql = "DELETE FROM songs WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('Location: index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>