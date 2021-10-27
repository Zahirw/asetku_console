<?php
    require_once 'paginator.class.php';
 
    $conn       = new mysqli( '127.0.0.1', 'root', '', 'asetku' );
 
    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 5;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query      = "SELECT uid, phone_number, first_name FROM t_user";
 
    $Paginator  = new Paginator( $conn, $query );
 
    $results    = $Paginator->getData( $limit, $page );
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Pagination</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%" data-paging="false" >
                        <thead>
                                <tr>
                                <th>uid</th>
                                <th>phone number</th>
                                <th>Name</th>
                        </tr>
                        </thead>
                        <tbody>
                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
						<tr>
								<td><?php echo $results->data[$i]['uid']; ?></td>
								<td><?php echo $results->data[$i]['phone_number']; ?></td>
								<td><?php echo $results->data[$i]['first_name']; ?></td>
						</tr>
				<?php endfor; ?>
                        </tbody>
                </table>
                    <?php echo $Paginator->createLinks( $links, 'pagination pagination-sm' ); ?> 
                
        </div>
        </body>
</html>