<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class a_pendaftaranbbn1 extends BaruController
{

    public function a_pendaftaranbbn1()
    {
        parent::__construct();
    }

    public function index()
    {


//         $data_array = array();
//        $content = $this->load->view("a_pendaftaranbbn1/index_view", $data_array, true);
//  $this->load->view($content);
// echo $content;
        // $this->setSubtitle("DASHBOARD");
        // $this->setTitle("DASHBOARD");
        // $this->setContent($content);
        // $this->cetak();
         $this->load->view('a_pendaftaranbbn1/index_view'); // load html only
        //$this->load->view('a_pendaftaranbbn1/index');

    }
}
