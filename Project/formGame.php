<!DOCTYPE html>
<html>
    <head>
        <title>Kids Guesser Game</title>
    </head>
    <body>

        <h1> Kids Guesser Game </h1>
        <h2> Welcome! </h2>
        
        <form method="post" action="actionGame.php">
                    
            <p>The system will generate 5 random numbers soon<br />
            Select 5 different numbers between 0 to 12 to guess them
            </p>

            <?php
                for($i=0; $i<5; ++$i){
                    echo "<input id=\"num\" type=\"number\" name=\"number[$i]\" min=\"0\" max=\"12\" placeholder=\"0\" required=\"required\">";
                }
            ?>

            <br /><br /><br />

            <input type="submit" name="submit" value="Submit" />
            <input type="submit" name="submitS" value="Sign-Out" />

            

        </form>  
    </body>
</html>