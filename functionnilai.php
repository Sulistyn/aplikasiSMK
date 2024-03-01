<?php 

$conn= mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
}
function hapus($id){
	global $conn;

	mysqli_query($conn, "DELETE FROM nilai_siswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function tambah($data)  {
	global $conn;
	
	$nama = htmlspecialchars($data["nama"]);
	$id_mata_pelajaran = htmlspecialchars($data["id_mata_pelajaran"]);
	$nilai = htmlspecialchars($data["nilai"]);
	$gambar = htmlspecialchars($data["gambar"]);

// query insert data
	$query = "INSERT INTO nilai_siswa 								
			VALUES
			('', '$nama', '$id_mata_pelajaran', '$nilai', 'gambar')" ;

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}

function ubah($data){
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$id_mata_pelajaran = htmlspecialchars($data["id_mata_pelajaran"]);
	$nilai = htmlspecialchars($data["nilai"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE nilai_siswa SET 
					nama = '$nama',
					id_mata_pelajaran = '$id_mata_pelajaran',
					nilai = '$nilai',
					gambar = '$gambar'
				WHERE id = '$id' ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}
function cari($keyword){
	$query = "SELECT * FROM nilai_siswa
			     WHERE
			nama LIKE '%$keyword' OR
			id_mata_pelajaran LIKE '%$keyword' OR
			nilai LIKE '%$keyword'
			";
	return query($query);		
}


?>