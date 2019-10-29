<!DOCTYPE HTML>
<html lang="de">
<head>
 <meta charset="utf-8"/>
 <title>Wyszukaj Bundesland za pomocą kodu pocztowego</title>
<?PHP

	require_once "connectiondb.php";
	 
	$db_connect = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($db_connect->connect_errno!=0)
	{
		echo "Error: ".$db_connect->connect_errno;
	}	
	else
	{
		
		$PLZ = $_POST['postal'];

		$sql = "SELECT * FROM dataset1 WHERE zipcode= '$PLZ'";
		$sql2 = "SELECT * FROM dataset2 WHERE zipcode= '$PLZ'";
		
				if ($question = @$db_connect->query($sql))
			{
				$users_num = $question->num_rows;
				if ($users_num >0 )
				{
					$_SESSION['plz'] = true;
					$row = $question->fetch_all(MYSQLI_ASSOC);
						 
						 echo "KOD		MIASTO 		LAND","<br>";
						foreach($row as $column)
						{
							echo $column['zipcode'],"	", $column['city'],"	", $column['state'], '<br>';
							
						}
				}else {
					if( $question2 = @$db_connect->query($sql2))
							{
					$users_num2 = $question2->num_rows;
					if ($users_num2 >0)
							{
						$_SESSION['plz']= true;
						$row2 = $question2->fetch_all(MYSQLI_ASSOC);
						 
						 echo "KOD		MIASTO 		LAND","<br>";
						foreach($row2 as $column)
									{
									echo $column['zipcode'],"	", $column['city'],"	", $column['state'], '<br>';
									}
								}			
							else 
									{
									header ('Location:index.php');	
							}
		
				$question2 -> free_result();
						}
					}
			}
	}
			
		
?>