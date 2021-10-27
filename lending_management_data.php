<?php

include 'koneksi.php';

$per_page = 10;
$per_page    = (isset($_GET['count'])) ? (int)$_GET['count'] : $per_page;
$page        = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$links       = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 3;
$page_query  = mysqli_query($koneksi,"SELECT COUNT(*) FROM t_product");
$row         = mysqli_fetch_array($page_query);
$last_page   = ceil($row[0] / $per_page);
$start = ($page - 1) * $per_page;
 $sql = "SELECT *, 
        FROM_UNIXTIME(start_time/1000, '%d-%M-%Y' ) start_time,  
        FROM_UNIXTIME(end_time/1000, '%d-%M-%Y' ) end_time
        from t_product LIMIT $start, $per_page";
$hasil = $koneksi->query($sql);
$i=1;
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query

echo 	'<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" data-paging="false" data-searching="true"> '.
			'<thead>'.
				'<tr>'.
					'<th>No.</th>'.
					'<th>Product Name</th>'.
					'<th>Total Quantity</th>'.
					'<th>Sold</th>'.
					'<th>Number Of Investors</th>'.
                    '<th>Amt Limit Per User</th>'.
					'<th>Interest Rate P.A</th>'.
                    '<th>Sort</th>'.
                    '<th>Start Time</th>'.
                    '<th>End Time</th>'.
                    '<th>Status</th>'.
                    '<th>Config</th>'.
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
                    $status = "On Sale";
                }
                else if($data['status'] == 2){
                    $status = "End";
                }
                else{
                    $status = "";
                    }		
        echo	"<tr>";
		echo	"<td name='uid'>".$data['id']."</td>";
		echo	"<td>".ucfirst($data['name'])."</td>";
		echo	"<td>Rp. ".number_format($data['total_amount'])."</td>";
        echo	"<td>???</td>";
        echo	"<td>???</td>";
        echo	"<td>Rp. ".number_format($data['personal_limit'])."</td>";
        echo	"<td>".ceil($data['rate'])."</td>";
        echo	"<td>".ucfirst($data['order'])."</td>";
        echo	"<td>".ucfirst($data['start_time'])."</td>";
        echo	"<td>".ucfirst($data['end_time'])."</td>";
		echo	"<td>".ucfirst($status)."</td>";
		echo	"<td>";
				//<!-- Split button -->
        echo            '<div class="btn-group">';
        echo              '<button type="button" class="btn btn-danger"><div class="fa fa-gear" </div></button>';
        echo              '<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">';
        echo                '<span class="caret"></span>';
        echo                '<span class="sr-only">Toggle Dropdown</span>';
        echo              '</button>';
        echo              '<ul class="dropdown-menu" role="menu">';
        echo                '<li><a href="lending_management_edit.php?id='.$data['id'].'" class="fa fa-edit"> Edit</a>';
        echo                '</li>';
        echo                '<li><a class="fa fa-remove" href="delete.php?id='.$data['id'].'" class="fa fa-Remove"> Remove</a>';
        echo                '</li>';
        echo              '</ul>';
        echo            '</div>';
		echo	'</td>';
		echo	'</tr>';
		
		$i++;
	}
 }
//disini berhenti perulangan



echo	'</tbody>';
echo	'</table>';

$start      = ( ( $page - $links ) > 0 ) ? $page - $links : 1;
        $end        = ( ( $page + $links ) < $last_page ) ? $page + $links : $last_page;

        $html       = '<ul class="pagination pagination-sm">';

        $class      = ( $page == 1 ) ? "disabled" : "";
        $html       .= '<li class="' . $class . '"><a href="?page=' . ( $page - 1 ) .'&count=' . $per_page .  '">&laquo;</a></li>';


        if ( $start > 1 ) {
            $html   .= '<li><a href="?&page=1&count=' . $per_page . '">1</a></li>';
            $html   .= '<li class="disabled"><span>...</span></li>';
        }

        for ( $i = $start ; $i <= $end; $i++ ) {
            $class  = ( $page == $i ) ? "active" : "";
            $html   .= '<li class="' . $class . '"><a href="?page=' . $i . '&count=' . $per_page . '">' . $i . '</a></li>';
        }

        if ( $end < $last_page ) {
            $html   .= '<li class="disabled"><span>...</span></li>';
            $html   .= '<li><a href="?page=' . $last_page . '&count=' . $per_page . '">' . $last_page . '</a></li>';
        }

        $class      = ( $page == $last_page ) ? "disabled" : "";
        $html       .= '<li class="' . $class . '"><a href="?page=' . ( $page + 1 ) . '&count=' . $per_page . '">&raquo;</a></li>';

        echo $html       .= '</ul>';


?>