<!-- registrasi container-fluid-->
<div class="container-fluid" style="background-color: rgb(255, 255, 255);">
  <div class="row">
        <div class="col-md-3" style="max-width:300px;padding-right:40px;">
          <label>Tanggal registrasi</label>
          <select class="form-control">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>

        <div class="col-md-5 ">
          <div class="row ">
            <div class="left">
              <div class="col-md-4 " style="max-width:95px;margin-left:10px;">
                <div class="radio">
                  <input type="radio" name="group" value="option1" checked="">No. BPKB
                </div>
              </div>
              <div class="col-md-8" style="min-width:250px;">
                <input type="text" class="form-control" placeholder="Placeholder text">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4" style="max-width:95px;margin-left:10px;">
              <div class="radio">
                <input type="radio" name="group" value="option1" checked="">No. Rek. BPKB
              </div>
            </div>
            <div class="col-md-8" style="min-width:250px;">
              <input type="text" class="form-control" placeholder="No. Rek. BPKB">
            </div>
          </div>
          <div class="row">
            <div class="col-md-5" style="max-width:95px;margin-left:10px;">
              <div class="radio">
                <input type="radio" name="group" value="option1" checked="">Barkode Berkas
              </div>
            </div>
            <div class="col-md-8" style="min-width:250px;">
              <input type="text" class="form-control" placeholder="Barkode Berkas">
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row row-centered">
            <div class="col-md-12">
              <button type="button" class="btn btn-primary btn-block" style="min-height:100px;margin-top:5px;">
                <span class="glyphicon glyphicon-search"></span>Cari Data
              </button>
            </div>
          </div>
        </div>
  </div>
  <hr>
  <!-- navigasi tab -->
  <div class="row ">
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
        <div class="row center-block" >
          <div class="col-md-6">
              <form class="form-horizontal">
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3" >No. BPKB</label>
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
                    <input type="text" class="form-control" id="" placeholder="xxxxx">
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Merk</label>
                  <div class="col-sm-7">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                  <div class="col-sm-2" style="padding-top:5px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label    col-sm-3">Tipe</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="xxxxx">
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Model</label>
                  <div class="col-sm-5" style="padding-right:0px;">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                  <div class="col-sm-2" style="margin-left:0px;padding-top:3px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
                  </div>
                  <div class="col-sm-2" style="margin-left:0px;padding-top:3px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-plus"></span>
                    </button>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Tahun Buat</label>
                  <div class="col-sm-7">
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
                  <div class="col-sm-7">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                  <div class="col-sm-2" style="padding-top:5px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Peruntukan</label>
                  <div class="col-sm-7">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                  <div class="col-sm-2" style="padding-top:5px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Warna TNKB</label>
                  <div class="col-sm-7">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                  <div class="col-sm-2" style="padding-top:5px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
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
                    <input type="text" class="form-control" id="" placeholder="No. BPKB">
                  </div>
                </div>
              </form>
              <form class="form-horizontal">
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label         col-sm-3">Tanggal</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="Tanggal">
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
                    <input type="text" class="form-control" id="" placeholder="No. BPKB">
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label             col-sm-3">Tipe-tipe</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="Tipe-tipe">
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
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="No. BPKB">
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
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">No.POLISI</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="No.POLISI">
                  </div>
                </div>
              </form>
            </row>
          </div>
        </div><br>
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
                  <div class="col-sm-2" style="padding-top:5px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label    col-sm-3">No. Ponsel</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="" placeholder="xxxxx">
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Pekerjaan</label>
                  <div class="col-sm-5" style="padding-right:0px;">
                    <select id="xxxxx" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                  <div class="col-sm-2" style="margin-left:0px;padding-top:3px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
                  </div>
                  <div class="col-sm-2" style="margin-left:0px;padding-top:3px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-plus"></span>
                    </button>
                  </div>
                </div>
                <div class="form-group" style="margin-bottom: 5px">
                  <label for="" class="control-label col-sm-3">Wilayah</label>
                  <div class="col-sm-5" style="padding-right:0px;">
                    <select id="" class="form-control">
                      <option>1</option>
                    </select>
                  </div>
                  <div class="col-sm-2" style="margin-left:0px;padding-top:3px;">
                    <button class="btn btn-primary btn-block" style="height:30px;min-width:35px;">
                      <span class="glyphicon glyphicon-refresh"></span>
                    </button>
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
                    <label for="" class="control-label col-sm-3">Jenis Daftaran</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="Jenis Daftran">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">No.Faktur</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="No.Faktur">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">No.Pabean</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="No.Pabean">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">Pelabuhan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="Pelabuhan">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label    col-sm-3">No.PIB</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="No.PIB">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">Cara Impor</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="Cara Impor">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">Nama Importir/APM</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="" placeholder="Nama Importir/APM">
                    </div>
                  </div>
                  <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label col-sm-3">Ket.Lain-Lain</label>
                    <div class="col-sm-8">
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
  </div>   <!--end registrasi container-fluid -->

  <?php
$this->load->view('index_js.php');
   ?>
