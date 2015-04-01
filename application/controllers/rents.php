<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rents extends CI_Controller {
   
    public function __construct(){
        parent::__construct();
		$this->load->model(array('test'));
    }

    public function index(){
    	echo $this->test->lists();
    }
   public function inserts(){
   	echo $this->test->inserts();
   }
   public function updates(){
   	echo $this->test->updates();
   }
}