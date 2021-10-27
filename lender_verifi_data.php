<?php
$i=1;
$koneksi = mysqli_connect("localhost", "root", "", "asetku");
$sql= "SELECT * FROM tbl_lender WHERE  ldr_active='1' ORDER BY ldr_UID ASC"; // Menampung perintah SQL ke variabel ‘sql’
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query
echo 	'<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> '.
			'<thead>'.
				'<tr>'.
					'<th>No</th>'.
					'<th>UID</th>'.
					'<th>User Name</th>'.
					'<th>Contact No.</th>'.
					'<th>Status</th>'.
					'<th>Type</th>'.
					'<th>Register Time</th>'.
					'<th>Operation</th>'.
				'</tr>'.
			'</thead>'.
			'<tbody>';

//disini lu mulai perulangan
if($hasil === false) { // Jika gagal menjalankan query
trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR); // Tampilkan pesan
} 

else { // Jika berhasil
	while($data = $hasil->fetch_array()){ // Tampilkan data dengan pengulangan while
		echo	"<tr>";
		echo	"<td>$i</td>";
		echo	"<td name='uid'>".$data['ldr_UID']."</td>";
		echo	"<td>".ucfirst($data['ldr_name'])."</td>";
		echo	"<td>".ucfirst($data['ldr_phone'])."</td>";
		echo	"<td>".ucfirst($data['ldr_status'])."</td>";
		echo	"<td>".ucfirst($data['ldr_type'])."</td>";
		echo	"<td>$$data[ldr_crdt]</td>";
		echo	"<td>";
				//<!-- Split button -->
        echo            '<center><button type="button" class="btn btn-success btn-sm">Audit</button></center>';
		echo		'</td>';
		echo	'</tr></br>';
		
		$i++;
	}
 }
//disini berhenti perulangan

echo	'</tbody>';
echo	'</table>';

?>