<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Main page</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body><? include("menu.php"); 
        include("config.php"); 
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">หน้าหลัก</h3>
                        </div>
                        <div class="panel-body">
                            <form action="addmain.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="bg">รูป BG ผลงาน</label>
                                    <input type="file" name="bg" />
                                    <p class="help-block">ex. file .jpg .png .gif </p>
                                </div>
                                <div class="form-group">
                                    <label for="logo">โลโก้ด้านใน</label>
                                    <input type="file" name="logo" />
                                    <p class="help-block">ex. file .jpg .png .gif </p>
                                </div>
                                <div class="form-group">
                                    <label>
                                        เนื้อหา
                                        <textarea name="contentHomeSlide" class="form-control" cols="50" rows="5"></textarea>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="readmore">อ่านต่อ หรือ ลิงค์</label>
                                    <input type="text" name="readmore" size="40" />

                                </div>
                                <input type="submit" class="btn btn-default" name="submit" />
                            </form>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <?
                    $strSQL = "SELECT * FROM  `homeV3`  ";
                    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                    while($objResult = mysql_fetch_array($objQuery)){
                    echo $objResult[readmore]." <a href=\"edit_main.php?id=$objResult[id]\">แก้ไข</a><br>";
                    }
                    ?>
                </div>

            </div>
        </div>


    </body>
</html>