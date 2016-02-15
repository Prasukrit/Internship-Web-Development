<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body><? include("menu.php"); 
include("config.php"); 
?>
<pre>
<form action="addPortBackend.php" method="post" enctype="multipart/form-data">
รูป<input name="pic" type="file" />
ลิ้ง<input name="link" type="text" />
เนื้อหา <textarea name="contentAbout" cols="50" rows="8"></textarea>
สีพื้นเนื้อหา<input name="colorBg" type="file" />
<input name="submit" type="submit" />
</form>
<?
			$strSQL = "SELECT * FROM  `portV3`  ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
while($objResult = mysql_fetch_array($objQuery)){
	echo $objResult[link]." <a href=\"edit_port.php?id=$objResult[id]\">แก้ไข</a><br>";
}
 ?>

</pre>
</body>
</html>