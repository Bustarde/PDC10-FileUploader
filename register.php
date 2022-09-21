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
   
    <form action="index.php" enctype="multipart/form-data" method="POST">
      <div class="mb-3 row">
        <label for="InputName" class="col-sm-2 col-form-label">Complete Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="InputName" name="complete_name" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="InputEmail1" class="col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" id="InputEmail" name="email" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="InputPassword" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="InputPassword" name="password" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="InputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
        <div class="col-sm-10">
        <input type="password" class="form-control" id="InputConfirmPassword" name="password" required>
        </div>
      </div>
      <div class="mb-3 row">
        <label for="picture" class="col-sm-2 col-form-label">Picture</label>
        <div class="col-sm-10">
        <input type="file" class="form-control" id="picture_path" name="picture_path" required>
        </div>
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary">Submit Registration</button>
      </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>