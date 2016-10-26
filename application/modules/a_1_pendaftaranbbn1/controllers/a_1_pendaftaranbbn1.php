<?php if (!defined('BASEPATH')) {
  exit('No direct script access allowed');
}
// Response :)
// Array
// (
//     [data] => Array
//         (
//             [result] => true atau false
//             [message] => ?
//             [message_err] => ?
//         )
//
//     [success] => 1
// )
class a_1_pendaftaranbbn1 extends BaruController
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
public function pemohonbaru()
{
  $tempReturn['listPerusahaan']=$this->getListPerusahaan();
  $this->load->view('pemohon_view',$tempReturn);
}

function getListPerusahaan() {
  $data =  array(
    "LoginInfo" => array (
    "LoginName" => $this->user,
    "Salt" =>  $this->salt,
    "AuthHash" =>  md5( $this->user . "_".$this->salt. md5($this->pass) )

    )
  );

  $data_json = json_encode($data);

  // echo $data_json; exit;
  $pemohon = $this->executeService("bpkb_list_perusahaan_web",$data_json);
  show_array($pemohon['data']);
  exit;

  show_array($pemohon); exit;

  // echo $pemohon;
  //  exit;

  $arr_pemohon = array();
  foreach($pemohon['data']['message']->bpkb_list_perusahaan_web  as $row):
    $arr_pemohon[$row->COMPANY_ID] = $row->COMPANY_NAMA;
  endforeach;
  // show_array($arr_pemohon);
  // echo  $arr_pemohon;
  // exit;
  return  $arr_pemohon;

}

public function getListDataPemohon()
{
  # code...
  $data =  array(
    "LoginInfo" => array (
    "LoginName" => $this->user,
    "Salt" =>  $this->salt,
    "AuthHash" =>  md5( $this->user . "_".$this->salt. md5($this->pass) )

    )
  );

  $data_json = json_encode($data);
  $tempFeedbackService = $this->executeService("bpkb_list_pemohon_web",$data_json);
//show_array($tempFeedbackService['data']);exit;
 /*Array
(
    [data] => Array
        (
            [0] => stdClass Object
                (
                    [PEMOHON_ID] => 5351
                    [PEMOHON_REG] => 000168//072016
                    [PEMOHON_NAMA] => YBS
                    [COMPANY_ID] => 123
                    [COMPANY_NAMA] => 2 NAGA
                    [BANK_NAMA] => JHJU
                    [PEMOHON_REK] => YHT
                    [PEMOHON_TELP] => 454
                    [PEMOHON_HP] => 365
                    [PEMOHON_ALAMAT] => test
                    [TGL_DAFTAR] => 01-AUG-16
                    [STATUS] => 1
                    [PEMOHON_JENIS] => BIROJASA
                )
*/
show_array( $tempFeedbackService['data']);
//   $tempArray = array();
//   foreach($tempFeedbackService['data'] as $row):
//     // $tempArray[$row] = $row->id;
//   endforeach;
// echo $tempArray;
// exit;
}

/** [bpkb_add_pemohon_web ] */
public function bpkb_add_pemohon_web(){

 // $form_data = $this->input->post();
 // show_array($form_data);exit();
  $data =  array(
    "LoginInfo" => array (
    "LoginName" => $this->user,
    "Salt" =>  $this->salt,
    "AuthHash" =>  md5( $this->user . "_".$this->salt. md5($this->pass) )
  ),
  "Param"=>array(
      "v_pemohon_nama"   => $this->input->post('idPbb1PemohonNamaInput'),
          "v_company_id"   => $this->input->post('idPbb1PemohonAlamatInput'),
                "v_bank_id"   => $this->input->post('idPbb1PemohonNoTelpInput'),
        "v_pemohon_rek"   => $this->input->post('idPbb1PemohonNoHpInput'),
      "v_pemohon_telp"   => $this->input->post('idPbb1PemohonNamaBank'),
          "v_pemohon_hp"   => $this->input->post('idPbb1PemohonNoRek'),
      "v_pemohon_alamat"   => $this->input->post('idPbb1PemohonNamaPerusahaan'),
      "v_pemohon_jenis"   => $this->input->post('idTanggalBBN1_modal_kb_pbb_add_pemohon'),
      "v_id_petugas"   => $this->input->post('idPbb1PemohonNamaJenis')
  )
  );
// show_array(  $data);exit();
  $data_json = json_encode($data);
  $tempFeedbackService = $this->executeService("bpkb_add_pemohon_web",$data_json);
  echo json_encode($tempFeedbackService);
exit();
}

public function bpkb_pendaftaran_add(){

  $form_data = $this->input->post();
  show_array($form_data);//exit();
  // [idTanggalBBN1_modal_kb_pbb_add] => 34434
  // [idJenisPemohonBBN1] => BIROJASA
  // [PEMOHON_ID] => 5356
  // [no_resi] => 23-424-233

		$data =  array(
				"LoginInfo" => array (
						"LoginName" => $this->user,
						"Salt" =>  $this->salt,
						"AuthHash" =>  md5( $this->user . "_".$this->salt. md5($this->pass) )   // algo   md5(user+md5(pass))
				),
				"Param" => array(

						"vNoRangka"	=> $this->input->post('idPbb1PemohonNamaInput'),
						"vTglDaftar"   => $this->input->post('idTanggalBBN1_modal_kb_pbb_add'),
						"vNoBPKB"   => $this->input->post('11'),
						"vPemohonID"   => $this->input->post('11'),
						"vPetugasID"   => $this->input->post('11'),
						"vBarcodeBank"   => $this->input->post('no_resi'),
						"vLoketNo"   => $this->input->post('11'),
						"vEnrollmentType"   => $this->input->post('11'),
						"vTypeDaftaran"   => $this->input->post('idJenisPemohonBBN1'),
						"vMerkID"   => "1"
				));

		$data_json = json_encode($data);
		// echo $data_json;
		// echo "sebelum dikirim " . $data_json;
  $tempFeedbackService = $this->executeService("bpkb_pendaftaran_add",$data_json);
		// echo "<hr />";
		// header('Content-type: text/xml');
	 show_array( $tempFeedbackService);
	}

}
