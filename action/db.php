<?php
// database connection
include 'db_connection.php';
// database query
function JT_update($data){
	$id  = $data['id'];
	$email = $data['jt_email_up'];
	$name = $data['name'];
	$data_in = array
			(
			'dob'		=> $data['dob'],
			'PIN_CODE'	=> $data['PIN_CODE'],
			'number'	=> $data['number'],
			'color'		=> $data['color'],
			'time'		=> $data['time'],
			'tenth'		=> $data['tenth'],
			'twelfth'	=> $data['twelfth'],
			'gender'	=> $data['gender']
			);
	$serial_update = serialize($data_in);
	$result = JT_db()->query("UPDATE ".T_NAME." SET email='$email',name='$name',data='$serial_update' WHERE id=$id");
	return $result?$result:false;
}
function JT_insert($data){
	$email = $data['jt_email'];
	$password = md5($data['password']);
	$name = $data['name'];
	$data_in = array
			(
			'dob'		=> $data['dob'],
			'PIN_CODE'	=> $data['PIN_CODE'],
			'number'	=> $data['number'],
			'color'		=> $data['color'],
			'time'		=> $data['time'],
			'tenth'		=> $data['tenth'],
			'twelfth'	=> $data['twelfth'],
			'gender'	=> $data['gender'],
			);
		$serial_insert  = serialize($data_in);
		return JT_db()->query("INSERT INTO ".T_NAME."(email,name,password,data) VALUES ('$email','$name','$password','$serial_insert')")?true:false;
}
function JT_select($id){
		$result 		= JT_db()->query("SELECT * FROM ".T_NAME." WHERE id='$id'");
		return ($result->num_rows > 0)?$result->fetch_assoc():false;
}
// 9575721282
// mausi no
// actions validation table data list functions
function JT_list_tr($page){
		$sel = array();
		$limit 	= 3;
		$offset 	= (($limit*$page)-$limit);
		$result 		= JT_db()->query("SELECT * FROM ".T_NAME." LIMIT $limit OFFSET $offset");
		if ($result->num_rows > 0) {
		$table = '';
			while ($row = $result->fetch_assoc()) {
				$my_data 	= unserialize($row['data']);
		    	$id 		= $row['id'];
		    	$update  	= '<div class="CP"><a class="JT_buttn updateAnc" data-upId='.$id.'>Update</a></div>';
		    	$delete  	= '<div class="delete CP MT"><a class="JT_buttn deleteAnc" data-delete='.$id.'>Delete</a></div>';
				$table	   .=  "<tr>";
				$table	   .= "<td>".$row['email']."</td>";
				$table	   .= "<td>".$row['name']."</td>";
				$table	   .= "<td>".$my_data['number']."</td>";
				$table	   .= "<td>".$my_data['dob']."</td>";
				$table	   .= "<td>".$my_data['gender']."</td>";
				$table	   .= "<td>".$my_data['time']."</td>";
				$table	   .= "<td><div>tenth - ".$my_data['tenth']." twelfth - ".$my_data['twelfth']."</div></td>";
				$table	   .= "<td>".$my_data['PIN_CODE']."</td>";
	            $table	   .= "<td><div>".$update.$delete."</div></td>";
				$table	   .=  "</tr>";
			}
			$send['pagi']  	= next_prev($page,$limit);
    		$send['table'] 	= $table;
	    	return $send;
		}else{
			return '<h1 class="NO_REGIS_FOUND">No Registration Found Sorry !</h1>';
		}
}
function next_prev($pageno,$limit){
	$sql = JT_db()->query("SELECT * FROM ".T_NAME."");
	$last_page = $sql->num_rows/$limit;
	$pagi = '';
		if ($pageno < $last_page) {
			$pagi .= '<div class="FR CP"><a class="JT_buttn pageNo_send" data-pageno="'.($pageno+1).'" id="paginat_">next</a></div>';
		}
		if($pageno>1) {
			$pagi .= '<div class="FR CP"><a class="JT_buttn pageNo_send" data-pageno="'.($pageno-1).'" id="paginat_">previous</a></div>';
		}
		return $pagi;

}
function JT_delete($id){
	$sql = JT_db()->query("DELETE FROM ".T_NAME." WHERE id=$id");
		return $sql?true:false;
}

function validation_common($data,$key,$valid_condi){
	// blank required validation
	if ($valid_condi == 'required') {$validat["".$key.""] = isset($data) && $data == ''?'enter your '.$key:'';}
	if ($valid_condi == 'old_candidate' && $key == 'dob' && $data !==''){
		$validat['dob'] = ((explode('-', $data)[0]) >= (date('Y')))?'born in '.(explode('-', $data)[0]).'!then you can"t fill this form':'';
	}else{
		$validat['dob'] = 'enter date of birth';
	}
	// number validation
	if ($valid_condi == 'numeri_int') {
		if ($key == 'number' && is_numeric($data) && $data !== '') {
		$validat['number'] = 'no should be numeric';
		$validat['number'] = strlen($data) !== 10?'your contact contain more than 10 numbers':'';
		}else{
		$validat['number'] = 'enter contact no';
		}

		if ($key == 'PIN_CODE' && is_numeric($data) && $data !== '') {
		$validat['PIN_CODE'] = (strlen($data) > 5 || strlen($data) < 5)?'Invalid PIN!(hint:"it exactly contain 5-NO")':'';
		}else{
		$validat['PIN_CODE'] = 'enter your pin-code';
		}
	}
	return $validat;
}