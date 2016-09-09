<?php
class BaruController extends CI_Controller
{

    // public $pilihan;
    // public function BaruController()
    // {
    //     parent::__construct();

    //     // if($this->session->userdata('login') == false ) {
    //     //     redirect('login/');
    //     // }

    //     // sleep(1);

    //     // $userlogin = $this->session->userdata("userlogin");
    //     // if($userlogin==false) {
    //     //     redirect("login");
    //     // }

    // }

var $url = 'http://180.250.16.227/gondolbasor/index.php/rocknroll';

// var $url = 'http://localhost/gondolbasor/index.php/rocknroll';


var $user = "3PILAR";
var $pass = "rahasia.123321";
var $salt = "1234556678";


    public function setContent($str)
    {
        $this->content['content'] = $str;
    }

    public function setTitle($str)
    {
        $this->content['title'] = $str;
    }

    public function setSubtitle($str)
    {
        $this->content['subtitle'] = $str;
    }

    public function cetak()
    {
        $arr = array();
        $this->load->view('admin/admin_theme', $this->content);

    }

    public function executeService($method, $json_data)
    {

        // echo $json_data; exit;
        $req_url = $this->url . "/" . $method;
        //echo $req_url;  
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        $post_data = array("data"=>$json_data);
        curl_setopt($ch, CURLOPT_URL, $req_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //execute post
        $result = curl_exec($ch);
        // echo $result;

        $obj = json_decode($result);
        $array = (array) $obj;

        $info = curl_getinfo($ch);

        $success = ($info['http_code'] == "200") ? true : false;
      
        curl_close($ch);
        return array("data" => $array, "success" => $success);

        
    }

     public function executeService2($method, $json_data)
    {

        // echo $json_data; exit;
        $req_url = $this->url . "/" . $method;
        //echo $req_url;  
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        $post_data = array("data"=>$json_data);
        curl_setopt($ch, CURLOPT_URL, $req_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        //execute post
        $result = curl_exec($ch);
        echo $result;
 
    }

    public function validasi($daft_id)
    {

        $userdata = $this->session->userdata("userdata");

        $this->db->where("daft_id", $daft_id);
        $data_daft = $this->db->get("t_pendaftaran")->row();

        $no_rangka = $data_daft->no_rangka;

        $this->db->where("id_polda", $data_daft->id_polda);
        $data_polda = $this->db->get("m_polda")->row();

        // $this->db->where("id_polda",$this->session->userdata("id_polda"));
        // $this->db->where("leasing_id",$userdata['leasing_id']);
        // $aut_data = $this->db->get("polda_leasing")->row();

        $aut_data = $this->getAuthData();

        $data_service = array("LoginInfo" => array(
            "LoginName" => $aut_data->service_user,
            "Salt" => $aut_data->service_salt,
            "AuthHash" => md5($aut_data->service_salt . md5($aut_data->service_user . $aut_data->service_pass)),
        ),
            "NoRangkaList" => array(0 => $no_rangka),
        );
        //echo $data_service;
        $json_data = json_encode($data_service);
        // echo "<pre>";
        // echo $json_data;
        // echo "</pre>";
        // exit;

        $ret_service = $this->executeService($data_polda->url, "RanRuGetBlokirEntryByNoKa", $json_data);
        //show_array($ret_service);
        return $ret_service;

    }

    public function errorMsg($kode_error)
    {
        $arr = array(1 => "RECORD SUDAH ADA",
            "BPKB SUDAH DIBLOKIR",
            "BPKB DENGAN NOMOR RANGKA TERSEBUT SUDAH DITERBITKAN",
            "BPKB SUDAH TERBIT DAN SUDAK TIDAK AKTIF", 'OTHERS' => 'ERROR TIDAK DIKETAHUI');
        return $arr[$kode_error];
    }

    public function errorMsgLama($kode_error)
    {
        $arr = array(1 => "BPKB TIDAK DITEMUKAN",
            "SUDAH DIVERIFIKASI",
            "SUDAH DIBLOKIR");
        return $arr[$kode_error];
    }

    public function tanggal($str)
    {

        return substr($str, 0, 4) . "-" . substr($str, 4, 2) . "-" . substr($str, 6, 2);

    }

    public function tanggal2Tahun($str)
    {

        return (substr($str, 0, 4) + 2) . "-" . substr($str, 4, 2) . "-" . substr($str, 6, 2);

    }

    public function getAuthData()
    {
        $userdata = $this->session->userdata("userdata");
        $leasing_id = $userdata['leasing_id'];
        $id_polda = $this->session->userdata("id_polda");

        $this->db->where("id_polda", $id_polda);
        $this->db->where("leasing_id", $leasing_id);
        $data = $this->db->get("polda_leasing")->row();
        return $data;
    }

    public function arrPermohonan()
    {
        $ret = array("x" => "- SEMUA JENIS - ",
            "B" => "BARU",
            "L" => "LAMA");
        return $ret;
    }

    public function nomorSurat($id, $data)
    {

        $nol = array(1 => '0000', '000', '00', '0', '');
        $userdata = $this->session->userdata("userdata");
        // get max
        $sql = "select max(no_urut_surat) no_urut from t_pendaftaran";
        $rs = $this->db->query($sql);
        if ($rs->num_rows() == 0) {
            $nomor = 1;

        } else {
            $xx = $rs->row();
            $nomor = $xx->no_urut;
            $nomor++;
        }
        $angka = $nol[strlen($nomor)] . $nomor;

        $nama = $userdata['leasing_nama_singkatan']; // eplace(" ", "", $userdata['leasing_nama']), 0,5)  ;
        $tmp = explode("-", $data['daft_date']);

        $hasil[0] = $angka;
        $hasil[] = $nama;
        $hasil[] = $tmp[1];
        $hasil[] = $tmp[0];

        $arr['no_surat'] = implode("/", $hasil);
        $arr['no_urut_surat'] = $nomor;

        $this->db->where("daft_id", $id);
        $this->db->update("t_pendaftaran", $arr);
    }

    public function formatHeader($arr_kolom, $baris)
    {

        foreach ($arr_kolom as $kolom):

            $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
                array(
                    "borders" => array("top" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "bottom" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "left" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "right" => array('style' => PHPExcel_Style_Border::BORDER_THIN)),

                    'font' => array(
                        'name' => 'Calibri',
                        'bold' => true,
                        'italic' => false,
                        'size' => 12,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                        'wrap' => true,
                    )));
        endforeach;
    }

    //function format(array("arr_kolom"=>$arr_kolom,"bold"=>false,"baris"=>$baris)) {
    public function format($arr)
    {
        foreach ($arr['arr_kolom'] as $kolom):

            $this->excel->getActiveSheet()->getStyle($kolom . $arr['baris'])->applyFromArray(
                array(
                    "borders" => array("top" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "bottom" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "left" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "right" => array('style' => PHPExcel_Style_Border::BORDER_THIN)),

                    'font' => array(
                        'name' => 'Calibri',
                        'bold' => $arr['bold'],
                        'italic' => false,
                        'size' => 12,
                    ),
                    'alignment' => array(
                        'horizontal' => isset($arr['align']) ? PHPExcel_Style_Alignment::HORIZONTAL_CENTER : PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                        'wrap' => true,
                    )));
        endforeach;
    }

    public function formatBaris($arr_kolom, $baris)
    {

        foreach ($arr_kolom as $kolom):

            $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
                array(
                    "borders" => array("top" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "bottom" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "left" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "right" => array('style' => PHPExcel_Style_Border::BORDER_THIN)),

                    'font' => array(
                        'name' => 'Calibri',
                        'bold' => false,
                        'italic' => false,
                        'size' => 12,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_LEFT,
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                        'wrap' => true,
                    )));
        endforeach;
    }

