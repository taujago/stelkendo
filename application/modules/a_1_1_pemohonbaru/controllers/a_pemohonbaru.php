<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class a_1_pemohonbaru extends BaruController
{

    public function aPemohonbaru()
    {
        parent::__construct();

        // $this->load->helper("form");
    }

    public function index()
    {
        $tempReturn['listPerusahaan'] = $this->getListPerusahaan();
        $this->load->view('index_view', $tempReturn);
    }

    public function getTablePemohon()
    {

        $data = array(
            "LoginInfo" => array(
                "LoginName" => $this->user,
                "Salt"      => $this->salt,
                "AuthHash"  => md5($this->user . "_" . $this->salt . md5($this->pass)),
            ),
        );

        $data_json = json_encode($data);
        // echo $data_json; exit;
        $pemohon = $this->executeService("bpkb_list_pemohon_web", $data_json);
        //show_array($pemohon); exit;
        echo json_encode($pemohon['data']);

    }

    public function getListPerusahaan()
    {
        $data = array(
            "LoginInfo" => array(
                "LoginName" => $this->user,
                "Salt"      => $this->salt,
                "AuthHash"  => md5($this->user . "_" . $this->salt . md5($this->pass)),
            ),
        );

        $data_json = json_encode($data);

        // echo $data_json; exit;
        $pemohon = $this->executeService("bpkb_list_perusahaan_web", $data_json);

        $arr_pemohon = array();
        foreach ($pemohon['data']['message']->bpkb_list_perusahaan_web as $row):
            $arr_pemohon[$row->COMPANY_ID] = $row->COMPANY_NAMA;
        endforeach;

        return $arr_pemohon;

    }

}
