<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <select name="Color" > <!-- // Initializing Name With An Array -->
      <option value="Red">r</option>
      <option value="Green">Green</option>
      <option value="Blue">Blue</option>
      <option value="Pink">Pink</option>
      <option value="Yellow">Yellow</option>
    </select>
    <input type="submit" name="submit" value="Get Selected Values">
  </form>
  <?php
  if(isset($_POST['submit'])){
  // As output of $_POST['Color'] is an array we have to use foreach Loop to display individual value
    //foreach ($_POST['Color'] as $select)
    $select = $_POST['Color'];
    {
      echo "You have selected : " .$select; // Displaying Selected Value
    }
  }
  ?>
</body>
</html>