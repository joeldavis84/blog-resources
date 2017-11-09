<?php
session_start();

if ( isset( $_SESSION['visit_count'] ) ){

  $_SESSION['visit_count']++;

} else {

  $_SESSION['visit_count'] = 1;

}

if ( isset( $_GET['variableString'] ) ){

  $_SESSION['variableString'] = $_GET['variableString'];

}

?>

<head>
  <title>Whiz Bang Inc: Widget Exploder</title>
</head>
<body>

  PHP Session ID: <?=session_id()?> <br/>
  Visit Count: <?=$_SESSION['visit_count']?> <br/>
  Server: <?php system("hostname") ?><br/>
  Session Variable Value: <?=$_SESSION['variableString']?> <br/>

</html>
