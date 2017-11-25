  <!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>right</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-2.2.3.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>    
	<meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
<body>
<p><font size="5">請輸入資料</font></p>
<p><img src="./source/Line.png"></p>
<form action="result.php" method="post">
	<table>
		
    <?php
      $mysqli = new mysqli("localhost", "ctcsbixo", "Mm90772512" ,"ctcsbixo_macoto");

      if ($mysqli->connect_errno)
        die("無法建立資料連接: " . $mysqli->connect_error);

      $mysqli->query("SET NAMES utf8");
      $result = $mysqli->query("SELECT Driver_name FROM driver");

      echo "<select name="driver_name">";
      while ($row = $result->fetch_row())
      {
        for ($i = 0; $i < $result->field_count; $i++)
        	echo "<option value=".$row[$i].">".$row[$i]."</option>\n"
      }
      echo "</select>";


      $result->free();
      $mysqli->close();

    ?> 
		
	</table>

</form>

</body>
</html>