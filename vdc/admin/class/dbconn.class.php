<?php 
	class dbconn
	{
		function __construct()
		{
			$link = mysql_connect('localhost', 'root', 'root');
			if (!$link) 
			{
			    die('Could not connect: ' . mysql_error());
			}
			else
			{
				$db_selected = mysql_select_db('vdc_panjikaran_data', $link);
				if (!$db_selected) 
				{
				    die ('Can\'t use database : ' . mysql_error());
				}
			}
			
		}




		function validate_login($email, $password)
		{
			$result = mysql_query("SELECT * FROM admin WHERE `email` = '$email' AND `password` = '$password' ");
			$fetched_result = mysql_fetch_array($result);
			
			// Check result
			// This shows the actual query sent to MySQL, and the error. Useful for debugging.
			// if (!$result) {
			//     $message  = 'Invalid query: ' . mysql_error() . "\n";
			//     $message .= 'Whole query: ' . $query;
			//     die($message);
			// }

			return $fetched_result;
			
		}

		function redirect($url){
		    if (headers_sent()){
		      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
		    }else{
		      header('Location: ' . $url);
		      die();
		    }    
		}

		function addBirthRegistration($fullname, $gender, $dob, $fathername, $mothername, $grandfathername, $streetaddress, $wardno)
		{
			$date = date("F j, Y, g:i a");
			$result = mysql_query("INSERT INTO birth_registration (
				`fullname`,
				`gender`,
				`dob`,
				`fathername`,
				`mothername`,
				`grandfathername`,
				`streetaddress`,
				`wardno`,`lastmodified`) VALUES (
				'$fullname',
				'$gender',
				'$dob',
				'$fathername',
				'$mothername',
				'$grandfathername',
				'$streetaddress',
				'$wardno','$date')");
			//Check result
			//This shows the actual query sent to MySQL, and the error. Useful for debugging.
			if (!$result) {
			    $message  = 'Invalid query: ' . mysql_error() . "\n";
			    $message .= 'Whole query: ' . $query;
			    die($message);
			}	
			retumysql_insert_id();


		}

		function getAllBirthRegistration()
		{   
			$result = mysql_query("SELECT * FROM birth_registration");
			return $result;

		}

		function getBirthRegistrationById($birth_id)
		{
			$result = mysql_query("SELECT * FROM birth_registration WHERE `id`= '$birth_id'");
			$result = mysql_fetch_assoc($result);
			return $result;

		}

		function editBirthRegistration($id, $full_name, $gender, $date_of_birth, $father_name, $mother_name, $grandfather_name, $street_address, $ward_no)
		{
			$date = date("F j, Y, g:i a");
			//echo "UPDATE birth_registration SET fullname = '$full_name', gender = '$gender', dob = '$date_of_birth', fathername = '$father_name', mothername = '$mother_name', grandfathername = '$grandfather_name', streetaddress = '$street_address', wardno = '$ward_no', lastmodified = '$date' WHERE id = '$id' ";exit();
			$result = mysql_query("UPDATE birth_registration SET fullname = '$full_name', gender = '$gender', dob = '$date_of_birth', fathername = '$father_name', mothername = '$mother_name', grandfathername = '$grandfather_name', streetaddress = '$street_address', wardno = '$ward_no', lastmodified = '$date' WHERE id = '$id' ");
			return $result;
		}


	}