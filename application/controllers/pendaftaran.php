<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pendaftaran extends baru_controller  {

	function pendaftaran(){
		parent::__construct();
		// echo "pilihan ".$this->session->userdata("pilihan"); exit;
	}
	
	
	public function index(){

		$data_array=array();
		$content = $this->load->view("admin/index_view",$data_array,true);

		$this->set_subtitle("DASHBOARD");
		$this->set_title("DASHBOARD");
		$this->set_content($content);
		$this->cetak();
	}
}
?>

