<?php

 include("config.php");
 if ($_SESSION['loggedin'] != 1) {
        header("Location: index.php");
        exit;
 }
 
 $userName = $_SESSION['userName'];
 $sql = "SELECT * FROM userInfo WHERE userName='$userName'";
 $result = mysql_query($sql);
 $row = mysql_fetch_array($result);
  
  
 if($row["url"]==null)echo '<img src="blank_pp.png"  height="150" width="150" border="0" alt="Profile Picture not set">';
 else echo '<img src="ProfilePictures/'.$row["url"].'"  height="150" width="150" border="5" alt="Profile Picture not set">'; 
 echo '<form enctype="multipart/form-data" method="post" action="edit_profile.php">';
 echo '<input type="file" name="fileToUpload" /><br />';
 echo "<br/>";
 
 echo 'First Name : <input type="text" name="firstName" placeholder="your first name here" size="20" value="'.$row['firstName'].'"><br/>';
 echo 'Last Name : <input type="text" name="lastName" placeholder="your last name here" size="20" value="'.$row['lastName'].'"><br/>'; 
 echo 'Student ID : <input type="text" name="stID" placeholder="enter your student ID " size="20" value="'.$row['studentID'].'"><br/>';
 echo 'Email : <input type="text" name="email" placeholder="enter your email" size="20" value="'.$row['email'].'"><br/>';
 echo 'Password : <input type="password" name="password" placeholder="enter new password" size="20" value="'.$row['password'].'"><br/>';
 echo 'Country : <input type="text" name="country" placeholder="your country ? " size="20" value="'.$row['country'].'"><br/>';
 echo 'School : <input type="text" name="school" placeholder="your school ? " size="20" value="'.$row['school'].'"><br/>';
 echo 'College : <input type="text" name="college" placeholder="your college" size="20" value="'.$row['college'].'"><br/>'; 
 echo 'Batch : <input type="text" name="batch" placeholder="enter your iut batch " size="20" value="'.$row['batch'].'"><br/>';
 echo 'Contact : <input type="text" name="contact" placeholder="your contact number" size="20" value="'.$row['contact'].'"><br/>';
 echo 'UVa : <input type="text" name="uva" placeholder="total uva solved " size="20" value="'.$row['uva'].'"><br/>';
 
 echo '<br/><br/><input  class="mybutton2" type="submit" value="Edit As Specefied" />';
 echo '</form>';
 /*
  //PRINTING ALL THE INFORMATIONS
  echo '<table style="font-family:arial;font-size:20px;color:#000000;">';
  echo "<span>";
  echo "<tr><td><b>First Name : </b></td><td>".$row['firstName']."<br></td>".'</tr>';
  echo "<tr><td><b>Last Name   :</b></td><td>".$row['lastName']."<br></td>".'</tr>';
  echo "<tr><td><b>Username   : </b></td><td>".$row['userName']."<br></td>".'</tr>';
  echo "<tr><td><b>Student ID : </b></td><td>".$row['studentID']."<br></td>".'</tr>';
  echo "<tr><td><b>Email      : </b></td><td>".$row['email']."<br></td>".'</tr>';
  echo "<tr><td><b>Password   : </b></td><td>".$row['password']."<br></td>".'</tr>';
  if($row['country'] != NULL || $row['country'] != "")echo "<tr><td><b>Country :    </b></td><td>".$row['country']."<br></td>".'</tr>';
  if($row['school'] != NULL || $row['school'] != "")echo "<tr><td><b>School    :  </b></td><td>".$row['school']."<br></td>".'</tr>';
  if($row['college'] != NULL || $row['college'] != "")echo "<tr><td><b>College  :   </b></td><td>".$row['college']."<br></td>".'</tr>';
  if($row['batch'] != NULL || $row['batch'] != "")echo "<tr><td><b>IUT Batch   :</b></td><td>".$row['batch']."<br></td>".'</tr>';
  if($row['contact'] != NULL || $row['contact'] != "")echo "<tr><td><b>Contact No : </b></td><td>".$row['contact']."<br></td>".'</tr>';
  if($row['uva'] != NULL || $row['uva'] != "" || $row['uva'] != 0)echo "<tr><td><b>Solved UVa : </b></td><td>".$row['uva']."<br></td>".'</tr>';
  if($row['competition'] != NULL || $row['competition'] != "")echo "<tr><td><b>Competition : </b></td><td>".$row['competition']."<br></td>".'</tr>';

  
  echo "</span>";
  echo '</table>'
*/
?>