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

	mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id");
	return mysqli_affected_rows($conn);
}
function tambah($data)  {
	global $conn;
	
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$id_pegawai = htmlspecialchars($data["id_pegawai"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$pekerjaan = htmlspecialchars($data["pekerjaan"]);
	$gambar = htmlspecialchars($data["gambar"]);

// query insert data
	$query = "INSERT INTO pegawai								
			VALUES
			('', '$nama', '$id_pegawai', '$ttl', '$alamat', '$pekerjaan', '$gambar')" ;

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}
function ubah($data){
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$id_pegawai = htmlspecialchars($data["id_pegawai"]);
	$ttl = htmlspecialchars($data["ttl"]);
	$alamat = htmlspecialchars($data["alamat"]);
	$pekerjaan = htmlspecialchars($data["pekerjaan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE pegawai SET 
					nama = '$nama',
					id_pegawai = '$id_pegawai',
					ttl = '$ttl',
					alamat = '$alamat',
					pekerjaan ='$pekerjaan',
					gambar = '$gambar'
				WHERE id = '$id' ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn) ;

}
function cari($keyword){
	$query = "SELECT * FROM pegawai
			     WHERE
			nama LIKE '%$keyword' OR
			id_pegawai LIKE '%$keyword' OR
			ttl LIKE '%$keyword' OR
			alamat LIKE '%$keyword' OR
			pekerjaan LIKE '%$keyword'
			";
	return query($query);		
}
?>