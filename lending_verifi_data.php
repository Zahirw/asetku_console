<?php
$i=1;
$koneksi = mysqli_connect("localhost", "root", "", "asetku");
$sql= "SELECT * FROM tbl_lender WHERE  ldr_active='1' ORDER BY ldr_UID ASC"; // Menampung perintah SQL ke variabel ‘sql’
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query
echo 	'<table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%"> '.
			'<thead>'.
				'<tr>'.
					'<th></th>'.
					'<th>UID</th>'.
					'<th>User Name</th>'.
					'<th>Shopping Name</th>'.
					'<th>Order ID</th>'.
					'<th>Interest Rate</th>'.
					'<th>Loan Amount</th>'.
					'<th>Detail</th>'.
				'</tr>'.
			'</thead>'.
			'<tbody>';

//disini lu mulai perulangan
if($hasil === false) { // Jika gagal menjalankan query
trigger_error('Perintah SQL salah: ' . $sql . ' Error: ' . $koneksi->error, E_USER_ERROR); // Tampilkan pesan
} 

else { // Jika berhasil
	while($data = $hasil->fetch_array()){ // Tampilkan data dengan pengulangan while
		echo	'<tr>'.
				'<td>'.
				'<div class="checkbox">'.
					'<label>'.
						'<div class="icheckbox_flat-green checked" style="position: relative;">'.
						'<input type="checkbox" class="flat" style="position: absolute; opacity: 0;">'.
						'<ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;">'.
						'</ins>'.
						'</div>'.
					 '</div>'.
					'</label>'.
				'</td>';
		echo	"<td name='uid'>".$data['ldr_UID']."</td>";
		echo	"<td>".ucfirst($data['ldr_name'])."</td>";
		echo	"<td>".ucfirst($data['ldr_phone'])."</td>";
		echo	"<td>".ucfirst($data['ldr_status'])."</td>";
		echo	"<td>".ucfirst($data['ldr_type'])."</td>";
		echo	"<td>$$data[ldr_crdt]</td>";
		echo	"<td>";
				//<!-- Split button -->
        echo            '<div class="btn-group">';
        echo              '<button type="button" class="btn btn-danger"><div class="fa fa-gear" </div></button>';
        echo              '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        echo                '<span class="caret"></span>';
        echo                '<span class="sr-only">Toggle Dropdown</span>';
        echo              '</button>';
        echo              '<ul class="dropdown-menu" role="menu">';
        echo                '<li><a href="lending_verifi_detail.php?id='.$data['ldr_UID'].'" class="fa fa-edit"> Edit</a>';
        echo                '</li>';
        echo              '</ul>';
        echo            '</div> ';
		echo		'</td>';
		echo	'</tr></br>';
		
		$i++;
	}
 }
//disini berhenti perulangan

echo	'</tbody>';
echo	'</table>';

?>