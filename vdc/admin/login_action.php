<?php 
error_reporting(E_ALL);
include 'class/birthReg.class.php';

$obj_birthReg = new birthReg; //creating object for birthReg class.
echo '<pre>';// formats array.
print_r($_POST);// prints array and object.

/*Array
(
    [email] => babinawaiba@gmail.com
    [password] => jkajflkjfladjkl
)*/

$email = $_POST['email'];
$password = md5($_POST['password']); 



$result = $obj_birthReg->validate_login($email, $password);

if ($result)
{
	$obj_birthReg->redirect('dashboard.php');
}
else
{
	$obj_birthReg->redirect('index.php?status=fail');
}
