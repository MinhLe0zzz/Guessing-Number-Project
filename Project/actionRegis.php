<?php 
//assign values from index form to variables
$username= htmlspecialchars($_POST['username']);  
$password= htmlspecialchars($_POST['password']);


// if form is submitted display it
if (isset($_POST['submitC'])){
    $comfirmpass= htmlspecialchars($_POST['comfirmpass']);

    if ($password===$comfirmpass){
         // Instantiate a new object $teacher and set its properties  
        require_once('ConnectUsers.php');
        $user = new ConnectUsers($username, $password); 
        if($user->insert_user()===TRUE)
        echo 'User Created';
    }else
        echo "Passwords do not match!";



    echo"<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
} 
else if (isset($_POST['submitS'])){
    require_once 'formLogin.php';
    echo"<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
}
?>