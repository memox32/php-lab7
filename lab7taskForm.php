<?php
/**
 * Created by Memo.
 * Date: 10/04/2018
 */

//Include the functions file to implements the functions created
include "functionsGitLab.php";

//Declaration of variables
$name = $age = $gender = $tel = $email = $income = $comments = $image = $tax= $total = "";
$nameErr = $ageErr = $genderErr = $telErr = $emailErr = $incomeErr = $commentsErr = $imgErr = $totalErr = "";

//Functions to validate the different input values in the HTML form
formValidationText("name",$name,$nameErr);
formValidationNumber("age",$age,$ageErr);
formValidationText("gender",$gender,$genderErr);
formValidationNumber("tel",$tel,$telErr);
formValidationEmail("email",$email,$emailErr);
formValidationNumber("income",$income,$incomeErr);
formValidationText("comments",$comments,$commentsErr);
formValidationText("image",$image,$imgErr);///image feature will be include later

?>

<!--Form to get the values from the user-->
<!--htmlspecialchars is used to prevent XSS, this method is preferred instead of action = "" since this might also lead to security problems "-->
<form action="<?php echo  htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype = "multipart/form-data">
<!--Declaration of a flag that will be used to send the form after the validation is correct-->
    <?php  $valid = true?>
<!--  Style to apply to the error messages  -->
    <style type="text/css"> .error{color:red;}</style>
    <!--  Style to apply to the asterisk  -->
    Please enter the following information:<br>
    <span style = 'color : red'> Required fields *</span><br><br>
<!-- value = " php echo $name used to keep the values after the validation failed and more fields need to be re-entered   -->
    Name: <input type="text" name = "name" value = "<?php echo $name;?>">
    <span class="error">*</span>
<!--  This combination of a ternary operator inside a if statement is used for displaying the error message in case a field has no information
  or has incorrect information, the ternary operator checks if an error was thrown from the functions above.
  If any error was triggered the if statement set the flag to false to the form is refreshed and asking the user to enter or modify the input-->
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
    <?php if(($incomeErr == 2 ? trigger_error("Only numbers allowed") : ""))$valid = false;?>
    <?php if(($incomeErr == 3 ? trigger_error("Only positive numbers allowed") : ""))$valid = false;?><br><br>
    Comments: <textarea rows="4" cols="50" name="comments"><?php echo $comments;?></textarea>
    <br><br>
    Upload image: <input type="file" name="imgToUpload"><br><br>
    <input type="submit" value = "Calculate tax" name="submit">
<!--  This is necessary otherwise when the form is loaded for the first time, the if statement to validate the flag that is written below includes the login_mid.php so this ensure the user clicks the submit button and a validation takes places before moving to the login_mid.php file -->
    <?php if ($_SERVER['REQUEST_METHOD'] != 'POST'){$valid = false;} ?>
    </form>

<?php

if($valid){
    //header("location:lab7task_login_mid.php");
    //include login_mid.php so it can store the cookies and session info, if you use header instead the info will not be saved.
    include "lab7task_login_mid.php";
}

?>
