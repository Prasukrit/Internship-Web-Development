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
echo $link=$_POST[link];
echo $contentAbout=$_POST[contentAbout];

$strSQL = "INSERT INTO  `hyperriche_db`.`portV3` (
`id` ,
`pic` ,
`link` ,
`contentAbout` ,
`colorBg` ,
`position`
)
VALUES (
NULL ,  '$newname',  '$link',  '$contentAbout',  '$newname2',  ''
);";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>