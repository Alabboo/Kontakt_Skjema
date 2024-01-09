<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $epost=$_POST['epost'];
    $navnogetternavn=$_POST['navnogetternavn'];
    $klasse=$_POST['klasse'];
    $kommentar=$_POST['kommentar'];

}

$con=new mysqli('localhost','root','','saker');

if($con)
    //echo "connection successfull";
    
$sql="insert into `data`(epost,navnogetternavn,klasse,kommentar)values ('$epost','$navnogetternavn','$klasse','$kommentar')";
$result=mysqli_query($con,$sql);
if($result){
    echo "data inserted successfully";

}else{
    die(mysqli_error($con));
}

?>