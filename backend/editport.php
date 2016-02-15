<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? 
include("config.php"); 

 $newname = date('Ymdhis') . "." . end(explode('.', $_FILES["pic"]["name"]));
                if (move_uploaded_file($_FILES["pic"]["tmp_name"], "./myfile/" . $newname)) {
                    
                }
 $newname2 = date('Ymdhis') . "." . end(explode('.', $_FILES["colorBg"]["name"]));
                if (move_uploaded_file($_FILES["colorBg"]["tmp_name"], "./logo/" . $newname2)) {
                  }
  
 $link=$_POST[link];
 $contentAbout=$_POST[contentAbout];
 $id=$_GET[id];
if($_FILES["pic"]["name"]!=""&&$_FILES["colorBg"]["name"]!=""){

echo $strSQL = "UPDATE `hyperriche_db`.`portV3` SET 
`pic` = '$newname', 
`link` = '$link', 
`contentAbout` = '$contentAbout', 
`colorBg` = '$newname2' 
WHERE `portV3`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["pic"]["name"]==""&&$_FILES["colorBg"]["name"]!=""){

echo $strSQL = "UPDATE `hyperriche_db`.`portV3` SET 
`link` = '$link', 
`contentAbout` = '$contentAbout', 
`colorBg` = '$newname2' 
WHERE `portV3`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["pic"]["name"]==""&&$_FILES["colorBg"]["name"]==""){

echo $strSQL = "UPDATE `hyperriche_db`.`portV3` SET 
`contentAbout` = '$contentAbout', 
`link` = ' $link' 
WHERE `portV3`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["pic"]["name"]!=""&&$_FILES["colorBg"]["name"]==""){

echo $strSQL = "UPDATE `hyperriche_db`.`portV3` SET 
`pic` = '$newname', 
`contentAbout` = '$contentAbout', 
`link` = ' $link' 
WHERE `portV3`.`id` = $id;";
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