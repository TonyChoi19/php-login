<?php
function is_login($conn)
{
	if(isset($_SESSION['user_id']))
	{
		$user_id = $_SESSION['user_id'];
		$query = "select * from user where user_id = '$user_id' limit 1";

		$result = mysqli_query($conn,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user = mysqli_fetch_assoc($result);
			return $user;
		}
	}
	return null;
}