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
		<tr>
			<td>姓名:</td><td><input type="text" name="driver"></td>
		</tr>
		<tr>
			<td>車號:</td><td><input type="text" name="carnumber"></td>
			<td>工資:</td><td><input type="text" name="salary"></td>			
		</tr>
		<tr>
			<td>麻豆麵包:</td><td><input type="text" name="brand"></td>
			<td>籃數:</td><td><input type="text" name="backage"></td>
<!--			<td>車輛單次出場時間:</td><td><input type="text" name="caronetime"></td> -->
		</tr>
		<tr>
			<td>車輛出場日期:</td><td><input type="date" name="caroutday"></td>
			<td>車輛回廠日期:</td><td><input type="date" name="carintday"></td>
		</tr>
		<tr>
			<td>車輛出場時間:</td><td><input type="time" name="carouttime"></td>
			<td>車輛回廠時間:</td><td><input type="time" name="carintime"></td>
		</tr>

		<tr>
			<td>車輛出廠里程出數:</td><td><input type="text" name="caroutmilage"></td>
			<td>車輛回廠里程回數:</td><td><input type="text" name="carinmilage"></td>
		</tr>
		<tr>
			<td>人員出場日期:</td><td><input type="date" name="manoutday"></td>
			<td>人員回廠日期:</td><td><input type="date" name="manintday"></td>
		</tr>
		<tr>
			<td>人員出場時間:</td><td><input type="time" name="manouttime"></td>
			<td>人員回廠時間:</td><td><input type="time" name="manintime"></td>
		</tr>
		<tr>			
<!--			<td>車輛單次出場里程數:</td><td><input type="text" name="cartotalmilage"></td>-->
		</tr>
		<tr>
			<td>運費:</td><td><input type="text" name="ShippingRate"></td>
			<td>用油:</td><td><input type="text" name="oil"></td>			
		</tr>
		<tr>
			<td>為保:</td><td><input type="text" name="protect"></td>
			<td>路單:</td><td><input type="text" name="waybill"></td>			
		</tr>
		<tr>
			<td>事項:</td><td><input type="text" name="note"></td>
			<td>毛利:</td><td><input type="text" name="grossprofit"></td>
		</tr>
		<tr>
			<td>
				<div data-role="fieldcontain">
					<input type="submit" value="送出資料">	
				</div>
			</td>
		</tr>
	</table>

</form>

</body>
</html>