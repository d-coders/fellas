<?php


include'connection.php';

// $name=  $_POST["name"];
// echo $name."<br/>";
// $mail=$_POST["email"];
// echo $mail."<br/>";
// $arrivaldate=  $_POST["arrDate"];
// echo $arrivaldate."<br/>";
// $time =  $_POST["arrTime"];
// echo $time."<br/>";
// $departuredate=  $_POST["deprDate"];
// echo $departuredate."<br/>";
// $departuretime =  $_POST["deprTime"];
// echo $departuretime."<br/>"; 
// $chooseRoom=$_POST["choose_room"];
// echo $chooseRoom."br/>";
// $noOfpeople=$_POST["noOfpeople"];
// echo $noOfpeople."br/";




	$rName = $_POST["name"];
	$rEmail = $_POST["email"];
	$rArrival = $_POST["arrDate"];
	$rArrivalTime = $_POST["arrTime"];
	$departDate = $_POST["deprDate"];
	$departTime = $_POST["deprTime"];
	
	$noOfPeople = $_POST["noOfpeople"];
	$choose_room=$_POST["choose_room"];



 $insertQuery =  "INSERT INTO `r_table`(`r_name`, `r_email`, `r_arriv_date`, `r_arriv_time`, 
 	`r_depr_date`, `r_depr_time`, `choose_room`,
 	 `no-of_people`) VALUES (

 	 '$rName','$rEmail','$rArrival','$rArrivalTime','$departDate',
 	 '$departTime','$noOfPeople','$noOfPeople')";
 

	// Secho "$insertQuery";


	$registerResult = mysqli_query($conn,$insertQuery);


	if (!$registerResult){
		echo "failed ".mysqli_error($conn) ;

	}else {
		echo "Registerration Successfull";
	}



?>

