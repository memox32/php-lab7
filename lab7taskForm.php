
/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 10/04/2018
 * Time: 10:15 AM
 */

<form action="lab7task_login_mid.php" method="post" enctype = "multipart/form-data">
    Name: <input type="text" name = "name"><br><br>
    Age: <input type="text" name="age"><br><br>
    Gender: <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female<br><br>
    Tel: <input type="tel" name="tel"><br><br>
    Email: <input type="email" name="email"><br><br>
    Income: <input type="text" name="income"><br><br>
    Comments: <textarea rows="4" cols="50" name="comments"></textarea><br><br>
    Upload image: <input type="file" name="img"><br><br>
    <input type="submit" value = "Calculate tax">
</form>