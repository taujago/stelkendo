
<style type="text/css">
  hr {
  -moz-border-bottom-colors: none;
  -moz-border-image: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  border-color: black -moz-use-text-color black;
  border-style: solid none;
  border-width: 1px 0;
  margin: 10px 0;
}
</style>


<div class="container">
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Pendaftaran BBN1</a></li>
    <li><a data-toggle="tab" href="#menu1">Registrasi BBN1</a></li>
    <li><a data-toggle="tab" href="#menu2">Registrasi BBN1</a></li>
    <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
    <li><a data-toggle="tab" href="#cnth">Example</a></li>
  </ul>

  <div class="tab-content">


  <!-- Pendaftaran -->
    <div id="home" class="tab-pane fade in active">
      <div class="row"><h3>Pendaftaran BBN1</h3></div>

      <div class="container">
        <hr/>
      <table width="100%">
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

      <hr/>


      <div class="row">
            <div class="col-md-11">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Drag a column header here to group by the column</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No. BPKB</th>
                      <th>No. Rangka</th>
                      <th>No. Faktur</th>
                      <th>Barcode</th>
                      <th>Pemohon</th>
                      <th>Diplomat</th>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
      </div>
    </div>

    <!-- End of Pendaftaran -->

    <!-- Registrasi -->



    <div id="menu1" class="tab-pane fade">
      <h3>Registrasi BBN1</h3>
      <div class="container">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#men1">Entri Data BPKB</a></li>
          <li><a data-toggle="tab" href="#men2">List Data</a></li>
        </ul>

      <div class="tab-content">


        <div id="men1" class="tab-pane fade">
        <table width="100%">
          <tr>
            <td width="18%" height="50px">Tanggal Registrasi</td>
            <td width="2%">&nbsp;</td>
            <td width="10"><label class="radio-inline"><input type="radio" name="no_bpkb">No. BPKB</label></td>
            <td width="30%"><input type="text" id="no_bpkb" name="no_bpkb" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. BPKB"></td>
            <td width="2%">&nbsp;</td>
            <td width="38%">&nbsp;</td>
          </tr>
          <tr>
            <td width="18%" height="20px"><input type="text" id="tgl_regis" name="tgl_regis" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal Registrasi"></td>
            <td width="2%">&nbsp;</td>
            <td width="10"><label class="radio-inline"><input type="radio" name="no_bpkb">No. Rek. BPKB</label></td>
            <td width="30%"><input type="text" id="no_rek_bpkb" name="no_rek_bpkb" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rek. BPKB"></td>
            <td width="2%">&nbsp;</td>
            <td width="38%">&nbsp;</td>
          </tr>
          <tr>
            <td width="18%" height="50px">&nbsp;</td>
            <td width="2%">&nbsp;</td>
            <td width="10"><label class="radio-inline"><input type="radio" name="no_bpkb">Barcode Berkas</label></td>
            <td width="30%"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Barcode Berkas"></td>
            <td width="2%">&nbsp;</td>
            <td width="38%"><button type="button" class="btn btn-default"><i class="fa fa-database"> </i> Cari Data</button></td>
          </tr>
        </table>


        
      <div class="container">
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#me1">I. Identitas Kendaraan</a></li>
          <li><a data-toggle="tab" href="#me2">II. Identitas Pemilik</a></li>
          <li><a data-toggle="tab" href="#me3">III. Identitas Pabean/Asal Usul</a></li>
        </ul>

      <div class="tab-content">


        <div id="me1" class="tab-pane fade">
          
          <table width="100%">
            <tr>
              <td width="10%" height="50px">No. BPKB</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. BPKB"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">No. Reg. BPKB</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Reg. BPKB"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Dikeluarkan di</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Dikeluarkan di"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Tanggal</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">No. Rangka</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rangka"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">No. Mesin</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Mesin"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Merk</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Merk"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Jenis</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Jenis"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Tipe</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tipe"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Tipe 2</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tipe 2"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Model</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Model"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Silinder</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Silinder"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Tahun Buat</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tahun Buat"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Tahun Rakit</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tahun Rakit"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Jml. Roda</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Jml. Roda"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Jml. Sumbu</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Jml. Sumbu"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Bahan Bakar</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Bahan Bakar"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Warna</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Warna"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Peruntukan</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Peruntukan"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">No. TPT</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. TPT"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Warna TNKB</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Warna TNKB"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">No. SUT</td>
              <td width="30%" height="50px"><input type="text" id="barcode_berkas" name="barcode_berkas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. SUT"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
          </table>

          
        </div>


        <div id="me2" class="tab-pane fade">
          <table width="100%">
            <tr>
              <td width="10%" height="50px">No. Identitas</td>
              <td width="30%" height="50px"><input type="text" id="no_identitas" name="no_identitas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Identitas"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Provinsi</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Provinsi"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Nama Pemilik</td>
              <td width="30%" height="50px"><input type="text" id="nama_pemilik" name="nama_pemilik" class="form-control col-md-7 col-xs-12 input-style" placeholder="Nama Pemilik"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Kabupaten</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Kabupaten"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Alamat Pemilik</td>
              <td width="30%" height="50px"><input type="text" id="no_identitas" name="no_identitas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Alamat Pemilik"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Kecamatan</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Kecamatan"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Kode Pos</td>
              <td width="30%" height="50px"><input type="text" id="kode_pos" name="kode_pos" class="form-control col-md-7 col-xs-12 input-style" placeholder="Kode Pos"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Kelurahan</td>
              <td width="30%" height="50px"><input type="text" id="kelurahan" name="kelurahan" class="form-control col-md-7 col-xs-12 input-style" placeholder="Kelurahan"></td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">No. Ponsel</td>
              <td width="30%" height="50px"><input type="text" id="no_ponsel" name="no_ponsel" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Ponsel"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">&nbsp;</td>
              <td width="30%" height="50px">&nbsp;</td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Pekerjaan</td>
              <td width="30%" height="50px"><input type="text" id="pekerjaan" name="pekerjaan" class="form-control col-md-7 col-xs-12 input-style" placeholder="Pekerjaan"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">&nbsp;</td>
              <td width="30%" height="50px">&nbsp;</td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="10%" height="50px">Wilayah Polres</td>
              <td width="30%" height="50px"><input type="text" id="wil_polres" name="wil_polres" class="form-control col-md-7 col-xs-12 input-style" placeholder="Wilayah Polres"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">&nbsp;</td>
              <td width="30%" height="50px">&nbsp;</td>
              <td width="18%" height="50px">&nbsp;</td>
            </tr>
          </table>

          
        </div>
        <div id="me3" class="tab-pane fade">
          <table>
            <tr>
              <td width="13%" height="50px">Jenis Daftar</td>
              <td width="30%" height="50px"><input type="text" id="kode_pos" name="kode_pos" class="form-control col-md-7 col-xs-12 input-style" placeholder="Jenis Daftar"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">&nbsp;</td>
              <td width="30%" height="50px">&nbsp;</td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">No. Faktur</td>
              <td width="30%" height="50px"><input type="text" id="no_identitas" name="no_identitas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Faktur"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Tanggal</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal"></td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">No. Faktur</td>
              <td width="30%" height="50px"><input type="text" id="no_identitas" name="no_identitas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Faktur"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Tanggal</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal"></td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">No. Pabean</td>
              <td width="30%" height="50px"><input type="text" id="no_identitas" name="no_identitas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Faktur"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Tanggal</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal"></td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">Pelabuhan</td>
              <td width="30%" height="50px"><input type="text" id="kode_pos" name="kode_pos" class="form-control col-md-7 col-xs-12 input-style" placeholder="Pelabuhan"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">&nbsp;</td>
              <td width="30%" height="50px">&nbsp;</td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">No. PIB</td>
              <td width="30%" height="50px"><input type="text" id="no_identitas" name="no_identitas" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. PIB"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Tanggal</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal"></td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">Cara Impor</td>
              <td width="30%" height="50px"><input type="text" id="no_identitas" name="no_identitas" class="form-control col-md-7 col-xs-12 input-style" placeholder="Cara Impor"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">Pemohon</td>
              <td width="30%" height="50px"><input type="text" id="provinsi" name="provinsi" class="form-control col-md-7 col-xs-12 input-style" placeholder="Pemohon"></td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">Nama Importir/APM</td>
              <td width="30%" height="50px"><input type="text" id="kode_pos" name="kode_pos" class="form-control col-md-7 col-xs-12 input-style" placeholder="Nama Importir/APM"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">&nbsp;</td>
              <td width="30%" height="50px">&nbsp;</td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
            <tr>
              <td width="13%" height="50px">Ket. Lain - Lain</td>
              <td width="30%" height="50px"><input type="text" id="kode_pos" name="kode_pos" class="form-control col-md-7 col-xs-12 input-style" placeholder="Ket. Lain - Lain"></td>
              <td width="2%" height="50px">&nbsp;</td>
              <td width="10%" height="50px">&nbsp;</td>
              <td width="30%" height="50px">&nbsp;</td>
              <td width="15%" height="50px">&nbsp;</td>
            </tr>
          </table>

          
        </div>


      </div>
      </div>

      <table width="100%">
        <tr>
          <td width="15%" height="50px">No. Resi Pembayaran</td>
          <td width="25%" height="50px"><input type="text" id="no_resi_pembayaran" name="no_resi_pembayaran" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Resi Pembayaran"></td>
          <td width="60%" height="50px">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" height="50px">No. Rekom</td>
          <td width="25%" height="50px"><input type="text" id="no_resi_pembayaran" name="no_resi_pembayaran" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rekom"></td>
          <td width="60%" height="50px">&nbsp;</td>
        </tr>
        <tr>
          <td width="15%" height="50px">Ambil No. Polisi</td>
          <td width="25%" height="50px"><input type="text" id="no_resi_pembayaran" name="no_resi_pembayaran" class="form-control col-md-7 col-xs-12 input-style" placeholder="Ambil No. Polisi"></td>
          <td width="60%" height="50px">
              <button type="button" class="btn btn-default"><i class="fa fa-file"> </i> Simpan</button> <button type="button" class="btn btn-default"><i class="fa fa-plus"> </i> Baru</button>
          </td>
        </tr>
      </table>

        </div>


        <div id="men2" class="tab-pane fade">
        <table width="100%">
          <tr>
            <td width="10%" height="50px"><label class="control-label">Tanggal BPKB</label></td>
            <td width="20%" height="50px"><input type="text" id="pemohon" name="pemohon" class="form-control col-md-7 col-xs-12 input-style" placeholder="Tanggal BPKB"></td>
            <td width="2%">&nbsp;</td>
            <td width="10%"><button type="button" class="btn btn-default"><i class="fa fa-cloud"> </i> Get From Server</button></td>
            <td width="2%">&nbsp;</td>
            <td width="10%"> Tampilkan Semua</td>
            <td width="46%">&nbsp;</td>
          </tr>
        </table>

          <div class="row">
            <div class="col-md-11">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Drag a column header here to group by the column</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No. BPKB</th>
                      <th>No. Rek. BPKB</th>
                      <th>Tgl. BPKB</th>
                      <th>No. Rangka</th>
                      <th>No. Mesin</th>
                      <th>No. Polisi</th>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                      <td>&nbsp;</td>
                    </tr>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <!-- End Of Registrasi -->

    <div id="menu2" class="tab-pane fade">
      <h3>Registrasi BBN1</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
    <div id="cnth" class="tab-pane fade">
      <h3>Example 3</h3>
      <p>Hello Apa Kabar.</p>
    </div>
  </div>
</div>