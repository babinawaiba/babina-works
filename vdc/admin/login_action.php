<?php 
error_reporting(E_ALL);
include 'class/dbconn.class.php';

$obj_dbconn = new dbconn; //creating object for dbconn class.
echo '<pre>';// formats array.
print_r($_POST);// prints array and object.

/*Array
(
    [email] => babinawaiba@gmail.com
    [password] => jkajflkjfladjkl
)*/

$email = $_POST['email'];
$password = md5($_POST['password']); 



$result = $obj_dbconn->validate_login($email, $password);

if ($result)
{
	$obj_dbconn->redirect('dashboard.php');
}
else
{
	$obj_dbconn->redirect('index.php?status=fail');
}
