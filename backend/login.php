<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Redirect page</title>
        <link rel="stylesheet" type="text/css" href="css/spinner.css" />
        
    </head>
    <body>
        <? 
        include("config.php"); 


        $user_login=$_POST[user_login];
        $user_password=$_POST[user_password];


        $strSQL = "SELECT * FROM user_staff";
        $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


        while($objResult = mysql_fetch_array($objQuery)){

        if($objResult["user_login"]==$user_login&&$objResult["user_password"]==$user_password){
        echo "";
        echo"<meta http-equiv=\"refresh\" content=\"1;URL=main.php\" />";}
        }

        ?>
        <div class="spinner" style="margin-top: 300px;">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>

    </body>
</html>