<div class="modal" id="idModalPBB1Edit">
  <div class="modal-dialog">
    <div class="modal-content" style="MIN-WIDTH:700PX;    overflow:auto;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
  <!-- <a href="#" data-dismiss="modal" class="btn btn btn-default"></a> -->
        <h4 class="modal-title">Edit Data</h4>
      </div><div class="container"></div>
      <div class="modal-body">
        <!--start modal add new   -->
            <!--start-->
            <div class="row ">
              <div class="col-md-12">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="">Tanggal :</label>
                    <div class="col-sm-6">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="idTanggalBBN1_modal_kb_pbb_edit">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="">Jenis Pemohon :</label>
                    <div class="col-sm-6">
                      <label class="radio-inline">
                        <input type="radio" name="idJenisPemohonBBN1" value="PRIBADI">Pribadi
                      </label>
                      <label class="radio-inline">
                        <input type="radio" name="idJenisPemohonBBN1" value="BIROJASA">Biro Jasa
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Pemohon :</label>
                    <div class="col-sm-4">
                      <?php
                      echo form_dropdown("PEMOHON_ID", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID" style="min-width: 200px;"');
                      ?>

                  </div>

                  <div class="col-md-3">
                    <a data-toggle="modal" href="#idModalPBBIndex">
                      <button type="button" class="btn btn-primary fa fa-plus" style="margin-left:-25px;max-width:125px"> Buat Pemohon
                      </button></a>

                    </div>

                  </div>
                  <hr>
                  <div class="form-group">
                    <label class="control-label       col-sm-3" for="">No. BPKB :</label>
                    <div class="col-sm-6">
                      <input type="text" id="no_bpkb" name="no_bpkb" class="no_bpkb form-control col-md-7 col-xs-12 input-style" placeholder="No. Resi Pembayaran">
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">No. Rangka</label>
                    <div class="col-sm-6">
                      <input type="text" id="no_rangka" name="no_rangka" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rangka">
                    </div>
                  </div>
                </form>
                <hr>
              </div>


            </div>
            <div class="row center-block">
              <div class="col-md-4">
              </div>

              <div class="col-md-6">
                <button type="button" class="btn btn-primary" style="min-width:80px;">
                  <i class="fa fa-file"> </i> Simpan
                </button>
                <button type="button"  class="btn btn-primary" data-dismiss="modal" style="min-width:80px;">
                  <i class="fa fa-danger"> </i> Batal
                </button>

              </div>


            </div>
            <!--end-->
        </div>

    </div>
  </div>
</div>


<script>
$('#idTanggalBBN1_modal_kb_pbb_edit').datepicker({
  autoclose: true
});



</script>
