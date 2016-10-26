<?php
$NameModalkbPbbAddView=array('NTanggal_ModalkbPbbAdd','NJenisPemohon_ModalkbPbbAdd','NNamaPemohon_ModalkbPbbAdd','NNoresiPembayaran_ModalkbPbbAdd','NNoRangka_ModalkbPbbAdd');
 ?>
<div class="modal" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content" style="MIN-WIDTH:700PX;    overflow:hidden;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
	<!-- <a href="#" data-dismiss="modal" class="btn btn btn-default"></a> -->
				<h4 class="modal-title">Tambahkan Data</h4>
			</div><div class="container"></div>
			<div class="modal-body">
				<!--start modal add new   -->
						<!--start-->
						<div class="row " style="overlow:hidden;">
							<div class="col-md-10" style="min-width:750px;">
								<form  id="idFormAddAddBBN1" class="form-horizontal" action="<?php echo base_url().'index.php/a_1_pendaftaranbbn1/bpkb_pendaftaran_add';?>" method="POST" data-toggle="validator" role="form">
								<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
									<!-- <div style="margin-bottom: 5px;" class="form-group"> -->
										<!-- <label class="control-label       col-sm-3" for="">Tanggal :</label> -->
										<!-- <div class="col-sm-6"> -->
											<!-- <div class="input-group date"> -->
												<!-- <div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div> -->
												<!-- <input type="text" class="form-control pull-right ClassTanggalInputMask" name="<?php echo $NameModalkbPbbAddView[0];?>" id="<?php echo $NameModalkbPbbAddView[0];?>"> -->
											<!-- </div> -->
										<!-- </div> -->
											<!-- <span class="glyphicon form-control-feedback" aria-hidden="true"></span> -->
 											<!-- <div class="help-block with-errors">Hey look, this one has feedback icons!</div> -->
									<!-- </div> -->
									<div style="margin-bottom: 0px;" class="form-group">
										<label class="control-label       col-sm-3" for="<?php echo $NameModalkbPbbAddView[0];?>">Tanggal :</label>
										<div class="col-sm-6">
													<input type="text" name="<?php echo $NameModalkbPbbAddView[0];?>" id="<?php echo $NameModalkbPbbAddView[0];?>" >
										</div>
									</div>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3" for="">Jenis Pemohon :</label>
										<div class="col-sm-6">
											<label class="radio-inline">
												<input type="radio" name="idJenisPemohonBBN1" id="<?php echo $NameModalkbPbbAddView[1];?>" value="PRIBADI">Pribadi
											</label>
											<label class="radio-inline">
												<input type="radio" name="idJenisPemohonBBN1" id="<?php echo $NameModalkbPbbAddView[1];?>" value="BIROJASA">Biro Jasa
											</label>
										</div>
									</div>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3">Pemohon :</label>
										<div class="col-sm-4">
											<?php
											echo form_dropdown("PEMOHON_ID", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID" style="min-width: 200px;"');
											?>

									</div>

									<div class="col-md-3" style="margin-left:-30px;">
										<a data-toggle="modal" href="#idModalPBBIndex">
											<button type="button" class="btn btn-primary fa fa-plus btn-lg " style="margin-left:10px;max-width:120px">	Buat Pemohon
											</button></a>
										</div>
									</div>
									<hr>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3" for="">No. Resi Pembayaran :</label>
										<div class="col-sm-6">
											<input type="text" maxlenght="10" name="<?php echo $NameModalkbPbbAddView[3];?>"  id="<?php echo $NameModalkbPbbAddView[3];?>" class="  form-control col-md-7 col-xs-12 input-style" placeholder="No. Resi Pembayaran">

										</div>

									</div>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3" for="pwd">No. Rangka</label>
										<div class="col-sm-6">
											<!-- <input type="text" id="no-rangka" name="<?php echo $NameModalkbPbbAddView[4];?>" id="<?php echo $NameModalkbPbbAddView[4];?>" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rangka"> -->
											<input placeholder="No. Rangka" type="text" name="<?php echo $NameModalkbPbbAddView[4];?>" id="<?php echo $NameModalkbPbbAddView[4];?>" >

										</div>
									</div>
									<button type="submit" name="button">test</button>
								</form>
								<hr>
							</div>
							<!--  -->
							<div class="col-md-1" style="margin-left:-200px">
							  <button type="button" class="btn btn-primary btn-lg" style="min-width:80px;min-height:100px;">
																<i class="fa fa-plus"> </i> Baru
															</button>
							  <div></div></div>
									<!--  -->
						</div>
						<div class="row center-block">
							<div class="col-md-4">
							</div>

							<div class="col-md-6">
								<!-- <button type="button" class="btn btn-primary" style="min-width:80px;">
									<i class="fa fa-plus"> </i> Baru
								</button> -->
								<button type="button" class="btn btn-primary btn-lg btn-block" id="idPbb1BtnAdd" style="min-width:80px;">
									<i class="fa fa-file"> </i> Simpan
								</button>
								<!-- <button type="button" class="btn btn-default " style="min-width:80px;">
									<i class="fa fa-print"> </i> Export PDF
								</button> -->
							</div>

						</div>
						<!--end-->
				</div>
			<!-- <div class="modal-footer">
				<a href="#" data-dismiss="modal" class="btn btn btn-default">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div> -->
		</div>
	</div>
</div>


<script type="text/javascript">
$("#NNoRangka_ModalkbPbbAdd").jqxInput({
		// width: '250px',
		// height: '25px',
		theme: 'bootstrap',
		// spinButtons: false,
		// inputMode: 'advanced',
		// decimalDigits: 0,
		//  textAlign: 'left',
		//  placeHolder:"Nomor Rangka",
		 maxLength: 10

});

$("#NTanggal_ModalkbPbbAdd").jqxDateTimeInput({ width: '250px', height: '25px',theme: 'bootstrap'});
						// Focus the jqxDateTimeInput
						$("#NTanggal_ModalkbPbbAdd").jqxDateTimeInput('focus');



// $('#idPbb1BtnAdd').click(function() {
// 	alert('sundul');
// 	var options = {
//  	// target:     '#divToUpdate',
//  	// url:        'comment.php',
//  	success:    function(responseText, statusText, xhr, $form) {
// 		alert(responseText+' ' + statusText)
//  		responseText=responseText.toLowerCase();
//  		var hasilBoolean = responseText.indexOf("berhasil") != -1;
//  		if(hasilBoolean){alert('data berhasil di simpan'); $('#idFormAddAddBBN1').resetForm();}
//  		else{alert('data gagal di simpan Error Code:xxxx');}
//
//  	},beforeSubmit:    function() {
//  	showPleaseWait();
//  },error :function(e){
//  		hidePleaseWait();
//  }
//  };
//   // bind 'myForm' and provide a simple callback function
//   $('#idFormAddAddBBN1').ajaxForm(options);
//
// });

</script>
