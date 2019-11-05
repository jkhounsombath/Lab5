<?php
$userName = $_POST["userName"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "Aeth4aic", "jkhounsombath");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$worked = true;

if ($userName == NULL)
{
  printf("The username was empty \n");
  $worked = false;
  exit();
}

if ($worked == true)
{
  $query = "INSERT INTO Users
            (user_id)
            VALUES
            ('$userName')";
            if($mysqli->query($query) === true)
            {
              echo "success";
            }
            else
            {
              echo "not";
            }
}
$mysqli->close();
?>
