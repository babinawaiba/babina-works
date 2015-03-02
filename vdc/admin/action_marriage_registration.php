<?php
echo '<pre>';
print_r($_POST);
include 'class/marriage-reg-class.php';
$obj_marriage = new marriageReg;

if(array_key_exists('action', $_POST)&& $_POST['action']=='newMarriageReg')
{
	$fullname = $_POST['full_name'];
	$spousename = $_POST['spouse_name'];
	$dom = $_POST['date_of_marriage'];
	$birthregid = $_POST['birthregistration'];
	
	$result = $obj_marriage->addMarriageRegistration($fullname, $spousename, $dom, $birthregid);
	if($result)
		{
			$obj_marriage->redirect("add-marriage-registration.php?status=success&id=$id");

		}
		else 
		{
			$obj_marriage->redirect('add-marriage-registration.php?status=failed');


		}
}





	?>



Add































?>