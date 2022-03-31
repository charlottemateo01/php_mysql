
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
    <title>Add Songs</title>
</head>
<body>
  <div class="container card mt-5 col-md-6">
  <form action="controller.php" method="post">
  <div class="form-group">
    <label for="title"><b>Title</b></label>
    <input type="text" class="form-control" name="title"  required>
  </div>
  <div class="form-group">
    <label for="title"><b>Artist</b></label>
    <input type="text" class="form-control" name="artist"  required>
  </div>
  <div class="form-group">
    <label for="title"><b>Composer</b></label>
    <input type="text" class="form-control" name="composer"  required>
  </div>
  <div class="form-group">
    <label for="title"><b>Released Date</b></label>
    <input type="number" class="form-control" name="rdate"  required>
  </div>
  <div class="form-group">
    <label for="title"><b>Album<b></label>
    <input type="text" class="form-control" name="album"  required>
  </div>
  <button type="submit" class="btn btn-outline-primary mb-1" name="save">SAVE</button>
</form>
  </div>
</body>
</html>