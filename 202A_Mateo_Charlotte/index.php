<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top 5 Favorite Songs</title>
</head>
<body>
    <h1>My Top 5 Favorite Songs</h1>
    <a href="add.php"><br>
    <button id="myButton" class="float-left submit-button" style="background-color: #4CAF50;" >Add New Songs</button><br>
   </a>
   <br>
    <table table border = '1' cellspacing = '0' cellpadding='10' style="text-align: center;">
        <thead>
            <tr>
                <th>Title</th>
                <th>Artist</th>
                <th>Composer</th>
                <th>Album</th>
                <th>Released Date</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              include 'db_connection.php';

              $sql = "SELECT * from songs";
              $result = mysqli_query($conn, $sql);

              if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $row['title'] . "</td>";
                      echo "<td>" . $row['artist'] . "</td>";
                      echo "<td>" . $row['composer'] . "</td>";
                      echo "<td>" . $row['album'] . "</td>";
                      echo "<td>" . $row['released_date'] . "</td>";
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='5'>No results found!</td></tr>";
              }
            ?>
        </tbody>
    <table>
</body>
</html>