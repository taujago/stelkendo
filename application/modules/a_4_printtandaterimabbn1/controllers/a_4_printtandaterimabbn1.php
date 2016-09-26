<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class a_4_printtandaterimabbn1 extends BaruController
{

  public function a_4_printtandaterimabbn1()
  {
    parent::__construct();

    // $this->load->helper("form");
  }

  public function index()
  {
    // $tempReturn['listPerusahaan'] = $this->getListPerusahaan();

    $font_arr = array('arial' => 'arial',
                          'verdana' => 'verdana' );

    $data_array['font_arr'] = $font_arr;
    $this->load->view('index_view', $data_array);

    //$this->load->view('index_view');
  }


  }
