<?php

// session declaration
session_start();

// connection to database
include"../configuration/connect_db.php";


// Tombol login
if(isset($_POST["btn_login"])){
	
	// ambil data username and password dari form login
	$username_user		= strtolower($_POST["input_username"]);
	$pwd_asli			= strtolower($_POST["input_pwd"]);

	// check id_pendaftaran at database
	$query_username_user 		= "SELECT username_user FROM users_account 
											WHERE 
									username_user = '$username_user'
								";

	$result_query_username_user	= mysqli_query($check_connection, $query_username_user);
	$row_username_user			= mysqli_num_rows($result_query_username_user);	


	// LOGIN CHECK ->

	// logic to check id pendaftaran 
	if($row_username_user){

				// check password at database
				$query_pwd	= "SELECT pwd_enkripsi FROM users_account 
								WHERE 
					username_user = '$username_user' AND pwd_asli = '$pwd_asli'
				";

				$result_pwd	= mysqli_query($check_connection, $query_pwd);
				$array_pwd	= mysqli_fetch_array($result_pwd);
				$encrypt_pwd	= $array_pwd["pwd_enkripsi"];

		// if id_pendaftaran find, check password (string non hash, string hash)
		$check_sync_pwd = password_verify($pwd_asli, $encrypt_pwd);
		
		// logic to check password
		if($check_sync_pwd == TRUE){

			// succsess to login beacuse id pendaftaran and password finding

			// show all information users from account login
			$query_get_information_user = "SELECT * FROM users_account WHERE username_user = '$username_user'";
			$data_user = mysqli_query($check_connection, $query_get_information_user);	
			$all_data_user	= mysqli_fetch_array($data_user);

			// identification information from users
			$call_username_user 	= $all_data_user["username_user"];
			$call_nama_user 	= $all_data_user["nama_user"];

			// create session information
			$_SESSION["LOGIN"] 			= TRUE;
			$_SESSION["username_user"]  = $call_username_user;	
			$_SESSION["nama_user"] 		= $call_nama_user;

			// redirect to homepage admin
			header("location:../admin/dashboard.php");

			die();

		// password not finding
		}else{
			header('location: ../index.php?wrong=pwd_null');
			die();
		}
	
	// if all field NULL
	}else if($username_user == "" or $pwd_asli = ""){

		header('location: ../index.php?wrong=field_null');	
	
	
	// if username_user not find
	}else{
		// username tidak cocok tidak boleh masuk
		header('location: ../index.php?wrong=id_pendaftaran_null');	
		
	}
}

?>