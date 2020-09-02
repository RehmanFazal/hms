<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class General_Model extends CI_Model{

	public function insert($tbl_name,$data){

        $tbl_key=array_keys($data);
        $tbl_val=array_values($data);
        $sql="INSERT INTO $tbl_name (".implode(',', $tbl_key).")". "VALUES ('".implode("','", $tbl_val)."')";
        $query=$this->db->query($sql);
        $last_id=$this->db->insert_id($query);
        
        return $last_id;

	}


}



?>