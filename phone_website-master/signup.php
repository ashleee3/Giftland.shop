
<

 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="styles.css">

  <div class="container">
    <div class="row">
        
        <form action="authenticate.php" method="post">
            
            <div class="col-sm-12 offset-4 ">


                <h3> Sign up</h3>

                <label for class="firstname"><b>First name</b></label>
                <input type="text" value=""  name= 'firstname'class="form-control2">

                <label for class="firstname"><b>Last name</b></label>
                <input type="text" value=""name= 'lastname' class="form-control2">

                <label for class="firstname"><b>Phone Number</b></label>
                <input type="text" value="" name= 'phonenumber' class="form-control2">


                <label for class="firstname"><b>Email</b></label>
                <input type="email" value="" name= 'email' class="form-control2"> 


                <label for class="firstname"><b>County</b></label>
                <input type="text" value="" name= 'county' class="form-control2">

                <label for class="firstname"><b>Password</b></label>
                <input type="password" name= 'password' value=""class="form-control2">

                <label for class="firstname"><b>Confirm password</b></label>
                <input type="password" name= 'confirmpassword' value=""class="form-control2"><br/>

                <input type="submit" value="Sign up" name='submit' class=" btn btn-primary"><br/>

               
               <label for="Remember me"> <input type="checkbox"  checked="checked" style="margin-left: 70px;"> Remember Me</label> 
               

              


            </div>
        </form>
    </div>
    
 </div>

?>

