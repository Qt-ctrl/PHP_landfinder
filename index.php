<?PHP
session_start();

if ((isset ($_SESSION['logged'] ))&& ($_SESSION['logged']== true))
	{
		header('Location: wyszukiwanie.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
 <meta charset="utf-8"/>
 <title>Wyszukaj Bundesland za pomocą kodu pocztowego</title>
  <meta name="description" content="najlepsze oferty oraz najnizsze ceny"/>
  <meta name="keywords" content="najlepsze oferty, najlepsze ceny"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<body>
<font size=5>Podaj kod pocztowy</font>
 <form action="sprawdzenie.php" method="post">
<br/><input type= "text" name="postal"/><br/>
 </body>
</html>