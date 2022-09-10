<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h1>Registration Form</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<form action="upload-handler.php" enctype="multipart/form-data" method="POST">
  <div class="mb-3">
    <label for="InputName" class="form-label">Complete Name</label>
    <input type="text" class="form-control" id="InputName" name="complete_name">
  </div>
  <div class="mb-3">
    <label for="InputEmail1" class="form-label">Email Address</label>
    <input type="text" class="form-control" id="InputEmail" name="email">
  </div>
  <div class="mb-3">
    <label for="InputPassword" class="form-label">Password</label>
    <input type="password" class="form-control" id="InputPassword" name="password">
  </div>
  <div class="mb-3">
    <label for="InputConfirmPassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="InputConfirmPassword" name="password">
  </div>
  <div class="mb-3">
    <label for="picture" class="form-label">Picture</label>
    <input type="file" class="form-control" id="picture_path" name="picture_path">
  </div>
  <button type="submit" class="btn btn-primary">Submit Registration</button>
</form>
   
  </body>
</html>