<?php
include 'db.php';
// insert 
if (isset($_POST['jt_email']) && isset($_POST)) {
	// print_r($_POST);
	// return;
	$error['jt_email'] 	= validation_common($_POST['jt_email'],'email','required')['email'];
	$error['name'] 		= validation_common($_POST['name'],'name','required')['name'];
	$error['number'] 	= validation_common($_POST['number'],'number','numeri_int')['number'];
	$error['PIN_CODE'] 	= validation_common($_POST['PIN_CODE'],'PIN_CODE','numeri_int')['PIN_CODE'];
	$error['dob']	 	= validation_common($_POST['dob'],'dob','old_candidate')['dob'];
	$error['color']  	= validation_common($_POST['color'],'color','required')['color'];
	$error['time']	 	= validation_common($_POST['time'],'time','required')['time'];
	$error['password'] 	= validation_common($_POST['password'],'password','required')['password'];
	$error['tenth'] 	= !isset($_POST['tenth'])?'mention tenth result':'';
	$error['twelfth'] 	= !isset($_POST['twelfth'])?'mention twelfth result':'';
	$error['gender']	= !isset($_POST['gender'])?'mention gender':'';
	$err = false;
	if (!empty($error)) {
		foreach ($error as $key => $value) {
			if ($value != '') {$err = true;}
		}
	}
	if (!$err) {
		$message = JT_insert($_POST)?['success'=>1]:['err_db'=>1];
	}else{
      	$message['error_field'] = $error;
	}
	echo json_encode($message);
}

// update
if (isset($_POST['jt_email_up']) && isset($_POST)) {
	$error['jt_email_up'] = validation_common($_POST['jt_email_up'],'email','required')['email'];
	$error['name'] 		  = validation_common($_POST['name'],'name','required')['name'];
	$error['number'] 	  = validation_common($_POST['number'],'number','numeri_int')['number'];
	$error['PIN_CODE'] 	  = validation_common($_POST['PIN_CODE'],'PIN_CODE','numeri_int')['PIN_CODE'];
	$error['dob']	 	  = validation_common($_POST['dob'],'dob','old_candidate')['dob'];
	$error['color']  	  = validation_common($_POST['color'],'color','required')['color'];
	$error['time']	 	  = validation_common($_POST['time'],'time','required')['time'];
	$error['tenth'] 	  = !isset($_POST['tenth'])?'mention result':'';
	$error['twelfth'] 	  = !isset($_POST['twelfth'])?'mention result':'';
	$error['gender']	  = !isset($_POST['gender'])?'mention gender':'';
	$err = false;
	if (!empty($error)) {
		foreach ($error as $key => $value) {
			if ($value != '') {
				$err = true;
			}
		}
	}
	if (!$err) {
		$JT_update_data = $_POST;
		$message = JT_update($JT_update_data)?['success'=>true]:['err_db'=>false];
	}else{
		$message['error_field'] = $error;
	}
	echo json_encode($message);
}

if (isset($_POST['pageNo'])) {
	$message = JT_list_tr($_POST['pageNo']);
	echo json_encode($message);
}

if (isset($_POST['update_id'])) {
	$d_get = JT_select($_POST['update_id']);
	$d_sri  	 = unserialize($d_get['data']);
	$message = array(
					'id'=>$d_get['id'],
					'jt_email_up' =>$d_get['email'],
					'name' =>$d_get['name'],
					'dob' =>$d_sri['dob'],
					'PIN_CODE' =>$d_sri['PIN_CODE'],
					'number' =>$d_sri['number'],
					'color' =>$d_sri['color'],
					'time' =>$d_sri['time'],
					'tenth' =>$d_sri['tenth'],
					'twelfth' =>$d_sri['twelfth'],
					'gender' =>$d_sri['gender'],
					'tenth' => $d_sri['tenth'],
					'twelfth' => $d_sri['twelfth']
					);
	echo json_encode($message);
}


if (isset($_POST['delid'])) {
	$message = JT_delete($_POST['delid']);
	echo json_encode($message);
}