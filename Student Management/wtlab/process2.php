<?php
$hostname="localhost";
$username ="root";
$password="";
$dbname="form";

$dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");

if($_SERVER['REQUEST_METHOD']=='POST')
{
   $namel=$_POST['namelog'];
   $pswdl=$_POST['passlog'];

       $result= mysqli_query($dbc,"SELECT * FROM forms WHERE NAME='$namel' AND PASSWORD='$pswdl'");
       $count=mysqli_num_rows($result);
       if($count>0)
       {
        include('formans.php');
       }

       else
       {
          echo '<center style="background-color:lightgreen; width:40%;height:120px;margin:auto;border:2px solid blue" margin:0; padding:0;><h2 style="color:red;margin-top:30px">incorrect credentials</h2><br><a href="login.php"><button style="background-color:darkcyan;color:white">Try Again</button></a></center>';
       }
}
else
{
    echo "wrong credentials";
}
?>
