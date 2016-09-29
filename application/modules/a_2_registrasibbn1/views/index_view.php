<!-- registrasi container-fluid-->
<div class="row" style="height:'auto';">
  <div class="col-md-12">

  <div id='idTabsREgistrasi' style="height:'auto';">
    <ul style=''>
      <li>Entry Data BPKB</li>
      <li>List Data</li>
    </ul>
    <!--  entry data bpkb -->
    <div>
        <br>
      <div class="row" >
        <!-- max-width:300px;padding-right:40px; -->
        <div class="col-md-3" style="">
          <br>
          <label>Tanggal registrasi</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right ClassTanggalInputMask" id="idTanggalBBN1_modal_kb_pbb_add">
          </div>
        </div>


        <div class="col-md-7" style="margin-left:40px;">
          <div class="row ">
            <div class="left">
              <div class="col-md-4 " style="">
                <div class="radio">
                  <input type="radio" name="group" value="option1" checked="">No. BPKB
                </div>
              </div>
              <div class="col-md-8" style="min-width:250px; margin-left:-80px;">
                <input type="text" class="form-control" placeholder="No. BPKB">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="">
              <div class="radio">
                <input type="radio" name="group" value="option1" checked="">No. Rek. BPKB
              </div>
            </div>
            <div class="col-md-8" style="min-width:250px;margin-left:-80px;">
              <input type="text" class="form-control" placeholder="No. Rek. BPKB">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="">
              <div class="radio">
                <input type="radio" name="group" value="option1" checked="">Barkode Berkas
              </div>
            </div>
            <div class="col-md-8" style="min-width:250px;margin-left:-80px;">
              <input type="text" class="form-control" placeholder="Barkode Berkas">
            </div>
          </div>
        </div>

        <div class="col-md-2" style="margin-left:-40px;">
          <div class="row row-centered">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary btn-block" style="min-height:100px;margin-top:5px;margin-left:-40px;">
                <span class="glyphicon glyphicon-search"></span>Cari Data
              </button>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <!-- navigasi tab -->
      <div class="row" style="height:500px;">
        <div id='idSubTabsRegistrasiBBN1' style="height:auto;">
          <ul>
            <li>
              I. Identitas Kendaraan
            </li>
            <li>
              II. Identitas Pemilik
            </li>
            <li >
              III.Identitas Pabean/Asal Usul
            </li>
          </ul>
          <!--start isi subtabs  -->
          <div>   <!-- kontent 1 -->
            <p></p>
            <div class="row center-block">
              <div class="col-md-6">
                <form class="form-horizontal">
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">No. BPKB</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="" placeholder="No. BPKB">
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label    col-sm-3" style="padding-left:0px;">Dikeluarkan di</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="" placeholder="wilayah">
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label    col-sm-3">No. Rangka</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="" placeholder="No. Rangka">
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">Merk</label>
                    <div class="col-sm-9">
                      <select id="xxxxx" class="form-control">
                        <option>1</option>
                      </select>
                    </div>

                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label    col-sm-3">Tipe</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="" placeholder="Tipe">
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">Model</label>
                    <div class="col-sm-9" style="">
                      <select id="xxxxx" class="form-control">
                        <option>1</option>
                      </select>
                    </div>

                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">Tahun Buat</label>
                    <div class="col-sm-9">
                      <select id="xxxxx" class="form-control">
                        <option>1</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label    col-sm-3" style="">Jumlah Roda</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="" placeholder="Jumlah Roda">
                    </div>
                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">Bahan Bakar</label>
                    <div class="col-sm-9">
                      <select id="xxxxx" class="form-control">
                        <option>1</option>
                      </select>
                    </div>

                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">Peruntukan</label>
                    <div class="col-sm-9">
                      <select id="xxxxx" class="form-control">
                        <option>1</option>
                      </select>
                    </div>

                  </div>
                  <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">Warna TNKB</label>
                    <div class="col-sm-9">
                      <select id="xxxxx" class="form-control">
                        <option>Merah</option>
                        <option>Kuning</option>
                        <option>Hijau</option>
                      </select>
                    </div>

                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <row>
                  <form class="form-horizontal">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="col-sm-3 control-label">No. Reg. BPKB</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="No. Reg BPKB">
                      </div>
                    </div>
                  </form>
                  <form class="form-horizontal">
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label         col-sm-3">Tanggal</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control ClassTanggalInputMask" id="" placeholder="Tanggal">
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label             col-sm-3">No. Mesin</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="No. Mesin">
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label             col-sm-3">Jenis</label>
                      <div class="col-sm-9">
                        <select id="xxxxx" class="form-control">
                          <option>1</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label             col-sm-3">Tipe2</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="Tipe2">
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label col-sm-3">Silinder</label>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" id="" placeholder="Silinder">
                      </div>
                      <label for="" class="control-label col-sm-1">CC</label>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label col-sm-3">Tahun Rakit</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="Tahun Rakit">
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label col-sm-3">Jumlah Sumbu</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="Jumlah Sumbu">
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label col-sm-3">Warna</label>
                      <div class="col-sm-7">
                        <select id="xxxxx" class="form-control">
                          <option>Merah</option>
                          <option>Kuning</option>
                          <option>Hijau</option>
                        </select>
                      </div>
                      <div class="col-sm-1">
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#idTambahWarna" >
                          +
                        </button>
                      </div>

                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label col-sm-3">No. TPT</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="No. TPT">
                      </div>
                    </div>
                    <div class="form-group" style="margin-bottom: 5px">
                      <label for="" class="control-label col-sm-3">No. SUT</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="" placeholder="No. SUT">
                      </div>
                    </div>
                    <!-- <div class="form-group" style="margin-bottom: 5px">
                    <label for="" class="control-label col-sm-3">No.POLISI</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="No.POLISI">
                  </div>
                </div> -->
              </form>
            </row>
          </div>
        </div>
      </div>   <!--  end kontent 1 -->
      <div>   <!-- kontent 2 -->
        <p></p>
        <div class="row center-block">
          <div class="col-md-6">
            <row>
              <form class="form-horizontal">
                <div style="margin-bottom: 5px" class="form-group">
                  <label for="" class="control-label    col-sm-3">No. Identitas</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="No. Identitas">
                  </div>
                </div>
                <div style="margin-bottom: 5px" class="form-group">
                  <label for="" class="control-label    col-sm-3" style="padding-left:0px;">Nama Pemilik</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="Nama Pemilik">
                  </div>
                </div>
                <div style="margin-bottom: 5px" class="form-group">
                  <label for="inputPassword3" class=" control-label col-sm-3">Alamat Pemilik</label>
                  <div class="col-sm-9">
                    <textarea type="password" class="form-control input-style" id="inputPassword3" placeholder="Alamat Pemilik"></textarea>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Kode Pos</label>
                  <div class="col-sm-7">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>

                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label    col-sm-3">No. Ponsel</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="No. Ponsel">
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Pekerjaan</label>
                  <div class="col-sm-5" style="padding-right:0px;">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>

                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Wilayah</label>
                  <div class="col-sm-5" style="padding-right:0px;">
                    <select id="" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                </div>
              </form>
            </row>
          </div>
          <div class="col-md-6">

            <div class="row">
              <div class="col-md-5"></div>
              <div class="col-md-2">
                <div class="btn btn-primary" style="">
                  Set Data Kelurahan</div>

                </div>

              </div>

              <form class="form-horizontal" style="margin-top:5px;">
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class=" control-label col-sm-3">Provinsi</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class=" control-label col-sm-3">Kabupaten</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class=" control-label col-sm-3">Kecamatan</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class=" control-label col-sm-3">Kelurahan</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                    </select>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>   <!-- end kontent 2 -->
        <div>   <!-- start kontent 3 -->
          <p></p>
          <div class="row center-block">
            <div class="col-md-6">
              <form class="form-horizontal">
                <div class="form-group">
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-4">Jenis Daftaran</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="Jenis Daftaran">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-4">No.Faktur</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="No.Faktur">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-4">No.Pabean</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="No.Pabean">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-4">Pelabuhan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="Pelabuhan">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label    col-sm-4">No.PIB</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="No.PIB">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-4">Cara Impor</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="Cara Impor">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-4">Nama Importir/APM</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="" placeholder="Nama Importir/APM">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-4">Ket.Lain-Lain</label>
                    <div class="col-sm-7">
                      <textarea type="password" class="form-control input-style" id="inputPassword3" placeholder="Ket.Lain-Lain"></textarea>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <form class="form-horizontal">
                <div class="form-group" style="margin-bottom: 5px">
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">Tanggal</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="" placeholder="Tanggal">
                    </div>
                  </div>
                  <div style="margin-bottom: 45px" class="form-group">
                    <label for="" class="control-label    col-sm-3">Tanggal</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="" placeholder="Tanggal">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">Tanggal</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="" placeholder="Tanggal">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">Pemohon</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="" placeholder="Pemohon">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>   <!-- end kontent 3 -->
      </div>     <!-- end  isi subtabs  -->
    </div><!-- end navigasi tabs  -->
    <!--start isi  footer tabs  -->
    <div class="row">
      <!--KOLOM KIRI  -->
      <div class="col-md-6">
        <form class="form-horizontal">
          <div class="form-group" style="margin-bottom: 5px">
            <label for="" class="control-label col-sm-3">NO. Resi Pembayaran</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="" placeholder="No. Resi Pembayaran">
            </div>
          </div>
          <div class="form-group" style="margin-bottom: 5px">
            <label for="" class="control-label col-sm-3">NO. Rekom</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="" placeholder="No. Rekom">
            </div>
          </div>
          <div class="form-group" style="margin-bottom: 5px">
            <label style="margin-top:-5px;" for="" class="control-label col-sm-4"><button type="button" class="control-label btn  btn-primary">Ambil No. Polisi</button></label>

            <div class="col-sm-1">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="col-sm-3 text-center" style="margin-top:5px;">
              <label for="">Belum Terpakai</label>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="checkbox">
            <label><input type="checkbox" value="">From STNK</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">  <button type="button" class="btn btn-block  btn-primary">Simpan</button></div>
          <div class="col-md-6">      <button type="button" class="btn btn-block  btn-primary">Baru</button></div>


        </div>
      </div>
    </div>
    <!--end isi ke footer tabs  -->
  </div><!-- end isi tab entry data -->


  <div><!-- start tab list data -->
    <div class="row">
          <br>
      <div class="col-md-5">
        <form class="form-horizontal">
          <div class="form-group" style="margin-bottom: 5px">
            <label for="" class="control-label col-sm-5">Tanggal BPKB</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="" placeholder="Tanggal BPKB">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-3">
          <button type="button" class="btn btn-large btn-block btn-primary">Get from server</button>
      </div>
    </div>
    <br>
    <div class="row">
        <div class="" id="idTabelRBBN1ListData"  style="overlow:auto;padding-left: 15px; padding-right: 15px;">
          <!-- table -->
        </div>
    </div>
  </div><!-- end tab list data -->




</div><!-- end tab  registrasi -->

</div>   <!--end registrasi container-fluid -->

</div>


<!--modal color  -->

<!-- Modal -->
<div id="idTambahWarna" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Warna</h4>
      </div>
      <div class="modal-body">
        <p>.............</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<?php
$this->load->view('index_js.php');
?>
