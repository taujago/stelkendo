<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class a_6_penulisanbbn1 extends BaruController
{

  public function a_6_penulisanbbn1()
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
