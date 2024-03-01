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

	mysqli_query($conn, "DELETE FROM jadwal WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function tambah($data)  {
	global $conn;
	
	$mata_pelajaran = htmlspecialchars($data["mata_pelajaran"]);
	$kode_mp = htmlspecialchars($data["kode_mp"]);
	$guru_mengajar = htmlspecialchars($data["guru_mengajar"]);
	$gambar = htmlspecialchars($data["gambar"]);

// query insert data
	$query = "INSERT INTO jadwal 								
			VALUES
			('', '$mata_pelajaran', '$kode_mp', '$guru_mengajar', 'gambar')" ;

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}
function ubah($data){
	global $conn;
	
	$id = $data["id"];
	$mata_pelajaran = htmlspecialchars($data["mata_pelajaran"]);
	$kode_mp = htmlspecialchars($data["kode_mp"]);
	$guru_mengajar = htmlspecialchars($data["guru_mengajar"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE jadwal SET 
					mata_pelajaran = '$mata_pelajaran',
					kode_mp = '$kode_mp',
					guru_mengajar = '$guru_mengajar',
					gambar = '$gambar'
				WHERE id = '$id' ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}
function cari($keyword){
	$query = "SELECT * FROM jadwal
			     WHERE
			mata_pelajaran LIKE '%$keyword' OR
			kode_mp LIKE '%$keyword' OR
			guru_mengajar LIKE '%$keyword'
			";
	return query($query);		
}
?>