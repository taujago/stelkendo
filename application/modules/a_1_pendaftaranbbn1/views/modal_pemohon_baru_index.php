

<div class="modal in" id="idModalPBBIndex" data-backdrop="static" style="z-index: 1050;" >
  <div class="modal-dialog" style="min-width:700px;display: block;">
    <div class="modal-content" style="    overflow:none;">
      <div class="modal-header modal-header-primary"  >
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
        <h3 class="modal-title">Pemohon Baru</h3>
      </div>
      <!--start modal add new   -->
      <div class="modal-body container-fluid ">     <!--start kontent modal-body-->
        <!-- start row  -->
        <div class="row">
          <div class="col-md-12" style="margin-bottom: 5px;">
            <div id="">
              <form  id="idFormAddPemohonBaru" class="form-horizontal" action="<?php echo base_url().'index.php/a_1_pendaftaranbbn1/bpkb_add_pemohon_web';?>" method="POST" data-toggle="validator" role="form">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                <!-- <form on:submit.prevent="submitForm" class="form-horizontal" data-toggle="validator" role="form" > -->
                <!-- <div style="margin-bottom: 5px;" class="form-group" >
                <div class="col-sm-8">
              </div>
            </div> -->
            <div style="margin-bottom: 5px;" class="form-group has-feedback">
              <label class="control-label text-left col-sm-3" for="">Nama</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user fa-lg"></i>
                  </div>
                  <input maxlength="37" type="text" class="form-control" name="idPbb1PemohonNamaInput" id="idPbb1PemohonNamaInput" placeholder="Nama" required>
                  <!-- <input type="text" class="form-control" name="idPbb1PemohonNamaInput" placeholder="Nama" required> -->

                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label class="control-label              col-sm-3" for="">Alamat</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-home"></i>
                  </div>
                  <!-- maxlengt=111 = 37x3 -->
                  <textarea class="form-control" rows="3" maxlength="111"name="idPbb1PemohonAlamatInput" id="idPbb1PemohonAlamatInput" placeholder="Alamat" required></textarea>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label class="control-label              col-sm-3" for="">No Telp</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-earphone"></i>
                  </div>
                  <input maxlength="37" type="text" class="form-control" name="idPbb1PemohonNoTelpInput" id="idPbb1PemohonNoTelpInput" placeholder="Nomor Telpon" required data-inputmask='"mask": "(+99) 999-9999"' data-mask>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label class="control-label col-sm-3" for="">No HP</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-phone"></i>
                  </div>
                  <input maxlength="37"  type="text" class="form-control" name="idPbb1PemohonNoHpInput" id="idPbb1PemohonNoHpInput" placeholder="Nomor Handphone" required>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label class="control-label              col-sm-3" for="">Nama Bank</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-bank"></i>
                  </div>
                  <input maxlength="37" type="text" class="form-control" name="idPbb1PemohonNamaBank" placeholder="Nama Bank" required>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label class="control-label              col-sm-3" for="">No. Rekening</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="	fa fa-credit-card"></i>
                  </div>
                  <input maxlength="37"  type="text" class="form-control" name="idPbb1PemohonNoRek" placeholder="No. Rekening" required>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label class="control-label   col-sm-3" for="">Perusahaan</label>
              <div class="col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="	fa fa-home"></i>
                  </div>
                  <input maxlength="37"  type="text" class="form-control" name="idPbb1PemohonNamaPerusahaan" placeholder="Perusahaan" required>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label class="control-label  col-sm-3" for="">
                Tanggal
              </label>
              <div class="col-sm-8">
                <!-- <input type="text" maxlength="10" class="form-control pull-right tanggal" name="idTanggalBBN1_modal_kb_pbb_add_pemohon" id="idTanggalBBN1_modal_kb_pbb_add_pemohon" placeholder="dd-mm-yyyy" required> -->
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar kalenderTanggal"></i>
                  </div>
                  <input type="text" class="form-control pull-right tanggal" name="idTanggalBBN1_modal_kb_pbb_add_pemohon" id="idTanggalBBN1_modal_kb_pbb_add_pemohon" placeholder="dd-mm-yyyy" required>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 5px;" class="form-group">
              <label for="" class="control-label      col-sm-3" style="margin-top:-5px;">Jenis</label>
              <div class="   col-sm-8">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-th-list"></i>
                  </div>
                  <select class=" col-md-12 col-xs-12" style="min-height:34px;" name ="idPbb1PemohonNamaJenis">
                    <option>1</option>
                    <option>1</option>
                    <option>1</option>
                  </select>
                </div>
              </div>
            </div>
            <hr>
            <div style="padding-left:10px;padding-right:10px;  margin-bottom: 5px;" class="form-group">
              <div class="row" >
                <div class="col-md-6">
                  <a href="#" data-dismiss="modal" class="btn btn-block   btn-default">Kembali</a>
                </div>
                <div class="col-md-6">
                  <button type="submit" class="btn btn-block btn-primary">
                    Simpan Pemohon Baru</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- poto view -->
        <!-- <div class="col-sm-12 col-md-4" style="border: 1px solid #ccc;" >
        <div class="row">
        <div class="col-md-12">
      </div>
      <div class="col-md-12">
      <a href="#" class="thumbnail">
      <img src="http://placekitten.com/100/100" alt="" class="img-responsive" style="min-height:310px;">
    </a>
  </div>
</div>
<button class="btn-block btn">Ambil Poto
<span class="glyphicon glyphicon-camera"></span>
</button>
</div> -->
</div>
<!-- end row -->

</div>         <!-- end kontent modal-body -->

</div>
</div>

</div>
<script type="text/javascript">
$(document).ready(function() {
  $('#idModalPBBIndex').on('shown.bs.modal', function () {
    //setKursor
    setKursor("idPbb1PemohonNamaInput");
    //date
    $('#idTanggalBBN1_modal_kb_pbb_add_pemohon').datepicker({
      format:"dd-mm-yyyy",
      locale: 'id',
      autoclose: true

    });
    //date open glyphicon-date
    $(".kalenderTanggal").click(function(event) {
      /* Act on the event */
      event.preventDefault();
      $('#idTanggalBBN1_modal_kb_pbb_add_pemohon').click();
    });
    //
    //phone
    $('#idPbb1PemohonNoTelpInput').inputmask('(+99) 99[9]-9999');
      $('#idPbb1PemohonNoHpInput').inputmask('(+99) 999[9]-9999999');
    //
  });
});

</script>
