<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyController extends CI_Controller {


public function __construct(){

	parent::__construct();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->model('company/CompanyModel');


}


public function index(){

	$this->load->view('company_profile');


}

/* Add Company Profile Start */

public function add(){

		$name=$this->input->post('name');
		$company_name=$this->input->post('company_name');
		$rut=$this->input->post('rut');
		$country=$this->input->post('country');
		$town=$this->input->post('town');
		$postal_code=$this->input->post('postal_code');
		$telephone=$this->input->post('telephone');
		$contact_in_company=$this->input->post('contact_in_company');
		$contact_name=$this->input->post('contact_name');
		$contact_rank=$this->input->post('contact_rank');
		$contact_email=$this->input->post('contact_email');
		$contact_telephone=$this->input->post('contact_telephone');

		$insert_data=array(
			'name'=>$name,
			'company_name' =>$company_name,
			'rut'=>$rut,
			'country'=>$country,
			'town'=>$town,
			'postal_code'=>$postal_code,
			'telephone'=>$telephone,
			'contact_in_company'=>$contact_in_company,
			'contact_name'=>$contact_name,
			'Rank'=>$contact_rank,
			'email'=>$contact_email,
			'contact_telephone'=>$contact_telephone

		);


        $tbl_name='company';

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

/* Add Company Profile End  */



/* Edit Company Profile   */


	public function editCompany(){

		$id=$_REQUEST['id'];

		$data['fields']=$this->CompanyModel->getItemData($id);

		$this->load->view('company_edit',$data);


	}

/*End Company List*/



/* End Get Company List 	*/
public function showCompanyList(){

	$data['fields']=$this->CompanyModel->getListData();

	$this->load->view("header");
	$this->load->view("company_list",$data);
	$this->load->view("footer");


}

/*  End Get Company List  */


/*Start Update Company */

	public function updateCompany(){

		$updateID=$this->input->post('id');

		$name=$this->input->post('name');
		$company_name=$this->input->post('company_name');
		$rut=$this->input->post('rut');
		$country=$this->input->post('country');
		$town=$this->input->post('town');
		$postal_code=$this->input->post('postal_code');
		$telephone=$this->input->post('telephone');
		$contact_in_company=$this->input->post('contact_in_company');
		$contact_name=$this->input->post('contact_name');
		$contact_rank=$this->input->post('contact_rank');
		$contact_email=$this->input->post('contact_email');
		$contact_telephone=$this->input->post('contact_telephone');

		$updateData=array(
			'name'=>$name,
			'company_name' =>$company_name,
			'rut'=>$rut,
			'country'=>$country,
			'town'=>$town,
			'postal_code'=>$postal_code,
			'telephone'=>$telephone,
			'contact_in_company'=>$contact_in_company,
			'contact_name'=>$contact_name,
			'Rank'=>$contact_rank,
			'email'=>$contact_email,
			'contact_telephone'=>$contact_telephone

		);


        $tbl_name='company';

		$this->load->model('General_Model');
		$result=$this->General_Model->update($updateData,$updateID,$tbl_name);

		if(!empty($result)){

			$this->session->set_flashdata('success', "Record Update Successfully !!"); 
			redirect('CompanyController/showCompanyList');

		}
		else{

			$this->session->set_flashdata('error',"Sorry,Record Update failed.");
			$this->load->view('company_profile');
		}



	}

/*End Update Company  */


/*Start Delete Company*/

	public function deleteCompany(){

		$deleteID=$_REQUEST['id'];

		$result=$this->CompanyModel->delete($deleteID);

		if(!empty($result)){

			$this->session->set_flashdata('success', "Record Delete Successfully !!"); 
			redirect('CompanyController/showCompanyList');

		}
		else{

			$this->session->set_flashdata('error',"Sorry,Record Delete failed.");
			redirect('CompanyController/showCompanyList');
		}



	}


/*End Delete Company*/




}