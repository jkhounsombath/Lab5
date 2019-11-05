<html>
  <head>
  </head>
  <body>
    <p>select a user to view their posts</p><br>
    <form method= "post" action= "viewUserPosts.php">
    <select name= "userName">
      <?php
        $mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "Aeth4aic", "jkhounsombath");
        if ($mysqli->connect_errno)
        {
          printf("Connect failed: %s\n", $mysqli->connect_error);
          exit();
        }
        $query = "SELECT *
                  FROM Users";
        if ($result = $mysqli->query($query))
        {
          while ($row = $result->fetch_assoc())
          {
            echo "<option value='" . $row['user_id'] . "'>" . $row['user_id'] . "</option>";
          }
          $result->free();
        }
        $mysqli->close();
      ?>
    </select>
    <input type= "submit" value="select user"></input>
    </form>
  </body>
</html>
