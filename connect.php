
<?php
   $firstName=isset($_POST['firstName'])? $_POST['firstName']: '';
  $lastName=isset($_POST['lastName'])? $_POST['lastName']: '';
   $gender=isset($_POST['gender'])? $_POST['gender']: '';
  $email=isset($_POST['email'])? $_POST['email']: '';
  $phone=isset($_POST['phone'])? $_POST['phone']: '';
  $password=isset($_POST['password'])? $_POST['password']: '';
   
   $conn=new mysqli('localhost','root','','students');
   if($conn->connect_error){
	   die('connection failed : '.$conn->connect_error);
   }
   else{
	   $stmt=$conn->prepare("insert into details(firstName,lastName,gender,email,phone,password)values(?,?,?,?,?,?)");
	   $stmt->bind_param("ssssis",$firstName,$lastName,$gender,$email,$phone,$password);
	   $stmt->execute();
	   echo "registration successfully...";
	   $stmt->close();
	   $conn->close();
   }
  

 
?>