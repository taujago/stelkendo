<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class home extends BaruController
{

    // public function pendaftaran()
    // {
    //     parent::__construct();
    //     // echo "pilihan ".$this->session->userdata("pilihan"); exit;
    // }

    public function index()
    {

        $data_array = array();
        $content    = $this->load->view("index_home", $data_array, true);

        $this->setSubtitle("DASHBOARD");
        $this->setTitle("DASHBOARD");
        $this->setContent($content);
        $this->cetak();

    }
}
