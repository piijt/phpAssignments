
<?php

echo "<h1>Peter be2.0</h1>";
echo "<br>";
echo "<h2>country table names</h2>";
echo "<br>";

$con=mysqli_connect("localhost", "root", "", "newworld");
if (!$con) {
  echo "Database connection failed";
}

$query="SELECT * FROM country";
  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_array($result)){

    echo"".$row['name']."";
  }

  echo "<h2> Peter be2.1 </h2>";
  echo "<br>";
  echo "<h2> countrylanguage </h2>";
  echo "<br>";

  $query="SELECT * FROM countrylanguage";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){

      echo"".$row['language']."";
    }

 ?>
