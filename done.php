<?php  

	$con = mysqli_connect("127.0.0.1","root","","schoolruss");
	$query_answ = "SELECT * FROM answers WHERE id = '1'";
	$query_an = mysqli_query($con, $query_answ);
	$result = $query_an->fetch_assoc();
	$correct = 0;
	for ($i=1; $i < 6; $i++) { 
		if ($_POST["ans".$i.""] == $result["an".$i.""]) {
			// echo " | ";
			// echo $i;
			// echo ". ";
			// echo " ur answer - ";
			// echo $_POST["as".$i.""];
			// echo " correct answer - ";
			// echo $result["a".$i.""];
			$correct ++;
			// echo " total ---- ";
		}
		
	}
	$query_ins = "INSERT INTO users (`id`, `name`,`answers`, `time_long`) VALUES (NULL, '{$_POST["name"]}', '$correct', '42')";
            

 	$qei = mysqli_query($con, $query_ins);

 	

?>