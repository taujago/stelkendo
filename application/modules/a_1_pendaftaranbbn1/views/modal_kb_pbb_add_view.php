<div class="modal" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content" style="MIN-WIDTH:700PX;    overflow:auto;">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
	<!-- <a href="#" data-dismiss="modal" class="btn btn btn-default"></a> -->
				<h4 class="modal-title">Tambahkan Data</h4>
			</div><div class="container"></div>
			<div class="modal-body">
				<!--start modal add new   -->
						<!--start-->
						<div class="row ">
							<div class="col-md-12">
								<form class="form-horizontal">
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3" for="">Tanggal :</label>
										<div class="col-sm-6">
											<div class="input-group date">
												<div class="input-group-addon">
													<i class="fa fa-calendar"></i>
												</div>
												<input type="text" class="form-control pull-right" id="idTanggalBBN1_modal_kb_pbb_add">
											</div>
										</div>
									</div>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3" for="">Jenis Pemohon :</label>
										<div class="col-sm-6">
											<label class="radio-inline">
												<input type="radio" name="idJenisPemohonBBN1" value="PRIBADI">Pribadi
											</label>
											<label class="radio-inline">
												<input type="radio" name="idJenisPemohonBBN1" value="BIROJASA">Biro Jasa
											</label>
										</div>
									</div>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3">Pemohon :</label>
										<div class="col-sm-4">
											<?php
											echo form_dropdown("PEMOHON_ID", array(), '', 'class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID" style="min-width: 200px;"');
											?>
											<!-- <select name="PEMOHON_ID" class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID" style="min-width: 200px;">
											</select> -->
											<!-- <select name="PEMOHON_ID" class="form-control col-md-7 col-xs-12 input-style" id="PEMOHON_ID">
											<option value="5356">SALAWATI </option>
											<option value="5371">RONNY HONDA MKW </option>
											<option value="5351">YBS </option>
											<option value="5357">TMI </option>
											<option value="5358">TMI </option>
											<option value="5360">HONDA JAS </option>
											<option value="5362">SALAWATI MOTOR </option>
											<option value="5363">YAMAHA HASJRAT </option>
											<option value="5364">DAIHATSU JAS </option>
											<option value="5352">ALFINO SILOOY </option>
											<option value="5374">YAMAHA HASJRAT </option>
											<option value="5375">MITSUBISHI BOSOWA </option>
											<option value="5355">EDWIN MARAMIS </option>
											<option value="5391">FRANS SUZUKI TMI </option>
											<option value="5379">ISUZU FAISAL </option>
											<option value="5384">TOYOTA HASJRAT ABADI </option>
											<option value="5381">ANTON KAWASAKI MKW </option>
											<option value="5378">BURSA HONDA </option>
											<option value="5382">RUSLAN BOSOWA MKW </option>
											<option value="5390">KAWASAKI </option>
											<option value="5383">FRANSISKUS ASTRA </option>
											<option value="5393">KAISAR MOTOR </option>
											<option value="5394">DAIHATSU BIMEN </option>
											<option value="5395">IZUZU BIMEN </option>
											<option value="5396">PT. PEGADAIAN (PERSERO) CABANG SORONG </option>
											<option value="5376">SUZUKI TMII </option>
											<option value="5377">SUZUKI PMM </option>
											<option value="5380">KAWASAKI ANIS JR </option>
											<option value="5388">TRISAKTI MKW </option>
											<option value="5389">HINO ANANG </option>
										</select> -->
									</div>

									<div class="col-md-3">
										<a data-toggle="modal" href="#idModalPBBIndex">
											<button type="button" class="btn btn-primary fa fa-plus" style="margin-left:-25px;max-width:125px">	Buat Pemohon
											</button></a>
										</div>

									</div>
									<hr>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3" for="">No. Resi Pembayaran :</label>
										<div class="col-sm-6">
											<input type="text" id="no_resi" name="no_resi" class="no_resi form-control col-md-7 col-xs-12 input-style" placeholder="No. Resi Pembayaran">
										</div>

									</div>
									<div style="margin-bottom: 5px;" class="form-group">
										<label class="control-label       col-sm-3" for="pwd">No. Rangka</label>
										<div class="col-sm-6">
											<input type="text" id="no-rangka" name="no-rangka" class="form-control col-md-7 col-xs-12 input-style" placeholder="No. Rangka">
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
									<i class="fa fa-plus"> </i> Baru
								</button>
								<button type="button" class="btn btn-primary " style="min-width:80px;">
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


<script>
$('#idTanggalBBN1_modal_kb_pbb_add').datepicker({
	autoclose: true
});

</script>
