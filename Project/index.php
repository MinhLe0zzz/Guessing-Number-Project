<?php
    if (isset($_POST['submit1'])) //Condition Go inside this part only when you submit the form or click on the input button name ="submit"
	{
        require_once 'formLogin.php';
        echo "<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
	}
    elseif (isset($_POST['submit2']))
    {
        require_once 'formRegis.php';
        echo "<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
    }
    elseif (isset($_POST['submit3']))
    {
        require_once 'formPassw.php';
        echo "<br /><a href=\"index.php\">GO BACK TO THE HOME PAGE</a>";
    }
    elseif (isset($_POST['submit4']))
    {
        require_once 'formGame.php';
    }
    else
    {
        echo "<h1>Final Project</h1>";
        echo "<form id=\"form\" method=\"post\" action=\"index.php\" >"; //Beginning form tag

		    // Submit button to send form		
		    echo "<input id=\"inputsubmit1\" type=\"submit\" name=\"submit1\" value=\"Login\" /><br /><br />";
            echo "<input id=\"inputsubmit2\" type=\"submit\" name=\"submit2\" value=\"Registration\" /><br /><br />";
            echo "<input id=\"inputsubmit3\" type=\"submit\" name=\"submit3\" value=\"Password modification\" /><br /><br />";
            echo "<input id=\"inputsubmit4\" type=\"submit\" name=\"submit4\" value=\"Guesser game\" /><br /><br />";
	    echo "</form>"; //Closing form tag
	    echo "<br />";
    }
?>