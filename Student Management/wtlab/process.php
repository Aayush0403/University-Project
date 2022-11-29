<?php
$hostname="localhost";
$username ="root";
$password="";
$dbname="form";

$dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
mysqli_set_charset($dbc,"utf8");
if($_SERVER['REQUEST_METHOD']=='POST')
{

   $pswd=$_POST['password'];
   $name=$_POST['name'];
   $dob=$_POST['dob'];
   $reg=$_POST['reg'];
   $mail=$_POST['email'];
   $mbl=$_POST['mbl'];
   $gender=$_POST['gender'];
   $hobbs=$_POST['hobbies'] && is_array($_POST['hobbies']) ? $_POST['hobbies'] : [];
   $hobbies=implode(",",$hobbs);
   $branch=$_POST['branch'];


    if((!empty($name)and !empty($mail) and !empty($pswd)))
    {
        include('login.php');
        $result= mysqli_query($dbc,"SELECT * FROM forms WHERE NAME='$name' AND PASSWORD='$pswd' AND EMAIL ='$mail'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            echo "<script>alert('User already exists,Please signin.')</script>";
        }
        else
        {
            mysqli_query($dbc,"INSERT INTO forms(NAME,DOB,REGISTRATIONNO,EMAIL,MOBILENO,GENDER,HOBBIES,BRANCH,PASSWORD) VALUES('$name','$dob','$reg','$mail','$mbl','$gender','$hobbies','$branch','$pswd')");
        }

    }
    else{
        echo "ERROR"."please fill all the values";
    }

}
else
{
    echo "no form submitted";
}

?>