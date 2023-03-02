<?php 

// if form is submitted display it
if (isset($_POST['submit'])){

    $input_num = $_POST["number"];

    //Detecting input numbers (They have to be different)
    if($input_num[0] == $input_num[1] || $input_num[0] == $input_num[2] || $input_num[0] == $input_num[3] || $input_num[0] == $input_num[4]){
        echo "You CANNOT Input the same numbers, Please try again!";
        echo"<br /><br /><a href=\"formGame.php\">GO BACK TO THE GAME</a>";

    }else if($input_num[1] == $input_num[2] || $input_num[1] == $input_num[3] || $input_num[1] == $input_num[4]){
        echo "You CANNOT Input the same numbers, Please try again!";
        echo"<br /><br /><a href=\"formGame.php\">GO BACK TO THE GAME</a>";
    }else if($input_num[2] == $input_num[3] || $input_num[2] == $input_num[4]){
        echo "You CANNOT Input the same numbers, Please try again!";
        echo"<br /><br /><a href=\"formGame.php\">GO BACK TO THE GAME</a>";
    }else if($input_num[3] == $input_num[4]){
        echo "You CANNOT Input the same numbers, Please try again!";
        echo"<br /><br /><a href=\"formGame.php\">GO BACK TO THE GAME</a>";
    }else{
        echo "The 5 random numbers from the system: ";

        //The system generates 5 random numbers
        for ($i = 0; $i < 5; $i++){
            $random_num = rand(0,12);
            //echo $random_num. " ";
            $arr_Ran[$i] = $random_num; 
        }

        //Remove the duplicate random numbers
        $newarr = array_unique($arr_Ran);

        //count the size of array $newarr
        $count = count($newarr);
        //echo $count."<br />";

        //If the size of $newarr array is less than 5 this while loop will execute to fill the list of random numbers
        while($count < 5){
            $random_num = rand(0,12);
            array_push($newarr,$random_num);
            $newarr = array_unique($newarr);
            $count = count($newarr);
        }
        
        //Display each random numbers
        foreach($newarr as $num_ran => $elements){
            echo $elements." ";
        }
        

        echo "<br /><br />";

        //Display each input numbers from the user
        echo "The 5 input numbers from the user: ";
        foreach($input_num as $num_order => $element){
            echo $element." ";
        }

        //count how many guessing numbers of the user match with the randon numbers of the system
        $num_find = 0;

        foreach ($input_num as $oneDim => $key) {
            $num = $key;
            foreach ($newarr as $twoDim => $key2) {
                $num2 = $key2;
                if($num == $num2) {
                    $num_find++;
                }
                else{
                    continue;
                }
            }
        }

        //Message showing the gane result
        if ($num_find == 0){
            echo "<br /><br />You guessed none of the numbers we generated! 
            <br />You're an APPRENTICE guesser! Try again!";
        } else if($num_find > 0 && $num_find <5){
            echo "<br /><br />Result : You guessed $num_find of the numbers we generated! 
            <br />You're a GOOD guesser!";
        } else if($num_find == 5){
            echo "<br /><br />Result : You guessed all the numbers we generated! 
            <br />You're an EXCELLENT guesser!";
        }

        echo"<br /><br /><a href=\"formGame.php\">GO BACK TO THE GAME</a>";
    }

} 
else if (isset($_POST['submitS'])){
    //disconnect
    //if disconnect === TRUE Then go back to the login form
    require_once 'formLogin.php';
    echo"<br /><a href=\"formGame.php\">GO BACK TO THE GAME</a>";
}
?>