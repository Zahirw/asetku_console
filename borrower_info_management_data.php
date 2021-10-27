<?php
$i=1;
$koneksi = mysqli_connect("localhost", "root", "", "asetku");
$sql= "SELECT * FROM tbl_lender WHERE  ldr_active='1' ORDER BY ldr_UID ASC"; // Menampung perintah SQL ke variabel ‘sql’
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query
echo 	'<table id="datatable" class="table table-striped table-bordered" cellspacing="2" width="100%"> '.
			'<thead>'.
				'<tr>'.
					'<th>UID</th>'.
					'<th>Username</th>'.
					'<th>Type Of User</th>'.
					'<th>ID No.</th>'.
					'<th>Ocuupation</th>'.
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
		echo	"<td>";
				//<!-- Split button -->
        echo            '<div class="btn-group">';
        echo              '<button type="button" class="btn btn-danger"><div class="fa fa-gear" </div></button>';
        echo              '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        echo                '<span class="caret"></span>';
        echo                '<span class="sr-only">Toggle Dropdown</span>';
        echo              '</button>';
        echo              '<ul class="dropdown-menu" role="menu">';
        echo                '<li><a href="borrower_info_management_detail.php?id='.$data['ldr_UID'].'" class="fa fa-edit"> Edit</a>';
        echo                '</li>';
        echo              '</ul>';
        echo            '</div>';
		echo		'</td>';
		echo	'</tr></br>';
		
		$i++;
	}
 }
//disini berhenti perulangan

echo	'</tbody>';
echo	'</table>';

?>