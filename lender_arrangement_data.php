<?php

include 'koneksi.php';

$per_page = 10;
$per_page    = (isset($_GET['count'])) ? (int)$_GET['count'] : $per_page;
$page        = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$links       = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 3;
$page_query  = mysqli_query($koneksi,"SELECT COUNT(*) FROM t_user");
$row         = mysqli_fetch_array($page_query);
$last_page   = ceil($row[0] / $per_page);
$start = ($page - 1) * $per_page;
 $sql = "SELECT t_purchase_order.id,
         t_user.uid,
		 t_user.first_name,
		 t_purchase_order.amount,
		 t_purchase_order.name,
		 t_purchase_order.coupon_id,
		 t_order_pay_info.tx_id,
		 FROM_UNIXTIME(t_purchase_order.create_time/1000, '%d-%M-%Y' ) create_time,
         FROM_UNIXTIME(t_purchase_order.pay_time/1000, '%d-%M-%Y' ) pay_time,
		 t_purchase_order.`status`
    FROM t_purchase_order 
	 JOIN t_user ON t_purchase_order.uid  = t_user.uid
	 JOIN t_order_pay_info  ON t_purchase_order.id  = t_order_pay_info.id order by t_purchase_order.id desc LIMIT $start, $per_page";

$hasil = $koneksi->query($sql);
$i=1;
$hasil = $koneksi->query($sql); // Menjalankan perintah tersebut dengan fungsi mysqli-query

echo 	'<table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" data-paging="false" data-searching="true"> '.
			'<thead>'.
				'<tr>'.
                    '<th>No</th>'.
                    '<th>ID</th>'.
					'<th>UID</th>'.
					'<th>User Name</th>'.
					'<th>Top Up Amount</th>'.
					'<th>Product Name</th>'.
					'<th>Coupon Type</th>'.
                    '<th>Transaction Number</th>'.
					'<th>Create Time</th>'.
                    '<th>Pay Time</th>'.
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
        
        

        if($data['status'] == 1){
                    $status = "Pending";
                }
                else if($data['status'] == 2){
                    $status = "Verified";
                }
                else{
                    $status = "Reject";
                    }		
        echo	"<tr>";
        
        echo	"<td name='uid'>".$i."</td>";
        echo	"<td name='uid'>".$data['id']."</td>";
		echo	"<td name='uid'>".$data['uid']."</td>";
		echo	"<td>".ucfirst($data['first_name'])."</td>";
		echo	"<td>Rp. ".number_format($data['amount'])."</td>";
        echo	"<td>".ucfirst($data['name'])."</td>";
        echo	"<td>".ucfirst($data['coupon_id'])."</td>";
        echo	"<td>".ucfirst($data['tx_id'])."</td>";
        echo	"<td>".ucfirst($data['create_time'])."</td>";
        echo	"<td>".ucfirst($data['pay_time'])."</td>";
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
        echo                '<li><a href="lender_arrangement_detail.php?id='.$data['id'].'" class="fa fa-edit"> Edit</a>';
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