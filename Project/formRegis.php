<!DOCTYPE html>
<html>
    <head>
        <title>Registration Form</title>
    </head>
    <body>

        <h1> Welcome to our Registration Form </h1>
        
        <form method="post" action="actionRegis.php">
                    
            <p>Username: </p>
            <input type="text" name="username" required />
            <br />

            <p>Password: </p>
            <input type="password" name="password" required />
            <br />

            <p>Confirm Password: </p>
            <input type="password" name="comfirmpass" required />
            <br /><br /><br />

            <input type="submit" name="submitC" value="Create" />
            <input type="submit" name="submitS" value="Sign-In" />

        </form>  
    </body>
</html>