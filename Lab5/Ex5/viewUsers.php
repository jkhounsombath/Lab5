<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "Aeth4aic", "jkhounsombath");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
echo "<table border= '1'>";
$query = "SELECT *
          FROM Users";
if ($result = $mysqli->query($query))
{
  while ($row = $result->fetch_assoc())
  {
    echo "<tr><td>" . $row['user_id'] . "</td></tr>";
  }
  $result->free();
}
$mysqli->close();
?>
