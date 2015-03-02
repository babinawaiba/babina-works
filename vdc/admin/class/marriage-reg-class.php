<?php 
include_once 'class/dbconn.class.php';
class marriageReg extends dbconn
{

	function addMarriageRegistration($fullname, $spousename, $dom, $birthregid)
	{

		$result = mysql_query("INSERT INTO marriage_registration (`fullname`,`spousename`,`dom`,`birthregid`) 
			                                VALUES ('$fullname','$spousename','$dom', '$birthregid') ");
		$no_of_affected_rows = mysql_affected_rows();


		if (!$result) 
		{
			    $message  = 'Invalid query: ' . mysql_error() . "\n";
	
			    die($message);

		}
		return $no_of_affected_rows;

	}




	function getAllMarriageRegistration()
	{
		$result= mysql_query("SELECT * FROM marriage_registration");
		return $result;


	}
	
	function getMarriageRegistrationById($id)
	{
		$result = mysql_query("SELECT * FROM marriage_registration WHERE `id`='$id'");
		$result = mysql_fetch_assoc($result);
		return $result;


	}


	













}


?>