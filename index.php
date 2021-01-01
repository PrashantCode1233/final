<?php
include "head.php";
?>
<style>.form-control{height: 34px;}</style>
    <script type="text/javascript">
		function validate_form()
		{
		   
			
            var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			
            if(username=='')
			{
				alert("Please Enter username.");
				return false;    
			}	
			else if(password=='')
			{
				alert("Please enter password.");
				return false;
				
			}
		}
    </script>
<body class="login-page" style="background:#3C8DBC none repeat scroll 0 0 !important">
    <div class="login-box">
        <div class="login-logo">
            <b><font color="#fff">Emergency</font></b>
        </div>
        <div class="login-box-body">
            <form id="login_form" action="home.php" method="post" onsubmit="return validate_form();">
                
                <div class="form-group has-feedback">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-block bg-purple btn-flat pull-right">Login <i class="fa fa-sign-in"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    
    
  </body>