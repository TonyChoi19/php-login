<?php

function is_login($conn)
{
	if(isset($_SESSION['user_id']))
	{
		$stmt = $conn->prepare("select * from user where user_id = ? limit 1");
		$stmt -> bind_param('s', $_SESSION['user_id']) ;
		$stmt -> execute();

		$result = $stmt->get_result();
		if($result && mysqli_num_rows($result) > 0)
		{
			$user = $result->fetch_assoc();
			return $user;
		}
	}
	return null;
}

function is_username_avail($conn, $username){
	$stmt = $conn->prepare("select * from user where username = ?");
	$stmt -> bind_param('s', $username) ;
	$stmt -> execute();

	$result = $stmt->get_result();
	if($result && mysqli_num_rows($result) > 0)
	{
		return false;
	}
	return true;
}

function is_email_avail($conn, $email){
	$stmt = $conn->prepare("select * from user where email = ?");
	$stmt -> bind_param('s', $email) ;
	$stmt -> execute();

	$result = $stmt->get_result();
	if($result && mysqli_num_rows($result) > 0)
	{
		return false;
	}
	return true;
}

function register_user($conn, $email, $username, $password){
	$hashed_password = password_hash($password, PASSWORD_BCRYPT);
	$stmt = $conn->prepare("INSERT INTO user (email, username, password) VALUES (?,?,?)");
	$stmt -> execute(array($email, $username, $hashed_password));
}

function get_user($conn, $email){
	$stmt = $conn->prepare("SELECT * FROM user WHERE email = ?");
	$stmt -> bind_param('s', $email) ;
	$stmt -> execute();
	$result = $stmt->get_result();
	if($result && mysqli_num_rows($result) > 0)
		{
			$user = $result->fetch_assoc();
			return $user;
		}
	return null;
}