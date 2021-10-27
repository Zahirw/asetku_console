<?php
$i=1;
include 'koneksi.php';
$sql= "select 
a.id,a.title, b.country_name, a.news_type,
FROM_UNIXTIME(a.push_time/1000, '%d-%M-%Y' ) push_time, a.`status` 
from t_news a, t_country b
where a.country_id = b.id and a.uid=0 order by a.push_time desc;
"; // Menampung perintah SQL ke variabel ‘sql’
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query
echo 	'<table id="datatable" class="table table-striped table-bordered" cellspacing="2" width="100%"> '.
			'<thead>'.
				'<tr>'.
					'<th>No.</th>'.
                    '<th>ID</th>'.
					'<th>Tittle</th>'.
					'<th>Country</th>'.
					'<th>Type</th>'.
					'<th>Push Time</th>'.
					'<th>Status</th>'.
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
		
        if($data['status'] == 2){
                    $status = "Sent";
                }
                else if($data['status'] == 3){
                    $status = "Ended";
                }
                else{
                    $status = "";
                    }	
        
        
        echo	"<tr>";
        echo	"<td>".$i++."</td>";
		echo	"<td name='uid'>".$data['id']."</td>";
		echo	"<td>".ucfirst($data['title'])."</td>";
		echo	"<td>".ucfirst($data['country_name'])."</td>";
		echo	"<td>".ucfirst($data['news_type'])."</td>";
		echo	"<td>".ucfirst($data['push_time'])."</td>";
        echo	"<td>".$status."</td>";
		echo	"<td>";
				//<!-- Split button -->
        echo            '<div class="btn-group">';
        echo              '<button type="button" class="btn btn-danger"><div class="fa fa-gear" </div></button>';
        echo              '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        echo                '<span class="caret"></span>';
        echo                '<span class="sr-only">Toggle Dropdown</span>';
        echo              '</button>';
        echo              '<ul class="dropdown-menu" role="menu">';
        echo                '<li><a href="news_management_edit.php?id='.$data['id'].'" class="fa fa-edit"> Edit</a>';
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