<?php
$i=1;
include 'koneksi.php';   
$sql= "SELECT 
        id,
        name,
        sequence,
        status,
        FROM_UNIXTIME(begin_time/1000, '%d-%M-%Y' ) begin_time,
        FROM_UNIXTIME(end_time/1000, '%d-%M-%Y' ) end_time
    FROM t_activity ORDER BY id ASC"; // Menampung perintah SQL ke variabel ‘sql’
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query
echo 	'<table id="datatable" class="table table-striped table-bordered" cellspacing="2" width="100%"> '.
			'<thead>'.
				'<tr>'.
					'<th>No.</th>'.
					'<th>Activity Name</th>'.
					'<th>Sequence</th>'.
					'<th>Status</th>'.
					'<th>Start Time</th>'.
					'<th>End Time</th>'.
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
		
        if($data['status'] == 1){
                    $status = "Processing";
                }
                else if($data['status'] == 3){
                    $status = "Ended";
                }
                else{
                    $status = "";
                    }		

        echo	"<tr>";
		echo	"<td name='uid'>".$data['id']."</td>";
		echo	"<td>".ucfirst($data['name'])."</td>";
		echo	"<td>".ucfirst($data['sequence'])."</td>";
		echo	"<td>".$status."</td>";
		echo	"<td>".ucfirst($data['begin_time'])."</td>";
        echo	"<td>".ucfirst($data['end_time'])."</td>";
		echo	"<td>";
				//<!-- Split button -->
        echo            '<div class="btn-group">';
        echo              '<button type="button" class="btn btn-danger"><div class="fa fa-gear" </div></button>';
        echo              '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        echo                '<span class="caret"></span>';
        echo                '<span class="sr-only">Toggle Dropdown</span>';
        echo              '</button>';
        echo              '<ul class="dropdown-menu" role="menu">';
        echo                '<li><a href="activity_management_edit.php?id='.$data['id'].'"  class="fa fa-edit"> Edit</a>';
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