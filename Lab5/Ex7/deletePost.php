<html>
  <head>
  </head>
  <body>
    <form method="post" action= "deleteUserPost.php">
    <table border= '1'>
        <tr><th>Posts</th><th>Post Author</th><th>Post id</th><th>Delete?</th></tr>
        <?php
          $mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "Aeth4aic", "jkhounsombath");
          if ($mysqli->connect_errno)
          {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
          }
          $query = "SELECT *
                    FROM Posts";
          if ($result = $mysqli->query($query))
          {
            while ($row = $result->fetch_assoc())
            {
              echo "<tr><td>" . $row['content'] . "</td><td>" . $row['author_id'] . "</td><td>" . $row['post_id'] . "</td><td><input type= 'checkbox' name= 'deleteThis[]' value=" . $row['post_id'] . "></input></td><tr>";
            }
            $result->free();
          }
          $mysqli->close();
         ?>
    </table>
    <input type="submit" value="delete selected posts"></input>
    </form>
  </body>
</html>
