<?php
  require_once('../../Model/Admin/adminModel.php');
  $users =   getEmployeeinfo();
	$data = '<table border="1">
					<tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              
					</tr>';

          for($i=0; $i < count($users); $i++) {
		      $data .= "<tr>
                      <td>{$users[$i]['id']}</td>
                      <td>{$users[$i]['name']}</td>
                      <td>{$users[$i]['email']}</td>
                        
                   </tr>";
	}


	$data .= "</table>";

	echo $data;
?>