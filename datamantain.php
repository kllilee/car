<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>right</title>
  </head>
<body>
<p><font size="5">輸入資料資料維護</font></p>
<p><img src="./source/Line.png"></p>
    <?php
      $mysqli = new mysqli("localhost", "ctcsbixo", "Mm90772512" ,"ctcsbixo_macoto");

      if ($mysqli->connect_errno)
        die("無法建立資料連接: " . $mysqli->connect_error);

      $mysqli->query("SET NAMES utf8");
      $result = $mysqli->query("SELECT * FROM DailyLog");

      echo "<table border='1' align='left'><tr align='center'>";

      while ($field = $result->fetch_field())   // 顯示欄位名稱
        echo "<td>" . $field->name . "</td>";

      echo "</tr>";

      while ($row = $result->fetch_row())
      {
        echo "<tr>";

        for ($i = 0; $i < $result->field_count; $i++)
          echo "<td>" . $row[$i] . "</td>";

        echo "</tr>";
      }

      echo "</table>";

      $result->free();
      $mysqli->close();
    ?> 

</body>
</html>