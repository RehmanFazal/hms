<?php if(! defined ('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class GuestsModel extends CI_Model
{
	
	public function getListData(){

		$sql="SELECT * FROM `guest`";
		$sql_result=$this->db->query($sql);
		$result=$sql_result->result_array();

		return $result;
	}

	public function delete($id){

    	$sql="DELETE FROM `guest` WHERE id=".$id;
    	$excuteQuery=$this->db->query($sql);
    	$queryResult=$this->db->affected_rows();

    	return $queryResult;

    }

}





?>