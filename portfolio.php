<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html class="no-js" lang="en">
<? include("backend/config.php"); 
?>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title> :: Hyper rich enterprise Co.,tld. :: </title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="css/screen.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="js/vendor/modernizr.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/easySlider1.7.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){	
			$("#slider").easySlider({
				auto: true, 
				continuous: true
			});
		});	
	</script>
</head>

<body >

<div id="content">
	
		<div id="slider">
			<ul>	<?
			
			$strSQL = "SELECT * FROM  `portV3_2`  ";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
while($objResult = mysql_fetch_array($objQuery)){
 ?>		<li>	
				<img src="backend/myfile/<?=$objResult[bg]; ?>" class="screen320" />
                	<div id="contentSlide">
                    <div id="imgLogoContent"><img src="backend/logo/<?=$objResult[imgLogoContent]; ?>" /></div>
                    <div id="contentHomeSlide"><?=$objResult[contentHomeSlide]; ?></div>
                      <div id="readmore"><a href="<?=$objResult[readmore]; ?>" target="_blank"><img src="images/readMore.png" /></a></div>
                      </div>
                </li>
                <?
}

?>
			</ul>
		</div>
</div>


<div class="wrapper2" >
    <? include("inc_head.php"); ?>
</div>
</div>
</body>
</html>
