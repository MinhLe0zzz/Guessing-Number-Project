<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
    </head>
    <body>

        <h1> Welcome to our Login Form </h1>
        
        <form method="post" action="actionLog.php">
                    
            <p>Username: </p>
            <input type="text" name="username" required />
            <br />

            <p>Password: </p>
            <input type="password" name="password" required />
            <br /><br /><br />

            <input type="submit" name="submitC" value="Connect" />
            <input type="submit" name="submitS" value="Sign-Up" />

        </form>  
    </body>
</html>