<?php
include_once('connection.php');
$sql = "SELECT * from songs";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Mateo Top Songs</title>
</head>
<body>
<div class="container card mt-5">

  <div class ="col-md-13 ">
  <h2>Top Favorite Songs of Charlotte Mateo</h2><br>
  <a href="create.php" class="btn btn-outline-primary float-left">Add New Songs</a>
  </div>
  <table class="table table-bordered mt-2">
    <thead>
      <tr>
        <th>id</th>
        <th>Title</th>
        <th>Artist</th>
        <th>Composer</th>
        <th>Released Date</th>
        <th>Album</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) {?>
           <tr>
             <td><?=$row['id']?></td>
             <td> <?=$row['title']?>  </td>
             <td>  <?=$row['artist']?>  </td>
             <td>  <?=$row['composer']?> </td>
             <td>  <?=$row['released_date']?>  </td>
             <td>  <?=$row['album']?>  </td>
             <td><a href="controller.php?id=<?php echo $row['id']; ?>">Delete</a></td>
           </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>