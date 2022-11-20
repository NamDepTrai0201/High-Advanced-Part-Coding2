
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login System | Main page</title>
        <style>  
            body{
            font-family: "gotham-pro";
            direction: ltr;
            }
            .btn-primary{
                margin: 0px auto;
                padding:15px 45px;
                font-size:17px;
                border:1px solid #ddd;
                background:none;
                color:black;
                transition:.5s ease;
                border-radius:0px;
            }  
            fieldset{
                margin-left: 30%;
                margin-right: 30%;
            }
            fieldset input{
                width: 100%;
                font-family: "gotham-pro";
             }       
        </style>
        
            </head>
    <body>
        <form action="" method="post">
        <div class="container-fluid" style="margin-top: 10px;">
            <div class="row">
                        <div class="panel-heading" style="background:#fdfdfd; color:#444; font-size:16px;">
                            <h3 style="font-size:17px;" align="center"><strong><i class="glyphicon glyphicon-log-in"></i> SignIn</strong></h3>
                        </div>
                        
                        <div class="panel-body">
                            <fieldset>
                                <div class="form-group" align="center">
                                    <input name="name" placeholder="Name" class="form-control" id="name" type="text"/>
                                </div>
                                <div class="form-group" align="center">
                                    <input name="user" placeholder="Username" class="form-control" id="user" type="text"/>
                                </div>
                                <div class="form-group" align="center">
                                    <input name="user-re" placeholder="Username Again" class="form-control" id="user-re" type="text"/>
                                </div>
                                <div class="form-group" align="center">
                                    <input name="pass" placeholder="Password" class="form-control" id="pass" type="password"/>
                                </div>
                                <div class="form-group" align="center">
                                    <input name="pass-re" placeholder="Password Again" class="form-control" id="pass-re" type="password"/>
                                </div>

                                <p align="center">
                                    <input type="submit" name="sub" value="Signin" class="btn btn-primary" id="login" ><i class="glyphicon glyphicon-log-in"></i></input>
                                </p>
                                <hr/>
                                <center>
                                    <p style="color: #888; margin: 0px 0px 0px 0px;">Already have an account?</p> 
                                    <a style="text-decoration:none;" href="login.php">Click to login</a> 
                                    <div id="response"></div>
                                </center>
                            </fieldset>
                         </div>
                   
            </div>
        </div>
        </form>
    <br/>
    <footer class="container-fluid" style="background:#444; font-size:19px; color:#fff;">
            <p align="center" style="padding-top:5px;">Copyright &copy; 2022</p>
            <p align="center">MindX Web Advance</p>
        </footer>
    
    
    </body>
</html>