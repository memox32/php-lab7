<?php
/**
 * Created by Memo.
 * Date: 10/04/2018
 */

//Starting the session
session_start();

//Getting value sent in the header at the end of the login_mid file

$total = $_COOKIE["income"]; //. "<br>"

//Display the information using cookies and sessions
echo "Your gross income is $" . $total . "<br>";

echo "Name: " . $_SESSION["name"] . "<br>";
//echo "<br>";
echo "Age: " . $_SESSION["age"]. "<br>";
echo "Gender: " . $_COOKIE["gender"]. "<br>";
echo "Tel: " . $_COOKIE["tel"]. "<br>";
echo "Email: " . $_COOKIE["email"]. "<br>";
echo "Comments: " . $_SESSION["comments"]. "<br>";

?>
