<div class="container-fluid" >
    <hr style="margin:10px">
    <div class="row" >
        <div class="col-md-2" >
                <form class="form-inline" >
                    <div class="form-group" >
                        <label for="" class="control-label">Tanggal Penulisan</label>
                        <div class='input-group date' id='datetimepicker1'  style="width:200px">
                            <span class="input-group-addon" ><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type='text' class="form-control tanggal" />
                        </div>
                    </div>
                </form>
        </div>
        <div class="col-md-6" >
            <form class="form-horizontal" >
                <div style="margin-bottom: 5px" class="form-group" >
                    <label for="" class="control-label   col-sm-4">No. BPKB</label>
                    <div class="col-sm-8">
                        <input style="" type="text" class="form-control" id="idKbPbbn1TxtNobpkb" placeholder="No. BPKB">
                    </div>
                </div>
                <div style="margin-bottom: 5px;" class="form-group" >
                    <label for="" class="control-label   col-sm-4">No. Rangka</label>
                    <div class="col-sm-8">
                        <input style="" type="text" class="form-control " id="idKbPbbn1TxtNorangka" placeholder="No. Rangka">
                    </div>
                </div>
                <div style="margin-bottom: 5px" class="form-group" >
                    <label for="" class="control-label   col-sm-4">Barcode Berkas</label>
                    <div class=" col-sm-8" >
                        <input style="" type="text" class="form-control" id="idKbPbbn1TxtBarcodeberkas" placeholder="Barcode Berkas">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-4" >
            <button type="button" class="btn btn-primary btn btn-lg btn-block" id="idKbPbbn1BtnCaridata" >
                <span class="glyphicon glyphicon-search"></span>
                Cari Data
            </button>
            <button type="button" class="btn btn-primary btn btn-lg btn-block" id="idKbPbbn1BtnBaru" >
                <span class="glyphicon glyphicon-plus"></span>
                Baru
            </button>
        </div>
    </div>
    <div class="row">
            <hr style="margin:10px">
            <div class="col-md-1">

                    <div style="margin-bottom: 5px">
                        <button type="button" class="btn btn-primary btn" id="idKbPbbn1BtnCetakbuku">
                            <span class="glyphicon glyphicon-print"></span>
                            <br> Cetak Buku
                        </button>
                    </div>

            </div>
            <div class="col-md-2" style="margin-left:20px;">
                <form class="form-horizontal">
                    <div style="margin-bottom: 5px" class="form-group col-sm-12">
                        <label for="" class=" control-label col-sm-12" style="margin-top:-12px">Halaman 1</label>
                    </div>
                    <div style="width:180px">
                        <input type="ukuran1" class="form-control" style="margin-bottom: 5px;" id="idKbPbbn1TxtUkuran1" placeholder="Ukuran 1">
                        <input type="ukuran2" class="form-control" style="margin-bottom: 5px" id="idKbPbbn1TxtUkuran2" placeholder="Ukuran 2">
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <form class="form-horizontal">
                    <div style="margin-bottom: 5px" class="form-group col-sm-12">
                        <label for="" class=" control-label col-sm-12" style="margin-top:-12px">Halaman 2</label>
                    </div>
                    <div style="width:180px">
                        <input type="ukuran3" class="form-control" style="margin-bottom: 5px" id="idKbPbbn1TxtUkuran3" placeholder="Ukuran 2">
                        <input type="ukuran4" class="form-control" style="margin-bottom: 5px" id="idKbPbbn1TxtUkuran4" placeholder="Ukuran 2">
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <form class="form-horizontal">
                    <div style="margin-bottom: 5px" class="form-group col-sm-12">
                        <label for="" class=" control-label col-sm-12" style="margin-top:-12px">Halaman 3</label>
                    </div>
                    <div style="width:180px">
                        <input type="ukuran5" class="form-control" style="margin-bottom: 5px" id="idKbPbbn1TxtUkuran5" placeholder="Ukuran 3">
                        <input type="ukuran6" class="form-control" style="margin-bottom: 5px" id="idKbPbbn1TxtUkuran6" placeholder="Ukuran 3">
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                <form class="form-horizontal">
                    <div style="margin-bottom: 5px" class="form-group col-sm-12">
                        <label for="" class=" control-label col-sm-12" style="margin-top:-12px">Halaman 4</label>
                    </div>
                    <div style="width:180px">
                        <input type="ukuran7" class="form-control" style="margin-bottom: 5px" id="idKbPbbn1TxtUkuran7" placeholder="Ukuran 4">
                        <input type="ukuran8" class="form-control" style="margin-bottom: 5px" id="idKbPbbn1TxtUkuran8" placeholder="Ukuran 4">
                    </div>
                </form>
            </div>
            <div class="col-md-2" style="margin-left:15px;">
                <p style="color:#D7272C;width:180px;">*Cetak menurut halamannya dapat dilakukan dengan klik kanan pada tombol cetak buku, kemudian pilih halaman yang akan di cetak</p>
            </div>
    </div>
    <div class="row" >
        <hr style="margin:10px">
        <div class="col-md-6" >
            <form class="form-horizontal" >
                <div style="margin-bottom: 5px" class="form-group" >
                    <label for="" class="control-label   col-sm-4">No. BPKB</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="idKbPbbn1TxtNobpkb2" placeholder="No. BPKB">
                    </div>
                </div>
                <div style="margin-bottom: 5px" class="form-group" >
                    <label for="" class="control-label   col-sm-4">No. Reg. BPKB</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control " id="idKbPbbn1TxtNoregbpkb" placeholder="No. Reg. BPKB">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6" >
            <form class="form-horizontal">
                <div style="margin-bottom: 5px" class="form-group">
                    <label for="" class="control-label   col-sm-2">Tempat</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="idKbPbbn1TxtTempat" placeholder="Tempat">
                    </div>
                </div>
                <div style="margin-bottom: 5px" class="form-group" >
                    <label for="" class="control-label   col-sm-2">Tanggal</label>
                    <div class="col-sm-8">
                        <input type="password" class="form-control " id="idKbPbbn1TxtTanggal" placeholder="Tanggal">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row" >

