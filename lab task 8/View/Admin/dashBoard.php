<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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
            <a href="./dashBoard.php">Dashboard</a>&nbsp;
            <a href="./adminProfile.php">Profile</a>&nbsp;
            <a href="./notification.php">Notification</a>&nbsp;
          </td>
        </tr>
      </table>
            <table align="center">
                <tr>
                <td><h2>Hi:</h2>  </td>
                  <td><?php echo'lokmanhossain@gmail.com';?></td> 
                </tr>
              </table>
      <table align="right">
        <tr>
          <td>
            <a href="../../controller/logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Account</h3>
            <hr>
            <ul>
              <li><a href="./dashBoard.php">Dashboard</a></li>
              <li><a href="./adminProfile.php">View Profile</a></li>
              <li><a href="./adminUpdateProfile.php">Edit Profile</a></li>
              <li><a href="./adminChangePic.php">Change Profile Picture</a></li>
              <li><a href="./adminChangePassword.php">Change Password</a></li>
              <li><a href="./donateToApplicant.php">Donate</a></li>
               
              <li><a href="./applicantList.php">Applicant List</a></li>
              <li><a href="./donnerList.php">Donner List</a></li>
              <li><a href="./transctionDetails.php">Transaction Details</a></li>
              <li><a href="./postNotice.php">Post A Notice</a></li>
              <li><a href="./notice.php">Updated Notice</a></li>

            </ul>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>