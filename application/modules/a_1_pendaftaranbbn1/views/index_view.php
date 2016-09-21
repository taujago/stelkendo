
  <div class="container-fluid">
  <div class="row">
    <a data-toggle="modal" href="#myModal" >
    <button type="button" class="btn btn-primary" style=""><span class="glyphicon glyphicon-plus"></span>Buat Baru
  </button></a>

</div>
  <hr>
<div class="row">

  <div class="" id="idTabelPendaftarabBBN1"  style="position: relative;">
    <!-- table -->

  </div>
  </div>
  </div>

<?php
$this->load->view("modal_kb_pbb_add_view");
$this->load->view("modal_kb_pbb_edit_view");
$this->load->view("modal_pemohon_baru_index");
$this->load->view("index_js");

?>
