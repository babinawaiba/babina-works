<?php 
	class dbConn
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

		function redirect($url)
		{
		    if (headers_sent()){
		      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
		    }else{
		      header('Location: ' . $url);
		      die();
		    }    
		}






	}	//end of class...