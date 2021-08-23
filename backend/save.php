<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['name'];
		$rank=$_POST['rank'];
		$position=$_POST['position'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$sql = "INSERT INTO `employees`( `name`, `rank`, `position`, `email`, `phone`)
		VALUES ('$name','$rank','$position', '$email','$phone')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$rank=$_POST['rank'];
		$position=$_POST['position'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];		
		$sql = "UPDATE `employees` SET `name`='$name',`rank`='$rank',`position`='$position', `email`='$email',`phone`='$phone', WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `employees` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM employees WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>