    public function formatCenter($arr_kolom, $baris)
    {

        foreach ($arr_kolom as $kolom):

            $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
                array(

                    'font' => array(
                        'name' => 'Calibri',
                        'bold' => false,
                        'italic' => false,
                        'size' => 12,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                        'wrap' => true,
                    )));
        endforeach;
    }

    public function formatCenterLine($arr_kolom, $baris)
    {

        foreach ($arr_kolom as $kolom):

            $this->excel->getActiveSheet()->getStyle($kolom . $baris)->applyFromArray(
                array(
                    "borders" => array("top" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "bottom" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "left" => array('style' => PHPExcel_Style_Border::BORDER_THIN),
                        "right" => array('style' => PHPExcel_Style_Border::BORDER_THIN)),

                    'font' => array(
                        'name' => 'Calibri',
                        'bold' => false,
                        'italic' => false,
                        'size' => 12,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                        'wrap' => true,
                    )));
        endforeach;
    }

    public function generateQrcode($file_name, $arr_data)
    {
        // $data = $this->session->userdata("nama_polda").":";
        // $data .= $txt;
        // $data .= $_GET['data'];
        //show_array($arr_data);
        $tmp_data['no_bpkb'] = "NOBPKB:" . $arr_data['no_bpkb'];
        $tmp_data['no_rangka'] = "NORANGKA:" . $arr_data['no_rangka'];
        $tmp_data['no_mesin'] = "NOMESIN:" . $arr_data['no_mesin'];
        $tmp_data['no_polisi'] = "NOPOLISI" . $arr_data['no_polisi'];
        $tmp_data['no_surat'] = "SURATPERMOHONAN:" . $arr_data['no_surat'];
        $tmp_data['tgl_bpkb'] = "TGLBPKB:" . $arr_data['tgl_bpkb'];
        $tmp_data['no_blokir'] = "NOBLOKIR:" . $arr_data['no_blokir'];
        $tmp_data['tgl_blokir'] = "TGLBLOKIR:" . $arr_data['tgl_blokir'];
        $tmp_data['nama_pemilik'] = "PEMILIK:" . $arr_data['pemilik_nama'];

        $data = implode("#", $tmp_data);

        // echo "data qrcode ".  $data ; exit;

        // $file_name=$_GET['file_name'];
        $this->load->library('ciqrcode');
        // echo FCPATH;
        // exit;
        // header("Content-Type: image/png");
        $params['savename'] = FCPATH . "/assets/images/qrcode/$file_name";
        $params['level'] = 'H';
        $params['size'] = 10;
        $params['data'] = $data;
        $this->ciqrcode->generate($params);
    }

}
