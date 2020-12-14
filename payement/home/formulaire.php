<? php



$Username = $POST['Username'];
$email = $POST['email'];
$password = $POST['password'];
$psuedo = $POST['psuedo'];
$rank =  $POST['rank'];
$role =  $POST['role'];
$acc_type = $POST['coach/player'];
$contact = $POST['contact'];
$champ1 = $POST['champ1'];
$champ1 = $POST['champ2'];
$champ1 = $POST['champ3'];
$champ1 = $POST['champ4'];
$description = $POST['d1'];

mysql_connect("localhost",user,"admin");
mysql_select_db("login");

$result = mysql_query("INSERT INTO user (username,email,password,psuedo,rank,role,acc_type,contact,champ1,champ2,champ3,champ4,description) values ('$username','$email','$password','$psuedo','$rank','$role','$acc_type','$contact','$champ1','$champ2','$champ3','$champ4','$description')") or die("failed to query database".mysql_error());*/

/*$Username = filter_input(INPUT_POST, 'Username');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
$psuedo = filter_input(INPUT_POST, 'psuedo');
$rank = filter_input(INPUT_POST, 'rank');
$role = filter_input(INPUT_POST, 'role');
$acc_type = filter_input(INPUT_POST, 'coach/player');
$contact = filter_input(INPUT_POST, 'contact');
$champ1 = filter_input(INPUT_POST, 'champ1');
$champ2 = filter_input(INPUT_POST, 'champ2');
$champ3 = filter_input(INPUT_POST, 'champ3');
$champ4 = filter_input(INPUT_POST, 'champ4');
$description = filter_input(INPUT_POST, 'd1');


if (!empty($Username)) {
	if (!empty($email)){
		if (!empty($password)){
			if (!empty($psuedo)){
				if (!empty($rank)){
					if (!empty($role)){
						if (!empty($acc_type)){
							if (!empty($contact)){
								if (!empty($champ1)){
									if (!empty($champ2)){
										if (!empty($champ3)){
											if (!empty($champ4)){
												if (!empty($description)){
    $host = "localhost";
						$dbusername = "admin";
						$dbpassword="admin";
						$dnname = "lolprotn";

						//create connection
						$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);


						
						if (mysqli_connect_error()) {
							die('Connect Error (' . mysqli_connect_errno() .')' . mysqli_connect_error());
					}
						else{
							 $sql = "INSERT INTO user (username,email,password,psuedo,rank,role,acc_type,contact,champ1,champ2,champ3,champ4,description) values ('$username','$email','$password','$psuedo','$rank','$role','$acc_type','$contact','$champ1','$champ2','$champ3','$champ4','$description')";
						if($conn-> query($sql)){
							echo"New record is inserted sucessfully";
						}
						else{ echo "Error:" . $sql . "<br>" . $conn->error; }
						$conn->close();

						}
					
					
					
					
						      }
                             else{echo"Description should not be empty"; die();}

						     }
                             else{echo"Champion 4 should not be empty"; die();}

						    }
                            else{echo"Champion 3 should not be empty"; die();}

						   }
                           else{echo"Champion2 should not be empty"; die();}

						  }
        

				       }
				       else{echo"Contact should not be empty"; die();}

                          }
					    else{ echo"account type should not be empty"; die();}
				       }
					
					else{ echo"role should not be empty"; die();}
					}
					else{ echo"rank should not be empty"; die();}
				}
				else{ echo"psuedo number should not be empty"; die();}
			}
			else{  echo"Password should not be empty"; die();}
		}
		else {echo"Password should not be empty"; die();}
	}
	else {echo"email should not be empty"; die();}
}
else{echo"Username should not be empty"; die();}*/

?>