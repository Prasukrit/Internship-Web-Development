<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? 
include("config.php"); 

 $newname = date('Ymdhis') . "." . end(explode('.', $_FILES["bg"]["name"]));
                if (move_uploaded_file($_FILES["bg"]["tmp_name"], "./myfile/" . $newname)) {
                    
                }
 $newname2 = date('Ymdhis') . "." . end(explode('.', $_FILES["colorBg"]["name"]));
                if (move_uploaded_file($_FILES["colorBg"]["tmp_name"], "./logo/" . $newname2)) {
                  }
  
 $topicAbout=$_POST[topicAbout];
 $contentAbout=$_POST[contentAbout];
 $id=$_GET[id];
if($_FILES["bg"]["name"]!=""&&$_FILES["colorBg"]["name"]!=""){

echo $strSQL = "UPDATE `hyperriche_db`.`aboutV3` SET 
`bg` = '$newname', 
`topicAbout` = '$topicAbout', 
`contentAbout` = '$contentAbout', 
`colorBg` = '$newname2' 
WHERE `aboutV3`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["bg"]["name"]==""&&$_FILES["colorBg"]["name"]!=""){

echo $strSQL = "UPDATE `hyperriche_db`.`aboutV3` SET 
`topicAbout` = '$topicAbout', 
`contentAbout` = '$contentAbout', 
`colorBg` = '$newname2' 
WHERE `aboutV3`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["bg"]["name"]==""&&$_FILES["colorBg"]["name"]==""){

echo $strSQL = "UPDATE `hyperriche_db`.`aboutV3` SET 
`contentAbout` = '$contentAbout', 
`topicAbout` = '$topicAbout' 
WHERE `aboutV3`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["bg"]["name"]!=""&&$_FILES["colorBg"]["name"]==""){

echo $strSQL = "UPDATE `hyperriche_db`.`aboutV3` SET 
`bg` = '$newname', 
`contentAbout` = '$contentAbout', 
`topicAbout` = '$topicAbout' 
WHERE `aboutV3`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}
echo  $newname."<br>";
echo  $newname2;
?>
<meta http-equiv="refresh" content="3;URL=main.php" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>