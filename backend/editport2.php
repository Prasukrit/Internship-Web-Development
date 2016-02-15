<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<? 
include("config.php"); 

 $newname = date('Ymdhis') . "." . end(explode('.', $_FILES["bg"]["name"]));
                if (move_uploaded_file($_FILES["bg"]["tmp_name"], "./myfile/" . $newname)) {
                    
                }
 $newname2 = date('Ymdhis') . "." . end(explode('.', $_FILES["imgLogoContent"]["name"]));
                if (move_uploaded_file($_FILES["imgLogoContent"]["tmp_name"], "./logo/" . $newname2)) {
                  }
  
 $contentHomeSlide=$_POST[contentHomeSlide];
 $readmore=$_POST[readmore];
 $id=$_GET[id];
if($_FILES["bg"]["name"]!=""&&$_FILES["imgLogoContent"]["name"]!=""){

$strSQL = "UPDATE `hyperriche_db`.`portV3_2` SET 
`bg` = '$newname', 
`imgLogoContent` = '$newname2', 
`contentHomeSlide` = '$contentHomeSlide', 
`readmore` = '$readmore' 
WHERE `portV3_2`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["bg"]["name"]==""&&$_FILES["imgLogoContent"]["name"]!=""){

$strSQL = "UPDATE `hyperriche_db`.`portV3_2` SET 
`imgLogoContent` = '$newname2', 
`contentHomeSlide` = '$contentHomeSlide', 
`readmore` = '$readmore' 
WHERE `portV3_2`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["bg"]["name"]==""&&$_FILES["imgLogoContent"]["name"]==""){

$strSQL = "UPDATE `hyperriche_db`.`portV3_2` SET 
`contentHomeSlide` = '$contentHomeSlide', 
`readmore` = '$readmore' 
WHERE `portV3_2`.`id` = $id;";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
}

if($_FILES["bg"]["name"]!=""&&$_FILES["imgLogoContent"]["name"]==""){

$strSQL = "UPDATE `hyperriche_db`.`portV3_2` SET 
`bg` = '$newname', 
`contentHomeSlide` = '$contentHomeSlide', 
`readmore` = '$readmore' 
WHERE `portV3_2`.`id` = $id;";
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