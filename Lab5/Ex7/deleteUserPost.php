<?php
$isChecked= $_POST['deleteThis'];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "Aeth4aic", "jkhounsombath");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
else
{
  printf("The following posts were deleted: \n");
  foreach($_POST['deleteThis'] as $postID)
  {
    $query = "DELETE FROM Posts
              WHERE post_id = '$postID'";
              echo "". $postID . "\n";
              $result = $mysqli->query($query);
  }

}

?>
