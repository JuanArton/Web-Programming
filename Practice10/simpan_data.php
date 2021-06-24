<?php
	 include "koneksi.php";
	 include "create_message.php";
	$nama = $_FILES['foto'] ['name'];
	$lokasi = $_FILES ['foto'] ['tmp_name'];


	 	 if(isset($_POST['mahasiswa_id'])){ 
			move_uploaded_file($lokasi,"photos/$nama");	 	
	 	  $sql = "UPDATE mahasiswa SET nama_lengkap = '".$_POST['nama_lengkap']."',alamat = '".$_POST['alamat']."',kelas_id = '".$_POST['kelas_id']."' , foto = '$nama' WHERE (`mahasiswa_id` = '".$_POST['mahasiswa_id']."');"; 
	 	  	if ($conn->query($sql) === TRUE) { 
	 	  		$conn->close();
	 	  		create_message("Ubah Data Berhasil","success","check");
	 	  		header("location:".$_SERVER['HTTP_REFERER']); 
	 	  		header("location:index.php");
	 	  		exit(); 
	 	  	} 
	 	  	else {
	 	  		 $conn->close();
	 	  		 create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning"); 
	 	  		 header("location:".$_SERVER['HTTP_REFERER']); 
	 	  		 exit(); 
	 	  		} 
	 	  	} 		 	 
	 	  	else{ 
	 	  		move_uploaded_file($lokasi, "photos/".$nama);	 	  	 
                $sql = "INSERT INTO mahasiswa (nama_lengkap, kelas_id, alamat, foto) VALUES ('".$_POST['nama_lengkap']."', ".$_POST['kelas_id'].", '".$_POST['alamat']."', '$nama')"; 
                if ($conn->query($sql) === TRUE) { 
                    $conn->close(); 
                    create_message("Simpan Data Berhasil","success","check");
                    header("location:index.php"); 
	 	  		exit(); 
                } 
	 	  	else { 
	 	  		$conn->close(); 
	 	  		create_message("Error: " . $sql . "<br>" . $conn->error,"danger","warning");
	 	  		header("location:index.php"); 
	 	  		exit(); 
	 	  	}
	 	 } 
?>
