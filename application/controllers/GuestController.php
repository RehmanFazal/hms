<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuestController extends CI_Controller {


public function __construct(){

	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');


}


public function index(){

	$this->load->view('guest_profile');
	

}

/* Add Guest Profile Start */

public function add(){


		$guest_name=$this->input->post('guest_name');
		$guest_surname=$this->input->post('guest_surname');
		$sex=$this->input->post('sex');
		$dob=$this->input->post('guest_dob');
		$martial_status=$this->input->post('martial_status');
		$nationality=$this->input->post('nationality');
		$guest_doc_type=$this->input->post('guest_doc_type');
		$number=$this->input->post('number');
		$country_expedition=$this->input->post('country_expedition');
		$city=$this->input->post('city');
		$address=$this->input->post('address');
		$telephone_1=$this->input->post('telephone_1');
		$telephone_2=$this->input->post('telephone_2');
		$email=$this->input->post('email');
		$company=$this->input->post('company');
		$position=$this->input->post('position');
		$vehicle=$this->input->post('vehicle');
		$registration=$this->input->post('registration');
		$observations=$this->input->post('observations');


		$insert_data=array(

			'name'=>$guest_name,
			'surname' =>$guest_surname,
			'sex'=>$sex,
			'dob'=>$dob,
			'marital_status'=>$martial_status,
			'nationality'=>$nationality,
			'document_type'=>$guest_doc_type,
			'number'=>$number,
			'country'=>$country_expedition,
			'city'=>$city,
			'address'=>$address,
			'telephone'=>$telephone_1,
			'telephone2'=>$telephone_2,
			'mail'=>$email,
			'company'=>$company,
			'position'=>$position,
			'vehicle'=>$vehicle,
			'registration'=>$registration,
			'observations'=>$observations

		);


        $tbl_name='guest';

		$this->load->model('General_Model');
		$result=$this->General_Model->insert($tbl_name,$insert_data);

		if(!empty($result)){

			$this->session->set_flashdata('success', "Record Inserted Successfully !!"); 
			$this->load->view('employe_profile');

		}
		else{

			$this->session->set_flashdata('error',"Sorry,Record Inserted failed.");
			$this->load->view('employe_profile');
		}



}

/* Add Guest Profile End  */



}