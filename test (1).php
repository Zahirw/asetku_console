<?php
$i=1;
$koneksi = mysqli_connect("localhost", "root", "", "asetku");
$sql= "SELECT uid, first_name, phone_number, role, create_time, status  FROM t_user where status='3' ORDER BY uid ASC"; // Menampung perintah SQL ke variabel ‘sql’
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query
echo 	'<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" data-paging="true" data-searching="false" data-page-length="200" > '.
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
		echo	"<td name='uid'>".$data['uid']."</td>";
		echo	"<td>".ucfirst($data['first_name'])."</td>";
		echo	"<td>".ucfirst($data['phone_number'])."</td>";
		echo	"<td>".ucfirst($data['role'])."</td>";
		echo	"<td>".ucfirst($data['status'])."</td>";
		echo	"<td>$data[status]</td>";
		echo	"<td>";
				//<!-- Split button -->
        echo            '<div class="btn-group">';
        echo              '<button type="button" class="btn btn-danger"><div class="fa fa-gear" </div></button>';
        echo              '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        echo                '<span class="caret"></span>';
        echo                '<span class="sr-only">Toggle Dropdown</span>';
        echo              '</button>';
        echo              '<ul class="dropdown-menu" role="menu">';
        echo                '<li><a href="profile.php?id='.$data['uid'].'" class="fa fa-edit"> Edit</a>';
        echo                '</li>';
        echo                '<li><a class="fa fa-remove" href="delete.php?id='.$data['uid'].'" class="fa fa-Remove"> Remove</a>';
        echo                '</li>';
        echo              '</ul>';
        echo            '</div>';
		echo		'</td>';
		echo	'</tr>';
		
		$i++;
	}
 }
//disini berhenti perulangan

echo	'</tbody>';
echo	'</table>';

?>