  <!-- Pendaftaran -->
   <!--border: 3px solid #73AD21;-->
      <div class="col-md-12" style="max-height:50%;">
      <!-- <div class="row"><h5>Pendaftaran BBN1</h5></div> -->

      <div class="container">
        <!-- <hr/> -->
      <table width="100%" style="margin-top:10px;">
        <tr>
          <td width="15%" height=40px" valign="top">
            <label class="control-label">Tanggal</label>
          </td>
          <td width="40%" height=40px" valign="top">
            <input type="text" id="tanggal" name="tgl_entri" class="tanggal form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal"  data-date-format="dd-mm-yyyy">
          </td>
          <td width="45%" height=40px" valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" height=35px" valign="top"><label class="control-label">Jenis Pemohon</label></td>
          <td width="40%" height=35px" valign="top">
            <label class="radio-inline"><input type="radio" name="jenis_pemohon">Pribadi</label>
            <label class="radio-inline"><input type="radio" name="jenis_pemohon">Biro Jasa</label>
          </td>
          <td class="45%"><button type="button" class="btn btn-default col-md-3">Tampil Data</button></td>
        </tr>
        <tr>
          <td width="15%" height=35px" valign="top">
            <label class="control-label">Pemohon</label>
          </td>
          <td width="40%" height=35px" valign="top">
            <input type="text" id="pemohon" name="pemohon" class="form-control col-md-7 col-xs-12 input-style" placeholder="Pemohon">
          </td>
          <td width="45%" height=35px" valign="top"> <button type="button" class="btn btn-default">File</button> <button type="button" class="btn btn-default">Tambah</button></td>
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
  </div>

      <hr/>
      <div class="row " style="border: 3px solid black; margin-top:5px; margin-right:20px;">
        <div class="" id="jqxgrid"  style="">
         <!-- table -->
         <?php
         $this->load->view("a_pendaftaranbbn1/index_js");
         ?>
        </div>
      </div>


    </div>



    <!-- End of Pendaftaran -->


    <!-- start Table draggable -->


    <!--  /Table draggable -->
