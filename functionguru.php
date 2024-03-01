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

	mysqli_query($conn, "DELETE FROM guru WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$nip = htmlspecialchars($data["nip"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$mata_pelajaran = htmlspecialchars($data["mata_pelajaran"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE guru SET 
					nama = '$nama',
					nip = '$nip',
					ttl = '$ttl',
					alamat = '$alamat',
					mata_pelajaran = '$mata_pelajaran',
					gambar = '$gambar'
				WHERE id = '$id' ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}

function tambah($data)  {
	global $conn;
	
	$nama = htmlspecialchars($data["nama"]);
	$nip = htmlspecialchars($data["nip"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$mata_pelajaran = htmlspecialchars($data["mata_pelajaran"]);
	$gambar = htmlspecialchars($data["gambar"]);

// query insert data
	$query = "INSERT INTO guru 								
			VALUES
			('', '$nama', '$nip', '$ttl', '$alamat', 'mata_pelajaran', 'gambar')" ;

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}
function cari($keyword){
	$query = "SELECT * FROM guru
			     WHERE
			nama LIKE '%$keyword' OR
			nip LIKE '%$keyword' OR
			ttl LIKE '%$keyword' OR
			alamat LIKE '%$keyword' OR
			mata_pelajaran LIKE '%$keyword'
			";
	return query($query);		
}
?>