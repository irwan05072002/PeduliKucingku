<?php 

// inisialisasi parameter of connection
// $host_name    = "sql108.epizy.com";
// $user_name      = "epiz_32443283";
// $pwd            = "N1VZdVNOUzq";
// $database_name = "epiz_32443283_pedulikucingku_db";

// SETTING DATABASE IN LOCALHOST XAMPP
$host_name    = "localhost";
$user_name      = "root";
$pwd            = "";
$database_name = "pedulikucingku_db";



// connection
$check_connection = mysqli_connect($host_name,$user_name, $pwd, $database_name
);

// check of connection one by one
if(!$check_connection){
	echo" <h1 style='color:blue; text-align:center; margin-top:200px; font-size:23px; '>
		
		<small>Maaf, untuk saat ini pedulikucingku sedang tidak bisa di akses
		mohon bersabar mungkin ada gangguan <br>
			<br>
			:)
			<br>
			<p style='font-size:20px; color:red;'>eror check :conection eror !</p>


		</small>
	</h1>";
	
	die();	
}
?>