<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Backend login</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <style>
            h1{
                text-align: center;
            }
            .form-center{
                max-width: 330px;
                padding: 15px;
                margin: 0 auto;
            }
            input{
                border-radius: 0px;
            }
            .box{
                max-width: 70%;
                margin: 0 auto;
                margin-top: 5%;
                padding: 30px;
                border-radius: 0px 0px 0px 0px;
                -webkit-box-shadow: 3px 3px 8px 0px rgba(50, 50, 50, 0.53);
                -moz-box-shadow:    3px 3px 8px 0px rgba(50, 50, 50, 0.53);
                box-shadow:         3px 3px 8px 0px rgba(50, 50, 50, 0.53);
                background-color: white;
            }
            body{
                background-image: url("imgs/triangular_@2X.png");
            }
        </style>
    </head>

    <body>
        <div class="container">
            <div class="box">
                <form class="form-center" action="login.php" method="post">
                    <h1>:: Backend ::</h1>
                    <hr/>
                    <input type="text" name="user_login" class="form-control" placeholder="Username" required autofocus="" />
                    <input type="password" name="user_password" class="form-control" placeholder="Password" required/>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me" checked /> Remember me
                        </label>
                    </div>
                    <input class="btn btn-lg btn-primary btn-block" name="Submit" type="submit" />
                </form>
            </div>

        </div>

    </body>
</html>