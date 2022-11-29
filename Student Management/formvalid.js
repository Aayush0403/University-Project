
function funx()
{
let naam=document.querySelector('#names').value;
let db=document.querySelector('#dob').value;
let mbls=document.querySelector('#mbl').value;
let frm=document.querySelector('#register').value;
const date=new Date();
let day=date.getDate();
let month=date.getMonth()+1;
let year=date.getFullYear();
let curr=`${year}-${month}-${day}`;
   console.log(curr);
   console.log(db);
    if(naam.length>30 && naam.length<2 || mbls.length!=10 || db>curr)
    {
        alert("invalid credentials!! may be due to following reasons: 2<name<30 ,moblile no==10 and date<=current date");
        return false;
              
    }
    else
    {   
        frm.action="process.php";
        return true;
    }
    
}
 
var x= document.getElementById("login");  
var y= document.getElementById("register");  
var z= document.getElementById("btn");  
var a= document.getElementById("main");
function register(){
  x.style.left="-400px";
  y.style.left="50px";
  z.style.left="110px";
  a.style.height="640px";
 
}

function login(){
  x.style.left="50px";
  y.style.left="450px";
  z.style.left="0";
  a.style.height="480px";
}

