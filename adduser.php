<?php
include"head.php";
include"header.php";
include"leftmenu.php";
?>
<script type="text/javascript">

    function validate_form()
    {
        var firstname = document.getElementById("firstname").value;
        var middlename = document.getElementById("middlename").value;        
        var lastname = document.getElementById("lastname").value;
        var mobileno = document.getElementById("mobileno").value;
         var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;
		
       
        var validchar = /^[A-Z a-z]+$/;
        
        if(firstname=='')
        {
            alert("Please Enter First Name.");
            return false;    
        }
        else if(!validchar.test(firstname))
        {
        alert("First name should not be numeric.");
        return false;
        }
        if(middlename=='')
        {
            alert("Please Enter Middle Name.");
            return false;    
        }
        else if(!validchar.test(middlename))
        {
        alert("Middle name should not be numeric.");
        return false;
        }
        if(lastname=='')
        {
            alert("Please Enter Last Name.");
            return false;    
        }
        else if(!validchar.test(lastname))
        {
        alert("Last name should not be numeric.");
        return false;
        }
       
        else if(mobileno=='')
        {
            alert("Please Enter Mobile Number.");
            return false;  
        }
        else if(isNaN(mobileno))
        {
            alert("Mobile Number should be numeric.");
            return false;  
        }
        else if(checkInternationalPhone(mobileno)==false)
        {
            alert("Please Enter a Valid Phone Number");
    		return false;
            
        }
        if(username=='')
        {
            alert("Please Enter username.");
            return false;    
        }
        else if(!validchar.test(username))
        {
        alert("username should not be numeric.");
        return false;
        }   
        else if(password=='')
        {
            alert("Please enter password.");
            return false;
        }
        
        
		
    }
    
   
  
    function checkInternationalPhone(strPhone){
        var bracket=3;
        strPhone=trim(strPhone);
        if(strPhone.indexOf("+")>1) return false;
        if(strPhone.indexOf("-")!=-1)bracket=bracket+1;
        if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false;
        var brchr=strPhone.indexOf("(");
        if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false;
        if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false;
        s=stripCharsInBag(strPhone,validWorldPhoneChars);
        return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
    }
    
    </script>
    
    <div class="content-wrapper">
        <section class="content-header">
          <h1>
            Add User
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add User</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">

              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Add User</h3>
                </div>
                <div class="box-body">
                    <form method="post" id="user_form" onsubmit="return validate_form();" >
                        <div class="row">
                            
                            <div class="form-group col-md-3">
                    			<label class="col-md-12 ">First Name</label>
                    			<div class="col-md-12">
                    				<input type="text" class="form-control" name="firstname" id="firstname" value=""/>
                                </div>
                    		</div>
                            
                            <div class="form-group col-md-3">
                    			<label class="col-md-12 ">Middle Name</label>
                    			<div class="col-md-12">
                    				<input type="text" class="form-control" name="middlename" id="middlename" value=""/>
                                </div>
                    		</div>
                            
                            <div class="form-group col-md-3">
                    			<label class="col-md-12 ">Last Name</label>
                    			<div class="col-md-12">
                    				<input type="text" class="form-control" name="lastname" id="lastname" value=""/>
                                </div>
                    		</div>
                            
                             <div class="form-group col-md-3">
                    			<label class="col-md-12 ">Mobile No.</label>
                    			<div class="col-md-12">
                    				<input type="text" class="form-control" name="mobileno" id="mobileno" value=""/>
                                </div>
                    		</div>
                            <div class="form-group col-md-3">
                    			<label class="col-md-12 ">City</label>
                    			<div class="col-md-12">
                                    <select name="city" class="form-control" id="city">
                                        <option value="">Select City</option>
                                        <option value="1">Nipani</option>
                                        <option value="2">Kolhapur</option>
                                    </select>
                                </div>
                    		</div>
                            <div class="form-group col-md-3">
                    			<label class="col-md-12 ">Address</label>
                    			<div class="col-md-12">
                    				<input type="text" class="form-control" name="address" id="address" value=""/>
                                </div></div>
                                 <div class="form-group col-md-3">
                                <label class="col-md-12 ">User Name</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="username" id="username" value=""/>
                                </div>
                            </div>
                            
                         <div class="form-group col-md-3">
                                <label class="col-md-12 ">Password</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password" id="password" value=""/>
                                </div>
                            </div>
                    		</div>
                                                       
                                       
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div  class="col-md-12">
                                    <input type="hidden" name="id" id="id" value="" />
                                    <input type="submit" name="sub" value="Save User" class="btn btn-block bg-purple pull-left" style="width:150px;margin-right: 10px;" />
                                    <a href="manageusers.php" class="btn btn-block bg-purple pull-left" style="width:150px;margin-top: 0;">Cancel</a>
                                </div>
                            </div>
                        </div>
                        
                    </form>
                    
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
	  
	  
<?php
include"footer.php";
?>
