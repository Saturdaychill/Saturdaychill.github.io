<?php

session_start();

$con = mysqli_connect('localhost', 'id17540549_saturdaychillsadmin', 'vA5sQ^&[`d?V(&s+');
mysqli_select_db($con, 'id17540549_saturdaychills');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = "select * from usertable where name = '$name'";
$result= mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo" Username Already Taken ";
}else{
    $reg = "insert into usertable(name , password) values('$name' , '$pass' )";
    mysqli_query($con,$reg);
    echo"registerattion succesfull";
}
?>