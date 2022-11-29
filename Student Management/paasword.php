<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #cen{
            margin: auto;
            margin-top: 70px;
            background-color:rgba(225, 218, 218, 0.711);
            backdrop-filter: blur(6px);
            box-shadow: 0 0 40px rgba(30, 30, 33, 0.5);
            padding: 40px;
            width: 35%;
           
        }
        input
        {
            height: 20px;
            width: 220px;
        }
        #btn
        {
           margin-left: -270px;
           background-color:lightskyblue;
           color: darkcyan;
           width:auto;
           height: 30px;
           border-radius: 2px;
           font-weight: bolder;
           margin-bottom: 4px;
           cursor: pointer;
        }
        #bck
        {
            float: right;
            background-color:lightskyblue;
            color: darkcyan;
            width:90px;
            height: 30px;
            border-radius: 2px;
            font-weight: bolder;
            margin-bottom: 4px;
            cursor: pointer;

        }
        span{
            color: red;
        }
        
    </style>
</head>
<body>
<?php

    $hostname="localhost";
    $username ="root";
    $password="";
    $dbname="form";

    $dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
    mysqli_set_charset($dbc,"utf8");
    $ans=" ";
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
        $change=$_POST['change'];
        $newpass=$_POST['newpass'];
        $cpass=$_POST['cpass'];
        $oldpass=$_POST['oldpass'];
        $result= mysqli_query($dbc,"SELECT * FROM forms WHERE EMAIL='$change' AND PASSWORD='$oldpass'");
        $count=mysqli_num_rows($result);
       if($count>0)
       {
        if($cpass==$newpass)
        {
            $ans="password updated";
            $result= mysqli_query($dbc,"UPDATE forms SET PASSWORD='$newpass' WHERE EMAIL='$change'");
           
        }
        else
        {
            $ans="password didnot matched";
        }
       }
       else
       {
           $ans="no such email or password exist";
       }
       
    }
    ?>
    <center id="cen">
    <form action="" method="post">
    <table>
    <tr>
    <td><label for="">Enter E-mail id :</label> </td><td><input type="text" name="change" id="change" required></td>
    </tr>
    <tr>
    <td><label for="">Enter Old Password:</label> </td><td><input type="text" name="oldpass" id="oldpass" required></td>
    </tr>
    <tr>
    <td><label for="">Enter New Password:</label> </td><td><input type="text" name="newpass" id="newpass" required></td>
    </tr>
    <tr>
    <td><label for="">Confirm Password:</label> </td><td><input type="text" name="cpass" id="cpass" required></td>
    </tr>
    </table>
    <br>
    <button id="btn">Set Password</button>
    </form>
    <a href="login.php"><button id="bck">Back</button></a>
    <span id="new"><p><?=$ans?></p></span>
    <center>

</body>
<script src="formvalid.js"></script>
</html>