<?php

include('conn.php');   

if(isset($_POST['username'])){
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];

   // $sql = "SELECT * FROM loginpage WHERE username='".$username1."'AND password='".$password1."' limit 1";

    $result = mysqli_query($conn,"SELECT * FROM loginpage WHERE username='".$username1."'AND password='".$password1."' limit 1");

    if(mysqli_num_rows($result)==1){
        echo '<script type="text/JavaScript"> 
        alert("Loading to the page..");;
     </script>';
        header('Location: index.php');
    }
    else{
       
        echo '<script type="text/JavaScript"> 
        alert("Hello! Wrong password or username!");;
     </script>';
                
        
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<body>
    <div>
        <form method ="POST" action='#'>
           <label> Username </label> <input type="text" name="username" >
           <label> Password </label> <input type="password" name="password" >
           <input type="submit" name="submit"> 
        </form>    
        
    </div>

	
</body>
</html>