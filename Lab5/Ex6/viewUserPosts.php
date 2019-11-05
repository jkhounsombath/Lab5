<?php
$userName = $_POST["userName"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "Aeth4aic", "jkhounsombath");
if ($mysqli->connect_errno)
{
  printf("Connect failed: %s\n", $mysqli->connect_error);
  exit();
}
else
{
  echo "<h1>Displaying posts for user: " . $userName . "</h1><br>";
  echo "<table border= '1'><tr><th>post id</th><th>content</th></tr>";
  $query= "SELECT *
          FROM Posts
          WHERE author_id = '$userName'";
          if ($result = $mysqli->query($query))
          {
            while ($row = $result->fetch_assoc())
            {
              echo "<tr><td>" . $row['post_id'] . "</td><td>" . $row['content'] . "</td></tr>";
            }
            $result->free();
          }
          echo "</table>";
          $mysqli->close();
}

?>
