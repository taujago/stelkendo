

<div class="row">
<div class="col-md-6"><br>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
<th>5</th>
</tr>
<tr>
<td width="25%" height="40px" valign="top"><label class=
"control-label">Nama</label></td>
<td colspan="3" width="100%" height="40px" valign="top">
<input type="text" id="idNamaPBB1Pemohon" name="" class=
"form-control col-md-7 col-xs-12 input-style" placeholder=
"Massukan Data"></td>
</tr>
<tr>
<td width="25%" height="40px" valign="top"><label class=
"control-label">Alamat</label></td>
<td colspan="3" width="40%" height="40px" valign="top">
<textarea type="text-area" id="idAlamatPBB1Pemohon" name="" class=
"form-control col-md-7 col-xs-12 input-style" placeholder=
"Massukan Data"></textarea></td>
</tr>
<tr>
<td width="10%" height="40px" valign="top"><label class=
"control-label">No Telp</label></td>
<td width="10%" height="40px" valign="top"><input type="text" id="idNoTelpPBB1Pemohon"
name="" class="form-control col-md-7 col-xs-12 input-style"
placeholder="Massukan Data"></td>
<td width="10%" height="40px" valign="top">&nbsp;</td>
</tr>
<tr>
<td width="15%" height="40px" valign="top"><label class=
"control-label">No Hp</label></td>
<td width="80%" height="40px" valign="top"><input type="text" id="idNoHpPBB1Pemohon"
name="" class="form-control col-md-7 col-xs-12 input-style"
placeholder="Massukan Data"></td>
<td width="10%" height="40px" valign="top">&nbsp;</td>
</tr>

<tr>
<td width="25%" height="40px" valign="top"><label class=
"control-label">Nama Bank</label></td>
<td width="40%" height="40px" valign="top"><input type="text" id="idNoNamaBankPBB1Pemohon"
name="" class="form-control col-md-7 col-xs-12 input-style"
placeholder="Massukan Data"></td>
</tr>
<tr>
<td width="25%" height="40px" valign="top"><label class=
"control-label">No. rekening</label></td>
<td width="40%" height="40px" valign="top"><input type="text" id="idNoRekPBB1Pemohon"
name="" class=" form-control col-md-7 col-xs-12 input-style"
placeholder="Massukan Data"></td>
</tr>
</table>
<!-- end table -->


<table>
<tr>
<th>1</th>
<th>2</th>
<th>3</th>
<th>4</th>
</tr>
<tr>
<td width="25%" height="40px" valign="top">Perusahaan</td>
<td  colspan="3" width="40%" height="40px" valign="top">
<select  class="text" name="" style=
"width:40%;height:34px;valign:top;">
<?php
foreach ($listPerusahaan as $value) {
    echo "<option value=''>$value</option>";
}
?>
</select></td>
<td class="glyphicon glyphicon-list-alt" style="valign:top;" id=
"idPendaftaranBBNPerusahaan"></td>
</tr>
<tr>
<td width="25%" height="40px">Tanggal</td>
<td width="20%" height="40px" valign="top"><select class="text"
name="" style="width:40%;height:34px;valign:top;"></select></td>
<td width="25%" height="40px">Jenis</td>
<td width="40%" height="40px" valign="top"><select class="text"
name="" style="width:40%;height:34px;valign:top;"></select></td>
</tr>
</table>
<!-- end table -->
</div>
</div>
<div class="col-md-4"><br>
<table class="table table-bordered">
<tr>
<td><img src="http://placehold.it/350x150" class="img-rounded" alt=
"Cinque Terre" width="304" height="236"></td>
<td>
<h5><span class="fa fa-picture-o fa-2x" style=
"margin-left:10px;">Load Image</span></h5>
</td>
</tr>
</table>
</div>
<!--end class="col-md-4">  -->
</div>
<!-- end row -->

 <hr/>
  <!-- <div class="row center-block"  style=" max-width:95%;border: 3px solid black; margin-top:5px; margin-left:10px; margin-right:10px;"> -->
    <!-- <div id='jqxWidget'style=" "> -->
      <div class="container" style="width:99%;">


      <div id="tablePemohonPendaftaranBaru" >
      </div>
 		 <!-- </div> -->
	</div>

<?php
$this->load->view('index_js');
?>