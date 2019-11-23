<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="" method="get">
    <div class="form-group col-sm-2">
      <label for="exampleInputEmail1">Date of Birth</label>
      <input type="date" class="form-control" name="birthdate">
    </div>
    <div>
      <input type="submit" name="submitted" value="Submit">
    </div>
  </form>
  <?php
    if(isset($_GET['submitted']))
    {
      $date = $_GET['birthdate'];

      echo "Your date of birth is " . $date;
    }
    echo "You are my sweetest downfall. I loved you first."
  ?>
</body>

</html>