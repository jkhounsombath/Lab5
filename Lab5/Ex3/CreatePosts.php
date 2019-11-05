<?php
$userName = $_POST["userName"];
$post= $_POST["posts"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "Aeth4aic", "jkhounsombath");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
$worked= true;

if ($userName == NULL)
{
  printf("The username was empty \n");
  $worked = false;
  exit();
}
if ($post == NULL)
{
  printf("The post was empty\n");
  $worked = false;
  exit();
}
if($worked == true)
{
  $query= "SELECT *
          FROM Users
          WHERE user_id = '$userName'";
  if(mysqli_num_rows($mysqli->query($query)) > 0)
  {
    printf("user exists\n");
    $query= "INSERT INTO Posts
            (post_id, content, author_id)
            VALUES
            ('DEFAULT', '$post', '$userName' )";
            if($mysqli->query($query) === true)
            {
              printf("post was successful\n");
            }
            else
            {
              printf("Post was unsuccessful\n");
            }
  }
  else
  {
    printf("User doesn't exist\n");
  }
}
$mysqli->close();
?>
