<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 10/04/2018
 * Time: 10:16 AM
 */
include "lab6Task1.php";
session_start();
$name = $age = $gender = $tel = $email = $income = $comments = $image = $tax= $total = $nameErr = "";


$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$income = $_POST["income"];
$comments = $_POST["comments"];
$image = $_POST["image"];
$tax= .16;
//$total ="";

function setCustomInfo(){

    $SESSION["name"] = "meme";
    $SESSION["age"] = "28";
    setcookie("gender",  "male");
    setcookie("tel", 3030);
    setcookie("income", $_POST["income"]);
    $SESSION["comments"] = $comments = $_POST["comments"];
}

($income)> 0 ? $total = ($income * $tax) - $income: "Write the income";

header("location:lab7task_login_display.php?total=".urlencode($total));