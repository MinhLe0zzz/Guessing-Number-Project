<!DOCTYPE html>
<html>
    <head>
        <title>Password modification Form</title>
    </head>
    <body>

        <h1> Welcome to our Password modification Form </h1>
        
        <form method="post" action="actionPassw.php">
                    
            <p>Existing Username: </p>
            <input type="text" name="existname" required />
            <br />

            <p>New Password: </p>
            <input type="password" name="newpass" required />
            <br />

            <p>Confirm New Password: </p>
            <input type="password" name="comfirmpass" required />
            <br /><br /><br />

            <input type="submit" name="submitM" value="Modify" />
            <input type="submit" name="submitS" value="Sign-In" />

        </form>  
    </body>
</html>