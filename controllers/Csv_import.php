<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Csv_import extends CI_Controller {
 
 public function __construct()
 {
  parent::__construct();

 }

 function index()
 {
  $this->load->view('users/csv_view');
 }
  
}
