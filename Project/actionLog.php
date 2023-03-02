
<?php 
//assign values from index form to variables
$username= htmlspecialchars($_POST['username']);  
$password= htmlspecialchars($_POST['password']);





// if form is submitted display it submitC - Login
if (isset($_POST['submitC'])){
    // Instantiate a new object $teacher and set its properties  
    require_once('ConnectUsers.php');
    $user = new ConnectUsers($username, $password); 


    // Instantiate the method loigin() with the object $user 

    if($user->login()===TRUE)        
        require_once 'formGame.php';
    

    echo"<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
} 
//submitS - Signup - Registration form
else if (isset($_POST['submitS'])){
    require_once 'formRegis.php';
    echo"<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
}
?>