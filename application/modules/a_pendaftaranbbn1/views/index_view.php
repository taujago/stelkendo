  <!-- Pendaftaran -->
<div class="container-fluid" style="background-color: rgb(255, 255, 255);">


      <div class="col-md-12" style="max-height:50%;">
        <!-- <hr/> -->
      <table width="100%" style="margin-top:10px;">
        <tr>
          <td width="15%" height=40px" valign="top">
            <label class="control-label">Tanggal</label>
          </td>
          <td width="40%" height=40px" valign="top">
<!--           <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" id="idTanggalBBN1">
                </div> -->
           <!--        <div class='input-group date' id='idTanggalBBN1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div> -->
                 <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->

          </td>
          <td width="45%" height=40px" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" height=35px" valign="top"><label class="control-label">Jenis Pemohon</label></td>
          <td width="40%" height=35px" valign="top">
            <label class="radio-inline"><input type="radio" name="idJenisPemohonBBN1" value="PRIBADI">Pribadi</label>
            <label class="radio-inline"><input type="radio" name="idJenisPemohonBBN1" value="BIROJASA">Biro Jasa</label>
          </td>
          <td class="45%"><button type="button" class="btn btn-default col-md-3" id="idBtnTampilDataPBB1">Tampil Data</button></td>
        </tr>
        <tr>
          <td width="15%" height=35px" valign="top">
            <label class="control-label">Pemohon</label>
          </td>
          <td width="40%" height=35px" valign="top">
           <?php

echo form_dropdown("PEMOHON_ID", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID"');
?>

          </td>
          <td width="45%" height=35px" valign="top"> <button type="button" class="btn btn-default">File</button>
           <button type="button" class="btn btn-default" id="idBtnTambahPemohonBBN1">Tambah</button></td>
        </tr>
      </table>

      <hr/>

      <table width="100%">
        <tr>
          <td width="15%" height=40px" valign="top">
            <label class="control-label">No. Resi Pembayaran</label>
          </td>
          <td width="40%" height=40px" valign="top">
            <input type="text" id="no_resi" name="no_resi" class="no_resi form-control col-md-7 col-xs-12 input-style" placeholder="No. Resi Pembayaran">
          </td>
          <td width="45%" height=40px" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" height=35px" valign="top">
            <label class="control-label">No. Rangka</label>
          </td>
          <td width="40%" height=35px" valign="top">
            <input type="text" id="no-rangka" name="no-rangka" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rangka">
          </td>
          <td width="45%" height=35px" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" height="35px" valign="top">&nbsp;</td>
          <td colspan="2" width="85%" height="35px" valign="top">
            <button type="button" class="btn btn-default col-md-2"><i class="fa fa-plus"> </i> Baru</button> <button type="button" class="btn btn-default col-md-2"><i class="fa fa-file"> </i> Simpan</button> <button type="button" class="btn btn-default col-md-2"><i class="fa fa-trash"> </i> Hapus</button> <button type="button" class="btn btn-default col-md-2"><i class="fa fa-print"> </i> Cetak</button>
          </td>
        </tr>
      </table>


      <hr/>
          <!-- start Table draggable -->
      <div class="row " style="border: 3px solid black; margin-top:5px; margin-right:20px;">
        <div class="" id="idTabelPendaftarabBBN1"  style="">
         <!-- table -->
         <?php
$this->load->view("index_js");
?>
        </div>
      </div>

    </div>
      <!--  /Table draggable -->
        </div>
        <!--end col  -->
        </div>

  <!-- End of Pendaftaran -->
