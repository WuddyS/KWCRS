<?php  
	if (isset($_POST['submit'])){

		include("include/config.php");
		mysql_select_db($objDB);

		$sql = "INSERT INTO report (reporter,Location,Type,Problem) VALUES ($_POST(reporter),($_POST(location),($_POST(type),($_POST(problem)";

		mysql_query($sql,$objConnect);

		mysql_close($objConnect);

	}else{
		echo "Noo";
	}

?>