<?php
	header("Content-Type:application/json");
	 include("./authentication.php");
	 include_once('../../connection.php');
    	 if(!empty($_POST['ead_token']) || !empty($_POST['fname']) || !empty($_POST['lname']) || !empty($_POST['email']) || !empty($_POST['phone']) || !empty($_POST['dob']) || !empty($_POST['sex']) || !empty($_POST['location'])  || !empty($_POST['level']) || !empty($_POST['field']) ) {
	 	  $ead_token = $_POST['ead_token'];

	      $email = mysqli_real_escape_string($conn,$_POST['email']);
	      $fname = mysqli_real_escape_string($conn,$_POST['fname']);
	      $lname = mysqli_real_escape_string($conn,$_POST['lname']);
	      $phone = mysqli_real_escape_string($conn,$_POST['phone']);
	      $dob = mysqli_real_escape_string($conn,$_POST['dob']);
	      $d = date('Y-m-d',strtotime($dob));
	      $sex = mysqli_real_escape_string($conn,$_POST['sex']);
	      $field = mysqli_real_escape_string($conn,$_POST['field']);
	      $college_name = mysqli_real_escape_string($conn,$_POST['college_name']);
	      $level = mysqli_real_escape_string($conn,$_POST['level']);
	      $company = mysqli_real_escape_string($conn,$_POST['company']);
	      $post = mysqli_real_escape_string($conn,$_POST['post']);
	      $location = mysqli_real_escape_string($conn,$_POST['location']);
	      $password = rand(1111111111,999999999);

	      if($email == "" ){
	        
	      }else{

	 		$login = authentication($ead_token,$email,$fname,$lname,$phone,$sex,$d,$field,$company,$post,$location,$password,$college_name,$level);
	        
	      }
    

	 	if(empty($login)){
	 		deliver_response(200,"Account not found",NULL);
	 	}else{
	 		deliver_response(200,"Logged In",$login);
	 	}


	 }else{
		//throws invalid request
	 		deliver_response(400,"Incomplete form","Please fill all the fields");
	 }

	 function deliver_response($status,$status_message,$data){
	 	header("HTTP/1.1 $status $status_message");

	 	$response['status'] = $status;
	 	$response['status_message'] = $status_message;
	 	$response['data'] = $data;

	 	$json_response = json_encode($response);
	 	echo stripslashes($json_response);
 	 }
?>