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
echo $topicAbout=$_POST[topicAbout];
echo $contentAbout=$_POST[contentAbout];

$strSQL = "INSERT INTO  `hyperriche_db`.`aboutV3` (
`id` ,
`bg` ,
`topicAbout` ,
`contentAbout` ,
`colorBg` ,
`position`
)
VALUES (
NULL ,  '$newname',  '$topicAbout',  '$contentAbout',  '$newname2',  ''
);";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>