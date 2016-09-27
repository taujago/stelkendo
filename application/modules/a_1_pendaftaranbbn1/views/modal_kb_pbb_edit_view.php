<!-- idModalPBB1Edit -->
<div class="modal" id="idModalPBB1Edit">
	<div class="modal-dialog">
      <div class="modal-content" style="MIN-WIDTH:700PX;    overflow:auto;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Tambahkan Data</h4>
        </div><div class="container"></div>
        <div class="modal-body">
          <!--start modal add new   -->

          <div class="row">   <!-- Pendaftaran -->
            <!--start-->
            <div class="row">
              <hr>
                  <div class="col-md-2"></div>
              <div class="col-md-8">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label       col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="idTanggalBBN1">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label       col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                      <label class="radio-inline">
                        <input type="radio" name="idJenisPemohonBBN1" value="PRIBADI">Pribadi
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="idJenisPemohonBBN1" value="BIROJASA">Biro Jasa
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label       col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-6">
                      <?php
                      echo form_dropdown("PEMOHON_ID", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID" style="min-width: 200px;"');
                      ?>

                    </div>
                    <div class="col-md-3">
                      <div class="col-md-3">
                          <a data-toggle="modal" href="#w1" >
                        <button type="button" class="btn btn-primary" style="margin-left:-15px">Tambah Pemohon
                        </button></a>
                      </div>
                    </div>
                  </div>
                  <hr style="width:150%;">
                  <div class="form-group">
                    <label class="control-label       col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                      <input type="text" id="no_resi" name="no_resi" class="no_resi form-control col-md-7 col-xs-12 input-style" placeholder="No. Resi Pembayaran">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label       col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                      <input type="text" id="no-rangka" name="no-rangka" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rangka">
                    </div>
                  </div>
                </form>
              </div>

          </div>
          <div class="row center-block">
            <div class="col-md-4">
            </div>

            <div class="col-md-6">
              <button type="button" class="btn btn-default" style="min-width:80px;">
                <i class="fa fa-plus"> </i> Baru
              </button>
              <button type="button" class="btn btn-default " style="min-width:80px;">
                <i class="fa fa-file"> </i> Simpan
              </button>
              <button type="button" class="btn btn-default " style="min-width:80px;">
                <i class="fa fa-print"> </i> Export PDF
              </button>
            </div>

          </div>
          <!--end-->

  </div>
              </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn btn btn-default">Close</a>
          <a href="#" class="btn btn-primary">Save changes</a>
        </div>
      </div>
    </div>
</div>
