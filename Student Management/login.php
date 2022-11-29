<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="loginstyle.css">
</head>
<body>    
        <div class="login-form" id="main">
            
            <div class="button-box">             
                <div id="btn"></div>
                <button type="button " class="toggle" onclick="login()">Sign In</button>
                <button type="button" class="toggle" onclick="register()">Sign Up</button>
            </div>
            <form  id="login" action="process2.php" class="input-group" method="post">
                <input type="text" name="namelog" class="input-field" id="passvalues" placeholder="User Name" required>
                <input type="password" name="passlog" class="input-field" placeholder="Enter Password" required><br><br><br>
                <button type="submit"class="submit-btn" onclick="funj()">Sign in</button><br><br>
                <span id="forgot"> <a href="forgot.php">Forgot Password?</a></span>
            </form>


            <form  id="register" action="process.php" class="input-group" method="post"">
                <input type="name" class="input-field " placeholder="Student Name" id="names" required name="name">
                <input type="text" class="input-field " placeholder="Roll No" required name="reg">
                <input type="email" class="input-field " placeholder="Email Id" required name="email">
                <input type="date" class="input-field " placeholder="DOB" id="dob" required name="dob">
                <input type="tel" class="input-field " placeholder="Mobile No" id="mbl" name="mbl" required>&nbsp;
                <table id="hobb">
                <tr>
                <td><label for="" >Hobbies</label></td>
                <td> &nbsp;&nbsp; <input type="checkbox" name="hobbies[]" id="hobbies" value="sports">sports
                <input type="checkbox" name="hobbies[]" id="" value="reading">reading
                <input type="checkbox" name="hobbies[]" id="" value="travelling">travelling</td>
                </tr>
                </table>&nbsp;
                <table id="gender">
                <tr>
                <td><label for="" class="gender">Gender</label></td>&nbsp;
                <td>&nbsp;&nbsp;<input type="radio" name="gender" class="gender" value="male" required>Male &nbsp;
                <input type="radio" name="gender" class="gender" value="female">Female</td>
                </tr></table>
                <table> <tr>
                <td><label for="" id="branch">Branch</label></td> &nbsp;<td> &nbsp;&nbsp;&nbsp;<select name="branch" id="branch" required>
                <option value="choose">choose</option>
                <option value="it">IT</option>
                <option value="cse">CSE</option>
                <option value="Mech">MECH</option>
                </select></td></tr></table>
                <input type="password" name="password" class="input-field" placeholder="Password" required><br><br>
                <button type="submit"class="submit-btn" onclick="return funx()">Sign up</button><br>
                <button type="reset"class="submit-btn">Reset</button>
            </form>
        </div> 
    <script src="formvalid.js">

    </script>  
</body>
</html>