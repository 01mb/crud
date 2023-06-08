<?php
require('connection.php');

if (isset($_POST['signUP_button'])) {
   $name = $_POST['name'];
   $lastname = $_POST['lastName'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmpassword = $_POST['confirmPassword'];

   if (empty($name) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)) {
      echo '<p style="color: red;position: absolute;top: 74%;left: 44.5%;z-index: 1;font-family: Arial">Please fill in all the fields</p>';
   } 
   else if ($password != $confirmpassword) {
      echo '<p style="color: red;position: absolute;top: 74%;left: 44.5%;z-index: 1;font-family: Arial">Password do not match</p>';
   } 
   else {
      $sql = "INSERT INTO crudtable (name, lastname, email, password) VALUES ('$name', '$lastname', '$email', '$password')";

      if ($conn->query($sql) === TRUE) {
         echo "Record inserted successfully";
      } else {
         echo "Error inserting record: " . $conn->error;
      }
   
      header("Location: success.php");
      exit;
   }
}

$conn->close();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<style>
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
        
    }

    body{
        background:rgb(83,15,148);
    }

   .form{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    width:300px;
    height:400px;
    background:white;
    border-radius:3px;
   }

   .form input{
    border:1px solid rgb(80,80,80,0.4);
    display:block;
    width:80%;
    transform:translateY(50px);
    margin:15px auto 0px auto;
    height:30px;
    text-align:center;
    box-shadow:1px 1px 2px rgba(100,100,100,0.3), 
    -1px -1px 2px rgba(100,100,100,0.3);
    border-radius:2px;
   }

   input:focus{
    outline:none;
   }

   .form input[type="submit"]{
    background:rgb(83,15,148);
    width:77%;
    color:white;
    font-size:17px;
    border:none;
    margin-top:30px;
    border-radius:5px;
   }

::placeholder{
    position: relative;
    left:20px;
    text-align:justify;
}

.title{
    transform:translate(30px,40px);
}

.title p {
    font-family: Arial, Helvetica, sans-serif;
    font-size:1.2rem;
    font-weight:600;
}

</style>
<body>

    <div class="form">
        <div class="title">
            <p>Sign Up Form</p>
        </div>
        <form action="" method="post">
            <input type="text" id="name" name="name" placeholder="Name">
            <input type="text" id="lastname" name="lastName" placeholder="Last Name">
            <input type="text" id="email" name="email" placeholder="Email">
            <input type="text" id="password" name="password" placeholder="Paswword">
            <input type="text" name="confirmPassword" placeholder="Confrim Password">
            <input type="submit" value="Sign Up" name="signUP_button">
        </form>
    </div>
</body>

