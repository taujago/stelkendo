<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}

class a_1_1_pemohonbaru extends BaruController
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

    //$this->load->view('index_view');
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
  public function getListPendaftar($parameter)
  {
    #code
    $data = array(
      "LoginInfo" => array(
        "LoginName" => $this->user,
        "Salt"      => $this->salt,
        "AuthHash"  => md5($this->user . "_" . $this->salt . md5($this->pass)),
      ),
      "Param"=> array(
        "v_tgl"=>"20160826",
        "v_pemohon"=>"5360",
        "v_bbn1"=>"0"
      )
    );

      $data_json = json_encode($data);
      $pemohon = $this->executeService("list_pendaftaran", $data_json);
      /*RESPON
      Array
            (
            [data] => Array
                (
                    [result] => true
                    [message] => stdClass Object
                        (
                            [list_pendaftaran] => Array
                                (
                                    [0] => stdClass Object
                                        (
                                            [DAFT_ID] => 1067
                                            [NO_BPKB] => M 02178342
                                            [NO_RANGKA] => MH1JBP115GK413118
                                            [NO_FAKTUR] => FH/FA5/013379/P
                                            [BARCODE] => MWR9PBMW011608260063
                                            [PEMOHON_ID] => 5360
                                            [PEMOHON_NAMA] => HONDA JAS
                                            [TIPE_DAFTARAN] =>
                                            [DIPLOMAT] => 0
                                            [SUDAH_DIPROSES] => 1
                                            [TGL_DAFTAR] => 20160826
                                        )
       */
      //show_array($pemohon['data']['message']->list_pendaftaran[0]->DAFT_ID);exit;

    }

  }
