<!DOCTYPE html>
<html lang="en">
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
    width:230px;
    height:280px;
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
            <p>Login Form</p>
        </div>
        <form action="" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="password" placeholder="Paswword">
            <input type="submit" value="Login" name="login_button">
        </form>
    </div>
</body>
</html>