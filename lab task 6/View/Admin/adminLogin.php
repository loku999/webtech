<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FundBD | Login as Admin</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
   <style>
    body {
background:  dimgrey; url("../assets/icon.png") no-repeat fixed center; 
}
</style>
  <!-- ...............................Header Start....................... -->
  
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="../index.php">Home</a>
            <a href="../loginType.php">Login</a>
            <a href="../regType.php">Registration</a>
            <a href="../aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <form method="post" action="../../View/Admin/dashBoard.php"> 
        <fieldset>
          <legend>Login as Admin</legend>
          
            <table align="center">
              <tr>
                  <td>User Name</td>
                  <td>:<input type="text" name="username" id="userName" onkeyup="userNameValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="userNameErorr">

                </td>
              </tr>
              <tr>
                  <td>Password </td>
                  <td>:<input type="password" name="password" id="password" onkeyup="passwordValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="passwordErorr">

                </td>
              </tr>
            </table>	
              <hr>
            <table align="center">
              <tr>
                <td><input type="checkbox" name="rememberMe" id="">Remember Me</td>
              </tr>
              <tr>
                <td>
                  <input type="submit" name="submit" value="Submit">
                  <a href="./adminForgatePass.php"> Forget password?</a>
                </td>
                
              </tr>
            
                
            </table>  
              
            
        </fieldset>
      </form>
    </fieldset>  
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>
 
    <!-- .................................Footer Close..................... -->


</body>
</html>