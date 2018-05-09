<?php
/**
 * Created by Memo.
 * Date: 10/04/2018
 * Time: 10:16 AM
 */

//Starting the session
session_start();

//Getting value sent in the header at the end of the login_mid file
$total = $_GET['total'];

$total = number_format($total,2);

//Display the information using cookies and sessions
echo "Your gross income is $" . $total . "<br>";

echo "Name: " . $_SESSION["name"] . "<br>";
//echo "<br>";
echo "Age: " . $_SESSION["age"]. "<br>";
echo "Gender: " . $_COOKIE["gender"]. "<br>";
echo "Tel: " . $_COOKIE["tel"]. "<br>";
echo "Email: " . $_COOKIE["income"]. "<br>"; //If you use () you get: Fatal error: Function name must be a string
echo "Comments: " . $_SESSION["comments"]. "<br>";

?>
