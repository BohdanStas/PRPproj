<?php
session_start();
$email = $_POST['email'];
$pass = md5($_POST['pass']);
$name = ($_POST['name']);
$surname= ($_POST['surname']);
$thirdname = ($_POST['thirdname']);
$subject1 = ($_POST['subject1']);
$subject2 =($_POST['subject2']);
$subject3 =($_POST['subject3']);


$mysql = new mysqli("localhost","root","","users");
if ($mysql->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysql->connect_error);
    exit();
}
$mysql->query("SET NAMES 'utf-8");
$result = $mysql->query("INSERT INTO users(Email,Password,Name,SurName,ThierdName,Subj1,Subj2,Subj3) VALUES('$email','$pass','$name','$surname','$thirdname','$subject1','$subject2','$subject3');");
if($result == false){
    echo "fail";
}else{
    echo"https://www.bootstrapcdn.com/";
}

?>