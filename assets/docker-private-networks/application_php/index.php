<html>
  <head>
    <title>Docker Private Network Example</title>
  </head>
  <body>

    <?php

      $dbh = new mysqli("172.18.0.22", "root", "bollocks", "testing123");
      $result = $dbh->query("SELECT * FROM messages");

      while ($row = $result->fetch_assoc())
        echo $row['message_text'] ."<br/>";

    ?>

  </body>
</html>

