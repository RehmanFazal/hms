<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CountryModel extends CI_Model{


	public function fetch_country($search_value){

		$sql="SELECT `countryName` FROM `apps_countries_detailed` WHERE `countryCode` LIKE "."'".$search_value."%'";
		$sql_result=$this->db->query($sql);
		$result=$sql_result->result_array();

		return $result;

			

	}



}