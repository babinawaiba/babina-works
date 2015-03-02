<?php 
// echo '<pre>';
// print_r($_POST);exit;
include 'class/birth-reg-class.php';
$obj_birth = new birthReg;


if(array_key_exists('form_id', $_POST) && $_POST['form_id']=='editbirthregistration')
{
	//yaha bhitra edit garne kaam garne
	
	$id = $_POST['id'];
	$full_name = $_POST['full_name'];
	$gender = $_POST['gender'];
	$date_of_birth = $_POST['date_of_birth'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$grandfather_name = $_POST['grandfather_name'];
	$street_address = $_POST['street_address'];
	$ward_no = $_POST['ward_no'];

	$result = $obj_birth->editBirthRegistration($id, $full_name, $gender, $date_of_birth, $father_name, $mother_name, $grandfather_name, $street_address, $ward_no);
	if($result)
	{
		$obj_birth->redirect("edit-birth-registration.php?status=success&id=$id");

	}
	else 
	{
		$obj_birth->redirect('edit-birth-registration.php?status=failed');


	}



}

if(array_key_exists('form_id', $_POST) && $_POST['form_id']=='addbirthregistration')
{
	//yaha bhitra add garne kaam garne
	$full_name = $_POST['full_name'];
	$gender = $_POST['gender'];
	$date_of_birth = $_POST['date_of_birth'];
	$father_name = $_POST['father_name'];
	$mother_name = $_POST['mother_name'];
	$grandfather_name = $_POST['grandfather_name'];
	$street_address = $_POST['street_address'];
	$ward_no = $_POST['ward_no'];

	$result=$obj_birth->addBirthRegistration($full_name, $gender, $date_of_birth, $father_name, $mother_name, $grandfather_name, $street_address, $ward_no);
	if($result)
	{
		$obj_birth->redirect('add-birth-registration.php?status=success');

	}
	else 
	{
		$obj_birth->redirect('add-birth-registration.php?status=failed');


	}


}

if(array_key_exists('delete_birthid', $_GET))
{
	$birth_id = $_GET['delete_birthid'];
	$result=$obj_birth->deleteBirthRegistration($birth_id);
	if($result)
	{
		$obj_birth->redirect('birth-registration.php?status=success');

	}
	else 
	{
		$obj_birth->redirect('birth-registration.php?status=failed');


	}


}







	