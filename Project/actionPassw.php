<?php 
//assign values from index form to variables
$username= htmlspecialchars($_POST['existname']);  
$password= htmlspecialchars($_POST['newpass']);
$comfirmpass= htmlspecialchars($_POST['comfirmpass']);

    // if form is submitted display it
    if (isset($_POST['submitM'])){
        

        if ($password===$comfirmpass){
            // Instantiate a new object $teacher and set its properties  
            require_once('ConnectUsers.php');
            $user = new ConnectUsers($username, $password); 
            if($user->update_user()===TRUE)
                echo"<br />User password updated!";
        }else
            echo "Passwords do not match!";


        

        echo"<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
    } 
    else if (isset($_POST['submitS'])){
        require_once 'formLogin.php';
        echo"<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
    }
?>