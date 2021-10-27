<?php
$i=1;
include 'koneksi.php';   
$sql= "select *,
        FROM_UNIXTIME(a.create_time/1000, '%d-%M-%Y' ) create_time,
        (select sum(b.amount) from t_purchase_order b where a.id=b.rm_id) as amount,
        (select count(*) from t_purchase_order b where a.id=b.rm_id) as `count`
        from t_rm_code a order by amount desc;"; // Menampung perintah SQL ke variabel ‘sql’
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query
echo 	'<table id="datatable" class="table table-striped table-bordered" cellspacing="2" width="100%"> '.
			'<thead>'.
				'<tr>'.
					'<th>No.</th>'.
					'<th>ID</th>'.
					'<th>Name</th>'.
					'<th>Code</th>'.
					'<th>Order Num</th>'.
					'<th>Order Amount</th>'.
                    '<th>Status</th>'.
                    '<th>Create Time</th>'.
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
                    $status = "Open";
                }
                else if($data['status'] == 0){
                    $status = "Close";
                }
                else{
                    $status = "";
                    }		

        echo	"<tr>";
        echo	"<td>".$i."</td>";
		echo	"<td>".$data['id']."</td>";
		echo	"<td>".ucfirst($data['name'])."</td>";
		echo	"<td>".ucfirst($data['code'])."</td>";
        echo	"<td>".number_format($data['count'])."</td>";
        echo	"<td>Rp.".number_format($data['amount'])."</td>";
		echo	"<td>".$status."</td>";
        echo	"<td>".ucfirst($data['create_time'])."</td>";
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