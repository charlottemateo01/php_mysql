<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "db_mateo";

$conn = mysqli_connect($server, $username, $password, $database);

if(isset($_POST['submit'])){
    if(!empty($_POST['title']) && !empty($_POST['artist']) && !empty($_POST['track duration']) && !empty($_POST['composer']) && !empty($_POST['released date'])){
        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $trackduration = $_POST['track duration'];
        $composer = $_POST['composer'];
        $releaseddate = $_POST['released date'];

        $query= "insert into form(title,artist,track duration,composer,released date) values('$title','$artist','$trackduration','$composer','$releaseddate')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());

        if($run){
            echo"Form successfully submitted";
        }
        else{
            echo"Form not successfully submitted";
        }
    }
    else{
        echo"All fields required";
    }
}

?>