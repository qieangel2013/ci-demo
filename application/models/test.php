<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test Extends CI_Model
{

    function __construct()
    {
        $this->load->database();
        parent::__construct();
    }
   
    public function lists(){
        $this->db->select('*')->from('jx_house')->order_by('ID','desc')->limit(10)->get();
        echo 12;
    }
    public function inserts(){
        $arr = array('test' =>rand(10,100));
        $this->db->insert('test',$arr);
    }
    public function updates(){
        $set=array('id' =>2);
        $where = array('test' =>7);
        $this->db->update('test',$set,$where);
    }
}
