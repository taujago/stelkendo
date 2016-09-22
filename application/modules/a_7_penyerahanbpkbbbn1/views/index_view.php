  <!-- registrasi container-fluid-->
<div class="container-fluid" style="background-color: rgb(255, 255, 255);">

<div class="row">
  <h3>Penyerahan BPKB </h3>
  <hr />
</div>

<!-- Start of Form -->
<form class="form-horizontal">
<!-- start of first row -->
<div class="row">
    <div class="col-md-5">
      <div class="form-group">
        <label class="control-label col-sm-3" for="tanggal">No. BPKB</label>
        <div class="col-sm-9">
          <input type="text" id="no_bpkb" name="no_bpkb" class="form-control" placeholder="No. BPKB">
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <div class="col-sm-12">
        <button class="btn btn-primary form-control" id="getdata"> <i class="fa fa-database"> </i> Get Data</button>
      </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="form-group">
      <div class="col-sm-12">
        <button class="btn btn-primary form-control" id="baru"> <i class="fa fa-plus"> </i> Baru</button>
      </div>
      </div>
    </div>
</div>
</form>
<!-- end of first row -->
<!-- start of second row -->
<div class="row">
  <hr />
  <div class="col-md-4">
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-4" for="tanggal">No. BPKB</label>
        <div class="col-sm-8">
          <input type="text" id="no_bpkb" name="no_bpkb" class="form-control" placeholder="No. BPKB">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Tgl. BPKB</label>
        <div class="col-sm-8">
          <input type="text" id="tgl_bpkb" name="tgl_bpkb" class="form-control tanggal" placeholder="Tgl. BPKB">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">No. Polisi</label>
        <div class="col-sm-8">
          <input type="text" id="nopol" name="nopol" class="form-control" placeholder="No. Polisi">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Merk</label>
        <div class="col-sm-8">
          <input type="text" id="merk" name="merk" class="form-control" placeholder="Merk">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Tipe</label>
        <div class="col-sm-8">
          <input type="text" id="tipe" name="tipe" class="form-control" placeholder="Tipe">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Jenis</label>
        <div class="col-sm-8">
          <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Jenis">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Model</label>
        <div class="col-sm-8">
          <input type="text" id="model" name="model" class="form-control" placeholder="Model">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Pemilik</label>
        <div class="col-sm-8">
          <input type="text" id="nm_pemilik" name="nm_pemilik" class="form-control" placeholder="Nama Pemilik">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4 pull-left" for="tanggal">Pemohon</label>
        <div class="col-sm-8">
          <input type="text" id="pemohon" name="pemohon" class="form-control" placeholder="Pemohon">
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-12">
        <button class="btn btn-primary form-control" id="submit" style="height: 40px"> <i class="fa fa-plus"> </i> Add Data</button>
        </div>
        </div>
        </form>
        <hr/>
        <form class="form-horizontal">
          <div class="form-group">
        <label class="control-label col-sm-4 pull-left" for="tanggal">No. BPKB Awal</label>
        <div class="col-sm-8">
          <input type="text" id="no_bpkb_awal" name="no_bpkb_awal" class="form-control" placeholder="No. BPKB Awal">
        </div>
        </div>
        <div class="form-group">
        <label class="control-label col-sm-4 pull-left" for="tanggal">No. BPKB Akhir</label>
        <div class="col-sm-8">
          <input type="text" id="no_bpkb_akhir" name="no_bpkb_akhir" class="form-control" placeholder="No. BPKB Akhir">
        </div>
        </div>
        <div class="form-group">
        <div class="col-sm-12">
        <button class="btn btn-primary form-control" id="submit" style="height: 40px"> <i class="fa fa-plus"> </i> Add Data</button>
        </div>
        </div>
        </form>
  </div>
  <div class="col-md-8">
    <div class="box">
        <div class="box-header with-border">
          <h3>Tabel #1</h3>
        </div>
        <div class="box-body">
        <div class="penyerahanbpkb" id=""  style="position: relative;">
    <!-- table -->
    </div>
          <hr />

          <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-sm-2 pull-left" for="pemohon">Pemohon</label>
              <div class="col-sm-8">
                <?php echo form_dropdown("pemohon", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="pemohon"'); ?>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="tanggal">Tgl. Ambil</label>
              <div class="col-sm-8">
                <input type="text" id="tgl_ambil" name="tgl_ambil" class="form-control tanggal" placeholder="Tgl. Ambil">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2 pull-left" for="tanggal">Keterangan</label>
              <div class="col-sm-8">
                <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
              <button class="btn btn-primary form-control" id="submit" style="height: 40px"> <i class="fa fa-print"> </i> Simpan & Cetak Tanda Terima</button>
              </div>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>





<!-- end of second row -->
<!-- Start of the third row -->

<!-- End Of the third row -->


<!-- End of Form -->
<!-- Start of Table  -->

<!-- End of Table -->



 <?php
      $this->load->view("index_js");
      ?>

</div>   <!--end Print tanda tanda terima container-fluid -->


