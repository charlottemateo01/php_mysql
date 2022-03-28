<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Songs</title>
</head>
<body>
    <h1>ADD NEW SONGS </h1>
  <form action="db_conection.php" method="post">
      <label>Title:</label><input type="text" name="title"><br><br>
      <label>Artist:</label><input type="text" name="artist"><br><br>
      <label>Track Duration:</label><input type="text" name="track duration"><br><br>
      <label>Composer:</label><input type="text" name="composer"><br><br>
      <label>Released Date:</label><input type="text" name="released date"><br><br>

      <button type="submit" name="submit">Submit</button>

</form>

</body>
</html>