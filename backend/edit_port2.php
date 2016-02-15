<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Untitled Document</title>
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
                            <p>
                                <?
                                $strSQL = "SELECT * FROM  `portV3_2` where id=$_GET[id]  ";
                                $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                                while($objResult = mysql_fetch_array($objQuery)){
                                echo $objResult[readmore]." <a href=\"port2.php?id=$objResult[id]\">แก้ไข</a><br>";

                                ?>
                            </p>
                            <form action="editport2.php?id=<?= $objResult[id]; ?>" method="post" enctype="multipart/form-data">

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
                                        <textarea name="contentHomeSlide" class="form-control" cols="50" rows="5"><?= $objResult[contentHomeSlide]; ?></textarea>
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label for="readmore">อ่านต่อ หรือ ลิงค์</label>
                                    <input type="text" name="readmore" size="40" value="<?= $objResult[readmore]; ?>" />

                                </div>
                                <input name="id" type="hidden" value="<?= $objResult[id]; ?>" />
                                <input type="submit" class="btn btn-default" name="submit" />
                            </form>

                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <?
                    $strSQL = "SELECT * FROM  `portV3_2`  ";
                    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
                    while($objResult = mysql_fetch_array($objQuery)){
                    echo $objResult[readmore]." <a href=\"edit_port2.php?id=$objResult[id]\">แก้ไข</a><br>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <? } ?>

    </body>
</html>