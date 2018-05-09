<?php
/**
 * Created by Memo.
 * Date: 10/04/2018
 */

//Starting the session
session_start();

//Declaration of variables
$name = $age = $gender = $tel = $email = $income = $comments = $image = $tax= $total = "";
$nameErr = $ageErr = $genderErr = $telErr = $emailErr = $incomeErr = $commentsErr = $imgErr = $totalErr = "";
$target_dir = "upload\\";
$tax= .16;

//Function for set cookies and session variables
function setCustomInfo(){

    $_SESSION["name"] = $_POST["name"];
    $_SESSION["age"] = $_POST["age"];
    setcookie("gender",  $_POST["gender"]);
    setcookie("tel", $_POST["tel"]);
    setcookie("email", $_POST["email"]);
    //setcookie("income", $_POST["income"]);
    $_SESSION["comments"] = $_POST["comments"];
}

setCustomInfo();

if(!empty($_POST["income"])){
    $income = $_POST["income"];
}

//In this case is better to set the cookie after getting the post value
$total = $income - ($income * $tax);
$total = number_format($total,2);
setcookie("income", $total);

if($_POST['submit']){
//This approach can be used to pass the value in the header, for instance if the cookie "income" is not set
//    header("location:lab7task_login_display.php?total=".urlencode($total));
    header("location:lab7task_login_display.php");
}
