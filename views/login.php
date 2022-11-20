
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
                            <h3 style="font-size:17px;" align="center"><strong><i class="glyphicon glyphicon-log-in"></i> Login</strong></h3>
                        </div>
                        
                        <div class="panel-body">
                            <fieldset>
                                <div class="form-group" align="center">
                                    <input name="user" placeholder="Username" class="form-control" placeholder="Username" id="user" type="text"/>
                                </div>
                                <div class="form-group" align="center">
                                    <input name="pass" placeholder="Password" class="form-control" placeholder="Password" id="pass" type="password"/>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <hr/>
                                <p align="center">
                                    <input type="submit" name="sub" value="Login" class="btn btn-primary" id="login" ><i class="glyphicon glyphicon-log-in"></i></input>
                                </p>
                                <hr/>
                                <center>
                                    <p style="color: #888; margin: 0px 0px 0px 0px;">Don't have an account yet?</p>	
                                    <a style="text-decoration:none;" href="signin.php">Create an account</a> 
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