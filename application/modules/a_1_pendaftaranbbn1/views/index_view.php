<!--
<div class="container-fluid" style="background-color: rgb(255, 255, 255);">
<div class="row">
<hr />
<div class="col-md-8">
<form class="form-horizontal">
<div class="form-group">
<label class="control-label       col-sm-3" for="email">Tanggal:</label>
<div class="col-sm-8">
<div class="input-group date">
<div class="input-group-addon">
<i class="fa fa-calendar"></i>
</div>
<input type="text" class="form-control pull-right" id="idTanggalBBN1">
</div>
</div>
</div>
<div class="form-group">
<label class="control-label       col-sm-3" for="pwd">Jenis Pemohon:</label>
<div class="col-sm-8">
<label class="radio-inline">
<input type="radio" name="idJenisPemohonBBN1" value="PRIBADI">Pribadi
</label>
<label class="radio-inline">
<input type="radio" name="idJenisPemohonBBN1" value="BIROJASA">Biro Jasa :
</label>
</div>
</div>
<div class="form-group">
<label class="control-label       col-sm-3" for="pwd">Pemohon:</label>
<div class="col-sm-8">
<?php
echo form_dropdown("PEMOHON_ID", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID"');
?> -->

<!-- <select name="PEMOHON_ID" class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID" data-pg-collapsed>
<option value="5356">SALAWATI </option>
<option value="5371">RONNY HONDA MKW </option>
<option value="5351">YBS </option>
<option value="5357">TMI </option>
<option value="5358">TMI </option>
<option value="5360">HONDA JAS </option>
<option value="5362">SALAWATI MOTOR </option>
<option value="5363">YAMAHA HASJRAT </option>
<option value="5364">DAIHATSU JAS </option>
<option value="5352">ALFINO SILOOY </option>
<option value="5374">YAMAHA HASJRAT </option>
<option value="5375">MITSUBISHI BOSOWA </option>
<option value="5355">EDWIN MARAMIS </option>
<option value="5391">FRANS SUZUKI TMI </option>
<option value="5379">ISUZU FAISAL </option>
<option value="5384">TOYOTA HASJRAT ABADI </option>
<option value="5381">ANTON KAWASAKI MKW </option>
<option value="5378">BURSA HONDA </option>
<option value="5382">RUSLAN BOSOWA MKW </option>
<option value="5390">KAWASAKI </option>
<option value="5383">FRANSISKUS ASTRA </option>
<option value="5393">KAISAR MOTOR </option>
<option value="5394">DAIHATSU BIMEN </option>
<option value="5395">IZUZU BIMEN </option>
<option value="5396">PT. PEGADAIAN (PERSERO) CABANG SORONG </option>
<option value="5376">SUZUKI TMII </option>
<option value="5377">SUZUKI PMM </option>
<option value="5380">KAWASAKI ANIS JR </option>
<option value="5388">TRISAKTI MKW </option>
<option value="5389">HINO ANANG </option>
</select> -->
<!-- </div>
</div>
<hr style="width:150%;">
<div class="form-group">
<label class="control-label       col-sm-3" for="pwd">No. Resi Pembayaran :</label>
<div class="col-sm-8">
<input type="text" id="no_resi" name="no_resi" class="no_resi form-control col-md-7 col-xs-12 input-style" placeholder="No. Resi Pembayaran">
</div>
</div>
<div class="form-group">
<label class="control-label       col-sm-3" for="pwd">No. Rangka :</label>
<div class="col-sm-8">
<input type="text" id="no-rangka" name="no-rangka" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rangka">
</div>
</div>
<div class="row center-block">
<div class="col-md-4">
</div>
<td colspan="2" width="85%" height="35px" valign="top">
<div class="col-md-6">
<button type="button" class="btn btn-default" style="min-width:80px;">
<i class="fa fa-plus"> </i> Baru
</button>
<button type="button" class="btn btn-default " style="min-width:80px;">
<i class="fa fa-file"> </i> Simpan
</button>
<button type="button" class="btn btn-default " id="idBtnPBB1Export" style="min-width:80px;">
<i class="fa fa-print"> </i> Export csv
</button>
</div>
</td>
</div>
</form>
</div>
<div class="col-md-4">
<div class="row">
<br />
<br />
<div class="col-md-12" style="margin-top:-40px;">
<button type="button" class="btn btn-default " id="idBtnTampilDataPBB1" style="height:60px;width:150px;">Tampil
Data
</button>
</div>
<div class="col-md-12">
<button type="button" class="btn btn-default" id="idBtnTambahPemohonBBN1" style="height:60px;width:150px; margin-top:15px;">Tambah
Data
</button>
</div>
</div>
</div>
</div>

<hr />


<div class="row">
<div class="" id="idTabelPendaftarabBBN1"  style="">

<?php
//$this->load->view("index_js");
?>
</div>
</div>
</div>


-->







<div class="container" style="background-color: rgb(255, 255, 255);">   <!-- begin container-fluid -->
  <div class="col-sm-8">
              <div class="input-group date">
                <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
                </div>
                <input type="text" class="form-control pull-right" id="idTanggalBBN1_modal_kb_pbb_add">
              </div>
            </div>
  <div class="row">
    <a data-toggle="modal" href="#myModal" >
    <button type="button" class="btn btn-primary" style="margin-left:-0px;"><span class="glyphicon glyphicon-plus"></span>Buat Baru
  </button></a>

  <!-- <button id="idBtnPbb1TableBaru" class ="btn btn-primary" name="button"><span class="glyphicon glyphicon-plus"></span>Tambahkan </button> -->
</div>
  <hr>
<div class="row">
  <div  id='jqxtabs' style="position: relative; width:100%;">
    <ul style='margin-left: 20px;'>
      <li>Data Pendaftar</li>
      <li>Data Pemohon</li>
    </ul>

    <div style="overflow: auto; border: none;"  style="width: 100%; height: 100%">    <!--  Content 1  -->


        <div class="" id="idTabelPendaftarabBBN1"  style="">
          <!-- table -->
        </div>
      </div>

      <div style="overflow: auto; border: none;"  style="width: 100%; height: 100%">  <!--    Content 2-->

        <div class="" id="idTablePendaftarabBBN1Pemohon"  style="">
          <!-- table -->
        </div>
      </div>
    </div>
  </div>


</div><!-- End container-fluid -->
<?php
$this->load->view("modal_kb_pbb_add_view");
$this->load->view("modal_kb_pbb_edit_view");

$this->load->view("modal_pemohon_baru_index");
$this->load->view("index_js");

//  .php
?>
