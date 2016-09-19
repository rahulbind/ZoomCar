<?php 
	if(isset($_POST)){
		$response['yourData'] = $_POST;
		$response['success'] = true;

		echo json_encode($response);
	}
?>