<!--start tabs  -->
<div id="idSubTabsPenulisanBBN1">

        <ul>
            <li  >
            I. Identitas Pemilik
            </li>
            <li >
                II. Identitas Kendaraan
            </li>
            <li >
            III. Dok. Reg Pertama
            </li>
            <li >
                <a data-toggle="tab" href="#id4">IV. Dikeluarkan Oleh / No. Reg</a>
            </li>
        </ul>

            <div ><!-- konten 1 -->
                <br>
                <div class="col-md-12" >
                    <form class="form-horizontal" col-sm-2 >
                        <div style="margin-bottom: 5px" class="form-group" >
                            <label for="" class=" control-label col-sm-2">Nama Pemilik</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab1TxtNpemilik" placeholder="Nama Pemilik">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group" >
                            <label for="" class=" control-label col-sm-2">Pekerjaan Pemilik</label>
                            <div class="col-sm-8" >
                                <input type="text" class="form-control" id="idKbPbbn1Tab1TxtPpemilik" placeholder="Pekerjaan Pemilik">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group" >
                            <label for="" class=" control-label col-sm-2">Alamat Pemilik</label>
                            <div class="col-sm-8" >
                                <textarea type="text" class="form-control input-style" id="idKbPbbn1Tab1Txtalamat" placeholder="Alamat Pemilik"></textarea>
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group" >
                            <label for="" class=" control-label col-sm-2">No. Identitas</label>
                            <div class="col-sm-8" >
                                <input type="text" class="form-control" id="idKbPbbn1Tab1TxtNidentitas" placeholder="No. Identitas">
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end konten 1 -->
            <div> <!-- konten 2 -->
                <br>
                <div class="col-md-6" >
                    <form class="form-horizontal" col-sm-2>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Nomor Registrasi</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtNregistrasi" placeholder="Nomor Registrasi">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Merk</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtMerk" placeholder="Merk">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Type</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtType" placeholder="Type">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Jenis</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtJenis" placeholder="Jenis">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Model</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtModel" placeholder="Model">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Tahun Pembuatan</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtTpembuatan" placeholder="Tahun Pembuatan">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Isi Silinder</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtIsilinder" placeholder="Isi Silinder">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6" >
                    <form class="form-horizontal" col-sm-2>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Nomor Rangka</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtNorangka" placeholder="Nomor Rangka">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Nomor Mesin</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtNomesin" placeholder="Nomor Mesin">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Bahan Bakar</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtBbakar" placeholder="Bahan Bakar">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Jumlah Sumbu</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtJsumbu" placeholder="Jumlah Sumbu">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">Jumlah Roda</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtJroda" placeholder="Jumlah Roda">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-4">No. Sertifikat Uji Type</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="idKbPbbn1Tab2TxtNosut" placeholder="No. Sertifikat Uji Type">
                            </div>
                        </div>
                    </form>
                </div>
                <br>
            </div> <!-- end konten 2 -->
            <div> <!-- konten 3 -->
                <div class="col-md-12">
                    <form class="form-horizontal" col-sm-2 >
                        <br>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">No. Faktur</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtNofaktur" placeholder="No. Faktur">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">Tanggal</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtTanggal" placeholder="Tanggal">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">ATPM / Importir</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtAtpm" placeholder="ATPM / Importir">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">No. PIB</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtPib" placeholder="No. PIB">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">No. SUT</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtNosut" placeholder="No. SUT">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">No. TPT</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtNotpt" placeholder="No. TPT">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">No. Form A / B</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtNoform" placeholder="No. Form A / B">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">Kantor Bea Cukai</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtBeacukai" placeholder="Kantor Bea Cukai">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">Lain Lain</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtLain" placeholder="Lain Lain">
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- end konten 3 -->
            <div > <!-- konten 4 -->
                <div class="col-md-12">
                    <form class="form-horizontal" col-sm-2 >
                        <br>
                        <div style="margin-bottom: 5px" class="form-group" >
                            <label for="" class=" control-label col-sm-2">Dikeluarkan Oleh</label>
                            <div class="col-sm-8" >
                                <input type="text" class="form-control" id="idKbPbbn1Tab4TxtDikeluarkanoleh" placeholder="Dikeluarkan Oleh">
                            </div>
                        </div>
                        <div style="margin-bottom: 5px" class="form-group">
                            <label for="" class=" control-label col-sm-2">No. Register</label>
                            <div class="col-sm-8" >
                                <input type="text" class="form-control" id="idKbPbbn1Tab3TxtNregister" placeholder="No. Register">
                            </div>
                        </div>
                    </form>
                </div>
            </div> <!-- konten 4 -->
        </div>    <!-- end tabs  -->

    </div>
</div><!-- end copntainer fluid  -->

<?php
$this->load->view('index_js.php');
 ?>
