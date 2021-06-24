<?php 

	include "koneksi.php"; 
	include "create_message.php";



	 //delete
			$ambil = $conn-> Query("select * from mahasiswa where mahasiswa_id=" .$_GET['mahasiswa_id']);
			$pecah = $ambil -> fetch_assoc();
			$fotoambil = $pecah['foto'];
			if(file_exists("uploads/$fotoambil"))
			{
			    unlink("uploads/$fotoambil");

			}

	$sql = "DELETE from mahasiswa where mahasiswa_id=".$_GET['mahasiswa_id']; 
		if ($conn->query($sql) === TRUE) { 
			$conn->close();
			create_message("Hapus Data Berhasil","success","check");
			header("location:index.php"); 
			exit(); 
		} 
		else { 
			$conn->close();
			create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
			header("location:index.php"); 
			exit(); 
		} 
?>