<?php
if(!isset($_SESSION))session_start();
	
	//connect to database
	$db=mysqli_connect("localhost","root","","busonline");
	// session_start();
	
	
//**********************Register******************************************************

if (isset($_POST['registerchildforbus_btn'])) {
	if (isset($_POST['childid']) && isset($_POST['pickupnumber']) && isset($_POST['dropoffnumber'])) {
		# code...
	
	$waitingListNumber = rand(1000,9999);
	$applicationStatus="waiting list";
	$busLimit=35;
	$adminID=1;
	$learnerID = $_POST['childid'];
	$pickupnumber = $_POST['pickupnumber'];
	$dropoffnumber = $_POST['dropoffnumber'];

$waitingListDate = date("y/m/d");
	
	$result = $db->query("SELECT pick_up_name FROM pickups WHERE pick_up_number='$pickupnumber'");
	$pickupname = $result->fetch_assoc();

	$result2 = $db->query("SELECT drop_off_name FROM dropoffs WHERE drop_off_number='$dropoffnumber'");
	$dropoffname = $result2->fetch_assoc();

	$busroutename = $pickupname['pick_up_name']."-".$dropoffname['drop_off_name'];
	
	
	$sql = "INSERT INTO bus_routes(bus_route_name, learnerID,adminID, bus_limit,application_status,waiting_list_number,waiting_list_date)
	VALUES('$busroutename','$learnerID','$adminID','$busLimit','$applicationStatus','$waitingListNumber','$waitingListDate')";
	$res = mysqli_query($db,$sql);

	if($res)
	{
		
		$message = " You have Successfully Applied for bus";
		
		echo "<script type='text/javascript'>alert('$message');
		window.location.href='dashParent.php';
		</script>";
	}else{
		
	}
}else {
	$message = "Check form and try again";
		
		echo "<script type='text/javascript'>alert('$message');
		window.location.href='dashParent.php';
		</script>";
}
	
}


if (isset($_POST['approveChildBtn'])) {

	if (isset($_POST['approve'] )&& isset($_POST['childid'])) {
		$applicationStatus ="successful";
		$learnerID = $_POST['childid'];

	$sql = "UPDATE bus_routes SET application_status='$applicationStatus', waiting_list_number=NULL,waiting_list_date=NULL
	 WHERE learnerID='$learnerID'";
	$res = mysqli_query($db,$sql);

	// $result2 = $db->query("SELECT drop_off_name FROM dropoffs WHERE drop_off_number='$dropoffnumber'");
	// $dropoffname = $result2->fetch_assoc();

	// $busroutename = $pickupname['pick_up_name']."-".$dropoffname['drop_off_name'];
	
	
	// $sql = "INSERT INTO bus_routes(bus_route_name, learnerID,adminID, bus_limit,application_status,waiting_list_number,waiting_list_date)
	// VALUES('$busroutename','$learnerID','$adminID','$busLimit','$applicationStatus','$waitingListNumber','$waitingListDate')";
	// $res = mysqli_query($db,$sql);

	if($res)
	{
		
		$message = "Successfully Approved a learner!";
		
		echo "<script type='text/javascript'>alert('$message');
		window.location.href='dashAdmin.php';
		</script>";
	}else{
		
	}
	
}else {
	$message = "Please Check on your form and try again!";
		
		echo "<script type='text/javascript'>alert('$message');
		window.location.href='dashAdmin.php';
		</script>";
}


}
?>


