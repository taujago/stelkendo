<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class a_8_laporanbbn1 extends BaruController
{

  public function a_8_laporanbbn1()
  {
    parent::__construct();

    // $this->load->helper("form");
  }

  public function index()
  {
    // $tempReturn['listPerusahaan'] = $this->getListPerusahaan();
    $this->load->view('index_view');

    //$this->load->view('index_view');
  }




  }