<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>loginform</title>
  <style>
      .cent
      {
        background-color:rgba(255,255,255, 0.07);
        backdrop-filter: blur(10px);
        box-shadow: 0 0 40px rgba(8,7,16, 0.4);
        font-weight: bolder;
        width: 40%;
        margin: auto;
        min-width: 400px;
        margin-top: 150px;
        border-radius: 4px;
        padding: 4px;
      }
      button{
        background-color:lightskyblue;
        color: darkcyan;
        width:90px;
        height: 30px;
        border: none;
        border-radius: 2px;
        font-weight: bolder;
        margin-bottom: 4px;
        cursor: pointer;
      }
      h2{
        color: red;
      }
  </style>
</head>
<body>
<div class="cent">
  <center>
    <h2>Student details are as folows:</h2>
  <?php
  $hostname="localhost";
  $username ="root";
  $password="";
  $dbname="form";
  
  $dbc=mysqli_connect($hostname,$username,$password,$dbname) or die("couldnot connect to dtabase".mysqli_connect_error());
  mysqli_set_charset($dbc,"utf8");
  $qry=mysqli_query($dbc,"SELECT * FROM forms WHERE NAME='$namel' AND PASSWORD='$pswdl'");
  $row = mysqli_fetch_row($qry);
 echo "name :".$row[1]."<br>";
 echo "DOB :".$row[2]."<br>";
 echo "reg.no :".$row[3]."<br>";
 echo "email :".$row[4]."<br>";
 echo "mbl :".$row[5]."<br>";
 echo "gender :".$row[6]."<br>";
 echo "hobbies :".$row[7]."<br>";
 echo "branch :".$row[8]."<br>";  

?>
  </center>
  <br>
  <center><a href="login.php"><button>BACK</button></a> &nbsp &nbsp &nbsp <a href="paasword.php">Change Password</a></center>
</div>
</body>
</html>

