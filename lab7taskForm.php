<?php
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 10/04/2018
 * Time: 10:16 AM
 */

//session_start();
//$valid = false;
//include ($_SERVER['DOCUMENT_ROOT'].'lab6Task1.php');
include "functions.php";

$name = $age = $gender = $tel = $email = $income = $comments = $image = $tax= $total = "";

$nameErr = $ageErr = $genderErr = $telErr = $emailErr = $incomeErr = $commentsErr = $imgErr = $totalErr = "";

formValidationText("name",$name,$nameErr);
formValidationNumber("age",$age,$ageErr);///numbers
formValidationText("gender",$gender,$genderErr);////radio
formValidationNumber("tel",$tel,$telErr);///numbers
formValidationEmail("email",$email,$emailErr);////email
formValidationNumber("income",$income,$incomeErr);////numbers
formValidationText("comments",$comments,$commentsErr);
formValidationText("image",$image,$imgErr);///image

?>

<form action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype = "multipart/form-data" target="_self">
    <?php  $valid = true?>
    <style type="text/css"> .error{color:red;}</style>
    Please enter the following information:<br>
    <span style = 'color : red'> Required fields *</span><br><br>
    Name: <input type="text" name = "name" value = "<?php echo $name;?>">
    <span class="error">*</span>
    <?php  if(($nameErr == 1 ? trigger_error("Name is required") : ""))$valid = false; ?>
    <?php if(($nameErr == 2 ? trigger_error("Only letters and white space allowed") : ""))$valid = false;?><br><br>
    Age: <input type="text" name="age" value = "<?php echo $age;?>">
    <span class="error">*</span>
    <?php  if(($ageErr == 1 ? trigger_error("Age is required") : ""))$valid = false;?>
    <?php if(($ageErr == 2 ? trigger_error("Only numbers allowed") : ""))$valid = false;?><br><br>
    Gender: <input type="radio" name="gender" value="male" <?php if (isset($gender) && $gender == "male") echo "checked";?>>Male
    <input type="radio" name="gender" value="female" <?php if (isset($gender) && $gender == "female") echo "checked";?>>Female
    <span class="error">*</span>
    <?php  if(($genderErr == 1 ? trigger_error("Select gender") : ""))$valid = false;?>
    <br><br>
    Tel: <input type="tel" name="tel" value = "<?php echo $tel;?>">
    <span class="error">*</span>
    <?php  if(($telErr == 1 ? trigger_error("Telephone number is required") : ""))$valid = false;?>
    <?php if(($telErr == 2 ? trigger_error("Incorrect format") : ""))$valid = false;?><br><br>
    Email: <input type="email" name="email" value = "<?php echo $email;?>">
    <span class="error">*</span>
    <?php  if(($emailErr == 1 ? trigger_error("Email is required") : ""))$valid = false;?>
    <?php if(($emailErr == 2 ? trigger_error("The Email is not correct") : ""))$valid = false;?><br><br>
    Income: <input type="text" name="income" value = "<?php echo $income;?>">
    <span class="error">*</span>
    <?php  if(($incomeErr == 1 ? trigger_error("Income is required") : ""))$valid = false;?>
    <?php if(($incomeErr == 2 ? trigger_error("Only numbers allowed") : ""))$valid = false;?><br><br>
    Comments: <textarea rows="4" cols="50" name="comments"><?php echo $comments;?></textarea>
    <br><br>
    Upload image: <input type="file" name="img"><br><br>
    <input type="submit" value = "Calculate tax" name="submit">
    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST'){$valid = false;} ?>
    </form>

<?php
//<?php $valid = false?

if(!$valid){
    echo "lili";
}
else{
    echo "lulu";
    header("location:lab7task_login_mid.php");
}
echo $email;
//if($nameErr ="1" || $nameErr ="2"){
//
//    echo "lala";
//    //header("location:lab7task_login_display.php");
//
//}//}
//else{
//    echo "lollo";
//}
?>
