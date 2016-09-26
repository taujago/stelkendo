  <!-- registrasi container-fluid-->
<div class="container-fluid" style="background-color: rgb(255, 255, 255);">

<div class="row">
  <h3>BBN1 - Tanda Terima </h3>
  <hr />
</div>

<!-- Start of Form -->
<form class="form-horizontal">
<!-- start of first row -->
<div class="row">
    <div class="col-md-5">
      <div class="form-group">
        <label class="control-label col-sm-5" for="tanggal">Tanggal Pendaftaran</label>
        <div class="col-sm-7">
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" id="tgl_pendaftaran" name="tgl_pendaftaran" class="tanggal ui-datepicker form-control" placeholder="Tanggal"  data-date-format="dd-mm-yyyy">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label col-sm-4" for="pemohon">Pemohon</label>
        <div class="col-sm-8">
          <?php echo form_dropdown("pemohon", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="pemohon"'); ?>
        </div>
      </div>
    </div>
</div>
<!-- end of first row -->
<!-- start of second row -->
<div class="row">
    <div class="col-md-5">
      <div class="form-group">
        <label class="control-label col-sm-5" for="tanggal">Jenis Pemohon</label>
        <label class="control-label col-sm-3">
          <input type="radio" name="jenis" value="pribadi"> &nbsp;&nbsp;Pribadi
        </label>
        <label class="control-label col-sm-3">
          <input type="radio" name="jenis" value="birojasa"> &nbsp;&nbsp;Biro Jasa
        </label>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <label class="control-label col-sm-4" for="pemohon">No. BPKB</label>
        <div class="col-sm-8">
          <input type="text" id="no_bpkbawal" name="no_bpkbawal" class="form-control" placeholder="Awal">
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
        <label class="control-label col-sm-1" for="pemohon">S/D</label>
        <div class="col-sm-10">
          <input type="text" id="no_bpkbakhir" name="no_bpkbakhir" class="form-control" placeholder="Akhir">
        </div>
      </div>
    </div>
</div>
<!-- end of second row -->
<!-- Start of the third row -->
  <div class="row">
    <div class="col-md-5">
      <div class="form-group">
        <label class="control-label col-sm-5" for="tanggal">&nbsp;</label>
        <div class="col-sm-7">
          <button class="btn btn-primary form-control" id="submit" style="height: 60px"> <i class="fa fa-database"> </i> Get Data From Server</button>
        </div>
      </div>
    </div>
  </div>
<!-- End Of the third row -->
</form>

<!-- End of Form -->
<!-- Start of Table  -->
  <div class="row">
    <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3>Tabel #1</h3>
        </div>
        <div class="box-body">
          <div class="Tabel1" id="Tabel1"  style="position: relative;">
    <!-- table -->
          </div>
        </div>
      </div>
    </div>


    <div class="col-md-6">
      <div class="box">
        <div class="box-header with-border">
          <h3>Tabel #2</h3>
        </div>
        <div class="box-body">
        <div class="Tabel2"   style="position: relative;">
    <!-- table -->
          </div>
        </div>
        <button class="btn btn-primary form-control" id="submit" style="height: 40px" data-toggle="modal" href="#myModal"> <i class="fa fa-print"> </i> Cetak Tanda Terima</button>
      </div>
    </div>
  </div>
<!-- End of Table -->

<div class="row">
  <div class="col-md-6">&nbsp;</div>
  <div class="col-md-6">
    
  </div>
</div>

 <?php
      $this->load->view("modal_pilih_font");
      $this->load->view("index_js");
      ?>

</div>   <!--end Print tanda tanda terima container-fluid -->


