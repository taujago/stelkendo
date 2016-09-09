<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class a_pendaftaranbbn1 extends BaruController
{

    public function a_pendaftaranbbn1()
    {
        parent::__construct();

        // $this->load->helper("form");
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

        $data =  array(
                "LoginInfo" => array ( 
                        "LoginName" => $this->user,
                        "Salt" =>  $this->salt,
                        "AuthHash" =>  md5( $this->user . "_".$this->salt. md5($this->pass) )
               
                ),
                 "Param"=>array("pemohonJenis"=>"BIROJASA")  

                );

        $data_json = json_encode($data);

       // echo $data_json;
        //exit;




        // $pemohon = $this->executeService("refresh_pemohon",$data_json); 
        // $arr_pemohon = array();
        // foreach($pemohon['data']['M_PEMOHON'] as $row): 
        //     $arr_pemohon[$row->PEMOHON_ID] = $row->PEMOHON_NAMA;      // 

        // endforeach;

        //$content['arr_pemohon'] = "";

         $this->load->view('index_view'); // load html only
        //$this->load->view('a_pendaftaranbbn1/index');

    }
}
