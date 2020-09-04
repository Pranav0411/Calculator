<!doctype HTML>
<html>
<head>
	<link rel="stylesheet" href="FD.css">
	<title>Calculator</title>
</head>
<body>
	<form method="POST" id="fm">
	Enter first no:<input type="text" name="fnum"></br>
	Enter operator:<input type="text" name="op"></br>
	Enter Secnd no:<input type="text" name="secnum"></br>
	<input type="submit" name="sub" value="Calculate" class="but">
</form>
<p>
<?PHP 
if(isset($_POST["sub"]))
{
	switch($_POST["op"])
	{
		case '+':
		      print $_POST["fnum"]+$_POST["secnum"];
		      break;
		case '-':
		      echo $_POST["fnum"]-$_POST["secnum"];
		      break;
		case '*':
		      echo $_POST["fnum"]*$_POST["secnum"];
		      break;
		case '/':
		      echo $_POST["fnum"]/$_POST["secnum"];
		      break;
		default:
		      echo "No Values Entered !!";
		      break;
    }
}
else 
{
	echo "wrong input";
}
?>
</p>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    