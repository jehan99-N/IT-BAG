<?php
	//connection
	include 'conn.php';
 
	$action = 'fetch';
 
	if(isset($_GET['action'])){
		$action = $_GET['action'];
	}
 
	if($action == 'fetch'){
		$output = '';
		$sql = "SELECT * FROM users";
		$query = $conn->query($sql);
		while($row = $query->fetch_assoc()){
            
			$output .= "
				<tr>
					<td>".$row['ID']."</td>
					<td>".$row['username']."</td>
					<td>".$row['email']."</td>
					<td>".$row['phone']."</td>
					<td>".$row['question']."</td>
					<td>".$row['display_name']."</td>
					<td><button class='btn btn-sm btn-danger delete_product' data-id='".$row['ID']."'>Delete</button></td>
				</tr>
			";
            

		}
 
		echo json_encode($output);
	}
 
	if($action == 'delete'){
		$id = isset($_POST['id']) ? $_POST['id'] : '';
        
		$output = array();
		$sql = "DELETE FROM users WHERE ID= '$id' ";
		if($conn->query($sql)){
			$output['status'] = 'success';
			$output['message'] = 'Member deleted successfully';
		}
		else{
			$output['status'] = 'error';
			$output['message'] = 'Something went wrong in deleting the member';
		}
 
		echo json_encode($output);
 
	}
 ?>

<?php
    
    