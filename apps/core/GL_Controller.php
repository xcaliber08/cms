<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GL_Controller extends CI_Controller {

	public function __construct()

	{
		parent::__construct();

		// $this->load->helper('url');
		// $this->load->helper('cookie');
		// $this->load->model('Main_Model');

		// if($this->session->userdata('userid') === false && $this->session->userdata('propertyid') === false && $this->session->userdata('url') === false){
		// 	$this->session->sess_destroy();
		// 	redirect(URL . "login", 'location', 301);
		// }elseif($this->session->userdata('url') != URL){
		// 	$this->session->sess_destroy();
		// 	redirect(URL . "login", 'location', 301);
		// }else{
		// 	$uid = $this->session->userdata('userid');
		// 	$pid = $this->session->userdata('propertyid');
		// 	$user = $this->Main_Model->fetchUserById($uid,$pid);

		// 	if(!$user){
		// 		$this->session->sess_destroy();
		// 		redirect(URL . "login", 'location', 301);
		// 	}

		// 	if($this->input->ip_address() != $user['user_ip_address']){
		// 		$this->session->sess_destroy();
		// 		redirect(URL . "login", 'location', 301);
		// 	}elseif(strtotime($user['user_token_expire']) < strtotime(date('Y-m-d H:i:s'))){
		// 		$this->session->sess_destroy();
		// 		$authkey =  base64_encode( json_encode( $this->encryptdata->encrypt( array ( 'userid' => $user['user_id'] ) ) ) );
		// 		redirect(URL . "lockscreen?session=false&auth=" . $authkey . "&redirect=" . current_url(), 'location', 301);
		// 	}else{
		// 		$this->userinfo = $user;
		// 		$this->propertyinfo = $this->Main_Model->fetchProperty($pid);
				
		// 		foreach ($this->propertyinfo as $key => $value) {
		// 			$this->propertyinfo[$key]['policy'] = $this->Main_Model->fetchPolicy($value['property_id']);
		// 			$this->propertyinfo[$key]['otherpolicy'] = $this->Main_Model->fetchOtherPolicy($value['property_id']);
		// 			$this->propertyinfo[$key]['terms'] = $this->Main_Model->fetchTerms($value['property_id']);
		// 			$this->propertyinfo[$key]['advisory'] = $this->Main_Model->fetchAdvisory($value['property_id']);
		// 			$this->propertyinfo[$key]['email'] = $this->Main_Model->fetchEmail($value['property_id']);
		// 		}

		// 		if($pid != 0){
		// 			$data['propertyname'] = $this->propertyinfo[0]['property_name'];
		// 			$data['propertyurl'] = $this->propertyinfo[0]['web_url'];
		// 		}

		// 		$userflow = $this->Main_Model->fetchUserFlow($this->userinfo['user_role_id']);

		// 		$data['userflow']['view'] = array();
		// 		$data['userflow']['add'] = array();
		// 		$data['userflow']['edit'] = array();
		// 		$data['userflow']['delete'] = array();

		// 		foreach ($userflow as $key => $value) {
		// 			switch ($value['role_permission']) {
		// 				case 'view':
		// 					$data['userflow']['view'] =	explode(',', $value['module_id']);
		// 					break;
		// 				case 'add':
		// 					$data['userflow']['add'] =	explode(',', $value['module_id']);
		// 					break;
		// 				case 'edit':
		// 					$data['userflow']['edit'] =	explode(',', $value['module_id']);
		// 					break;
		// 				case 'delete':
		// 					$data['userflow']['delete'] = explode(',', $value['module_id']);
		// 					break;
		// 			}
		// 		}

		// 		$this->dataparam = $data;
		// 		$this->load->vars($data);
		// 	}
		// }
	}
}