<?php
class general extends BaruController {


public function general()
    {
        parent::__construct();

        
    }



function get_pemohon($pemohonJenis=null) {
	 $data =  array(
                "LoginInfo" => array (
                        "LoginName" => $this->user,
                        "Salt" =>  $this->salt,
                        "AuthHash" =>  md5( $this->user . "_".$this->salt. md5($this->pass) )

                ),
                "Param"=>array("pemohonJenis"=>$pemohonJenis)
                );

   $data_json = json_encode($data);

   // echo $data_json; exit;
   $pemohon = $this->executeService("refresh_pemohon",$data_json);

   // show_array($pemohon['data']['M_PEMOHON']);
   //exit;


  // // echo $pemohon; // exit;

    $arr_pemohon = array();
        foreach($pemohon['data']['M_PEMOHON'] as $row):
            $arr_pemohon[$row->PEMOHON_ID] = $row->PEMOHON_NAMA;
		endforeach;
    //show_array($arr_pemohon);
		return $arr_pemohon;

}


function get_pemohon_dropdown($pemohonJenis=null) {
	$arr = $this->get_pemohon($pemohonJenis);
	//show_array($arr); exit;

	$html ="";
	foreach($arr as $index =>$value) {
		$html .= "<option value=$index>$value </option>";
	}
	echo $html;
}


}


?>
