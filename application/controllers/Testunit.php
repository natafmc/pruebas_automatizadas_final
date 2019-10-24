<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testunit extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
        $this->load->library('unit_test');
        
    }

    private function division($a, $b){
        return $a/$b;
    }

    public function index(){
        echo "UNit Test";
        $test = $this->division(6,3);
        $expect_result = 2;
        $test_name = "Division";
        echo $this->unit->run($test, $expect_result, $test_name);
    }

}