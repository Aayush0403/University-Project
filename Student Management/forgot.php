<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        center
        {
            margin: auto;
            margin-top: 100px;
            background-color:rgba(225, 218, 218, 0.711);
            backdrop-filter: blur(6px);
            box-shadow: 0 0 40px rgba(30, 30, 33, 0.5);
            width: 40%;
            padding: 40px;
        }
        #btn
        {
           margin-left: -200px;
           background-color:lightskyblue;
           color: darkcyan;
           width:auto;
           height: 30px;
           border-radius: 2px;
           font-weight: bolder;
           margin-bottom: 4px;
           cursor: pointer;
        }
        input
        {
            width: 220px;
        }
        #bck
        {
            /* margin-left: -180px; */
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
    $result= mysqli_query($dbc,"SELECT * FROM forms WHERE EMAIL='$change'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        $ans=rand(10000,99999);
        echo "<script>alert(' New password is $ans')</script>";
        $result= mysqli_query($dbc,"UPDATE forms SET PASSWORD='$ans' WHERE EMAIL='$change'");
    }  
    else
    {
        echo "<script>alert('Email Not Found')</script>";
    }
   
}
?>
<center>
<form action="" method="post">
<label for="">Enter E-mail id:</label><input type="text" name="change" id="change"><br><br>
<button id="btn">Generate Password</button>
</form>
<a href="login.php"><button id="bck">Back</button></a>

</center>
</body>
</html>