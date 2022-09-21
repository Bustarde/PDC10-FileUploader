<?php

include "form-handler.php";

$dsn = "mysql:host=localhost;dbname=pdc10_db";
$user = "testuser";
$passwd = "123";

$pdo = new PDO($dsn, $user, $passwd);

$result = Registration::handleUpload($_FILES['picture_path']);
$pass = Registration::encryptPass($_POST['password']);

?>
<?php

if ($result !== FALSE) {

	// Save the uploaded file to DB. File name as the label
	$object = new Registration($_POST['complete_name'], $_POST['email'], $pass['password'], $result['path']);
	$result = $object->save();

	echo('Successfully saved your registration');

} else {

	echo('Could not save your registration');

}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDC10 Registrations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

  <body>
    <h1>Registrations</h1>
    
    <div class="text-right">
    <a href="register.php"><button type="button" class="btn btn-primary">Add New Registration</button></a>
    </div>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Complete Name</th>
                <th scope="col">Email</th>
                <th scope="col">Picture</th>
                <th scope="col">Registered Date</th>
            </tr>
        </thead>
        <tbody>

          <?php
          $registrations = Registration::retrieveReg();
          foreach($registrations as $registration)
        ?>

        <tr>
          <td>
            <?php echo $registration['id'];?>
          </td>

          <td> 
            <?php echo $registration['complete_name'];?>
          </td>

          <td>
            <?php echo $registration['email'];?>
          </td>

          <td>
            <?php $filename= $registration['picture_path'];
            echo "<img width=100px; height=100; src=" . $registration['picture_path'] . ">"; ?>
          </td>

          <td>
            <?php echo $registration['registered_at'];?>
          </td>

          <?php
          ?>

        }

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>

