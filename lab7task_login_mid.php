<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 10/04/2018
 * Time: 10:16 AM
 */

session_start();

//include ($_SERVER['DOCUMENT_ROOT'].'lab6Task1.php');
include "lab6Task1.php";
//include ("C:\inetpub\wwwroot\lab6Task1.php");

//set_include_path(get_include_path().PATH_SEPARATOR.'lab6Task1.php');


$name = $age = $gender = $tel = $email = $income = $comments = $image = $tax= $total = "";

$nameErr = $ageErr = $genderErr = $telErr = $incomeErr = $commentsErr = $imgErr = $totalErr = "";

formValidationText("name",$name,$nameErr);
formValidationNumber("age",$name,$nameErr);///numbers
formValidationText("gender",$name,$nameErr);
formValidationNumber("tel",$name,$nameErr);///numbers
formValidationText("email",$name,$nameErr);////email
formValidationNumber("income",$name,$nameErr);////numbers
formValidationText("comments",$name,$nameErr);
formValidationText("image",$name,$nameErr);///image

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
