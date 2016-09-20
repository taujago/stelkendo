
<div class="container-fluid" style="background-color: rgb(255, 255, 255);">   <!-- begin container-fluid -->

  <!-- Start of the Title -->

<div class="row">
  <h3>BBN1 - Kartu Induk</h3>
  <hr />
</div>

  <!-- End of the Title -->

  <!-- Start of The First Form -->

<div class="row">
  <form class="form-horizontal">
    <div class="col-md-3">
      <div class="form-group">
        <label class="control-label col-sm-3" for="tanggal">Tanggal</label>
        <div class="col-sm-9">
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" id="tanggal" name="tanggal" class="tanggal ui-datepicker form-control" placeholder="Tanggal"  data-date-format="dd-mm-yyyy">
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
        <label class="control-label col-sm-4" for="tanggal">Operator Entry</label>
        <div class="col-sm-8">
          <?php echo form_dropdown("operator", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="operator"'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <button type="button" class="btn btn-primary form-control" style="min-width:80px;">
          <i class="fa fa-database"> </i> Get Data From Server
        </button>
      </div>
    </div>
  </form>
</div>

<!-- End of The First Form -->

<!-- Start of the Second Form -->

<div class="row">
  <hr />
  <form class="form-horizontal">
    <div class="col-md-2">
    <div class="col-sm-12 form-group">
      <label class="control-label">
        <input type="radio" name="jenis" value="tunggal"> &nbsp;&nbsp;Tunggal
      </label>
    </div>
    <div class="col-sm-12 form-group">
      <label class="control-label">
        <input type="radio" name="jenis" value="rentang"> &nbsp;&nbsp;Rentang
      </label>
    </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <label class="control-label col-sm-3" for="tanggal">No. BPKB Awal</label>
        <div class="col-sm-9">
          <input type="text" name="nobpkbawal" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. BPKB Awal . .">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-3" for="tanggal">No. BPKB Awal</label>
        <div class="col-sm-9">
          <input type="text" name="nobpkbawal" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. BPKB Awal . .">
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group">
        <button type="button" class="btn btn-primary form-control" style="height: 80px;">
          <i class="fa fa-database"> </i> Get Data From Server
        </button>
      </div>
    </div>
  </form>
</div>


<!-- End of the Second Form -->

<!-- Start of Table -->

<div class="row">

<!-- Start 1st Table -->
  <div class="col-md-3">
    <div class="box box-solid bg-blue-gradient">
      <div class="box-header">
      <i class="fa fa-th"> </i>
        <h3 class="box-title">Biru</h3>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table width="100%" border="0" id="biru" class="table table-bordered dataTable" role="grid">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th width="60%">No. BPKB</th>
                <th width="30%">Ok</th>
             </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>2</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>3</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>4</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer text-black">
        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-primary"><i class="fa-print"> </i> Cetak</button>
          </div>
          <div class="col-md-8">
            <button class="btn btn-primary pull-right"><i class="fa-print"> </i> Cetak Pilih</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End 1st Table -->

<!-- Start 2st Table -->
  <div class="col-md-3">
    <div class="box box-solid bg-green-gradient">
      <div class="box-header">
      <i class="fa fa-th"> </i>
        <h3 class="box-title">Hijau</h3>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table width="100%" border="0" id="kuning" class="table table-bordered dataTable" role="grid">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th width="60%">No. BPKB</th>
                <th width="30%">Ok</th>
             </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>2</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>3</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>4</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer text-black">
        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-primary"><i class="fa-print"> </i> Cetak</button>
          </div>
          <div class="col-md-8">
            <button class="btn btn-primary pull-right"><i class="fa-print"> </i> Cetak Pilih</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End 2st Table -->

<!-- Start 3st Table -->
  <div class="col-md-3">
    <div class="box box-solid bg-yellow-gradient">
      <div class="box-header">
      <i class="fa fa-th"> </i>
        <h3 class="box-title">Kuning</h3>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table width="100%" border="0" id="kuning" class="table table-bordered dataTable" role="grid">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th width="60%">No. BPKB</th>
                <th width="30%">Ok</th>
             </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>2</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>3</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>4</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer text-black">
        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-primary"><i class="fa-print"> </i> Cetak</button>
          </div>
          <div class="col-md-8">
            <button class="btn btn-primary pull-right"><i class="fa-print"> </i> Cetak Pilih</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End 3st Table -->

<!-- Start 4st Table -->
  <div class="col-md-3">
    <div class="box box-solid bg-red-gradient">
      <div class="box-header">
      <i class="fa fa-th"> </i>
        <h3 class="box-title">Merah</h3>
      </div>
      <div class="box-body">
        <div class="table-responsive">
          <table width="100%" border="0" id="merah" class="table table-bordered dataTable" role="grid">
            <thead>
              <tr>
                <th width="10%">No</th>
                <th width="60%">No. BPKB</th>
                <th width="30%">Ok</th>
             </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>2</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>3</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
              <tr>
                <td>4</td>
                <td>39827837298</td>
                <td><i class="fa fa-folder"> </i> 0</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer text-black">
        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-primary"><i class="fa-print"> </i> Cetak</button>
          </div>
          <div class="col-md-8">
            <button class="btn btn-primary pull-right"><i class="fa-print"> </i> Cetak Pilih</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- End 4st Table -->

</div>

<!-- End of Table -->
<!-- End Of Page -->

 <?php
      $this->load->view("index_js");
      ?>
</div><!-- End container-fluid -->
